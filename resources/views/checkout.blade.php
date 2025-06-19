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
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700,400&display=swap" rel="stylesheet">
</head>
<body class="bg-black text-white min-h-screen flex flex-col">

    <!-- Background Image -->
    <div class="fixed inset-0 z-0">
        <img src="{{ asset('images/sieve.jpg') }}" class="w-full h-full object-cover opacity-90" alt="Spice Background" />
        <div class="absolute inset-0"></div>
    </div>

    <!-- Notification -->
    <div id="checkout-notification" class="hidden fixed top-0 left-0 right-0 bg-green-600 text-white text-center py-4 z-50">
        Order placed successfully!
    </div>

    <nav class="relative z-20 flex justify-between items-center px-8 py-6 bg-black/60 backdrop-blur-sm sticky top-0">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/GoldSpice4.png') }}" alt="Logo" class="w-14 h-14 sm:w-16 sm:h-16" />
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

                <!-- Checkout Form -->
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
                                    <input type="radio" name="payment" value="cod" checked class="mr-3">
                                    <span>Cash on Delivery</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="payment" value="bank" class="mr-3">
                                    <span>Bank Transfer</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex gap-4 pt-6">
                            <a href="{{ url('cart') }}" class="flex-1 bg-gray-600 text-white text-center py-3 rounded-lg font-semibold hover:bg-gray-700 transition-colors">
                                ← Back to Cart
                            </a>
                            <button type="submit" id="place-order-btn" class="flex-1 bg-[var(--emerald)] text-white py-3 rounded-lg font-semibold hover:bg-[var(--tumeric)] transition-colors">
                                Place Order
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
                    <svg fill="currentColor" class="w-8 h-8" viewBox="0 0 24 24">
                        <path d="M22 12a10 10 0 10-11.5 9.95v-7.05H8v-2.9h2.5V9.5c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.3.2 2.3.2v2.5h-1.3c-1.3 0-1.7.8-1.7 1.6v2H17l-.3 2.9h-2.5V22A10 10 0 0022 12z" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/" target="_blank" aria-label="Instagram" class="hover:text-[var(--tumeric)] transition">
                    <svg fill="currentColor" class="w-8 h-8" viewBox="0 0 24 24">
                        <path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 2 .3 2.5.5.6.2 1.1.5 1.6 1 .5.5.8 1 .9 1.6.2.5.4 1.3.5 2.5.1 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.3 2-.5 2.5-.2.6-.5 1.1-1 1.6s-1 .8-1.6.9c-.5.2-1.3.4-2.5.5-1.2.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-2-.3-2.5-.5-.6-.2-1.1-.5-1.6-1-.5-.5-.8-1-.9-1.6-.2-.5-.4-1.3-.5-2.5C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.8c.1-1.2.3-2 .5-2.5.2-.6.5-1.1 1-1.6s1-.8 1.6-.9c.5-.2 1.3-.4 2.5-.5C8.4 2.2 8.8 2.2 12 2.2zm0-2.2C8.7 0 8.3 0 7.1.1c-1.3.1-2.3.3-3.1.6a5.97 5.97 0 00-2.1 1.4 6 6 0 00-1.4 2.1C.3 5 0 6 .1 7.1.2 8.3.2 8.7.2 12s0 3.7.1 4.9c.1 1.1.3 2.1.6 3 .3.9.7 1.6 1.4 2.1a6 6 0 002.1 1.4c.9.3 1.9.5 3 .6 1.2.1 1.6.1 4.9.1s3.7 0 4.9-.1c1.1-.1 2.1-.3 3-.6a5.97 5.97 0 002.1-1.4 6 6 0 001.4-2.1c.3-.9.5-1.9.6-3 .1-1.2.1-1.6.1-4.9s0-3.7-.1-4.9c-.1-1.1-.3-2.1-.6-3a5.97 0 00-1.4-2.1 6 6 0 00-2.1-1.4c-.9-.3-1.9-.5-3-.6C15.7 0 15.3 0 12 0zM12 5.8A6.2 6.2 0 1012 18a6.2 6.2 0 000-12.2zm0 10.2a4 4 0 110-8 4 4 0 010 8zm6.4-10.9a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z"/>
                    </svg>
                </a>
            </div>
        </div>
    </footer>

    <script>
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
            };

            // Function to update cart count in navigation
            const updateCartCountInNav = () => {
                const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
                cartCountDisplay.textContent = totalItems;
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
                updateCartCountInNav();
            };

            // Function to show notification
            const showNotification = (message) => {
                checkoutNotification.textContent = message;
                checkoutNotification.classList.remove('hidden');
                setTimeout(() => {
                    checkoutNotification.classList.add('hidden');
                }, 3000);
            };

            // Handle form submission
            checkoutForm.addEventListener('submit', (e) => {
                e.preventDefault();
                
                if (cart.length === 0) {
                    alert('Your cart is empty!');
                    return;
                }

                // Simulate order processing
                showNotification('Order placed successfully! You will receive a confirmation email shortly.');
                
                // Clear cart
                localStorage.removeItem('goldspiceCart');
                cart = [];
                
                // Redirect to home page after 3 seconds
                setTimeout(() => {
                    window.location.href = '{{ url("/") }}';
                }, 3000);
            });

            // Initial load
            loadCart();
        });
    </script>

</body>
</html>