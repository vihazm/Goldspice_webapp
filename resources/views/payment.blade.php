<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GoldSpice - Payment</title>
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
    .input-field:focus {
      border-color: var(--emerald);
      box-shadow: 0 0 0 2px rgba(68, 177, 128, 0.5);
    }
  </style>
  <link href="https://fonts.googleapis.com/css?family=Merriweather:700,400&display=swap" rel="stylesheet">
</head>
<body class="bg-black text-white min-h-screen flex flex-col">

  <div class="relative w-full min-h-screen flex flex-col items-center justify-center">
    <img src="{{ asset('images/spiceassorted.jpg') }}" class="absolute inset-0 w-full h-full object-cover opacity-100" alt="Spice Background" />
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>

    <nav class="absolute top-0 left-0 right-0 flex justify-between items-center px-8 py-6 z-50">
      <div class="flex items-center space-x-3">
        <img src="{{ asset('images/goldspice5.png') }}" alt="Logo" class="w-14 h-14 sm:w-16 sm:h-16" />
        <span class="text-2xl sm:text-3xl tracking-wider font-serif font-bold">𝕲𝖔𝖑𝖉𝕾𝖕𝖎𝖈𝖊</span>
      </div>
      {{-- Basic nav links (no master layout) --}}
      
    </nav>

    <div class="relative z-20 bg-white p-8 sm:p-10 rounded-2xl shadow-2xl max-w-xs w-full my-8 border-2 border-[var(--emerald)]">
      <h2 class="text-3xl font-serif font-bold text-[var(--emerald)] mb-6 text-center flex items-center justify-center space-x-2">
        <img src="{{ asset('images/securepay.png') }}" alt="Secure Payment Icon" class="w-16 h-16 rounded-full border-2 border-[var(--emerald)]" />
        <span>Secure Payment</span>
      </h2>
      <form id="payment-form" class="space-y-5">
        <div>
          <label for="card-number" class="block text-sm font-semibold text-gray-700 mb-1">Card Number</label>
          <input
            type="text"
            id="card-number"
            name="card-number"
            placeholder="•••• •••• •••• ••••"
            class="input-field w-full px-4 py-2 rounded-lg bg-gray-100 text-gray-800 placeholder-gray-400 focus:ring-2 focus:ring-[var(--emerald)] focus:border-transparent outline-none transition-all duration-200"
            required
            maxlength="19"
          />
        </div>

        <div class="flex space-x-4">
          <div class="w-1/2">
            <label for="expiry-date" class="block text-sm font-semibold text-gray-700 mb-1">Expiry Date (MM/YY)</label>
            <input
              type="text"
              id="expiry-date"
              name="expiry-date"
              placeholder="MM/YY"
              class="input-field w-full px-4 py-2 rounded-lg bg-gray-100 text-gray-800 placeholder-gray-400 focus:ring-2 focus:ring-[var(--emerald)] focus:border-transparent outline-none transition-all duration-200"
              required
              maxlength="5"
            />
          </div>
          <div class="w-1/2">
            <label for="cvv" class="block text-sm font-semibold text-gray-700 mb-1">CVV</label>
            <input
              type="text"
              id="cvv"
              name="cvv"
              placeholder="•••"
              class="input-field w-full px-4 py-2 rounded-lg bg-gray-100 text-gray-800 placeholder-gray-400 focus:ring-2 focus:ring-[var(--emerald)] focus:border-transparent outline-none transition-all duration-200"
              required
              maxlength="4"
            />
          </div>
        </div>

        <div>
          <label for="card-name" class="block text-sm font-semibold text-gray-700 mb-1">Cardholder Name</label>
          <input
            type="text"
            id="card-name"
            name="card-name"
            placeholder="Full Name"
            class="input-field w-full px-4 py-2 rounded-lg bg-gray-100 text-gray-800 placeholder-gray-400 focus:ring-2 focus:ring-[var(--emerald)] focus:border-transparent outline-none transition-all duration-200"
            required
          />
        </div>

        <button
          type="submit"
          class="w-full bg-[var(--emerald)] text-white text-lg font-bold py-2.5 rounded-full shadow-lg hover:bg-[var(--green)] hover:text-white transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[var(--emerald)] focus:ring-offset-2 focus:ring-offset-white"
        >
          Pay Now
        </button>
      </form>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const paymentForm = document.getElementById('payment-form');
      const cartCountDisplay = document.getElementById('cart-count');

      const updateCartCountInNav = () => {
        const storedCart = localStorage.getItem('goldspiceCart');
        let cart = storedCart ? JSON.parse(storedCart) : [];
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        if (cartCountDisplay) {
          cartCountDisplay.textContent = totalItems;
        }
      };

      updateCartCountInNav();

      paymentForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const cardNumber = document.getElementById('card-number').value;
        const expiryDate = document.getElementById('expiry-date').value;
        const cvv = document.getElementById('cvv').value;
        const cardName = document.getElementById('card-name').value;

        if (!cardNumber || !expiryDate || !cvv || !cardName) {
          alert('Please fill in all payment details.');
          return;
        }

        console.log('Processing payment...');
        localStorage.removeItem('goldspiceCart');
        updateCartCountInNav();

        window.location.href = '{{ url('orderconfirmation') }}';
      });
    });
  </script>
</body>
</html>
