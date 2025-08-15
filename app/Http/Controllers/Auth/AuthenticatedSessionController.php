<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    //Creating a new login upon request
    public function create(): View
    {
        return view('auth.login');
    }

    //Initiating an oncoming authentication request
    public function store(LoginRequest $request): RedirectResponse
{
    $request->authenticate();

    $request->session()->regenerate();//Regenerating session ID 

    if (auth()->user()->hasRole('admin')) {
        return redirect()->intended('/dashboard'); //If user has the role admin he goes to the dashboard.
    }

    return redirect()->intended('/'); //Users go to the homepage
}
    
    //Destroy an authenticated session upon request.
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate(); //Removes all session data by invalidating the session

        $request->session()->regenerateToken(); //Regenerates the CSRF token

        return redirect('/');
    }
}
