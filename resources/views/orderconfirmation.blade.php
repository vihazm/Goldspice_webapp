<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GoldSpice - Order Verified</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

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

        .glass {
            background: rgba(34, 36, 40, 0.82);
            backdrop-filter: blur(70px);
            border: 1.5px solid rgba(255, 255, 255, 0.06);
            box-shadow: 0 8px 32px 0 rgba(20, 20, 20, 0.25);
        }

        .btn-main {
            background: #fff;
            color: #23272f;
            font-weight: 700;
        }

        .btn-main:hover {
            background: #e5e7eb;
            color: #111;
        }

        .icon-circle {
            background: #22c55e;
            border-radius: 9999px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 3rem;
            height: 3rem;
        }
    </style>
</head>

<body class="bg-white text-black min-h-screen flex items-center justify-center">
    <div class="relative w-full min-h-screen flex flex-col items-center justify-center">
        <!-- Background Image -->
        <img src="{{ asset('images/spiceassorted.jpg') }}" class="absolute inset-0 w-full h-full object-cover opacity-100" alt="Spice Background" />
        <div class="absolute inset-0 bg-black bg-opacity-70"></div>

        <!-- Navigation -->
        <nav class="absolute top-0 left-0 right-0 flex justify-between items-center px-8 py-6 z-50">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/goldspice5.png') }}" alt="Logo" class="w-14 h-14 sm:w-16 sm:h-16" />
                <span class="text-2xl sm:text-3xl text-white tracking-wider font-serif font-bold">𝕲𝖔𝖑𝖉𝕾𝖕𝖎𝖈𝖊</span>
            </div>
            
        </nav>

        <!-- Order Confirmation Box -->
        <div class="flex flex-col items-center w-full max-w-md p-8 mx-2 glass rounded-2xl z-10">
            <!-- Step Indicator -->
            <div class="flex items-center gap-2 mb-8">
                <span class="flex items-center justify-center font-bold text-gray-400 bg-gray-800 rounded-full w-7 h-7">1</span>
                <span class="font-semibold text-gray-400">Checkout</span>
                <span class="mx-2 text-gray-600">&rarr;</span>
                <span class="flex items-center justify-center font-bold text-gray-400 bg-gray-800 rounded-full w-7 h-7">2</span>
                <span class="font-semibold text-gray-400">Pay</span>
                <span class="mx-2 text-gray-600">&rarr;</span>
                <span class="flex items-center justify-center font-bold text-black bg-white rounded-full w-7 h-7">3</span>
                <span class="font-semibold text-white">Verify</span>
            </div>

            <!-- Checkmark Icon -->
            <div class="mb-4 icon-circle">
                <svg class="w-10 h-10 text-white" viewBox="0 0 20 20" fill="none">
                    <circle cx="10" cy="10" r="10" fill="#22c55e" />
                    <path d="M7 11.5L9 13.5L13 9.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>

            <!-- Confirmation Message -->
            <h2 class="mb-2 text-2xl font-bold text-white">Order Verified!</h2>
            <p class="mb-4 text-gray-300 text-center">
                Dear Customer!<br>
                Your order has been successfully verified.<br>
                Expect delivery in 2–3 days.
            </p>

            <!-- Order Info -->
            <div class="mb-4 text-sm text-gray-400 text-center">
                Order No: <span class="font-semibold text-white" id="order-id"></span><br>
                Payment: <span class="font-semibold text-green-400">Success</span>
            </div>

            <!-- Return Home Button -->
            <a href="{{ url('/') }}" class="block w-full py-3 mt-6 text-lg font-semibold text-center text-black bg-[var(--tumeric)] hover:bg-[var(--emerald)] hover:text-white transition transition-transform transform hover:scale-105 duration-300">
                Back to Home
            </a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Generate a fake order ID
            const orderIdEl = document.getElementById('order-id');
            if (orderIdEl) {
                orderIdEl.textContent = 'ITM-' + Math.floor(Math.random() * 900000 + 100000);
            }

            // Reset cart count
            const cartCountDisplay = document.getElementById('cart-count');
            if (cartCountDisplay) {
                cartCountDisplay.textContent = '0';
            }
        });
    </script>
</body>
</html>
