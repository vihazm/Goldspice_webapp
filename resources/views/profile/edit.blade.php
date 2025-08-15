<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GoldSpice - Edit Profile</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    :root {
      --yellow: #ffee39;
      --emerald: #44b180;
      --tumeric: #d29119;
      --grey:#efecec;
      --grey2:#6c6c6c;
      --red:#ca0000;
      --green:#6edb42;
      --green2:#56a039e8;
      --nutmeg:#fff1ac;
    }
    body {
      font-family: 'Merriweather', serif;
    }
  </style>
  <link href="https://fonts.googleapis.com/css?family=Merriweather:700,400&display=swap" rel="stylesheet">
</head>
<body class="bg-black text-white min-h-screen flex flex-col">

  <!-- Background & Overlay -->
  <div class="relative w-full min-h-screen flex flex-col items-center justify-center">
    <img src="{{ asset('images/spicespoons4.jpg') }}" class="absolute inset-0 w-full h-full object-cover opacity-100" alt="Spice Background" />
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>

    <!-- Navbar -->
    <nav class="absolute top-0 left-0 right-0 flex justify-between items-center px-8 py-6 z-50">
      <div class="flex items-center space-x-3">
        <img src="{{ asset('images/goldspice5.png') }}" alt="Logo" class="w-14 h-14 sm:w-16 sm:h-16" />
        <span class="text-2xl sm:text-3xl tracking-wider font-serif font-bold">𝕲𝖔𝖑𝖉𝕾𝖕𝖎𝖈𝖊</span>
      </div>
    </nav>

    <!-- Profile Edit Card -->
    <div class="relative z-20 bg-white p-8 sm:p-10 rounded-2xl shadow-2xl max-w-2xl w-full my-8 border-2 border-[var(--tumeric)]">
      <h2 class="text-3xl font-serif font-bold text-[var(--tumeric)] mb-6 text-center">Edit Profile</h2>

      <!-- Profile Update Section -->
      <div class="space-y-6 text-gray-900">
        <div>
          @include('profile.partials.update-profile-information-form')
        </div>
        <div>
          @include('profile.partials.update-password-form')
        </div>
        <div>
          @include('profile.partials.delete-user-form')
        </div>
      </div>
    </div>

    <!-- Back to Home Button -->
    <div class="relative z-30 text-center mt-6 mb-10">
      <a href="{{ url('/') }}" 
         class="inline-block font-semibold bg-white text-md text-[var(--emerald)] py-2 px-4 border-4 border-[var(--emerald)] rounded-full transition-transform transform hover:scale-105 duration-300 hover:bg-[var(--emerald)] hover:text-white">
        Go to Home
      </a>
    </div>

  </div>

</body>
</html>
