<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GoldSpice - Login</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom CSS variables for colors, matching index.html */
    :root {
      --yellow: #ffee39;
      --emerald: #44b180;
      --tumeric: #d29119;
      --grey:#efecec;
      --grey2:#6c6c6c;
      --red:#ca0000;
      --green:#6edb42;
      --green2:#56a039e8;
      --nutmeg:#fff1ac; /* A nice light background color for text sections */
    }
    body {
      font-family: 'Merriweather', serif;
    }
    /* Custom styling for input focus, applied to Laravel's x-text-input */
    .input-field:focus {
        border-color: var(--emerald);
        box-shadow: 0 0 0 2px rgba(68, 177, 128, 0.5); /* emerald with 50% opacity */
    }
  </style>
  <!-- Google Fonts for Merriweather -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather:700,400&display=swap" rel="stylesheet">
</head>
<body class="bg-black text-white min-h-screen flex flex-col">

  <!-- Main container for background and content -->
  <div class="relative w-full min-h-screen flex flex-col items-center justify-center">
    <!-- Background image -->
    <img src="{{ asset('images/spicespoons4.jpg') }}" class="absolute inset-0 w-full h-full object-cover opacity-100" alt="Spice Background" />

    <!-- Dark overlay for readability -->
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>

    <!-- Navigation Bar (similar to index.html for consistency) -->
    <nav class="absolute top-0 left-0 right-0 flex justify-between items-center px-8 py-6 z-50">
      <div class="flex items-center space-x-3">
        <img src="{{ asset('images/GoldSpice4.png') }}" alt="Logo" class="w-14 h-14 sm:w-16 sm:h-16" />
        <span class="text-2xl sm:text-3xl tracking-wider font-serif font-bold">𝕲𝖔𝖑𝖉𝕾𝖕𝖎𝖈𝖊</span>
      </div>
    </nav>

    <!-- Login Form Container - Light themed, smaller, and centered -->
    <div class="relative z-20 bg-white p-8 sm:p-10 rounded-2xl shadow-2xl max-w-xs w-full my-8 border-2 border-[var(--tumeric)]">
      <h2 class="text-3xl font-serif font-bold text-[var(--tumeric)] mb-6 text-center">Login</h2>

      <!-- Session Status from Laravel -->
      <x-auth-session-status class="mb-4 text-center text-green-600 font-semibold" :status="session('status')" />

      <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div>
            <!-- Laravel Input Label, styled with Tailwind from your login.html -->
            <x-input-label for="email" :value="__('Email Address')" class="block text-sm font-semibold text-gray-700 mb-1" />
            <!-- Laravel Text Input, styled with Tailwind from your login.html -->
            <x-text-input id="email" class="block mt-1 w-full px-4 py-2 rounded-lg bg-gray-100 text-gray-800 placeholder-gray-400 focus:ring-2 focus:ring-[var(--emerald)] focus:border-transparent outline-none transition-all duration-200 input-field" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="your.email@example.com" />
            <!-- Laravel Input Error -->
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
        </div>

        <!-- Password -->
        <div>
            <!-- Laravel Input Label, styled with Tailwind from your login.html -->
            <x-input-label for="password" :value="__('Password')" class="block text-sm font-semibold text-gray-700 mb-1" />
            <!-- Laravel Text Input, styled with Tailwind from your login.html -->
            <x-text-input id="password" class="block mt-1 w-full px-4 py-2 rounded-lg bg-gray-100 text-gray-800 placeholder-gray-400 focus:ring-2 focus:ring-[var(--emerald)] focus:border-transparent outline-none transition-all duration-200 input-field"
                            type="password"
                            name="password"
                            required autocomplete="current-password" placeholder="••••••••" />
            <!-- Laravel Input Error -->
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
        </div>

        <!-- Remember Me -->
        <div class="flex flex-col items-start text-xs sm:text-sm space-y-2">
            <label for="remember_me" class="inline-flex items-center">
                <!-- Laravel Checkbox, styled with Tailwind from your login.html -->
                <input id="remember_me" type="checkbox" class="h-3 w-3 text-[var(--emerald)] border-gray-300 rounded focus:ring-[var(--emerald)]" name="remember">
                <span class="ms-2 text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex flex-col items-center justify-center mt-4 space-y-4">
            @if (Route::has('password.request'))
                <!-- Forgot Password Link, styled with Tailwind from your login.html -->
                <a class="font-medium text-[var(--tumeric)] hover:text-[var(--emerald)] transition-colors duration-300" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <!-- Laravel Primary Button, styled with Tailwind from your login.html -->
            <x-primary-button class="w-full bg-[var(--tumeric)] text-white text-lg font-bold py-2.5 rounded-full shadow-lg hover:bg-[var(--emerald)] hover:text-white transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[var(--emerald)] focus:ring-offset-2 focus:ring-offset-white">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
      </form>

      <p class="mt-6 text-center text-gray-600 text-sm sm:text-base">
        Don't have an account?
      </p>
      <div class="text-center">
        <!-- Sign Up Link, pointing to Laravel's register route -->
        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="font-semibold text-md text-[var(--tumeric)] hover:text-[var(--emerald)] transition-colors duration-300">
                Sign Up
            </a>
        @endif
      </div>
    </div>

    <!-- Go to Home button moved outside the login form div -->
    <div class="relative z-30 text-center mt-10 mb-10">
      <a href="{{ url('/') }}" class="inline-block font-semibold bg-white text-md text-[var(--emerald)] hover:text-[var(--emerald)] py-2 px-4 border-4 border-[var(--emerald)] rounded-full transition-transform transform hover:scale-105 duration-300">
        Go to Home
      </a>
    </div>

  </div> <!-- End of main content div -->

</body>
</html>
