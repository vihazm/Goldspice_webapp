<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GoldSpice - Our Collections</title>
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
</head>
<body class="bg-black text-white min-h-screen flex flex-col">

  <nav class="flex justify-between items-center px-8 py-6 bg-black/60 backdrop-blur-sm sticky top-0 z-50">
    <div class="flex items-center space-x-3">
      <img src="{{ asset('images/GoldSpice4.png') }}" alt="Logo" class="w-14 h-14 sm:w-16 sm:h-16" />
      <span class="text-2xl sm:text-3xl tracking-wider font-serif font-bold">𝕲𝖔𝖑𝖉𝕾𝖕𝖎𝖈𝖊</span>
    </div>
    <div class="flex space-x-6 text-sm uppercase">
      <a href="{{ url('/') }}" class="font-bold hover:text-[var(--emerald)]">Home</a>
      <a href="{{ url('about') }}" class="font-bold hover:text-[var(--emerald)]">About</a>
      <a href="{{ url('products') }}" class="font-bold hover:text-[var(--emerald)]">Products</a>
    </div>
  </nav>

  <main class="relative z-10 flex-grow">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/yellowdarkBG.jpg') }}" alt="Collection Background" class="w-full h-full object-cover opacity-70"/>
        <div class="absolute inset-0 bg-black/60"></div>
    </div>
    
    <div class="py-6"></div>
    <div class="max-w-5xl mx-auto">
        <h1 class="relative z-10 text-4xl sm:text-5xl font-serif font-bold text-center mb-12 py-6 text-white">Explore Our <span class="text-[var(--emerald)]">Spice Collections</span><br><span class="relative z-10 text-xl sm:text-xl font-bold text-center mb-12 text-gray-400 my-8">Curated for Every Culinary Journey</span></h1>
    </div>

    <section class="relative py-8 z-10 px-4">
        <div class="max-w-5xl mx-auto">            
            <div class="grid grid-cols-1 gap-12">
                <div class="bg-white rounded-xl shadow p-6 text-gray-800 flex flex-col md:flex-row items-center md:items-start gap-6 transition-transform transform hover:scale-105 duration-300">
                    <img src="{{ asset('images/bbqmix.png') }}" alt="GoldSpice Barbecue Amigos" class="w-full md:w-1/3 h-auto object-cover rounded-lg border border-gray-200"/>
                    <div class="flex-grow">
                        <h3 class="text-3xl font-bold text-[var(--tumeric)] mb-3 text-center md:text-left py-2">Barbecue Amigos</h3>
                        <p class="text-md leading-relaxed mb-4">
                          A robust collection for grilling enthusiasts, designed to elevate your barbecue experience with authentic flavors.
                        </p>
                        <ul class="list-disc list-inside ml-4 text-sm leading-relaxed">
                            <li><b>Fish Pit:</b> A savory blend for all types of seafood.</li>
                            <li><b>Wing Fandango:</b> A zesty rub for irresistible chicken wings.</li>
                            <li><b>Ribs Galore:</b> Your classic smoky seasoning for tender ribs.</li>
                            <li><b>Steak Jerry:</b> A bold and peppery blend for a perfect steak.</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow p-6 text-gray-800 flex flex-col md:flex-row items-center md:items-start gap-6 transition-transform transform hover:scale-105 duration-300">
                    <img src="{{ asset('images/spiceset2.png') }}" alt="GoldSpice Barbecue Amigos" class="w-full md:w-1/3 h-auto object-cover rounded-lg border border-gray-200"/>
                    <div class="flex-grow">
                        <h3 class="text-3xl font-bold text-[var(--tumeric)] mb-3 text-center md:text-left py-2">Heritage Curries - Spice set</h3>
                        <p class="text-md leading-relaxed mb-4">
                          A robust collection for grilling enthusiasts, designed to elevate your barbecue experience with authentic flavors.
                        </p>
                        <ul class="list-disc list-inside ml-4 text-sm leading-relaxed">
                            <li><b>Tuna Curry:</b> A special blend for robust fish curries.</li>
                            <li><b>Prawn Curry:</b> A succulent mix for a perfect prawn curry.</li>
                            <li><b>Meat Curry:</b> A hearty mix for an amazing red meat curry.</li>
                            <li><b>Masur Curry:</b> A gentle yet flavourful mix for lentil curries.</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow p-6 text-gray-800 flex flex-col md:flex-row items-center md:items-start gap-6 transition-transform transform hover:scale-105 duration-300">
                    <img src="{{ asset('images/spiceset1.png') }}" alt="GoldSpice Barbecue Amigos" class="w-full md:w-1/3 h-auto object-cover rounded-lg border border-gray-200"/>
                    <div class="flex-grow">
                        <h3 class="text-3xl font-bold text-[var(--tumeric)] mb-3 text-center md:text-left py-2">Island Flavours - Spice set</h3>
                        <p class="text-md leading-relaxed mb-4">
                          Experience the authentic tastes of Sri Lanka with this essential spice set, perfect for traditional dishes.
                        </p>
                        <ul class="list-disc list-inside ml-4 text-sm leading-relaxed">
                            <li><b>Coconut Curry:</b> A creamy base for curries that include coconut.</li>
                            <li><b>Spice Island:</b> A versatile blend for everyday curries.</li>
                            <li><b>Lankan Masala:</b> A pungent and hearty masala.</li>
                            <li><b>Cinnamon Mix:</b> A sweet and earthy topping for sweets.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between px-4 lg:px-24 py-20 gap-16">
    <a href="{{ url('products') }}" class="flex items-center inline-block border-2 border-[var(--emerald)] bg-black text-white text-xl font-semibold px-8 py-4 rounded-full shadow-lg hover:bg-[var(--green)] hover:text-white transition transition-transform transform hover:scale-105 duration-300"> Go get them → </a>
    </div>
  </main>

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
                    <path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 2 .3 2.5.5.6.2 1.1.5 1.6 1 .5.5.8 1 .9 1.6.2.5.4 1.3.5 2.5.1 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.3 2-.5 2.5-.2.6-.5 1.1-1 1.6s-1 .8-1.6.9c-.5.2-1.3.4-2.5.5-1.2.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-2-.3-2.5-.5-.6-.2-1.1-.5-1.6-1-.5-.5-.8-1-.9-1.6-.2-.5-.4-1.3-.5-2.5C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.8c.1-1.2.3-2 .5-2.5.2-.6.5-1.1 1-1.6s1-.8 1.6-.9c.5-.2 1.3-.4 2.5-.5C8.4 2.2 8.8 2.2 12 2.2zm0-2.2C8.7 0 8.3 0 7.1.1c-1.3.1-2.3.3-3.1.6a5.97 5.97 0 00-2.1 1.4 6 6 0 00-1.4 2.1c.9.3 1.9.5 3 .6 1.2.1 1.6.1 4.9.1s3.7 0 4.9-.1c1.1-.1 2.1-.3 3-.6a5.97 5.97 0 002.1-1.4 6 6 0 001.4-2.1c.3-.9.5-1.9.6-3 .1-1.2.1-1.6.1-4.9s0-3.7-.1-4.9c-.1-1.1-.3-2.1-.6-3a5.97 0 00-1.4-2.1 6 6 0 00-2.1-1.4c-.9-.3-1.9-.5-3-.6C15.7 0 15.3 0 12 0zM12 5.8A6.2 6.2 0 1012 18a6.2 6.2 0 000-12.2zm0 10.2a4 4 0 110-8 4 4 0 010 8zm6.4-10.9a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z"/>
                </svg>
            </a>
        </div>
    </div>
  </footer>

</body>
</html>