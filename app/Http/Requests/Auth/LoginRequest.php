<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    //Authorize request: Always true to let any user login
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array //Declares the rules for taking input
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate()
    {
        $this->ensureIsNotRateLimited();//Checks if user is not loacked out

        $credentials = $this->only('email', 'password');//Extracting email and password

        if (!Auth::attempt($credentials, $this->boolean('remember'))) {//Checks DB for credentials and logs the user in for a longer session if "remember me" is clicked
            RateLimiter::hit($this->throttleKey());//count failed attempts

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),//Error msg for invalid login
            ]);
        }
        //
        RateLimiter::clear($this->throttleKey());//clear failed attempt counter

        session()->regenerate();//regenerates CSRF token and session ID (NO fixation attacks)

        // Redirects based on role
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            return redirect('/dashboard');
        } else {
            return redirect()->intended('/home');
        }
    }

    

    /**
     * Ensure the login request is not rate limited.
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    //Locks the user out after 5 failed attempts
    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));//triggers this lockout event

        $seconds = RateLimiter::availableIn($this->throttleKey());
        //returns a "tryagain in ___ minutes" message
        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    //Creates a unique key to count failed attempts
    public function throttleKey(): string
    {   //lowercases the email and removes special characters for consistency
        return Str::transliterate(Str::lower($this->string('email')).'|'.$this->ip());
    }
}
