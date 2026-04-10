<?php include('includes/header.php'); ?>

<main>
    <!-- Shop Breadcrumb Section -->
    <section class="shop-hero-section">
    </section>

    <!-- Breadcrumb Slug Bar -->
    <div class="breadcrumb-slug-bar">
        <div class="container">
            <nav class="breadcrumb-nav">
                <a href="index.php" class="breadcrumb-link">Home</a>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-current">Shop</span>
            </nav>
        </div>
    </div>


    <!-- Shop Catalog Section -->
    <section class="shop-catalog-section">
        <div class="shop-catalog-container">
            <!-- Sidebar -->
            <aside class="shop-sidebar">
                <div class="sidebar-block">
                    <div class="sidebar-title" data-toggle="categories">
                        <h3>Catgrories</h3>
                        <span class="toggle-icon">-</span>
                    </div>
                    <ul class="sidebar-list" id="sidebar-categories">
                        <li>
                            <label class="custom-checkbox">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                                Hair Care <span class="count">(5)</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-checkbox">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                                Skin Care <span class="count">(2)</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-checkbox">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                                Wellness <span class="count">(3)</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-checkbox">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                                Stress Relief <span class="count">(5)</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-checkbox">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                                Weekend Rituals <span class="count">(7)</span>
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-block">
                    <div class="sidebar-title" data-toggle="concern">
                        <h3>Shop by Concern</h3>
                        <span class="toggle-icon">+</span>
                    </div>
                    <ul class="sidebar-list" style="display: none;">
                        <li><label class="custom-checkbox"><input type="checkbox"><span class="checkmark"></span>Scalp Health</label></li>
                        <li><label class="custom-checkbox"><input type="checkbox"><span class="checkmark"></span>Dryness & Hydration</label></li>
                        <li><label class="custom-checkbox"><input type="checkbox"><span class="checkmark"></span>Sensitivity & Redness</label></li>
                        <li><label class="custom-checkbox"><input type="checkbox"><span class="checkmark"></span>Anti-Aging & Vitality</label></li>
                        <li><label class="custom-checkbox"><input type="checkbox"><span class="checkmark"></span>Sleep & Relaxation</label></li>
                        <li><label class="custom-checkbox"><input type="checkbox"><span class="checkmark"></span>Energy & Focus</label></li>
                    </ul>
                </div>

            </aside>

            <!-- Main Content Area -->
            <div class="shop-main-content">
                <!-- Toolbar -->
                <div class="shop-toolbar">
                    <div class="sort-by-wrapper">
                        <label>Sort By:</label>
                        <select class="sort-select">
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Newest First</option>
                        </select>
                    </div>
                </div>

                <!-- Product Grid -->
                <div class="shop-product-grid">
                    <!-- Product 1 -->
                    <div class="product-card" data-price="500" data-order="1">
                        <div class="product-img-wrapper">
                            <div class="product-badge">25% OFF</div>
                            <div class="product-wishlist"><i class="fa-regular fa-heart"></i></div>
                            <img src="assets/img/products/product1.png" alt="Advanced Hair Renew Oil">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Advanced Hair Renew Oil</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 500/<small> 100ml</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="product-card" data-price="500" data-order="2">
                        <div class="product-img-wrapper">
                            
                            <div class="product-wishlist"><i class="fa-regular fa-heart"></i></div>
                            <img src="assets/img/products/product2.png" alt="Hair Renew Oil">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Hair Renew Oil</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 500/<small> 150ml</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="product-card" data-price="500" data-order="3">
                        <div class="product-img-wrapper">
                            <div class="product-badge">25% OFF</div>
                            <div class="product-wishlist"><i class="fa-regular fa-heart"></i></div>
                            <img src="assets/img/products/product3.png" alt="Anti-Dandruff Hair Pack">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Anti-Dandruff Hair Pack</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 500/<small> 250ml</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="product-card" data-price="500" data-order="4">
                        <div class="product-img-wrapper">
                            
                            <div class="product-wishlist"><i class="fa-regular fa-heart"></i></div>
                            <img src="assets/img/products/product4.png" alt="Powder Hair Cleanser">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Powder Hair Cleanser</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 500/<small> 150ml</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="product-card" data-price="450" data-order="5">
                        <div class="product-img-wrapper">
                            <div class="product-badge">25% OFF</div>
                            <div class="product-wishlist"><i class="fa-regular fa-heart"></i></div>
                            <img src="assets/img/products/product5.png" alt="Botanical Shampoo">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Botanical Shampoo</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 450/<small> 150ml</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 6 -->
                    <div class="product-card" data-price="480" data-order="6">
                        <div class="product-img-wrapper">
                            
                            <div class="product-wishlist"><i class="fa-regular fa-heart"></i></div>
                            <img src="assets/img/products/product6.png" alt="Herbal Conditioner">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Herbal Conditioner</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 480/<small> 250ml</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 7 -->
                     <div class="product-card" data-price="600" data-order="7">
                        <div class="product-img-wrapper">
                            <div class="product-badge">25% OFF</div>
                            <div class="product-wishlist"><i class="fa-regular fa-heart"></i></div>
                            <img src="assets/img/products/product7.png" alt="Scalp Treatment">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Scalp Treatment</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 600/<small> 150ml</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 8 -->
                    <div class="product-card" data-price="550" data-order="8">
                        <div class="product-img-wrapper">
                           
                            <div class="product-wishlist"><i class="fa-regular fa-heart"></i></div>
                            <img src="assets/img/products/product8.png" alt="Leafy Hair Mask">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Leafy Hair Mask</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 550/<small> 250ml</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 9 -->
                    <div class="product-card" data-price="720" data-order="9">
                        <div class="product-img-wrapper">
                            <div class="product-badge">25% OFF</div>
                            <div class="product-wishlist"><i class="fa-regular fa-heart"></i></div>
                            <img src="assets/img/products/product9.png" alt="Vital Hair Serum">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Vital Hair Serum</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 720/<small> 150ml</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <script>
        // Wishlist Toggle
        document.querySelectorAll('.product-wishlist').forEach(btn => {
            btn.addEventListener('click', function() {
                const icon = this.querySelector('i');
                icon.classList.toggle('fa-regular');
                icon.classList.toggle('fa-solid');
                this.classList.toggle('liked');
            });
        });

        // Sidebar Category Toggle
        document.querySelectorAll('.sidebar-title').forEach(title => {
            title.addEventListener('click', function() {
                const list = this.nextElementSibling;
                const icon = this.querySelector('.toggle-icon');
                
                if (list.style.display === 'none') {
                    list.style.display = 'block';
                    icon.textContent = '-';
                } else {
                    list.style.display = 'none';
                    icon.textContent = '+';
                }
            });
        });

        // Product Sorting
        const sortSelect = document.querySelector('.sort-select');
        const productGrid = document.querySelector('.shop-product-grid');

        if (sortSelect) {
            sortSelect.addEventListener('change', function() {
                const criteria = this.value;
                const products = Array.from(productGrid.querySelectorAll('.product-card'));

                products.sort((a, b) => {
                    const priceA = parseFloat(a.getAttribute('data-price'));
                    const priceB = parseFloat(b.getAttribute('data-price'));
                    const orderA = parseInt(a.getAttribute('data-order'));
                    const orderB = parseInt(b.getAttribute('data-order'));

                    if (criteria === 'Price: Low to High') {
                        return priceA - priceB;
                    } else if (criteria === 'Price: High to Low') {
                        return priceB - priceA;
                    } else if (criteria === 'Newest First') {
                        return orderB - orderA; // Descending order of original sequence
                    }
                    return 0;
                });

                // Re-append sorted products
                productGrid.innerHTML = '';
                products.forEach(p => productGrid.appendChild(p));
            });
        }

        // Dynamic Cart System Logic
        let cartState = [];

        document.addEventListener('DOMContentLoaded', function() {
            const cartCountElement = document.querySelector('.cart-count');
            const cartModal = document.getElementById('cart-modal');
            const cartItemsContainer = document.querySelector('.cart-items-section');
            const closeModalBtns = document.querySelectorAll('.cart-close-btn, .continue-shopping-btn');
            
            // Summary Elements
            const subtotalVal = document.querySelector('.subtotal-val');
            const shippingVal = document.querySelector('.shipping-val');
            const totalVal = document.querySelector('.total-val');

            function updateCartUI() {
                cartItemsContainer.innerHTML = '';
                let subtotal = 0;
                let totalItems = 0;

                cartState.forEach((item, index) => {
                    subtotal += item.price * item.quantity;
                    totalItems += item.quantity;

                    const itemHtml = `
                        <div class="cart-item">
                            <div class="cart-item-img">
                                <img src="${item.image}" alt="${item.title}">
                            </div>
                            <div class="cart-item-details">
                                <span class="cart-item-cat">${item.category}</span>
                                <h4 class="cart-item-name">${item.title}</h4>
                                <span class="cart-item-qty-meta">Standard Size</span>
                            </div>
                            <div class="cart-item-controls">
                                <div class="qty-selector">
                                    <button class="qty-btn" onclick="window.updateQty(${index}, -1)">-</button>
                                    <span class="qty-text">${item.quantity}</span>
                                    <button class="qty-btn" onclick="window.updateQty(${index}, 1)">+</button>
                                </div>
                                <span class="cart-item-price">₹ ${item.price * item.quantity}</span>
                                <button class="cart-item-remove" onclick="window.removeItem(${index})">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </div>
                        </div>
                    `;
                    cartItemsContainer.insertAdjacentHTML('beforeend', itemHtml);
                });

                // Update Header Count
                cartCountElement.textContent = totalItems;
                cartCountElement.style.transform = 'scale(1.3)';
                setTimeout(() => cartCountElement.style.transform = 'scale(1)', 200);

                // Update Summary Values
                subtotalVal.textContent = `₹ ${subtotal}`;
                const shipping = subtotal > 0 ? 50 : 0;
                shippingVal.textContent = `₹ ${shipping}`;
                totalVal.textContent = `₹ ${subtotal + shipping}`;
            }

            // Expose update functions to window for onclick handlers
            window.updateQty = (index, delta) => {
                cartState[index].quantity += delta;
                if (cartState[index].quantity < 1) cartState[index].quantity = 1;
                updateCartUI();
            };

            window.removeItem = (index) => {
                cartState.splice(index, 1);
                updateCartUI();
            };

            // Add to Cart Click
            document.querySelectorAll('.btn-add-to-cart').forEach(btn => {
                btn.addEventListener('click', function() {
                    const card = this.closest('.product-card');
                    const productInfo = {
                        title: card.querySelector('.product-title').textContent,
                        category: card.querySelector('.product-category').textContent,
                        image: card.querySelector('.product-img-wrapper img').src,
                        price: parseFloat(card.getAttribute('data-price')),
                        quantity: 1
                    };

                    // Check if already in cart
                    const existingItem = cartState.find(item => item.title === productInfo.title);
                    if (existingItem) {
                        existingItem.quantity += 1;
                    } else {
                        cartState.push(productInfo);
                    }

                    updateCartUI();
                    if (cartModal) cartModal.classList.add('active');
                });
            });

            // Modal Close Logic
            closeModalBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    if (cartModal) cartModal.classList.remove('active');
                });
            });

            window.addEventListener('click', (e) => {
                if (e.target === cartModal) cartModal.classList.remove('active');
            });

            // Sync initial state if any
            updateCartUI();
        });
    </script>
</main>

<?php include('includes/footer.php'); ?>