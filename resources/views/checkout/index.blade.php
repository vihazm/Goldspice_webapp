<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Checkout - GoldSpice</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700,400&display=swap" rel="stylesheet">
    <style>
        :root {
            --yellow: #ffee39;
            --emerald: #44b180;
            --tumeric: #d29119;
            --grey: #efecec;
            --grey2: #6c6c6c;
            --red: #ca0000;
            --green: #6edb42;
            --nutmeg: #fff1ac;
        }
        body {
            font-family: 'Merriweather', serif;
        }
    </style>
</head>
<body class="bg-black text-white min-h-screen flex flex-col relative" x-data="{ showPayment: false }">

    <!-- Background -->
    <div class="fixed inset-0 z-0">
        <img src="{{ asset('images/greensBG.jpg') }}" alt="Spice Background" class="w-full h-full object-cover opacity-70"/>
        <div class="absolute inset-0 bg-black/60"></div>
    </div>

    <!-- Navbar -->
    <nav class="relative z-20 flex justify-between items-center px-8 py-6 bg-black/30 backdrop-blur-sm sticky top-0">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/goldspice5.png') }}" alt="Logo" class="w-14 h-14 sm:w-16 sm:h-16" />
            <span class="text-2xl sm:text-3xl tracking-wider font-serif font-bold">𝕲𝖔𝖑𝖉𝕾𝖕𝖎𝖈𝖊</span>
        </div>
        <div class="flex space-x-6 text-sm uppercase">
            <a href="{{ url('/') }}" class="font-bold hover:text-[var(--emerald)]">Home</a>
            <a href="{{ url('about') }}" class="font-bold hover:text-[var(--emerald)]">About</a>
            <a href="{{ url('products') }}" class="font-bold hover:text-[var(--emerald)]">Products</a>
            <a href="{{ url('cart') }}" class="font-bold hover:text-[var(--emerald)]">Cart</a>
        </div>
    </nav>

    <!-- Checkout Content -->
    <main class="relative z-10 flex-grow py-16 px-4 text-black">
        <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg">
            <h2 class="text-3xl font-bold mb-6">Checkout</h2>

            <h3 class="font-semibold mb-4">Order Summary</h3>
            <ul class="mb-4 list-disc pl-6">
                @foreach($cartItems as $item)
                    <li>{{ $item->spice->name }} (x{{ $item->quantity }}) - Rs.{{ number_format($item->spice->price * $item->quantity, 2) }}</li>
                @endforeach
            </ul>
            <p class="font-bold text-lg">Grand Total: Rs.{{ number_format($grandTotal, 2) }}</p>

            <!-- Trigger Modal -->
            <button @@click="showPayment = true" type="button"
                class="mt-6 px-6 py-3 bg-[var(--emerald)] text-white font-semibold rounded hover:bg-green-600 transition">
                💳 Pay Now
            </button>
        </div>
    </main>

    <!-- Payment Modal -->
    <div x-show="showPayment" x-cloak
        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-lg w-96 text-black relative">
            <button @@click="showPayment = false" class="absolute top-2 right-3 text-gray-500 hover:text-black">✖</button>
            <h2 class="text-xl font-bold mb-4">Enter Card Details</h2>
            <form action="{{ route('checkout.process') }}" method="POST">
                @csrf
                <label class="block mb-2 font-semibold">Card Number</label>
                <input type="text" name="card_number" placeholder="1234 5678 9012 3456"
                       class="w-full p-2 border rounded mb-3" required>

                <label class="block mb-2 font-semibold">Expiry Date</label>
                <input type="text" name="expiry" placeholder="MM/YY"
                       class="w-full p-2 border rounded mb-3" required>

                <label class="block mb-2 font-semibold">CVV</label>
                <input type="password" name="cvv" placeholder="123"
                       class="w-full p-2 border rounded mb-4" required>

                <div class="flex justify-end space-x-3">
                    <button type="button" @@click="showPayment = false" class="px-4 py-2 bg-gray-400 rounded">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-[var(--emerald)] text-white rounded">Place order</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
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
                <p class="my-3 text-white font-semibold">Follow us on:</p>
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
