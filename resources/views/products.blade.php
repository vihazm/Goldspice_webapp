<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GoldSpice - Products</title>
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
      --nutmeg:#fff1ac;
    }
    body {
      font-family: 'Merriweather', serif;
    }
  </style>
  <link href="https://fonts.googleapis.com/css?family=Merriweather:700,400&display=swap" rel="stylesheet">
  <script src="{{ asset('js/cart.js') }}"></script>
</head>
<body class="bg-black text-white min-h-screen flex flex-col relative">

  <div class="fixed inset-0 z-0">
    <img src="{{ asset('images/greensBG.jpg') }}" alt="Spice Background" class="w-full h-full object-cover opacity-70"/>
    <div class="absolute inset-0 bg-black/60"></div>
    </div>

  <nav class="relative z-20 flex justify-between items-center px-8 py-6 bg-black/30 backdrop-blur-sm sticky top-0">
  <div class="flex items-center space-x-3">
    <img src="{{ asset('images/GoldSpice4.png') }}" alt="Logo" class="w-14 h-14 sm:w-16 sm:h-16" />
    <span class="text-2xl sm:text-3xl tracking-wider font-serif font-bold">𝕲𝖔𝖑𝖉𝕾𝖕𝖎𝖈𝖊</span>
  </div>
  <div class="flex space-x-6 text-sm uppercase">
    <a href="{{ url('/') }}" class="font-bold hover:text-[var(--emerald)]">Home</a>
    <a href="{{ url('about') }}" class="font-bold hover:text-[var(--emerald)]">About</a>
    <a href="{{ url('products') }}" class="font-bold hover:text-[var(--emerald)]">Products</a>
    <a href="{{ url('cart') }}" id="cart-icon" class="font-bold hover:text-[var(--emerald)] relative">
      Cart (<span id="cart-count">0</span>)
      </a>
  </div>
</nav>


  <main class="relative z-10 flex-grow py-16 px-4 text-white">
    <div class="max-w-7xl mx-auto">
      <h1 class="text-4xl sm:text-5xl font-serif font-bold text-center mb-12 text-[var(--tumeric)]">Explore our Products</h1>

      <p class="text-center max-w-3xl mx-auto text-lg text-gray-200 mb-12">
        An exquisite selection of authentic Sri Lankan spices. Each product embodies our commitment to quality, purity, and the rich culinary heritage of our island.
      </p>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">

    <div class="bg-white border-4 border-[var(--emerald)] rounded-lg shadow-lg p-6 flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-300 text-gray-800"
      data-product-id="cinnamon-powder"
      data-product-name="Cinnamon Powder"
      data-product-price="550.00"
      data-product-image="{{ asset('images/cinnamonp.png') }}"
      data-product-pack="50g pack">
      <img src="{{ asset('images/cinnamonp.png') }}" alt="cinnamon Powder" class="w-40 h-40 object-cover rounded-md mb-4"/>
      <h3 class="text-xl font-semibold mb-2">Cinnamon Powder</h3>
      <p class="text-sm text-gray-600 mb-4">50g pack</p>
      <p class="text-lg font-bold text-black mb-4">Rs. 550.00</p>
      <div class="flex items-center space-x-3 mb-4">
        <button class="quantity-minus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--red)] transition-colors">-</button>
        <span class="quantity-display text-lg font-semibold w-8 text-center">1</span>
        <button class="quantity-plus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--green)] transition-colors">+</button>
      </div>
      <button class="add-to-cart-btn bg-[var(--emerald)] text-white px-8 py-3 rounded-lg hover:bg-[var(--emerald)]/90 transition-colors text-sm font-semibold">Add to Cart</button>
    </div>
        <div class="bg-white border-4 border-[var(--emerald)] rounded-lg shadow-lg p-6 flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-300 text-gray-800"
          data-product-id="red-chilli-powder"
          data-product-name="Red Chilli Powder"
          data-product-price="590.00"
          data-product-image="{{ asset('images/chillipowder.png') }}"
          data-product-pack="50g pack">
          <img src="{{ asset('images/chillipowder.png') }}" alt="Red Chilli Powder" class="w-40 h-40 object-cover rounded-md mb-4"/>
          <h3 class="text-xl font-semibold mb-2">Red Chilli Powder</h3>
          <p class="text-sm text-gray-600 mb-4">50g pack</p>
          <p class="text-lg font-bold text-black mb-4">Rs. 590.00</p>
          <div class="flex items-center space-x-3 mb-4">
            <button class="quantity-minus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--red)] transition-colors">-</button>
            <span class="quantity-display text-lg font-semibold w-8 text-center">1</span>
            <button class="quantity-plus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--green)] transition-colors">+</button>
          </div>
          <button class="add-to-cart-btn bg-[var(--emerald)] text-white px-8 py-3 rounded-lg hover:bg-[var(--emerald)]/90 transition-colors text-sm font-semibold">Add to Cart</button>
        </div>

        <div class="bg-white border-4 border-[var(--emerald)] rounded-lg shadow-lg p-6 flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-300 text-gray-800"
          data-product-id="red-chilli-flakes"
          data-product-name="Red Chilli Flakes"
          data-product-price="530.00"
          data-product-image="{{ asset('images/chilliflakes.png') }}"
          data-product-pack="50g pack">
          <img src="{{ asset('images/chilliflakes.png') }}" alt="chilli flakes" class="w-40 h-40 object-cover rounded-md mb-4"/>
          <h3 class="text-xl font-semibold mb-2">Red Chilli Flakes</h3>
          <p class="text-sm text-gray-600 mb-4">50g pack</p>
          <p class="text-lg font-bold text-black mb-4">Rs. 530.00</p>
          <div class="flex items-center space-x-3 mb-4">
            <button class="quantity-minus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--red)] transition-colors">-</button>
            <span class="quantity-display text-lg font-semibold w-8 text-center">1</span>
            <button class="quantity-plus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--green)] transition-colors">+</button>
          </div>
          <button class="add-to-cart-btn bg-[var(--emerald)] text-white px-8 py-3 rounded-lg hover:bg-[var(--emerald)]/90 transition-colors text-sm font-semibold">Add to Cart</button>
        </div>

        <div class="bg-white border-4 border-[var(--emerald)] rounded-lg shadow-lg p-6 flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-300 text-gray-800"
          data-product-id="black-pepper-powder"
          data-product-name="Black Pepper (Powder)"
          data-product-price="780.00"
          data-product-image="{{ asset('images/blackpepper.png') }}"
          data-product-pack="50g pack">
          <img src="{{ asset('images/blackpepper.png') }}" alt="Black Pepper" class="w-40 h-40 object-cover rounded-md mb-4"/>
          <h3 class="text-xl font-semibold mb-2">Black Pepper (Powder)</h3>
          <p class="text-sm text-gray-600 mb-4">50g pack</p>
          <p class="text-lg font-bold text-black mb-4">Rs. 780.00</p>
          <div class="flex items-center space-x-3 mb-4">
            <button class="quantity-minus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--red)] transition-colors">-</button>
            <span class="quantity-display text-lg font-semibold w-8 text-center">1</span>
            <button class="quantity-plus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--green)] transition-colors">+</button>
          </div>
          <button class="add-to-cart-btn bg-[var(--emerald)] text-white px-8 py-3 rounded-lg hover:bg-[var(--emerald)]/90 transition-colors text-sm font-semibold">Add to Cart</button>
        </div>

        <div class="bg-white border-4 border-[var(--emerald)] rounded-lg shadow-lg p-6 flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-300 text-gray-800"
          data-product-id="dried-lemongrass"
          data-product-name="Dried Lemongrass"
          data-product-price="480.00"
          data-product-image="{{ asset('images/lemongrass.png') }}"
          data-product-pack="50g pack">
          <img src="{{ asset('images/lemongrass.png') }}" alt="dried lemongrass" class="w-40 h-40 object-cover rounded-md mb-4"/>
          <h3 class="text-xl font-semibold mb-2">Dried Lemongrass</h3>
          <p class="text-sm text-gray-600 mb-4">50g pack</p>
          <p class="text-lg font-bold text-black mb-4">Rs. 480.00</p>
          <div class="flex items-center space-x-3 mb-4">
            <button class="quantity-minus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--red)] transition-colors">-</button>
            <span class="quantity-display text-lg font-semibold w-8 text-center">1</span>
            <button class="quantity-plus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--green)] transition-colors">+</button>
          </div>
          <button class="add-to-cart-btn bg-[var(--emerald)] text-white px-8 py-3 rounded-lg hover:bg-[var(--emerald)]/90 transition-colors text-sm font-semibold">Add to Cart</button>
        </div>

        <div class="bg-white border-4 border-[var(--emerald)] rounded-lg shadow-lg p-6 flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-300 text-gray-800"
          data-product-id="cardamom"
          data-product-name="Cardamom"
          data-product-price="1050.00"
          data-product-image="{{ asset('images/cardamomGS.png') }}"
          data-product-pack="30g jar">
          <img src="{{ asset('images/cardamomGS.png') }}" alt="Cardamom" class="w-40 h-40 object-cover rounded-md mb-4"/>
          <h3 class="text-xl font-semibold mb-2">Cardamom</h3>
          <p class="text-sm text-gray-600 mb-4">30g jar</p>
          <p class="text-lg font-bold text-black mb-4">Rs. 1050.00</p>
          <div class="flex items-center space-x-3 mb-4">
            <button class="quantity-minus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--red)] transition-colors">-</button>
            <span class="quantity-display text-lg font-semibold w-8 text-center">1</span>
            <button class="quantity-plus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--green)] transition-colors">+</button>
          </div>
          <button class="add-to-cart-btn bg-[var(--emerald)] text-white px-8 py-3 rounded-lg hover:bg-[var(--emerald)]/90 transition-colors text-sm font-semibold">Add to Cart</button>
        </div>

        <div class="bg-white border-4 border-[var(--emerald)] rounded-lg shadow-lg p-6 flex flex-col items-center text-center transform hover:scale-105 duration-300 text-gray-800"
          data-product-id="island-flavours-collection"
          data-product-name="Island Flavours Collection"
          data-product-price="1800.00"
          data-product-image="{{ asset('images/spiceset1.png') }}"
          data-product-pack="75g x 4 pack">
          <img src="{{ asset('images/spiceset1.png') }}" alt="spiceset1" class="w-40 h-40 object-cover rounded-md mb-4"/>
          <h3 class="text-xl font-semibold mb-2">Island Flavours Collection</h3>
          <p class="text-sm text-gray-600 mb-4">75g x 4 pack</p>
          <p class="text-lg font-bold text-black mb-4">Rs. 1800.00</p>
          <div class="flex items-center space-x-3 mb-4">
            <button class="quantity-minus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--red)] transition-colors">-</button>
            <span class="quantity-display text-lg font-semibold w-8 text-center">1</span>
            <button class="quantity-plus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--green)] transition-colors">+</button>
          </div>
          <button class="add-to-cart-btn bg-[var(--emerald)] text-white px-8 py-3 rounded-lg hover:bg-[var(--emerald)]/90 transition-colors text-sm font-semibold">Add to Cart</button>
        </div>

        <div class="bg-white border-4 border-[var(--emerald)] rounded-lg shadow-lg p-6 flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-300 text-gray-800"
          data-product-id="heritage-curries-collection"
          data-product-name="Heritage Curries Collection"
          data-product-price="1950.00"
          data-product-image="{{ asset('images/spiceset2.png') }}"
          data-product-pack="75g x 4 pack">
          <img src="{{ asset('images/spiceset2.png') }}" alt="spiceset2" class="w-40 h-40 object-cover rounded-md mb-4"/>
          <h3 class="text-xl font-semibold mb-2">Heritage Curries Collection</h3>
          <p class="text-sm text-gray-600 mb-4">75g x 4 pack</p>
          <p class="text-lg font-bold text-black mb-4">Rs. 1950.00</p>
          <div class="flex items-center space-x-3 mb-4">
            <button class="quantity-minus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--red)] transition-colors">-</button>
            <span class="quantity-display text-lg font-semibold w-8 text-center">1</span>
            <button class="quantity-plus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--green)] transition-colors">+</button>
          </div>
          <button class="add-to-cart-btn bg-[var(--emerald)] text-white px-8 py-3 rounded-lg hover:bg-[var(--emerald)]/90 transition-colors text-sm font-semibold">Add to Cart</button>
        </div>

        <div class="bg-white border-4 border-[var(--emerald)] rounded-lg shadow-lg p-6 flex flex-col items-center text-center transform hover:scale-105 duration-300 text-gray-800"
          data-product-id="barbecue-amigos-collection"
          data-product-name="Barbecue Amigos Collection"
          data-product-price="1900.00"
          data-product-image="{{ asset('images/bbqmix.png') }}"
          data-product-pack="75g x 4 pack">
          <img src="{{ asset('images/bbqmix.png') }}" alt="spiceset3" class="w-40 h-40 object-cover rounded-md mb-4"/>
          <h3 class="text-xl font-semibold mb-2">Barbecue Amigos Collection</h3>
          <p class="text-sm text-gray-600 mb-4">75g x 4 pack</p>
          <p class="text-lg font-bold text-black mb-4">Rs. 1900.00</p>
          <div class="flex items-center space-x-3 mb-4">
            <button class="quantity-minus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--red)] transition-colors">-</button>
            <span class="quantity-display text-lg font-semibold w-8 text-center">1</span>
            <button class="quantity-plus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--green)] transition-colors">+</button>
          </div>
          <button class="add-to-cart-btn bg-[var(--emerald)] text-white px-8 py-3 rounded-lg hover:bg-[var(--emerald)]/90 transition-colors text-sm font-semibold">Add to Cart</button>
        </div>

        <div class="bg-white border-4 border-[var(--emerald)] rounded-lg shadow-lg p-6 flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-300 text-gray-800"
          data-product-id="goldspice-deluxe-imperial"
          data-product-name="GoldSpice Deluxe (Imperial Edition)"
          data-product-price="3650.00"
          data-product-image="{{ asset('images/imperial1.5.png') }}"
          data-product-pack="75g x 3 pack">
          <img src="{{ asset('images/imperial1.5.png') }}" alt="deluxe spiceset 1" class="w-40 h-40 object-cover rounded-md mb-4"/>
          <h3 class="text-xl font-semibold mb-2">GoldSpice Deluxe (Imperial Edition)</h3>
          <p class="text-sm text-gray-600 mb-4">75g x 3 bottles</p>
          <p class="text-lg font-bold text-black mb-4">Rs. 3650.00</p>
          <div class="flex items-center space-x-3 mb-4">
            <button class="quantity-minus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--red)] transition-colors">-</button>
            <span class="quantity-display text-lg font-semibold w-8 text-center">1</span>
            <button class="quantity-plus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--green)] transition-colors">+</button>
          </div>
          <button class="add-to-cart-btn bg-[var(--emerald)] text-white px-8 py-3 rounded-lg hover:bg-[var(--emerald)]/90 transition-colors text-sm font-semibold">Add to Cart</button>
        </div>

        <div class="bg-white border-4 border-[var(--emerald)] rounded-lg shadow-lg p-6 flex flex-col items-center text-center transition-transform transform hover:scale-105 duration-300 text-gray-800"
          data-product-id="goldspice-deluxe-exotic"
          data-product-name="GoldSpice Deluxe (Exotic Edition)"
          data-product-price="3250.00"
          data-product-image="{{ asset('images/exoticGS.png') }}"
          data-product-pack="75g x 3 pack">
          <img src="{{ asset('images/exoticGS.png') }}" alt="deluxe spiceset 1" class="w-40 h-40 object-cover rounded-md mb-4"/>
          <h3 class="text-xl font-semibold mb-2">GoldSpice Deluxe (Exotic Edition) </h3>
          <p class="text-sm text-gray-600 mb-4">75g x 3 bottles</p>
          <p class="text-lg font-bold text-black mb-4">Rs. 3250.00</p>
          <div class="flex items-center space-x-3 mb-4">
            <button class="quantity-minus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--red)] transition-colors">-</button>
            <span class="quantity-display text-lg font-semibold w-8 text-center">1</span>
            <button class="quantity-plus px-4 py-2 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--green)] transition-colors">+</button>
          </div>
          <button class="add-to-cart-btn bg-[var(--emerald)] text-white px-8 py-3 rounded-lg hover:bg-[var(--emerald)]/90 transition-colors text-sm font-semibold">Add to Cart</button>
        </div>

      </div>
    </div>
  </main>

  <section class="relative z-10 bg-white py-16 px-4 text-gray-800">
    <div class="max-w-5xl mx-auto text-center">
      <h2 class="text-4xl sm:text-4xl font-bold text-black mb-6">Wanna know more about our Specials?</h2>
      <p class="text-center max-w-3xl mx-auto text-lg text-gray-600 mb-12">We do more than "just spices". We design Spice sets that will add flavour to various situations and also a few Deluxe Editions for gifting or personal enjoyment. </p>
      <div class="flex flex-wrap justify-center gap-6">
        <a href="{{ url('deluxe') }}" class="px-8 py-3 bg-white text-[var(--emerald)] font-bold border-4 border-[var(--emerald)] rounded-lg transition-transform transform hover:scale-105 duration-300">Deluxe Editions →</a>
        <a href="{{ url('collections') }}" class="px-8 py-3 bg-white text-[var(--tumeric)] font-bold border-4 border-[var(--tumeric)] rounded-lg transition-transform transform hover:scale-105 duration-300">Collections →</a>
      </div>
    </div>
  </section>

  <script>
    
  </script>

  <footer class="relative z-10 bg-black border-t border-gray-800 text-gray-400 text-xs sm:text-sm py-6 px-4 sm:px-8">
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

</body>
</html>