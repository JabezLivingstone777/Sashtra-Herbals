<?php include('includes/header.php'); ?>

<!-- Wishlist Specific CSS -->
<link rel="stylesheet" href="assets/css/wishlist.css?v=<?php echo time(); ?>">

<main class="wishlist-page">
    <div class="container">
        <!-- Breadcrumb -->
        <nav class="breadcrumb-nav">
            <a href="index.php">Home</a>
            <span class="separator">/</span>
            <span class="current">Wishlist</span>
        </nav>

        <!-- Wishlist Header -->
        <div class="wishlist-header">
            <h1 class="wishlist-title">My Wishlist <span class="item-count" id="wishlist-count">(0)</span></h1>
            <button class="btn-move-all" onclick="moveAllToCart()">Move All To Cart</button>
        </div>

        <!-- Wishlist Grid -->
        <div class="wishlist-grid" id="wishlist-grid">
            <!-- Dynamically populated from localStorage -->
            <div class="wishlist-empty" id="wishlist-empty" style="display: none;">
                <div class="empty-content">
                    <i class="fa-regular fa-heart"></i>
                    <h2>Your wishlist is empty</h2>
                    <p>Save your favorite botanical rituals here.</p>
                    <a href="shop.php" class="btn btn-primary">Go to Shop</a>
                </div>
            </div>
        </div>

        <!-- Just For You Section (Optional/Coming Soon) -->
        <div class="just-for-you-section">
            <div class="section-header">
                <h2 class="section-title">Just For You</h2>
                <a href="shop.php" class="btn-see-all">See All</a>
            </div>
            <div class="recommendations-grid" id="recommendations-grid">
                <!-- Can be populated with similar products -->
            </div>
        </div>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        renderWishlist();
        renderRecommendations();
    });

    function renderWishlist() {
        const wishlist = JSON.parse(localStorage.getItem('sashra_wishlist')) || [];
        const container = document.getElementById('wishlist-grid');
        const countEl = document.getElementById('wishlist-count');
        const emptyEl = document.getElementById('wishlist-empty');

        countEl.textContent = `(${wishlist.length})`;

        // Clear previous items except empty message
        const items = container.querySelectorAll('.wishlist-item');
        items.forEach(item => item.remove());

        if (wishlist.length === 0) {
            emptyEl.style.display = 'block';
            return;
        }

        emptyEl.style.display = 'none';

        wishlist.forEach((product, index) => {
            const productHtml = `
                <div class="wishlist-item" data-index="${index}">
                    <div class="product-card" data-price="${product.price}">
                        <div class="product-img-wrapper">
                            ${product.badge ? `<div class="product-badge">${product.badge}</div>` : ''}
                            <button class="remove-wishlist-btn" onclick="removeFromWishlist(${index})" title="Remove from Wishlist">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                            <a href="product.php?id=${product.id}">
                                <img src="${product.image}" alt="${product.title}">
                            </a>
                        </div>
                        <div class="product-info">
                            <span class="product-category">${product.category}</span>
                            <h4 class="product-title"><a href="product.php?id=${product.id}">${product.title}</a></h4>
                            <div class="product-footer">
                                <span class="product-price">₹ ${product.price}/<small> ${product.size || '1pc'}</small></span>
                                <button class="btn-add-to-cart" onclick='addToCartFromWishlist(${JSON.stringify(product).replace(/'/g, "&apos;")})'>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            container.insertAdjacentHTML('beforeend', productHtml);
        });
    }

    function removeFromWishlist(index) {
        let wishlist = JSON.parse(localStorage.getItem('sashra_wishlist')) || [];
        wishlist.splice(index, 1);
        localStorage.setItem('sashra_wishlist', JSON.stringify(wishlist));
        renderWishlist();
    }

    function addToCartFromWishlist(product) {
        if (window.addToCart) {
            window.addToCart({
                ...product,
                quantity: 1
            });
        }
    }

    function moveAllToCart() {
        let wishlist = JSON.parse(localStorage.getItem('sashra_wishlist')) || [];
        if (wishlist.length === 0) return;

        wishlist.forEach(product => {
            addToCartFromWishlist(product);
        });

        // Clear wishlist after moving
        localStorage.setItem('sashra_wishlist', JSON.stringify([]));
        renderWishlist();
    }

    function renderRecommendations() {
        // Placeholder for recommendations - loading a few items from products.json
        fetch('assets/js/products.json')
            .then(res => res.json())
            .then(products => {
                const frag = document.getElementById('recommendations-grid');
                const selection = products.slice(0, 4);
                selection.forEach(p => {
                    const html = `
                        <div class="product-card">
                            <div class="product-img-wrapper">
                                <a href="product.php?id=${p.id}">
                                    <img src="${p.image}" alt="${p.name}">
                                </a>
                            </div>
                            <div class="product-info">
                                <span class="product-category">${p.category}</span>
                                <h4 class="product-title"><a href="product.php?id=${p.id}">${p.name}</a></h4>
                                <div class="product-footer">
                                    <span class="product-price">₹ ${p.price}/<small> ${p.size}</small></span>
                                </div>
                            </div>
                        </div>
                    `;
                    frag.insertAdjacentHTML('beforeend', html);
                });
            });
    }
</script>

<?php include('includes/footer.php'); ?>
