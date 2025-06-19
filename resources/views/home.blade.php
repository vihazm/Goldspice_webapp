<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GoldSpice - Home</title>
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
<body class="text-white min-h-screen flex flex-col relative">

  <!-- Full-page background with overlay -->
  <div class="fixed inset-0 z-0">
    <img src="{{ asset('images/spicespoons4.jpg') }}" class="w-full h-full object-cover opacity-90" alt="Spice Background" />
    <div class="absolute inset-0 bg-black/60"></div>
  </div>

  <!-- Sticky Navbar above the background -->
  <nav class="sticky top-0 z-50 flex justify-between items-center px-8 py-6 bg-black/30 backdrop-blur-md">
    <div class="flex items-center space-x-3">
      <img src="{{ asset('images/GoldSpice4.png') }}" alt="Logo" class="w-14 h-14 sm:w-16 sm:h-16" />
      <span class="text-2xl sm:text-3xl tracking-wider font-serif font-bold">𝕲𝖔𝖑𝖉𝕾𝖕𝖎𝖈𝖊</span>
    </div>
    <div class="flex space-x-6 text-sm uppercase">
      <a href="{{ url('/home') }}" class="font-bold hover:text-[var(--emerald)] my-5">Home</a>
      <a href="{{ url('/about') }}" class="font-bold hover:text-[var(--emerald)] my-5">About</a>
      <a href="{{ url('/products') }}" class="font-bold hover:text-[var(--emerald)] my-5">Products</a>
      <a href="{{ url('/login') }}" class="w-16 h-16 rounded-full border-2 border-[var(--tumeric)] overflow-hidden hover:border-[var(--emerald)] transition-colors duration-300 transition-transform transform hover:scale-105 duration-300">
          <img src="{{ asset('images/loginuser.png') }}" alt="Login" class="w-full h-full object-cover" />
      </a>
    </div>
  </nav>

  <!-- Main content starts -->
  <div class="relative z-10 w-full overflow-hidden">

    <section class="relative z-10 flex flex-col lg:flex-row items-center justify-between px-4 lg:px-24 py-20 gap-16">
      <div class="relative z-10 flex-1 text-center lg:text-left">
        <h1 class="font-serif text-5xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
          Experience <span class="text-[var(--tumeric)]">True Ceylon Spices</span>
        </h1>
        <p class="text-gray-200 text-2xl mb-10 max-w-2xl mx-auto lg:mx-0">
          Handpicked in the heart of Sri Lanka, processed and delivered to your table with love.
        </p>
        <a href="{{ url('/products') }}" class="inline-block bg-[var(--tumeric)] text-black text-xl font-semibold px-8 py-4 rounded-full shadow-lg hover:bg-[var(--emerald)] hover:text-white transition transition-transform transform hover:scale-105 duration-300">Shop Now</a>
      </div>
    </section>

    <section class="relative z-10 py-12 px-4">
      <div class="relative z-10 max-w-6xl mx-auto grid md:grid-cols-3 gap-10">

        <div class="bg-white border-4 border-[var(--tumeric)] rounded-2xl p-8 shadow-lg flex flex-col text-left transition-transform transform hover:scale-105 duration-300">
          <h3 class="text-2xl font-serif font-bold mb-3 text-[var(--tumeric)]">Join as a Goldspice member</h3>
          <p class="text-black mb-4">Sign up as a member to purchase, access your own cart and many more!</p>
          <a href="{{ url('/login') }}" class="inline-block bg-[var(--tumeric)] text-black text-md font-semibold px-8 py-4 rounded-full shadow-lg hover:bg-[var(--emerald)] hover:text-white transition transition-transform transform hover:scale-105 duration-300">Go to Sign-Up →</a>
        </div>

        <div class="bg-white border-4 border-[var(--tumeric)] rounded-2xl p-8 shadow-lg flex flex-col text-left transition-transform transform hover:scale-105 duration-300">
          <h3 class="text-2xl font-serif font-bold mb-3 py-6 text-[var(--tumeric)]">Deluxe Editions</h3>
          <p class="text-black mb-4">Our Finest spice sets for a true spice connoisseur.</p>
          <a href="{{ url('/deluxe') }}" class="inline-block bg-[var(--tumeric)] text-black text-md font-semibold px-8 py-4 rounded-full shadow-lg hover:bg-[var(--emerald)] hover:text-white transition transition-transform transform hover:scale-105 duration-300">Learn more →</a>
        </div>

        <div class="bg-white border-4 border-[var(--tumeric)] rounded-2xl p-8 shadow-lg flex flex-col text-left transition-transform transform hover:scale-105 duration-300">
          <h3 class="text-2xl font-serif font-bold mb-3 py-6 text-[var(--tumeric)]">Collections</h3>
          <p class="text-black mb-4">Spice collections designed to flavour-up any occasion in your life.</p>
          <a href="{{ url('/collections') }}" class="inline-block bg-[var(--tumeric)] text-black text-md font-semibold px-8 py-4 rounded-full shadow-lg hover:bg-[var(--emerald)] hover:text-white transition transition-transform transform hover:scale-105 duration-300">Learn more →</a>
        </div>
      </div>
    </section>

  </div> <!-- properly closed the content container -->

  <!-- Sections with light background fixed -->
  <section class="py-16 px-6 bg-[var(--grey)] text-black relative z-10">
    <div class="max-w-5xl mx-auto flex flex-col items-center">
      <h2 class="text-2xl sm:text-4xl font-bold mb-10 text-[var(--emerald)] py-4">What Makes GoldSpice Special?</h2>
      <div class="flex flex-col md:flex-row justify-center items-stretch gap-8">

        <div class="flex-1 bg-[#181818] rounded-xl p-8 flex flex-col items-center shadow-lg transition-transform transform hover:scale-105 duration-300">
          <img src="{{ asset('images/shimmer.png') }}" alt="Quality Assurance" class="w-24 h-24 rounded-full border-4 border-[var(--emerald)] object-cover shadow-lg "/>
          <h3 class="text-2xl font-bold mb-2 text-[var(--emerald)] py-2">Quality Assurance</h3>
          <p class="text-gray-300 text-center">
            Every batch is carefully checked and certified by professionals.
          </p>
        </div>

        <div class="flex-1 bg-[#181818] rounded-xl p-8 flex flex-col items-center shadow-lg transition-transform transform hover:scale-105 duration-300">
          <img src="{{ asset('images/food.png') }}" alt="Amazing Taste" class="w-24 h-24 rounded-full border-4 border-[var(--emerald)] object-cover shadow-lg "/>
          <h3 class="text-2xl font-bold mb-2 text-[var(--emerald)] py-2">Incredible Flavour</h3>
          <p class="text-gray-300 text-center">
            From aroma to aftertaste, our spices bring out the best in your recipes.
          </p>
        </div>

         <div class="flex-1 bg-[#181818] rounded-xl p-8 flex flex-col items-center shadow-lg transition-transform transform hover:scale-105 duration-300">
          <img src="{{ asset('images/cash.png') }}" alt="Reasonable Prices" class="w-24 h-24 rounded-full border-4 border-[var(--emerald)] object-cover shadow-lg "/>
          <h3 class="text-2xl font-bold mb-2 text-[var(--emerald)] py-2">Fair Pricing</h3>
          <p class="text-gray-300 text-center">
            Enjoy premium spices at prices you can trust.
          </p>
        </div>

      </div>
    </div>
  </section>

  <section class="py-14 px-6 bg-[var(--grey)] text-black relative z-10">
    <div class="max-w-5xl mx-auto flex flex-col items-center">
      <h3 class="text-2xl sm:text-4xl font-bold mb-10 text-[var(--emerald)] py-4">Certified Ethical. Certified Pure.</h3>
      <div class="flex gap-8 mt-6 mb-8">
        <img src="{{ asset('images/USDA.png') }}" alt="USDA" class="h-16 object-contain"/>
        <img src="{{ asset('images/FDA-registered.png') }}" alt="FDA" class="h-16 object-contain"/>
        <img src="{{ asset('images/SLGAP-146x146.png') }}" alt="SLGAP" class="h-16 object-contain"/>
        <img src="{{ asset('images/GMP.png') }}" alt="GMP" class="h-16 object-contain"/>
      </div>
      <p class="max-w-xl text-gray-700 text-lg text-center">While we maintain a highly standardized and intricate production process, we partner only with certified, organic and ethical farmers who have a passion for quality produce. Every purchase you make supports rural communities and amazing farmers.</p>
    </div>
  </section>

  <section class="bg-[var(--grey)] py-12 px-4 sm:px-8 text-center text-black relative z-10">
    <h3 class="text-2xl sm:text-4xl font-bold mb-10 text-[var(--emerald)] py-4">How our customers feel</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

      <div class="bg-[#111] p-6 rounded-2xl border-2 border-white shadow-md hover:shadow-yellow-500/20 transition-transform transform hover:scale-105 duration-300 text-white">
        <h4 class="text-lg font-semibold mb-2">Dinuka P.</h4>
        <p class="text-yellow-400 mb-3">★★★★★</p>
        <p class="text-gray-300 text-sm leading-relaxed">
          “The cinnamon I ordered was incredibly fresh and fragrant. My cinnamon rolls have never tasted nor smelled this good!”
        </p>
      </div>

      <div class="bg-[#111] p-6 rounded-2xl border-2 border-white shadow-md hover:shadow-emerald-400/20 transition-transform transform hover:scale-105 duration-300 text-white">
        <h4 class="text-lg font-semibold mb-2">Kavindu D.</h4>
        <p class="text-yellow-400 mb-3">★★★★</p>
        <p class="text-gray-300 text-sm leading-relaxed">
          “Impressed with the quality and how easy it was to find exactly what I wanted. It's wonderful that we are supporting local farmers directly.”
        </p>
      </div>

      <div class="bg-[#111] p-6 rounded-2xl border-2 border-white shadow-md hover:shadow-yellow-300/20 transition-transform transform hover:scale-105 duration-300 text-white">
        <h4 class="text-lg font-semibold mb-2">Inoka P.</h4>
        <p class="text-yellow-400 mb-3">★★★★★</p>
        <p class="text-gray-300 text-sm leading-relaxed">
          “The spice blends are top-notch. I use them in everything from curries to chai. Also I highly recommend their Black pepper.”
        </p>
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
                <img src="{{ asset('images/Goldspice4.png') }}" alt="GoldSpice Logo" class="my-8 w-16 h-16" />
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
</html