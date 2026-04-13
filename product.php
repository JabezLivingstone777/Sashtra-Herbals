<?php include('includes/header.php'); ?>

<!-- Include Product Specific CSS -->
<link rel="stylesheet" href="assets/css/product.css?v=<?php echo filemtime('assets/css/product.css'); ?>">

<main class="product-detail-page">
    <div class="breadcrumb-slug-bar">
        <div class="container">
            <nav class="breadcrumb-nav" id="breadcrumb-nav">
                <a href="index.php" class="breadcrumb-link">Home</a>
                <span class="breadcrumb-separator">/</span>
                <a href="shop.php" class="breadcrumb-link">Shop</a>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-current" id="breadcrumb-product-name">Product Name</span>
            </nav>
        </div>
    </div>

    <section class="product-main-section">
        <div class="container">
            <div class="product-layout">
                <!-- 1. Thumbnails (100px) -->
                <div class="thumbnail-list" id="thumbnail-list">
                    <!-- Dynamic Thumbnails -->
                </div>

                <!-- 2. Main Image (1fr) -->
                <div class="main-image-wrapper">
                    <img id="main-product-image" src="" alt="Product Image">
                </div>

                <!-- 3. Info (1fr) -->
                <div class="product-info-panel">
                    <span class="product-category" id="product-category">Category</span>
                    <h1 class="product-title" id="product-title">Product Name</h1>
                    
                    <div class="rating-reviews">
                        <div class="stars" id="product-stars">
                            <!-- Dynamic Stars -->
                        </div>
                        <span class="review-count" id="product-reviews">0 Reviews</span>
                    </div>

                    <div class="product-price-row">
                        <span class="current-price" id="product-price">₹ 0</span>
                    </div>

                    <div class="purchase-actions">
                        <div class="purchase-row qty-wishlist">
                            <div class="qty-control">
                                <button class="qty-btn minus" onclick="updateLocalQty(-1)">-</button>
                                <input type="number" id="local-qty" value="1" min="1" class="qty-input">
                                <button class="qty-btn plus" onclick="updateLocalQty(1)">+</button>
                            </div>
                            <div class="wishlist-action">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                        </div>
                        <div class="purchase-row buttons-row">
                            <button class="btn btn-outline add-to-cart" id="add-to-cart-btn">Add to cart</button>
                            <button class="btn btn-primary buy-now" id="buy-now-btn">Buy Now</button>
                        </div>
                    </div>

                    <div class="shipping-info">
                        <div class="info-item">
                            <i class="fa-solid fa-truck"></i>
                            <span>Usually Dispatches within 1 to 2 Days</span>
                        </div>
                        <div class="info-item">
                            <i class="fa-solid fa-rotate-left"></i>
                            <span>7 days Return Policy</span>
                        </div>
                    </div>

                    <div class="certifications-grid" id="certifications-grid">
                        <div class="cert-item">
                            <i class="fa-solid fa-leaf" style="font-size: 24px; color: #808D6F; margin-bottom: 5px;"></i>
                            <span>Vegan</span>
                        </div>
                        <div class="cert-item">
                            <i class="fa-solid fa-flask" style="font-size: 24px; color: #808D6F; margin-bottom: 5px;"></i>
                            <span>Sulfate free</span>
                        </div>
                        <div class="cert-item">
                            <i class="fa-solid fa-shield-virus" style="font-size: 24px; color: #808D6F; margin-bottom: 5px;"></i>
                            <span>Paraben free</span>
                        </div>
                        <div class="cert-item">
                            <i class="fa-solid fa-paw" style="font-size: 24px; color: #808D6F; margin-bottom: 5px;"></i>
                            <span>Cruelty free</span>
                        </div>
                        <div class="cert-item">
                            <i class="fa-solid fa-droplet-slash" style="font-size: 24px; color: #808D6F; margin-bottom: 5px;"></i>
                            <span>No artificial color</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Details Layout -->
            <div class="product-details-grid">
                <!-- Left Column: Description -->
                <div class="details-column description-col">
                    <div class="details-dropdown active" onclick="toggleDetails(this)">
                        <div class="dropdown-header">
                            <h3 class="details-title">Description</h3>
                            <span class="toggle-icon"></span>
                        </div>
                        <div class="dropdown-content">
                            <p id="product-description" class="details-text">Loading description...</p>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column: Ingredients & How to Use -->
                <div class="details-column technical-col">
                    <div class="details-dropdown" onclick="toggleDetails(this)">
                        <div class="dropdown-header">
                            <h3 class="details-title">Key Ingredients</h3>
                            <span class="toggle-icon"></span>
                        </div>
                        <div class="dropdown-content">
                            <p id="product-ingredients" class="details-text">Loading ingredients...</p>
                        </div>
                    </div>
                    
                    <div class="details-dropdown" onclick="toggleDetails(this)">
                        <div class="dropdown-header">
                            <h3 class="details-title">How to Use</h3>
                            <span class="toggle-icon"></span>
                        </div>
                        <div class="dropdown-content">
                            <p id="product-how-to-use" class="details-text">Loading usage instructions...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products Section -->
    <section class="related-products-section">
        <div class="container">
            <div class="section-title-wrapper">
                <h2 class="section-title">You May Also Like</h2>
            </div>
            
            <div class="carousel-container">
                <div class="related-products-carousel" id="related-products-carousel">
                    <!-- Dynamic Related Products -->
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="faq-headline">FAQ</h2>
            <div class="faq-list">
                <div class="faq-card" onclick="toggleFAQ(this)">
                    <div class="faq-header">
                        <span class="faq-question">WHAT IS THE DURATION OF THE COHORT?</span>
                        <div class="faq-icon">+</div>
                    </div>
                    <div class="faq-body">
                        <div class="faq-body-inner">
                            <p>Our Ayurvedic wellness protocols are designed to show initial results within 4-6 weeks of consistent use, aligning with your naturally occurring cell renewal cycle.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-card" onclick="toggleFAQ(this)">
                    <div class="faq-header">
                        <span class="faq-question">HOW LONG WILL I HAVE ACCESS TO THE CONTENT?</span>
                        <div class="faq-icon">+</div>
                    </div>
                    <div class="faq-body">
                        <div class="faq-body-inner">
                            <p>You will have lifetime access to the educational materials and digital guides included with your purchase, allowing you to revisit the wisdom at your own pace.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-card" onclick="toggleFAQ(this)">
                    <div class="faq-header">
                        <span class="faq-question">WHAT EDITING SOFTWARE DO YOU TEACH?</span>
                        <div class="faq-icon">+</div>
                    </div>
                    <div class="faq-body">
                        <div class="faq-body-inner">
                            <p>We focus on the art of traditional formulation combined with modern science. No professional software is required for our basic home-care rituals.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-card" onclick="toggleFAQ(this)">
                    <div class="faq-header">
                        <span class="faq-question">I'M UNABLE TO ACCESS THE COHORT CONTENT, WHAT SHOULD I DO?</span>
                        <div class="faq-icon">+</div>
                    </div>
                    <div class="faq-body">
                        <div class="faq-body-inner">
                            <p>Please contact our support team at care@sashraherbals.com and we will resolve your access issues within 24 business hours.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Reviews Section -->
    <section class="reviews-section">
        <div class="container">
            <div class="reviews-header">
                <div class="reviews-header-left">
                    <h2 class="reviews-main-title">Customer Review</h2>
                    <div class="rating-summary">
                        <span class="rating-number">4.9</span>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <span class="review-count">| 14 Reviews</span>
                    </div>
                </div>
                <button class="btn-write-review">Write Review</button>
            </div>

            <div class="reviews-list">
                <!-- Review 1 -->
                <div class="review-item">
                    <div class="review-item-left">
                        <img src="assets/img/avatar1.png" alt="User" class="user-avatar">
                        <div class="review-content">
                            <div class="user-meta">
                                <span class="user-name">Miles, Esther</span>
                                <span class="review-date">2days ago</span>
                            </div>
                            <p class="review-text">Corem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
                        </div>
                    </div>
                    <div class="review-stars-right">
                        <div class="stars gold">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star grey"></i>
                            <i class="fa-solid fa-star grey"></i>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="review-item">
                    <div class="review-item-left">
                        <img src="assets/img/avatar2.png" alt="User" class="user-avatar">
                        <div class="review-content">
                            <div class="user-meta">
                                <span class="user-name">Miles, Esther</span>
                                <span class="review-date">2days ago</span>
                            </div>
                            <p class="review-text">Corem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
                        </div>
                    </div>
                    <div class="review-stars-right">
                        <div class="stars gold">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star grey"></i>
                            <i class="fa-solid fa-star grey"></i>
                            <i class="fa-solid fa-star grey"></i>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="review-item">
                    <div class="review-item-left">
                        <img src="assets/img/avatar3.png" alt="User" class="user-avatar">
                        <div class="review-content">
                            <div class="user-meta">
                                <span class="user-name">Miles, Esther</span>
                                <span class="review-date">2days ago</span>
                            </div>
                            <p class="review-text">Corem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
                        </div>
                    </div>
                    <div class="review-stars-right">
                        <div class="stars gold">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke half-grey"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="reviews-footer">
                <a href="#" class="view-more-link">View more</a>
            </div>
        </div>
    </section>
</main>



<script>
    // Global variable for carousel interval
    let carouselInterval;

    function stopAutoScroll() {
        clearInterval(carouselInterval);
    }

    function startAutoScroll() {
        stopAutoScroll(); // clear any existing before starting
        const carousel = document.getElementById('related-products-carousel');
        if (!carousel) return;
        carouselInterval = setInterval(() => {
            const cardWidth = 264 + 25; // card width + gap
            if (carousel.scrollLeft + carousel.offsetWidth >= carousel.scrollWidth - 10) {
                carousel.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                carousel.scrollBy({ left: cardWidth, behavior: 'smooth' });
            }
        }, 3000);
    }

    // Quantity Control
    function updateLocalQty(delta) {
        const input = document.getElementById('local-qty');
        let val = parseInt(input.value) + delta;
        if (val < 1) val = 1;
        input.value = val;
    }

    // Toggle FAQ
    function toggleFAQ(card) {
        card.classList.toggle('active');
        const icon = card.querySelector('.faq-icon');
        icon.textContent = card.classList.contains('active') ? '-' : '+';
    }

    // Toggle Details Dropdown
    function toggleDetails(element) {
        element.classList.toggle('active');
    }

    // Dynamic Data Loading
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const productId = urlParams.get('id');

        if (!productId) {
            window.location.href = 'shop.php';
            return;
        }

        fetch('assets/js/products.json?v=<?php echo filemtime("assets/js/products.json"); ?>')
            .then(response => response.json())
            .then(products => {
                const product = products.find(p => p.id == productId);
                if (product) {
                    renderProduct(product);
                    renderRelatedProducts(products, product);
                } else {
                    document.querySelector('.product-main-section').innerHTML = '<div class="container"><h1>Product not found</h1><a href="shop.php">Back to Shop</a></div>';
                }
            })
            .catch(err => console.error('Error loading products:', err));

        function renderRelatedProducts(allProducts, currentProduct) {
            const carousel = document.getElementById('related-products-carousel');

            // Get same-category products first, then fill from others if needed
            let sameCategory = allProducts.filter(p => p.category === currentProduct.category && p.id !== currentProduct.id);
            let others = allProducts.filter(p => p.category !== currentProduct.category && p.id !== currentProduct.id);
            let related = sameCategory.length >= 3 ? sameCategory : [...sameCategory, ...others];

            if (related.length === 0) {
                document.querySelector('.related-products-section').style.display = 'none';
                return;
            }

            carousel.innerHTML = related.map(p => `
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
                            <button class="btn-add-to-cart" onclick="window.addToCart({title:'${p.name}', category:'${p.category}', price:${p.price}, image:'${p.image}', quantity:1})">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            `).join('');

            // Start auto-scroll after a small delay
            setTimeout(startAutoScroll, 500);

            // Pause auto-scroll on hover
            carousel.addEventListener('mouseenter', stopAutoScroll);
            carousel.addEventListener('mouseleave', startAutoScroll);
        }


        function renderProduct(product) {
            document.title = `${product.name} | Sashra Herbals`;
            document.getElementById('breadcrumb-product-name').textContent = product.name;
            document.getElementById('product-title').textContent = product.name;
            document.getElementById('product-category').textContent = product.category;
            document.getElementById('product-price').textContent = `₹ ${product.price}`;
            document.getElementById('product-reviews').textContent = `${product.reviews} Reviews`;
            document.getElementById('product-description').textContent = product.description;
            document.getElementById('product-ingredients').textContent = product.ingredients;
            document.getElementById('product-how-to-use').textContent = product.how_to_use;
            
            // Render Rating Stars
            const starsContainer = document.getElementById('product-stars');
            let starsHtml = '';
            for (let i = 1; i <= 5; i++) {
                if (i <= Math.floor(product.rating)) {
                    starsHtml += '<i class="fa-solid fa-star"></i>';
                } else if (i - 0.5 <= product.rating) {
                    starsHtml += '<i class="fa-solid fa-star-half-stroke"></i>';
                } else {
                    starsHtml += '<i class="fa-regular fa-star"></i>';
                }
            }
            starsContainer.innerHTML = starsHtml;

            // Main Image
            const mainImg = document.getElementById('main-product-image');
            mainImg.src = product.image;
            mainImg.alt = product.name;

            // Gallery Logic
            if (product.gallery && product.gallery.length > 0) {
                const thumbList = document.getElementById('thumbnail-list');
                thumbList.innerHTML = product.gallery.map((img, idx) => `
                    <div class="thumb-item ${idx === 0 ? 'active' : ''}" onclick="updateMainImage('${img}', this)">
                        <img src="${img}" alt="${product.name} thumbnail">
                    </div>
                `).join('');
            }

            // Cart Integration
            document.getElementById('add-to-cart-btn').onclick = () => {
                const qty = parseInt(document.getElementById('local-qty').value);
                window.addToCart({
                    title: product.name,
                    category: product.category,
                    price: product.price,
                    image: product.image,
                    quantity: qty
                });
            };

            document.getElementById('buy-now-btn').onclick = () => {
                const qty = parseInt(document.getElementById('local-qty').value);
                window.addToCart({
                    title: product.name,
                    category: product.category,
                    price: product.price,
                    image: product.image,
                    quantity: qty
                });
                // Optional: redirect to checkout
            };
        }
    });

    function updateMainImage(src, thumb) {
        document.getElementById('main-product-image').src = src;
        document.querySelectorAll('.thumb-item').forEach(el => el.classList.remove('active'));
        thumb.classList.add('active');
    }
</script>

<?php include('includes/footer.php'); ?>
