<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>GoldSpice - Your Cart</title>
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
        .cart-item-image {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
        }
        #cart-notification {
            transition: all 0.3s ease-in-out;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700,400&display=swap" rel="stylesheet">
    <script src="{{ asset('js/cart.js') }}"></script>
</head>
<body class="bg-black text-white min-h-screen flex flex-col relative">

    <div class="fixed inset-0 z-0">
        <img src="{{ asset('images/harvesting.jpg') }}" alt="Spice Background" class="w-full h-full object-cover opacity-80"/>
        <div class="absolute inset-0 bg-black/60"></div>
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
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl sm:text-5xl font-serif font-bold text-center mb-12 text-white">Your Cart</h1>

            <div id="cart-items-container" class="bg-white p-6 rounded-lg shadow-lg text-gray-800">
                <p class="text-center text-gray-500 text-lg py-8" id="empty-cart-message">Your cart is empty.</p>
            </div>

            <div id="cart-summary" class="bg-white p-6 rounded-lg shadow-lg text-gray-800 mt-8 hidden">
                <div class="flex justify-between items-center text-xl font-bold border-b border-gray-300 pb-4 mb-4">
                    <span>Subtotal:</span>
                    <span id="cart-subtotal">Rs. 0.00</span>
                </div>
                <p class="text-sm text-gray-600 mb-4">Shipping and taxes calculated at checkout.</p>
                <div class="flex flex-col sm:flex-row justify-between gap-4">
                    <a href="{{ url('checkout') }}" class="flex-1 text-center px-8 py-3 bg-[var(--grey2)] text-white font-semibold rounded-lg hover:bg-[var(--grey2)]/80 transition-colors">
                        ← Continue Shopping
                    </a>
                    <button class="flex-1 px-8 py-3 bg-[var(--emerald)] text-white font-semibold rounded-lg hover:bg-[var(--emerald)]/90 transition-colors">
                        Proceed to Checkout →
                    </button>
                </div>
            </div>

        </div>
    </main>

    <div id="cart-notification" class="fixed bottom-4 right-4 bg-[var(--emerald)] text-white px-6 py-3 rounded-lg shadow-xl z-50 opacity-0 transform translate-y-full pointer-events-none">
      Cart Updated!
    </div>

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
            const cartItemsContainer = document.getElementById('cart-items-container');
            const cartSubtotalDisplay = document.getElementById('cart-subtotal');
            const emptyCartMessage = document.getElementById('empty-cart-message');
            const cartSummary = document.getElementById('cart-summary');
            const cartNotification = document.getElementById('cart-notification');

            const showNotification = (message) => {
                cartNotification.textContent = message;
                cartNotification.classList.remove('opacity-0', 'translate-y-full', 'pointer-events-none');
                cartNotification.classList.add('opacity-100', 'translate-y-0');

                setTimeout(() => {
                    cartNotification.classList.remove('opacity-100', 'translate-y-0');
                    cartNotification.classList.add('opacity-0', 'translate-y-full', 'pointer-events-none');
                }, 3000);
            };

            const renderCart = () => {
                cartItemsContainer.innerHTML = '';
                const cart = window.goldSpiceCart.getItems();
                const subtotal = window.goldSpiceCart.getSubtotal();

                if (cart.length === 0) {
                    emptyCartMessage.classList.remove('hidden');
                    cartSummary.classList.add('hidden');
                } else {
                    emptyCartMessage.classList.add('hidden');
                    cartSummary.classList.remove('hidden');

                    cart.forEach(item => {
                        const cartItemDiv = document.createElement('div');
                        cartItemDiv.classList.add('flex', 'flex-col', 'sm:flex-row', 'items-start', 'sm:items-center', 'justify-between', 'py-4', 'border-b', 'border-gray-200', 'last:border-b-0', 'gap-4');
                        cartItemDiv.dataset.productId = item.id;

                        cartItemDiv.innerHTML = `
                            <div class="flex items-center space-x-4 flex-1">
                                <img src="${item.image}" alt="${item.name}" class="cart-item-image">
                                <div class="flex-1 text-left">
                                    <h3 class="text-lg font-semibold">${item.name}</h3>
                                    <p class="text-sm text-gray-600">${item.pack || 'N/A'}</p>
                                    <p class="text-md font-bold text-black mt-1">Rs. ${item.price.toFixed(2)}</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between sm:justify-start w-full sm:w-auto gap-4">
                                <div class="flex items-center space-x-3">
                                    <button class="quantity-minus-cart w-8 h-8 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--red)] transition-colors flex items-center justify-center">-</button>
                                    <span class="quantity-display-cart text-lg font-semibold w-8 text-center">${item.quantity}</span>
                                    <button class="quantity-plus-cart w-8 h-8 rounded-full bg-[var(--grey2)] text-white hover:bg-[var(--green)] transition-colors flex items-center justify-center">+</button>
                                </div>
                                <button class="remove-from-cart-btn text-red-500 hover:text-red-700 transition-colors text-sm font-semibold px-3 py-1 rounded border border-red-500 hover:bg-red-50">Remove</button>
                            </div>
                        `;
                        cartItemsContainer.appendChild(cartItemDiv);
                    });
                }

                cartSubtotalDisplay.textContent = `Rs. ${subtotal.toFixed(2)}`;
            };

            cartItemsContainer.addEventListener('click', (e) => {
                const cartItemDiv = e.target.closest('[data-product-id]');
                if (!cartItemDiv) return;

                const productId = cartItemDiv.dataset.productId;
                const item = window.goldSpiceCart.getItem(productId);

                if (!item) return;

                if (e.target.classList.contains('quantity-plus-cart')) {
                    window.goldSpiceCart.updateQuantity(productId, item.quantity + 1);
                    renderCart();
                    showNotification(`Increased quantity of ${item.name}.`);
                }
                else if (e.target.classList.contains('quantity-minus-cart')) {
                    if (item.quantity > 1) {
                        window.goldSpiceCart.updateQuantity(productId, item.quantity - 1);
                        renderCart();
                        showNotification(`Decreased quantity of ${item.name}.`);
                    } else {
                        const removedItem = window.goldSpiceCart.removeItem(productId);
                        renderCart();
                        showNotification(`Removed ${removedItem.name} from cart.`);
                    }
                }
                else if (e.target.classList.contains('remove-from-cart-btn')) {
                    const removedItem = window.goldSpiceCart.removeItem(productId);
                    renderCart();
                    showNotification(`Removed ${removedItem.name} from cart.`);
                }
            });

            document.querySelector('#cart-summary button').addEventListener('click', () => {
                if (window.goldSpiceCart.isEmpty()) {
                    alert('Your cart is empty!');
                    return;
                }
                window.location.href = '{{ url("checkout") }}';
            });

            // Initial render
            renderCart();
        });
    </script>

</body>
</html>