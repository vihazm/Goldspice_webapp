<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GoldSpice - Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    :root {
      --yellow: #ffee39;
      --yellowdark: #ffdc4fdc;
      --yellow2: #fff9a9;
      --emerald: #44b180;
      --emerald2: #b7ffbb;
      --tumeric: #c58610;
      --green2: #36996e;
      --grey2: #555;
      --red1:#ba0505;
      --red2:#6f0404;
    }

    body { font-family: 'Merriweather', serif; }

    /* Dropdown styles */
    .dropdown-button {
      display: flex; align-items: center; gap: 0.5rem; cursor: pointer;
      padding: 0.5rem 1rem; border-radius: 9999px;
      background-color: white; color: var(--emerald); font-weight: 700;
      transition: all 0.3s ease; border: 2px solid var(--emerald);
    }
    .dropdown-button:hover {
      background-color: var(--yellowdark); color: black; border-color: black; transform: scale(1.05);
    }
    .dropdown-menu {
      position: absolute; right: 0; top: 100%; margin-top: 0.5rem;
      background-color: white; border-radius: 0.5rem;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      z-index: 60; min-width: 140px; overflow: hidden;
    }
    .dropdown-menu a {
      display: block; padding: 0.75rem 1rem; color: #333; font-weight: 500; transition: background-color 0.2s ease;
    }
    .dropdown-menu a:hover {
      background-color: var(--grey2); color: var(--emerald);
    }
  </style>
  <link href="https://fonts.googleapis.com/css?family=Merriweather:700,400&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="min-h-screen flex flex-col relative">

  <!-- Full-page background with overlay -->
  <div class="fixed inset-0 z-0">
    <img src="{{ asset('images/spicespoons4.jpg') }}" class="w-full h-full object-cover opacity-90" alt="Spice Background" />
    <div class="absolute inset-0 bg-black/60"></div>
  </div>

  <!-- Navbar -->
  <nav class="sticky top-0 z-50 flex justify-between items-center px-8 py-6 bg-black/30 backdrop-blur-md">
    <div class="flex items-center space-x-3">
      <img src="{{ asset('images/GoldSpice4.png') }}" alt="Logo" class="w-14 h-14 sm:w-16 sm:h-16" />
      <span class="text-white text-2xl sm:text-3xl tracking-wider font-serif font-bold">𝕲𝖔𝖑𝖉𝕾𝖕𝖎𝖈𝖊</span>
    </div>

    <!-- User Dropdown (Profile and Logout) -->
    @auth
      <div class="relative ml-4">
        <button
          id="user-menu-button"
          type="button"
          class="dropdown-button focus:outline-none"
          aria-haspopup="true"
          aria-expanded="false"
          aria-controls="user-dropdown-menu"
        >
          <span>{{ Auth::user()->name }}</span>
          <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
          </svg>
        </button>

        <div id="user-dropdown-menu" class="dropdown-menu hidden" role="menu">
          <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Profile</a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); this.closest('form').submit();"
               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
               role="menuitem">
              Log Out
            </a>
          </form>
        </div>
      </div>
    @endauth
  </nav>

  <!-- Main Content -->
  <main class="relative z-10 flex-1 px-6 py-10 max-w-7xl mx-auto font-serif">
    <h1 class="text-5xl font-bold text-[var(--yellowdark)] mb-8">Welcome Admin!</h1>

    <!-- Management Sections -->
    <div class="grid md:grid-cols-2 gap-10 mb-10">
      <div class="bg-white p-6 rounded-xl shadow transition transform hover:scale-105 duration-300">
        <h3 class="text-2xl font-bold text-[var(--tumeric)] mb-4">Product Management</h3>
        <ul class="space-y-2 text-[var(--grey2)]">
          <li>- Add new products</li>
          <li>- Edit existing products</li>
          <li>- Delete Products</li>
        </ul>
        <a href="{{ route('spice.index') }}" class="inline-block mt-4 bg-[var(--emerald)] text-white px-4 py-2 rounded hover:bg-[var(--green2)] font-bold transition-transform transform hover:scale-105 duration-300">
          Take me there!
        </a>
      </div>

      <div class="bg-white p-6 rounded-xl shadow transition transform hover:scale-105 duration-300">
        <h3 class="text-2xl font-bold text-[var(--tumeric)] mb-4">Orders</h3>
        <ul class="space-y-2 text-[var(--grey2)]">
          <li>- View all orders and payment status</li>
        </ul>
        <a href="{{ route('admin.orders.index') }}" class="inline-block mt-4 bg-[var(--emerald)] text-white px-4 py-2 rounded hover:bg-[var(--green2)] font-bold transition-transform transform hover:scale-105 duration-300">
          Go to Orders
        </a>
      </div>
    </div> <!-- /grid -->
  </main>

  <!-- Footer -->
  <footer class="relative bg-black border-t border-gray-800 text-gray-400 text-xs sm:text-sm py-6 px-4 sm:px-8">
    <div class="absolute inset-0">
      <img src="{{ asset('images/pepper.jpg') }}" class="w-full h-full object-cover opacity-40" alt="Pepper Background" />
    </div>

    <div class="relative z-10 max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-4 text-center sm:text-left">
      <div class="flex flex-col items-center sm:items-start space-y-2">
        <div class="flex items-center space-x-3">
          <img src="{{ asset('images/GoldSpice4.png') }}" alt="GoldSpice Logo" class="my-8 w-16 h-16" />
          <span class="text-white text-lg font-semibold">GoldSpice</span>
        </div>
        <div class="mt-2 text-left">
          <div class="my-1"><span class="ml-1 text-md text-white font-semibold">+94 71 123 4567 / +94 77 987 6543</span></div>
          <div class="my-2"><span class="ml-1 text-md text-white font-semibold">info@goldspice.com</span></div>
          <div class="my-2"><span class="ml-1 text-md text-white font-semibold">No. 25, Spice Street, Colombo 07, Sri Lanka</span></div>
        </div>
      </div>

      <p class="text-white text-lg font-bold">&copy; 2025 GoldSpice. Made in SL.</p>

      <div class="flex space-x-4 items-center">
        <p class="my-3 text-white font-semibold">Follow us on: </p>
        <a href="https://www.facebook.com/" target="_blank" aria-label="Facebook" class="hover:text-[var(--tumeric)] transition">
          <svg fill="currentColor" class="w-8 h-8" viewBox="0 0 24 24"><path d="M22 12a10 10 0 10-11.5 9.95v-7.05H8v-2.9h2.5V9.5c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.3.2 2.3.2v2.5h-1.3c-1.3 0-1.7.8-1.7 1.6v2H17l-.3 2.9h-2.5V22A10 10 0 0022 12z"/></svg>
        </a>
        <a href="https://www.instagram.com/" target="_blank" aria-label="Instagram" class="hover:text-[var(--tumeric)] transition">
          <svg fill="currentColor" class="w-8 h-8" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 2 .3 2.5.5.6.2 1.1.5 1.6 1 .5.5.8 1 .9 1.6.2.5.4 1.3.5 2.5.1 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.3 2-.5 2.5-.2.6-.5 1.1-1 1.6s-1 .8-1.6.9c-.5.2-1.3.4-2.5.5-1.2.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-2-.3-2.5-.5-.6-.2-1.1-.5-1.6-1-.5-.5-.8-1-.9-1.6-.2-.5-.4-1.3-.5-2.5C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.8c.1-1.2.3-2 .5-2.5.2-.6.5-1.1 1-1.6s1-.8 1.6-.9c.5-.2 1.3-.4 2.5-.5C8.4 2.2 8.8 2.2 12 2.2zm0-2.2C8.7 0 8.3 0 7.1.1c-1.3.1-2.3.3-3.1.6a5.97 5.97 0 00-2.1 1.4 6 6 0 00-1.4 2.1C.3 5 0 6 .1 7.1.2 8.3.2 8.7.2 12s0 3.7.1 4.9c.1 1.1.3 2.1.6 3 .3.9.7 1.6 1.4 2.1a6 6 0 002.1 1.4c.9.3 1.9.5 3 .6 1.2.1 1.6.1 4.9.1s3.7 0 4.9-.1c1.1-.1 2.1-.3 3-.6a5.97 5.97 0 002.1-1.4 6 6 0 001.4-2.1c.3-.9.5-1.9.6-3 .1-1.2.1-1.6.1-4.9s0-3.7-.1-4.9c-.1-1.1-.3-2.1-.6-3a5.97 5.97 0 00-1.4-2.1 6 6 0 00-2.1-1.4c-.9-.3-1.9-.5-3-.6C15.7 0 15.3 0 12 0zM12 5.8A6.2 6.2 0 1012 18a6.2 6.2 0 000-12.2zm0 10.2a4 4 0 110-8 4 4 0 010 8zm6.4-10.9a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z"/></svg>
        </a>
      </div>
    </div>
  </footer>

  <!-- Dropdown + page scripts -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const btn  = document.getElementById('user-menu-button');
      const menu = document.getElementById('user-dropdown-menu');
      if (!btn || !menu) return;

      function openMenu()  { menu.classList.remove('hidden'); btn.setAttribute('aria-expanded', 'true'); }
      function closeMenu() { menu.classList.add('hidden');    btn.setAttribute('aria-expanded', 'false'); }
      function toggleMenu(){ menu.classList.contains('hidden') ? openMenu() : closeMenu(); }

      btn.addEventListener('click', function (e) {
        e.stopPropagation();
        toggleMenu();
      });

      // Close when clicking outside
      document.addEventListener('click', function (e) {
        if (!menu.contains(e.target) && !btn.contains(e.target)) closeMenu();
      });

      // Close on Escape
      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeMenu();
      });
    });
  </script>

  <!-- Sales chart JS (keep for later) -->
  <script>
    // Chart.js setup can go here
  </script>
</body>
</html>
