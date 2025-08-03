<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GoldSpice - Checkout</title>
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

  <div class="fixed inset-0 z-0">
    <img src="{{ asset('images/sieve.jpg') }}" class="w-full h-full object-cover opacity-90" alt="Spice Background" />
    <div class="absolute inset-0 bg-black bg-opacity-30"></div>
  </div>

  <div id="checkout-notification" class="hidden fixed top-0 left-0 right-0 bg-green-600 text-white text-center py-4 z-50">
    Order placed successfully!
  </div>

  <nav class="relative z-20 flex justify-between items-center px-8 py-6 bg-black/60 backdrop-blur-sm sticky top-0">
    <div class="flex items-center space-x-3">
      <img src="{{ asset('images/goldspice5.png') }}" alt="Logo" class="w-14 h-14 sm:w-16 sm:h-16" />
      <span class="text-2xl sm:text-3xl tracking-wider font-serif font-bold">𝕲𝖔𝖑𝖉𝕾𝖕𝖎𝖈𝖊</span>
    </div>
    <div class="flex space-x-6 text-sm uppercase">
      <a href="{{ url('/') }}" class="font-bold hover:text-[var(--emerald)]">Home</a>
      <a href="{{ url('about') }}" class="font-bold hover:text-[var(--emerald)]">About</a>
      <a href="{{ url('products') }}" class="font-bold hover:text-[var(--emerald)]">Products</a>
      <a href="{{ url('cart') }}" class="font-bold hover:text-[var(--emerald)] relative">
        Cart (<span id="cart-count">0</span>)
      </a>
    </div>
  </nav>

  <main class="relative z-10 flex-grow py-16 px-4 text-white">
    <div class="max-w-6xl mx-auto">
      <h1 class="text-5xl sm:text-6xl font-serif font-bold text-center mb-12 text-white">Checkout</h1>

      <div class="grid lg:grid-cols-2 gap-12">
        <!-- Order Summary -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-gray-800">
          <h2 class="text-2xl font-bold mb-6 text-[var(--emerald)]">Order Summary</h2>
          <div id="checkout-items-container">
            <p class="text-center text-gray-500 text-lg py-8" id="empty-checkout-message">Your cart is empty.</p>
          </div>
          <div id="checkout-summary" class="hidden border-t pt-4 mt-4">
            <div class="flex justify-between items-center text-lg font-semibold">
              <span>Subtotal:</span>
              <span id="checkout-subtotal">Rs. 0.00</span>
            </div>
            <div class="flex justify-between items-center text-sm text-gray-600 mt-2">
              <span>Shipping:</span>
              <span>Rs. 250.00</span>
            </div>
            <div class="flex justify-between items-center text-xl font-bold mt-4 pt-4 border-t">
              <span>Total:</span>
              <span id="checkout-total">Rs. 250.00</span>
            </div>
          </div>
        </div>

        <!-- Shipping Form -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-gray-800">
          <h2 class="text-2xl font-bold mb-6 text-[var(--emerald)]">Shipping Information</h2>
          <form id="checkout-form" class="space-y-4">
            <div class="grid md:grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium mb-2">First Name *</label>
                <input type="text" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--emerald)] focus:border-transparent">
              </div>
              <div>
                <label class="block text-sm font-medium mb-2">Last Name *</label>
                <input type="text" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--emerald)] focus:border-transparent">
              </div>
            </div>
            <div>
              <label class="block text-sm font-medium mb-2">Email Address *</label>
              <input type="email" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--emerald)] focus:border-transparent">
            </div>
            <div>
              <label class="block text-sm font-medium mb-2">Phone Number *</label>
              <input type="tel" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--emerald)] focus:border-transparent">
            </div>
            <div>
              <label class="block text-sm font-medium mb-2">Address *</label>
              <textarea required rows="3" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--emerald)] focus:border-transparent"></textarea>
            </div>
            <div class="grid md:grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium mb-2">City *</label>
                <input type="text" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--emerald)] focus:border-transparent">
              </div>
              <div>
                <label class="block text-sm font-medium mb-2">Postal Code</label>
                <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[var(--emerald)] focus:border-transparent">
              </div>
            </div>

            <div class="pt-6">
              <h3 class="text-xl font-bold mb-4 text-[var(--emerald)]">Payment Method</h3>
              <div class="space-y-3">
                <label class="flex items-center">
                  <input type="radio" name="payment" value="card" class="mr-3" checked>
                  <span>Pay with Card</span>
                </label>
              </div>
            </div>

            <div class="flex gap-4 pt-6">
              <a href="{{ url('cart') }}" class="flex-1 bg-gray-600 text-white text-center py-3 rounded-lg font-semibold hover:bg-gray-700 transition-colors">
                ← Back to Cart
              </a>
              <button type="submit" id="place-order-btn" class="flex-1 bg-[var(--emerald)] text-white py-3 rounded-lg font-semibold hover:bg-[var(--tumeric)] transition-colors">
                Proceed to Payment
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

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
          <!-- SVG icon here -->
        </a>
        <a href="https://www.instagram.com/" target="_blank" aria-label="Instagram" class="hover:text-[var(--tumeric)] transition">
          <!-- SVG icon here -->
        </a>
      </div>
    </div>
  </footer>

  <script>
    // Same script as original (cleaned of invisible characters)
    document.addEventListener('DOMContentLoaded', () => {
        const checkoutItemsContainer = document.getElementById('checkout-items-container');
        const checkoutSubtotalDisplay = document.getElementById('checkout-subtotal');
        const checkoutTotalDisplay = document.getElementById('checkout-total');
        const cartCountDisplay = document.getElementById('cart-count');
        const emptyCheckoutMessage = document.getElementById('empty-checkout-message');
        const checkoutSummary = document.getElementById('checkout-summary');
        const checkoutForm = document.getElementById('checkout-form');
        const checkoutNotification = document.getElementById('checkout-notification');

        let cart = [];
        const shippingCost = 250.00;

        // Function to load cart from localStorage
        const loadCart = () => {
            const storedCart = localStorage.getItem('goldspiceCart');
            if (storedCart) {
                cart = JSON.parse(storedCart);
            }
            renderCheckout();
            updateCartCountInNav();
        };

        // Function to update cart count in navigation
        const updateCartCountInNav = () => {
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            if (cartCountDisplay) {
                cartCountDisplay.textContent = totalItems;
            }
        };

        // Function to render checkout items
        const renderCheckout = () => {
            checkoutItemsContainer.innerHTML = '';
            let subtotal = 0;

            if (cart.length === 0) {
                emptyCheckoutMessage.classList.remove('hidden');
                checkoutSummary.classList.add('hidden');
                document.getElementById('place-order-btn').disabled = true;
            } else {
                emptyCheckoutMessage.classList.add('hidden');
                checkoutSummary.classList.remove('hidden');
                document.getElementById('place-order-btn').disabled = false;

                cart.forEach(item => {
                    const itemTotal = item.price * item.quantity;
                    subtotal += itemTotal;

                    const checkoutItemDiv = document.createElement('div');
                    checkoutItemDiv.classList.add('flex', 'justify-between', 'items-center', 'py-3', 'border-b', 'border-gray-200', 'last:border-b-0');
                    checkoutItemDiv.innerHTML = `
                        <div class="flex items-center space-x-3">
                            <img src="${item.image}" alt="${item.name}" class="w-12 h-12 object-cover rounded">
                            <div>
                                <h4 class="font-semibold">${item.name}</h4>
                                <p class="text-sm text-gray-600">${item.pack}</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-semibold">Rs. ${itemTotal.toFixed(2)}</p>
                            <p class="text-sm text-gray-600">Qty: ${item.quantity}</p>
                        </div>
                    `;
                    checkoutItemsContainer.appendChild(checkoutItemDiv);
                });
            }

            const total = subtotal + shippingCost;
            checkoutSubtotalDisplay.textContent = `Rs. ${subtotal.toFixed(2)}`;
            checkoutTotalDisplay.textContent = `Rs. ${total.toFixed(2)}`;
        };

        // Function to show notification
        const showNotification = (message) => {
            checkoutNotification.textContent = message;
            checkoutNotification.classList.remove('hidden');
            setTimeout(() => {
                checkoutNotification.classList.add('hidden');
            }, 3000);
        };

        // Handle form submission - Redirect to payment page
        checkoutForm.addEventListener('submit', (e) => {
            e.preventDefault(); // Prevent default form submission

            if (cart.length === 0) {
                alert('Your cart is empty! Please add items before proceeding.');
                return;
            }

            // In a real application, you'd send the order details to your backend here
            // using an AJAX request (e.g., fetch API or Axios).
            // For now, we simulate success and redirect.

            // Redirect to the payment page route
            window.location.href = '{{ url('payment') }}'; // Using url() helper as there's no master layout for route()
        });

        // Initial load
        loadCart();
    });
  </script>
</body>
</html>