<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GoldSpice - About Us</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    :root {
      --yellow: #ffee39;
      --emerald: #44b180;
      --tumeric: #d29119;
      --grey:#efecec;
    }
    body {
      font-family: 'Merriweather', serif;
    }
  </style>
  <link href="https://fonts.googleapis.com/css?family=Merriweather:700,400&display=swap" rel="stylesheet">
</head>
<body class="bg-black text-white min-h-screen flex flex-col">

  <nav class="flex justify-between items-center px-8 py-6 bg-black/60 backdrop-blur-sm sticky top-0 z-50">
    <div class="flex items-center space-x-3">
      <img src="{{ asset('images/GoldSpice4.png') }}" alt="Logo" class="w-14 h-14 sm:w-16 sm:h-16" />
      <span class="text-2xl sm:text-3xl tracking-wider font-serif font-bold">𝕲𝖔𝖑𝖉𝕾𝖕𝖎𝖈𝖊</span>
    </div>
    <div class="flex space-x-6 text-sm uppercase">
      <a href="{{ url('/home') }}" class="font-bold hover:text-[var(--emerald)] my-5">Home</a>
      <a href="{{ url('/about') }}" class="font-bold hover:text-[var(--emerald)] my-5">About</a>
      <a href="{{ url('/products') }}" class="font-bold hover:text-[var(--emerald)] my-5">Products</a>
    </div>
  </nav>

  <section class="relative w-full py-16">
    <div class="absolute inset-0">
      <img src="{{ asset('images/pepperwoman.jpg') }}" alt="About Us Background" class="w-full h-full object-cover object-center opacity-70" />
      <div class="absolute inset-0 bg-black/60"></div>
    </div>
    <div class="relative z-10 max-w-5xl mx-auto flex flex-col md:flex-row items-center gap-12 px-4">
      <div class="w-full md:w-1/2 text-left">
        <h1 class="text-4xl sm:text-5xl font-serif font-bold mb-6 text-white drop-shadow py-5">About <span class="text-[var(--tumeric)]">GoldSpice</span></h1>
        <p class="text-lg text-white mb-3 leading-relaxed">
          <span class="text-[var(--emerald)] text-xl font-semibold"><b>GoldSpice is more than just a brand—it’s a promise sealed in every pack we create.</b></span><br><br>As a homegrown Sri Lankan company, we take pride in producing our own exceptional line of spices, lovingly crafted from crops sourced directly from the heart of local farms. </p><br>
        <p class="text-lg text-white mb-3 leading-relaxed">
          When you choose GoldSpice, you choose a brand that stands for purity, honesty, and the authentic taste of Sri Lanka. Every sprinkle is a celebration of our island’s heritage, our people, and our unwavering commitment to quality.
        </p>
        <div class="flex gap-3 flex-wrap mt-4 py-5">
          <span class="bg-black text-white px-4 py-2 border border-[var(--tumeric)] rounded-full text-sm font-bold transition-transform transform hover:scale-105 duration-300">Sri Lankan</span>
          <span class="bg-black text-white px-4 py-2 border border-[var(--tumeric)] rounded-full text-sm font-bold transition-transform transform hover:scale-105 duration-300">Ethically Sourced</span>
          <span class="bg-black text-white px-4 py-2 border border-[var(--tumeric)] rounded-full text-sm font-bold transition-transform transform hover:scale-105 duration-300">Handcrafted Quality</span>

        </div>
      </div>
      </div>
  </section>

  <section class="py-16 px-4 bg-[var(--grey)]">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-2xl sm:text-4xl font-bold text-center mb-12 text-black py-5">Our Story</h2>
      <div class="relative">
        <div class="hidden md:block absolute left-1/2 -translate-x-1/2 h-full w-1 bg-[var(--emerald)]/20"></div>
        <div class="grid md:grid-cols-2 gap-10">
          <div class="flex flex-col items-end md:items-center text-right md:text-left transition-transform transform hover:scale-105 duration-300">
            <div class="bg-white rounded-xl shadow p-6 border-l-4 border-[var(--emerald)] max-w-sm mb-2">
              <h3 class="text-lg font-bold text-[var(--emerald)] mb-1">2015</h3>
              <p class="text-gray-700">Driven by a lifelong passion for the vibrant, authentic flavors of Sri Lankan cuisine and a growing concern over the diminishing quality of spices in the market, Vihanga Jayakody founded GoldSpice alongside a dedicated handful of like-minded individuals.</p>
            </div>
            <img src="{{ asset('images/sme.png') }}" alt="Start Small" class="w-24 h-24 rounded-full border-4 border-[var(--emerald)] object-cover shadow-lg"/>
          </div>
          <div class="flex flex-col items-start md:items-center transition-transform transform hover:scale-105 duration-300">
            <div class="bg-white rounded-xl shadow p-6 border-l-4 border-[var(--tumeric)] max-w-sm mb-2">
              <h3 class="text-lg font-bold text-[var(--tumeric)] mb-1">2018</h3>
              <p class="text-gray-700">As GoldSpice's reputation grew, so did the demand. To maintain absolute control over quality, we made investments in state-of-the-art cleaning, drying, and grinding facilities. This move allowed us to keep our quality consistent even when facing a peak demand we never imagined we'd get.</p>
            </div>
            <img src="{{ asset('images/sustainable.png') }}" alt="Sustainable" class="w-24 h-24 rounded-full border-4 border-[var(--tumeric)] object-cover shadow-lg"/>
          </div>
          <div class="flex flex-col items-end md:items-center text-right md:text-left transition-transform transform hover:scale-105 duration-300">
            <div class="bg-white rounded-xl shadow p-6 border-l-4 border-[var(--emerald)] max-w-sm mb-2">
              <h3 class="text-lg font-bold text-[var(--emerald)] mb-1">2022</h3>
              <p class="text-gray-700">Our commitment to quality resonated deeply with consumers. By 2022, GoldSpice had become a trusted name in households all over Sri Lanka and even overseas. Our spices, once a local dream, were now gracing kitchens beyond our small island. </p>
            </div>
            <img src="{{ asset('images/worldwide.png') }}" alt="Worldwide" class="w-24 h-24 rounded-full border-4 border-[var(--emerald)] object-cover shadow-lg"/>
          </div>
          <div class="flex flex-col items-start md:items-center transition-transform transform hover:scale-105 duration-300">
            <div class="bg-white rounded-xl shadow p-6 border-l-4 border-[var(--tumeric)] max-w-sm mb-2">
              <h3 class="text-lg font-bold text-[var(--tumeric)] mb-1">Today</h3>
              <p class="text-gray-700">Today, GoldSpice continues to grow, but our heart remains firmly rooted in our origins. We actively foster sustainable practices and strengthen our bonds with our farmer partners, ensuring fair trade and community development. </p>
            </div>
            <img src="{{ asset('images/success.png') }}" alt="Today" class="w-24 h-24 rounded-full border-4 border-[var(--tumeric)] object-cover shadow-lg"/>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-[var(--grey)] py-16 px-4">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-2xl sm:text-3xl font-bold text-center mb-12 text-[var(--tumeric)]">Meet The GoldSpice Family</h2>
      <div class="flex flex-col md:flex-row justify-center gap-12">
        <div class="flex flex-col items-center transition-transform transform hover:scale-105 duration-300">
          <img src="{{ asset('images/vihanga.jpg') }}" alt="Founder" class="w-28 h-28 rounded-full border-4 border-[var(--emerald)] object-cover mb-3 shadow-lg"/>
          <span class="font-bold text-[var(--emerald)]">Vihanga</span>
          <span class="text-gray-700 text-sm">Founder & CEO</span>
        </div>
        <div class="flex flex-col items-center transition-transform transform hover:scale-105 duration-300">
          <img src="{{ asset('images/woman1.jpg') }}" alt="Sourcing Lead" class="w-28 h-28 rounded-full border-4 border-[var(--emerald)] object-cover mb-3 shadow-lg"/>
          <span class="font-bold text-[var(--emerald)]">Nisansala</span>
          <span class="text-gray-700 text-sm">Head of Sourcing</span>
        </div>
        <div class="flex flex-col items-center transition-transform transform hover:scale-105 duration-300">
          <img src="{{ asset('images/man1.jpg') }}" alt="Community" class="w-28 h-28 rounded-full border-4 border-[var(--emerald)] object-cover mb-3 shadow-lg"/>
          <span class="font-bold text-[var(--emerald)]">Kasun</span>
          <span class="text-gray-700 text-sm">Production & Community</span>
        </div>
      </div>
      <div class="mt-10 text-center max-w-2xl mx-auto text-gray-700 text-base">
        United by a comon goal, our team brings together experience, heart, and a deep love for spices. From field to factory to your kitchen, we’re proud to deliver spices that carry the GoldSpice name.
      </div>
    </div>
  </section>

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
                <div class="my-1">
                    <span class="ml-1 text-md text-white font-semibold">+94 71 123 4567 / +94 77 987 6543</span>
                </div>

                <div class="my-2">
                    <span class="ml-1 text-md text-white font-semibold">info@goldspice.com</span>
                </div>

                <div class="my-2">
                    <span class="ml-1 text-md text-white font-semibold">No. 25, Spice Street, Colombo 07, Sri Lanka</span>
                </div>
            </div>
        </div>

        <p class="text-white text-lg font-bold">&copy; 2025 GoldSpice. Made in SL.</p>

        <div class="flex space-x-4 items-center">
            <p class="my-3 text-white font-semibold">Follow us on: </p>
            <a href="https://www.facebook.com/" target="_blank" aria-label="Facebook" class="hover:text-[var(--tumeric)] transition">
                <svg fill="currentColor" class="w-8 h-8" viewBox="0 0 24 24">
                    <path d="M22 12a10 10 0 10-11.5 9.95v-7.05H8v-2.9h2.5V9.5c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.3.2 2.3.2v2.5h-1.3c-1.3 0-1.7.8-1.7 1.6v2H17l-.3 2.9h-2.5V22A10 10 0 0022 12z" />
                </svg>
            </a>
            <a href="https://www.instagram.com/" target="_blank" aria-label="Instagram" class="hover:text-[var(--tumeric)] transition">
                <svg fill="currentColor" class="w-8 h-8" viewBox="0 0 24 24">
                    <path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 2 .3 2.5.5.6.2 1.1.5 1.6 1 .5.5.8 1 .9 1.6.2.5.4 1.3.5 2.5.1 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.3 2-.5 2.5-.2.6-.5 1.1-1 1.6s-1 .8-1.6.9c-.5.2-1.3.4-2.5.5-1.2.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-2-.3-2.5-.5-.6-.2-1.1-.5-1.6-1-.5-.5-.8-1-.9-1.6-.2-.5-.4-1.3-.5-2.5C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.8c.1-1.2.3-2 .5-2.5.2-.6.5-1.1 1-1.6s1-.8 1.6-.9c.5-.2 1.3-.4 2.5-.5C8.4 2.2 8.8 2.2 12 2.2zm0-2.2C8.7 0 8.3 0 7.1.1c-1.3.1-2.3.3-3.1.6a5.97 5.97 0 00-2.1 1.4 6 6 0 00-1.4 2.1C.3 5 0 6 .1 7.1.2 8.3.2 8.7.2 12s0 3.7.1 4.9c.1 1.1.3 2.1.6 3 .3.9.7 1.6 1.4 2.1a6 6 0 002.1 1.4c.9.3 1.9.5 3 .6 1.2.1 1.6.1 4.9.1s3.7 0 4.9-.1c1.1-.1 2.1-.3 3-.6a5.97 5.97 0 002.1-1.4 6 6 0 001.4-2.1c.3-.9.5-1.9.6-3 .1-1.2.1-1.6.1-4.9s0-3.7-.1-4.9c-.1-1.1-.3-2.1-.6-3a5.97 5.97 0 00-1.4-2.1 6 6 0 00-2.1-1.4c-.9-.3-1.9-.5-3-.6C15.7 0 15.3 0 12 0zM12 5.8A6.2 6.2 0 1012 18a6.2 6.2 0 000-12.2zm0 10.2a4 4 0 110-8 4 4 0 010 8zm6.4-10.9a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z"/>
                </svg>
            </a>
        </div>
    </div>
</footer>

  <script>
    // Update cart count on page load
    document.addEventListener('DOMContentLoaded', () => {
      const cartCountDisplay = document.getElementById('cart-count');
      const storedCart = localStorage.getItem('goldspiceCart');

      if (storedCart) {
        const cart = JSON.parse(storedCart);
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        cartCountDisplay.textContent = totalItems;
      }
    });
  </script>

</body>
</html>