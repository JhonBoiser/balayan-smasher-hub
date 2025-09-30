<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balayan Smasher Hub </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --nike-black: #111111;
            --nike-gray: #757575;
            --nike-light-gray: #f5f5f5;
            --nike-white: #ffffff;
            --nike-accent: #ff6b00;
            --nike-green: #0cad3aff
        }
        
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Helvetica Neue', Arial, sans-serif;
        }

        #search{
            background-color:var(--nike-green);
            border: none;
            color: white;
        }

        #search:hover {
            background-color: #f5f5f5ff;
            color: black;
        }

        #carouselWithControls {
            height: 100vh;
        }

        #carouselWithControls .carousel-inner,
        #carouselWithControls .carousel-item {
            height: 100%;
        }

        #carouselWithControls .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
            display: block;
        }

        .navbar {
            position: absolute;
            top: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.95);
            z-index: 10;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            border-radius: 50%;
            height: 40px;
            width: 40px;
            object-fit: cover;
        }

        .navbar .nav-link,
        .navbar .btn,
        .navbar .bi {
            color: var(--nike-black);
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .navbar .nav-link {
            position: relative;
            margin: 0 10px;
        }

        .navbar .nav-link::after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            left: 0;
            bottom: -5px;
            background-color: var(--nike-black);
            transition: width 0.3s ease;
        }

        .navbar .nav-link:hover {
            color: var(--nike-accent);
        }

        .navbar .nav-link:hover::after {
            width: 100%;
            background-color: var(--nike-accent);
        }

        .navbar .form-control::placeholder {
            color: #ccc;
        }

        .navbar .navbar-search input {
            width: 200px;
            border-radius: 20px;
            padding: 5px 15px;
            border: 1px solid #ddd;
        }

        .navbar .navbar-search button {
            margin-left: 5px;
            border-radius: 20px;
        }

        .carousel-fixed-text {
            position: absolute;
            bottom: 20px;
            left: 20px;
            z-index: 5;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .carousel-fixed-text h1 {
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            transition: all 0.3s ease;
        }

        .carousel-fixed-text:hover h1 {
            color: var(--nike-accent);
            transform: scale(1.05);
        }

        #menGrid {
            position: absolute;
            top: 0; 
            left: 0;
            width: 100vw;
            background: var(--nike-white);
            z-index: 20;
            display: none;
            overflow-y: auto;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        /* Nike-style Category Navigation */
        .category-nav {
            background-color: var(--nike-light-gray);
            border-bottom: 1px solid #e5e5e5;
        }
        
        .category-nav .nav-link {
            color: var(--nike-gray);
            font-weight: 500;
            padding: 15px 20px;
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
        }
        
        .category-nav .nav-link:hover,
        .category-nav .nav-link.active {
            color: var(--nike-black);
            border-bottom-color: var(--nike-black);
        }

        /* Product Grid Styles */
        .product-grid {
            padding: 30px 0;
        }
        
        .product-card {
            background: var(--nike-white);
            border-radius: 0;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            border: none;
            position: relative;
            overflow: hidden;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .product-image-container {
            position: relative;
            overflow: hidden;
            background-color: var(--nike-light-gray);
        }
        
        .product-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .product-card:hover .product-image {
            transform: scale(1.05);
        }
        
        .product-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: var(--nike-accent);
            color: white;
            padding: 5px 10px;
            font-size: 0.8rem;
            font-weight: bold;
        }
        
        .product-info {
            padding: 15px;
        }
        
        .product-brand {
            font-size: 0.9rem;
            color: var(--nike-gray);
            margin-bottom: 5px;
        }
        
        .product-title {
            font-size: 1rem;
            font-weight: 500;
            color: var(--nike-black);
            margin-bottom: 10px;
            line-height: 1.3;
        }
        
        .product-price {
            font-size: 1.1rem;
            font-weight: bold;
            color: var(--nike-black);
        }
        
        .product-actions {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }
        
        .btn-add-to-cart {
            background-color: var(--nike-black);
            color: white;
            border: none;
            border-radius: 0;
            padding: 8px 15px;
            font-weight: 500;
            flex: 1;
            transition: all 0.3s ease;
        }
        
        .btn-add-to-cart:hover {
            background-color: #333;
        }
        
        .btn-buy-now {
            background-color: var(--nike-accent);
            color: white;
            border: none;
            border-radius: 0;
            padding: 8px 15px;
            font-weight: 500;
            flex: 1;
            transition: all 0.3s ease;
        }
        
        .btn-buy-now:hover {
            background-color: #e55a00;
        }
        
        /* Cart Styles */
        .cart-container {
            background-color: var(--nike-light-gray);
            padding: 20px;
            height: 100%;
        }
        
        .cart-item {
            display: flex;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #e5e5e5;
        }
        
        .cart-item-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
            margin-right: 15px;
        }
        
        .cart-item-details {
            flex: 1;
        }
        
        .cart-item-title {
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 5px;
        }
        
        .cart-item-price {
            font-size: 0.9rem;
            color: var(--nike-gray);
        }
        
        .cart-item-quantity {
            display: flex;
            align-items: center;
            margin-top: 5px;
        }
        
        .quantity-btn {
            background: none;
            border: 1px solid #ddd;
            width: 25px;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }
        
        .quantity-input {
            width: 40px;
            text-align: center;
            border: 1px solid #ddd;
            height: 25px;
            margin: 0 5px;
        }
        
        .cart-total {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid #ddd;
        }
        
        .btn-checkout {
            background-color: var(--nike-black);
            color: white;
            border: none;
            border-radius: 0;
            padding: 12px;
            font-weight: 500;
            width: 100%;
            margin-top: 15px;
            transition: all 0.3s ease;
        }
        
        .btn-checkout:hover {
            background-color: #333;
        }
        
        /* Nike-style Section Headers */
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e5e5e5;
        }
        
        .section-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--nike-black);
        }
        
        .view-all {
            color: var(--nike-gray);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .view-all:hover {
            color: var(--nike-black);
        }
        
        @media (max-width: 767.98px) {
            #menGrid .col-md-3,
            #menGrid .col-md-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }
            
            .product-image {
                height: 250px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/imageslogo.jpg') }}" alt="Shop Logo">
            </a>
            <!-- Toggle button for small screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="#" id="menLink">Men</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Women</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kids</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Shoes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sports</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Brand</a></li>
                </ul>

                <div class="d-flex align-items-center flex-wrap">
                    <form class="d-flex me-2 navbar-search" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search products" aria-label="Search">
                        <button class="btn btn-primary" id="search" type="submit">Search</button>
                    </form>
                    <div class="navbar-buttons d-flex align-items-center flex-wrap">
                        <button class="btn btn-outline-dark me-2 mb-1" type="button"><i class="bi bi-bell"></i></button>
                        <button class="btn btn-outline-dark me-2 mb-1" type="button"><i class="bi bi-cart"></i></button>
                        <button class="btn btn-outline-dark mb-1" type="button">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselWithControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/racket3.jpg') }}" class="d-block w-100" alt="slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/soccer.jpg') }}" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/basketball.jpg') }}" class="d-block w-100" alt="Slide 3">
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselWithControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselWithControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>

        <div class="carousel-fixed-text">
            <h1>Gear Up, Game On</h1>
        </div>
    </div>

    <!-- Men Grid -->
    <div id="menGrid">
        <div class="container-fluid h-100 p-0">
            <!-- Category Navigation -->
            <div class="category-nav">
                <div class="container">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" data-category="featured">Featured</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-category="tops">Tops & Popular</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-category="hoodies">Shoes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-category="jackets">Ball</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-category="trousers">Socks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-category="shorts">Shorts</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="container-fluid h-100 py-3">
                <div class="row h-100 g-0">
                    <!-- Middle Column: Products -->
                    <div class="col-md-9 p-4">
                        <div class="section-header">
                            <h2 class="section-title">Men's Product</h2>
                            <a href="#" class="view-all">View All</a>
                        </div>
                        
                        <div class="product-grid">
                            <div class="row g-4" id="productList">
                                <!-- Products will be dynamically inserted here -->
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Cart / Receipt -->
                    <div class="col-md-3 p-0">
                        <div class="cart-container">
                            <h5 class="mb-4">Your Cart</h5>
                            <div id="cartItems">
                                <p class="text-muted">Your cart is empty</p>
                            </div>
                            <div class="cart-total">
                                <div class="d-flex justify-content-between">
                                    <span>Subtotal:</span>
                                    <span>₱<span id="subtotalAmount">0</span></span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Shipping:</span>
                                    <span>₱<span id="shippingAmount">0</span></span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between fw-bold">
                                    <span>Total:</span>
                                    <span>₱<span id="totalAmount">0</span></span>
                                </div>
                            </div>
                            <button class="btn-checkout" id="checkoutBtn">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        const menLink = document.getElementById('menLink');
        const menGrid = document.getElementById('menGrid');
        const navbar = document.querySelector('.navbar');
        const navbarCollapse = document.getElementById('navbarNav');

        function adjustMenGridHeight() {
            const navbarHeight = navbar.offsetHeight;
            menGrid.style.top = navbarHeight + 'px';
            menGrid.style.height = `calc(100vh - ${navbarHeight}px)`;
        }

        window.addEventListener('resize', adjustMenGridHeight);
        window.addEventListener('load', adjustMenGridHeight);

        navbarCollapse.addEventListener('shown.bs.collapse', adjustMenGridHeight);
        navbarCollapse.addEventListener('hidden.bs.collapse', adjustMenGridHeight);

        menLink.addEventListener('click', function(e) {
            e.preventDefault();
            menGrid.style.display = menGrid.style.display === 'block' ? 'none' : 'block';
            adjustMenGridHeight();
        });

        // Sample products data
        const products = {
            featured: [
                { id: 1, name: "T-Shirt", brand: "Nike", price: 1395, img: 'https://i.pinimg.com/736x/47/58/40/47584018b36967339e18beb6e3038988.jpg', badge: "Just In" },
                { id: 2, name: "Volleyball", brand: "Nike", price: 1395, img: 'https://i.pinimg.com/736x/99/70/5c/99705c8917ee99d59a752847b1560574.jpg', badge: "Popular" },
                { id: 3, name: "Running shoes", brand: "Nike", price: 1395, img: 'https://i.pinimg.com/736x/bd/3f/cf/bd3fcf927d762cf6fc3f157c2cb80c38.jpg', badge: null },
                { id: 4, name: "Shoes", brand: "Nike", price: 2495, img: 'https://i.pinimg.com/736x/cf/7b/1a/cf7b1aa2bc1a968a86d7bfd0809fc1bf.jpg', badge: "Best Seller" },
                { id: 5, name: "Socks", brand: "Nike", price: 4995, img: 'https://i.pinimg.com/736x/55/9e/ee/559eeef6061e2e3dca91b03df64ef565.jpg', badge: null },
                { id: 6, name: "High Socks", brand: "Nike", price: 1195, img: 'https://i.pinimg.com/736x/b7/ae/14/b7ae1421e7b2feadd378e4ed3207c454.jpg', badge: "Sale" }
            ],
            tops: [
                { id: 7, name: "Dri-FIT UV Miler", brand: "Nike", price: 1595, img: 'https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80', badge: null },
                { id: 8, name: "Sportswear Tech Fleece", brand: "Nike", price: 3495, img: 'https://images.unsplash.com/photo-1588117305388-c2631a279f82?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80', badge: "New" }
            ],
            hoodies: [
                { id: 9, name: "Club Fleece Pullover", brand: "Nike", price: 3495, img: 'https://images.unsplash.com/photo-1556821840-3a63f95609a7?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80', badge: null },
                { id: 10, name: "Sportswear Phoenix Fleece", brand: "Nike", price: 3995, img: 'https://images.unsplash.com/photo-1578763460786-9e50ef5d5e0a?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80', badge: "Just In" }
            ],
            jackets: [
                { id: 11, name: "Sportswear Windrunner", brand: "Nike", price: 4995, img: 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80', badge: null },
                { id: 12, name: "ACG Storm-FIT Adv", brand: "Nike", price: 12995, img: 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80', badge: "Premium" }
            ],
            trousers: [
                { id: 13, name: "Dri-FIT Run Division", brand: "Nike", price: 2995, img: 'https://images.unsplash.com/photo-1542272456-9c003991a6d0?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80', badge: null },
                { id: 14, name: "Sportswear Club Fleece", brand: "Nike", price: 3495, img: 'https://images.unsplash.com/photo-1542272456-9c003991a6d0?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80', badge: "Popular" }
            ],
            shorts: [
                { id: 15, name: "Dri-FIT Run Division", brand: "Nike", price: 2495, img: 'https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80', badge: null },
                { id: 16, name: "Sportswear Club Fleece", brand: "Nike", price: 1995, img: 'https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80', badge: "Sale" }
            ]
        };

        let cart = [];
        const productList = document.getElementById('productList');
        const cartItems = document.getElementById('cartItems');
        const subtotalAmount = document.getElementById('subtotalAmount');
        const shippingAmount = document.getElementById('shippingAmount');
        const totalAmount = document.getElementById('totalAmount');
        const checkoutBtn = document.getElementById('checkoutBtn');

        function showProducts(category) {
            productList.innerHTML = '';
            products[category].forEach(product => {
                const col = document.createElement('div');
                col.className = 'col-md-4 col-sm-6';
                col.innerHTML = `
                    <div class="product-card">
                        <div class="product-image-container">
                            <img src="${product.img}" alt="${product.name}" class="product-image">
                            ${product.badge ? `<div class="product-badge">${product.badge}</div>` : ''}
                        </div>
                        <div class="product-info">
                            <div class="product-brand">${product.brand}</div>
                            <div class="product-title">${product.name}</div>
                            <div class="product-price">₱${product.price}</div>
                            <div class="product-actions">
                                <button class="btn-add-to-cart" data-id="${product.id}">Add to Cart</button>
                                <button class="btn-buy-now" data-id="${product.id}">Buy Now</button>
                            </div>
                        </div>
                    </div>
                `;
                productList.appendChild(col);

                const addBtn = col.querySelector('.btn-add-to-cart');
                const buyBtn = col.querySelector('.btn-buy-now');

                addBtn.addEventListener('click', () => addToCart(product));
                buyBtn.addEventListener('click', () => {
                    addToCart(product);
                    alert(`Purchased ${product.brand} ${product.name}`);
                });
            });
        }

        function addToCart(product) {
            const existing = cart.find(item => item.id === product.id);
            if (existing) {
                existing.quantity += 1;
            } else {
                cart.push({ 
                    ...product, 
                    quantity: 1 
                });
            }
            updateCart();
        }

        function updateCart() {
            cartItems.innerHTML = '';
            if (cart.length === 0) {
                cartItems.innerHTML = '<p class="text-muted">Your cart is empty</p>';
                subtotalAmount.textContent = '0';
                shippingAmount.textContent = '0';
                totalAmount.textContent = '0';
                checkoutBtn.disabled = true;
                checkoutBtn.style.opacity = '0.7';
                return;
            }
            
            let subtotal = 0;
            cart.forEach(item => {
                const itemTotal = item.price * item.quantity;
                subtotal += itemTotal;
                
                const cartItem = document.createElement('div');
                cartItem.className = 'cart-item';
                cartItem.innerHTML = `
                    <img src="${item.img}" alt="${item.name}" class="cart-item-image">
                    <div class="cart-item-details">
                        <div class="cart-item-title">${item.brand} ${item.name}</div>
                        <div class="cart-item-price">₱${item.price}</div>
                        <div class="cart-item-quantity">
                            <button class="quantity-btn minus" data-id="${item.id}">-</button>
                            <input type="text" class="quantity-input" value="${item.quantity}" readonly>
                            <button class="quantity-btn plus" data-id="${item.id}">+</button>
                        </div>
                    </div>
                `;
                cartItems.appendChild(cartItem);
                
                const minusBtn = cartItem.querySelector('.minus');
                const plusBtn = cartItem.querySelector('.plus');
                
                minusBtn.addEventListener('click', () => updateQuantity(item.id, -1));
                plusBtn.addEventListener('click', () => updateQuantity(item.id, 1));
            });
            
            const shipping = subtotal > 0 ? 150 : 0;
            const total = subtotal + shipping;
            
            subtotalAmount.textContent = subtotal.toLocaleString();
            shippingAmount.textContent = shipping.toLocaleString();
            totalAmount.textContent = total.toLocaleString();
            
            checkoutBtn.disabled = false;
            checkoutBtn.style.opacity = '1';
        }

        function updateQuantity(productId, change) {
            const item = cart.find(item => item.id === productId);
            if (item) {
                item.quantity += change;
                if (item.quantity <= 0) {
                    cart = cart.filter(i => i.id !== productId);
                }
                updateCart();
            }
        }

        // Category navigation
        document.querySelectorAll('.category-nav .nav-link').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                document.querySelectorAll('.category-nav .nav-link').forEach(l => l.classList.remove('active'));
                link.classList.add('active');
                showProducts(link.dataset.category);
            });
        });

        // Checkout button
        checkoutBtn.addEventListener('click', () => {
            if (cart.length > 0) {
                alert('Proceeding to checkout!');
                // In a real application, you would redirect to a checkout page
            }
        });

        // Initialize with featured products
        showProducts('featured');
    </script>
</body>
</html>