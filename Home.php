<?php include('includes/header.php'); ?>

<main>
    <!-- Hero Carousel Section -->
    <section class="hero-carousel">
        <div class="carousel-container">
            <!-- Slide 1 -->
            <div class="carousel-slide active">
                <div class="hero-bg" style="background-image: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('assets/img/hero-3.jpg');"></div>
                <div class="container hero-container-left">
                    <div class="hero-content">
                        <h1 class="text-uppercase">
                            A HOLISTIC INVITATION <br> 
                            BY SASTRA HERBALS TO
                        </h1>
                        <p class="hero-desc">experience timeless care.</p>
                        <a href="#shop" class="btn btn-outline-white btn-pill">Explore now</a>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-slide">
                <div class="hero-bg" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('assets/img/hero-1.jpg');"></div>
                <div class="container hero-container-left">
                    <div class="hero-content">
                        <h1>LET THE RITUAL BEGIN</h1>
                        <p class="hero-desc">SASTRA HAIR RENEW OIL</p>
                        <p class="hero-desc">For Deep Nourishment & Natural Radiance</p>
                        <a href="#shop" class="btn btn-outline-white btn-pill">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-slide">
                <div class="hero-bg" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('assets/img/hero-2.png');"></div>
                <div class="container hero-container-left">
                    <div class="hero-content">
                       <h1>CARRY THE <br>RADIANCE</h1>
                        <p class="hero-desc">Your daily ritual of luminous, balanced skin.</p>
                        <a href="#shop" class="btn btn-outline-white btn-pill">EXPLORE NOW</a>
                    </div>
                </div>
            </div>

            <!-- Carousel Navigation -->
            <div class="carousel-nav">
                <button class="nav-prev"><i class="fa-solid fa-chevron-left"></i></button>
                <div class="carousel-dots">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <button class="nav-next"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <!-- Pure Herbal Collections -->
    <section class="section" id="collections">
        <div class="container text-center">
            <div class="section-header">
                <img src="assets/img/hand.png?v=<?php echo filemtime('assets/img/hand.png'); ?>" alt="" class="section-decoration hand">
                <img src="assets/img/butterfly.png?v=<?php echo filemtime('assets/img/butterfly.png'); ?>" alt="" class="header-decoration butterfly">
                <h2 class="collections-title">Pure Herbal Collections</h2>
                <div class="accent-line"></div>
                <p class="collections-subtitle">Explore our herbal solutions for hair care, skincare,<br> wellness, and relaxation.</p>
            </div>
            
            <div class="grid-4">
                <a href="#" class="category-card">
                    <div class="category-img-wrapper">
                        <img src="assets/img/hair.png" alt="Hair Care" onerror="this.src='https://images.unsplash.com/photo-1556228720-195a672e8a03?q=80&w=2574&auto=format&fit=crop';">
                    </div>
                    <h3>Hair Care</h3>
                </a>
                <a href="#" class="category-card">
                    <div class="category-img-wrapper">
                        <img src="assets/img/skin.jpg" alt="Skin Care" onerror="this.src='https://images.unsplash.com/photo-1612817288484-6f916006741a?q=80&w=2670&auto=format&fit=crop';">
                    </div>
                    <h3>Skin Care</h3>
                </a>
                <a href="#" class="category-card">
                    <div class="category-img-wrapper">
                        <img src="assets/img/wellness.png" alt="Wellness">
                    </div>
                    <h3>Wellness</h3>
                </a>
                <a href="#" class="category-card">
                    <div class="category-img-wrapper">
                        <img src="assets/img/aromatherapy.png" alt="Aromatherapy" onerror="this.src='https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?q=80&w=2574&auto=format&fit=crop';">
                    </div>
                    <h3>Aromatherapy</h3>
                </a>
            </div>
        </div>
    </section>

    <!-- Curated Collection -->
    <section class="section" id="shop" style="position: relative; overflow: hidden;">
        <!-- Decorative Handholds -->
        <div class="shop-left-decor">
            <img src="assets/img/products/handholds.png" alt="Sashra Decor">
        </div>
        <div class="shop-right-decor">
            <img src="assets/img/products/women.png" alt="Sashra Decor">
        </div>
        <div class="container">
            <div class="shop-header">
                <span class="shop-label">SHOP NOW </span>
                <h2 class="shop-title">Curated Collection</h2>
            </div>

            <div class="products-horizontal-wrapper">
                <div class="products-container">
                    <!-- Product 1 -->
                    <!-- Product 1 -->
                    <div class="product-card">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product1.png" alt="Advanced Hair Renew Oil">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Advanced Hair Renew Oil</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 500/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 2 -->
                    <div class="product-card">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product2.png" alt="Hair Renew Oil">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Hair Renew Oil</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 500/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 3 -->
                    <div class="product-card">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product3.png" alt="Anti-Dandruff Hair Pack">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Anti-Dandruff Hair Pack</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 500/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 4 -->
                    <div class="product-card">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product4.png" alt="Powder Hair Cleanser">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Powder Hair Cleanser</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 500/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 5 -->
                    <div class="product-card">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product5.png" alt="Botanical Shampoo">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Botanical Shampoo</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 450/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 6 -->
                    <div class="product-card">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product6.png" alt="Herbal Conditioner">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Herbal Conditioner</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 480/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 7 -->
                    <div class="product-card">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product7.png" alt="Scalp Treatment">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Scalp Treatment</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 600/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 8 -->
                    <div class="product-card">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product8.png" alt="Leafy Hair Mask">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Leafy Hair Mask</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 550/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 9 -->
                    <div class="product-card hidden-card">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product9.png" alt="Vital Hair Serum">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Vital Hair Serum</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 720/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 10 -->
                    <div class="product-card hidden-card">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product10.png" alt="Pure Neem Oil">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Pure Neem Oil</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 350/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 11 -->
                    <!-- <div class="product-card">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product11.png" alt="Product 11">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Nourishing Hair Butter</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 650/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div> -->
                    <!-- Product 12 -->
                    <!-- <div class="product-card">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product12.png" alt="Product 12">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Hibiscus Hair Oil</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 480/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div> -->
                    <!-- Product 13 -->
                    <!-- <div class="product-card">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product13.png" alt="Product 13">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Bhringraj Scalp Therapy</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 890/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div> -->
                    <!-- Product 14 -->
                    <!-- <div class="product-card">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product14.png" alt="Product 14">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title">Onion Hair Mask</h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 550/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="show-more-wrapper text-center" style="margin-top: 40px;">
                    <button id="show-more-btn" class="btn btn-outline btn-pill">SHOW MORE</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script>
        document.getElementById('show-more-btn')?.addEventListener('click', function() {
            const hiddenCards = document.querySelectorAll('.hidden-card');
            hiddenCards.forEach(card => {
                card.classList.remove('hidden-card');
                // Ensure they show up in the grid
                card.style.display = 'flex';
            });
            this.style.display = 'none'; // Hide button after showing items
        });
    </script>

    <!-- Our Philosophy -->
    <section class="philosophy-section-new">
        <div class="phil-outer-container">
            <div class="phil-inner-content">
                <div class="phil-header-box">
                    <h2 class="phil-title">Our Philosophy</h2>
                    <p class="phil-desc">Every blend is a testament to the delicate art of herbalism—each ingredient hand-selected from pristine meadows, dried under gentle sun, and combined with reverence for tradition and purity.</p>
                </div>
                
                <div class="phil-stats-row">
                    <div class="phil-stat-item">
                        <span class="phil-number">100%</span>
                        <span class="phil-label">Natural</span>
                    </div>
                    <div class="phil-stat-item">
                        <span class="phil-number">20+</span>
                        <span class="phil-label">Extracts</span>
                    </div>
                    <div class="phil-stat-item">
                        <span class="phil-number">Peak</span>
                        <span class="phil-label">Potency</span>
                    </div>
                </div>
            </div>
            
            <!-- Decorative Elements -->
            <div class="phil-decor-top">
                <img src="assets/img/products/leaf.png" alt="">
            </div>
            <div class="phil-decor-bottom">
                <img src="assets/img/products/hold_hand_line_art01.png" alt="">
            </div>
        </div>
    </section>

    <!-- Cover Banner -->
    <section class="cover-banner-section">
        <div class="cover-banner-container">
            <img src="#" class="banner-bg" alt="Nature Background" onerror="this.src='https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=2626&auto=format&fit=crop';">
            
            <div class="banner-overlay-content">
                <div class="banner-col banner-left">
                    <h2 class="banner-title">Why our shelf<br>Life is low.</h2>
                    <p class="banner-subtitle">Zero synthetic preservatives. Just fresh, potent botanicals harvested within weeks.</p>
                    <button class="btn btn-light btn-pill">Learn more</button>
                </div>
                
                <div class="banner-col banner-center">
                    <img src="#" alt="" class="floating-bottle">
                </div>
                
                <div class="banner-col banner-right">
                    <ul class="banner-features">
                        <li><span class="icon-circle"><i class="fa-solid fa-leaf"></i></span> Fresh botanicals only</li>
                        <li><span class="icon-circle"><i class="fa-solid fa-flask-vial"></i></span> No synthetic preservatives</li>
                        <li><span class="icon-circle"><i class="fa-solid fa-bolt"></i></span> Potency Focus</li>
                        <li><span class="icon-circle"><i class="fa-solid fa-certificate"></i></span> Pure Integrity</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop by Concern -->
    <section class="section concern-section">
        <div class="container">
            <div class="concern-header">
                <span class="concern-label">solution</span>
                <h2 class="concern-title">Shop by Concern</h2>
            </div>
            
            <div class="concern-grid">
                <!-- Item 1 -->
                <a href="#" class="concern-item">
                    <div class="concern-img">
                        <img src="assets/img/shopbyconcern/shop1.png" alt="Scalp Health" onerror="this.src='https://images.unsplash.com/photo-1519735811596-c13b605de5a8?q=80&w=2600&auto=format&fit=crop';">
                    </div>
                    <span class="concern-name">Scalp Health</span>
                </a>
                <!-- Item 2 -->
                <a href="#" class="concern-item">
                    <div class="concern-img">
                        <img src="assets/img/shopbyconcern/shop2.png" alt="Dryness & Hydration" onerror="this.src='https://images.unsplash.com/photo-1552046122-03184de85e08?q=80&w=2574&auto=format&fit=crop';">
                    </div>
                    <span class="concern-name">Dryness & Hydration</span>
                </a>
                <!-- Item 3 -->
                <a href="#" class="concern-item">
                    <div class="concern-img">
                        <img src="assets/img/shopbyconcern/shop3.png" alt="Sensitivity & Redness" onerror="this.src='https://images.unsplash.com/photo-1596755094514-f87e34085b2c?q=80&w=2576&auto=format&fit=crop';">
                    </div>
                    <span class="concern-name">Sensitivity & Redness</span>
                </a>
                <!-- Item 4 -->
                <a href="#" class="concern-item">
                    <div class="concern-img">
                        <img src="assets/img/shopbyconcern/shop4.png" alt="Anti-Aging & Vitality" onerror="this.src='https://images.unsplash.com/photo-1512403754473-27834f0b99ce?q=80&w=2670&auto=format&fit=crop';">
                    </div>
                    <span class="concern-name">Anti-Aging & Vitality</span>
                </a>
                <!-- Item 5 -->
                <a href="#" class="concern-item">
                    <div class="concern-img">
                        <img src="assets/img/shopbyconcern/shop5.png" alt="Sleep & Relaxation" onerror="this.src='https://images.unsplash.com/photo-1541781774459-bb2af2f05b55?q=80&w=2660&auto=format&fit=crop';">
                    </div>
                    <span class="concern-name">Sleep & Relaxation</span>
                </a>
                <!-- Item 6 -->
                <a href="#" class="concern-item">
                    <div class="concern-img">
                        <img src="assets/img/shopbyconcern/shop6.png" alt="Energy & Focus" onerror="this.src='https://images.unsplash.com/photo-1490474418177-01f9a2b40440?q=80&w=2670&auto=format&fit=crop';">
                    </div>
                    <span class="concern-name">Energy & Focus</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Watch, Buy, Glow -->
    <section class="watch-buy-glow">
        <div class="glow-content-wrapper">
            <h2 class="glow-main-title">
                <span class="word-watch">Watch,</span>
                <span class="word-buy">Buy,</span>
                <span class="word-glow">Glow</span>
            </h2>
            
            <div class="glow-carousel">
                <div class="glow-track">
                    <!-- Card 1 -->
                    <div class="glow-card">
                        <div class="glow-video-container">
                            <img src="assets/img/shopbyconcern/Frame 38.png" alt="Video Content" onerror="this.src='https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?q=80&w=2670&auto=format&fit=crop';">
                        </div>
                        <div class="glow-footer">
                            <div class="glow-product-meta">
                                <img src="assets/img/shopbyconcern/Frame 39.png" alt="Thumb" class="glow-thumb" onerror="this.src='https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?q=80&w=2574&auto=format&fit=crop';">
                                <span class="glow-product-name">Advanced Hair Renew Oil</span>
                            </div>
                            <button class="glow-buy-btn">Buy Now</button>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="glow-card">
                        <div class="glow-video-container">
                            <img src="assets/img/shopbyconcern/Frame 40.png" alt="Video Content" onerror="this.src='https://images.unsplash.com/photo-1596755094514-f87e34085b2c?q=80&w=2576&auto=format&fit=crop';">
                        </div>
                        <div class="glow-footer">
                            <div class="glow-product-meta">
                                <img src="assets/img/products/thumb2.png" alt="Thumb" class="glow-thumb" onerror="this.src='https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?q=80&w=2574&auto=format&fit=crop';">
                                <span class="glow-product-name">Pure Neem Oil</span>
                            </div>
                            <button class="glow-buy-btn">Buy Now</button>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="glow-card">
                        <div class="glow-video-container">
                            <img src="assets/img/shopbyconcern/Frame 38.png" alt="Video Content" onerror="this.src='https://images.unsplash.com/photo-1540555700478-4be289fbecef?q=80&w=2670&auto=format&fit=crop';">
                        </div>
                        <div class="glow-footer">
                            <div class="glow-product-meta">
                                <img src="assets/img/shopbyconcern/Frame 39.png" alt="Thumb" class="glow-thumb" onerror="this.src='https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?q=80&w=2574&auto=format&fit=crop';">
                                <span class="glow-product-name">Lash and Brow Serum</span>
                            </div>
                            <button class="glow-buy-btn">Buy Now</button>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="glow-card">
                        <div class="glow-video-container">
                            <img src="assets/img/shopbyconcern/Frame 40.png" alt="Video Content" onerror="this.src='https://images.unsplash.com/photo-1512403754473-27834f0b99ce?q=80&w=2670&auto=format&fit=crop';">
                        </div>
                        <div class="glow-footer">
                            <div class="glow-product-meta">
                                <img src="assets/img/shopbyconcern/Frame 39.png" alt="Thumb" class="glow-thumb" onerror="this.src='https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?q=80&w=2574&auto=format&fit=crop';">
                                <span class="glow-product-name">Hibiscus Hair Oil</span>
                            </div>
                            <button class="glow-buy-btn">Buy Now</button>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="glow-card">
                        <div class="glow-video-container">
                            <img src="assets/img/shopbyconcern/Frame 40.png" alt="Video Content" onerror="this.src='https://images.unsplash.com/photo-1541781774459-bb2af2f05b55?q=80&w=2660&auto=format&fit=crop';">
                        </div>
                        <div class="glow-footer">
                            <div class="glow-product-meta">
                                <img src="assets/img/shopbyconcern/Frame 39.png" alt="Thumb" class="glow-thumb" onerror="this.src='https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?q=80&w=2574&auto=format&fit=crop';">
                                <span class="glow-product-name">Vital Hair Serum</span>
                            </div>
                            <button class="glow-buy-btn">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const track = document.querySelector('.glow-track');
        let scrollAmount = 0;
        const step = 406; // Card width + gap
        
        setInterval(() => {
            scrollAmount += step;
            if (scrollAmount >= track.scrollWidth - track.parentElement.offsetWidth) {
                scrollAmount = 0;
            }
            track.style.transform = `translateX(-${scrollAmount}px)`;
        }, 3000);
    </script>
    <!-- The Ritual Section -->
    <section class="the-ritual-section">
        <div class="ritual-content-container">
            <div class="ritual-left-col">
                <span class="ritual-subtitle">Daily Practice</span>
                <h2 class="ritual-main-title">The Ritual</h2>
                
                <div class="ritual-steps-list">
                    <!-- Morning -->
                    <div class="ritual-step-item">
                        <div class="ritual-icon">
                            <img src="assets/img/shopbyconcern/icon1.png" alt="Morning" class="ritual-img-icon">
                        </div>
                        <h4 class="ritual-step-title">Morning Awakening</h4>
                        <p class="ritual-step-desc">Begin with our Clarity Tincture—three <br>drops beneath the tongue to ground <br>your intentions.</p>
                    </div>
                    
                    <!-- Midday -->
                    <div class="ritual-step-item">
                        <div class="ritual-icon">
                            <img src="assets/img/shopbyconcern/icon2.png" alt="Midday" class="ritual-img-icon" onerror="this.src='https://cdn-icons-png.flaticon.com/512/3032/3032890.png';">
                        </div>
                        <h4 class="ritual-step-title">Midday Nourish</h4>
                        <p class="ritual-step-desc">Steep our Vitality Blend for five <br> minutes—let the warmth restore your <br> center.</p>
                    </div>
                    
                    <!-- Evening -->
                    <div class="ritual-step-item">
                        <div class="ritual-icon">
                            <img src="assets/img/shopbyconcern/icon3.png" alt="Evening" class="ritual-img-icon" onerror="this.src='https://cdn-icons-png.flaticon.com/512/3032/3032890.png';">
                        </div>
                        <h4 class="ritual-step-title">Evening Unwind</h4>
                        <p class="ritual-step-desc">Our Serenity Elixir, blended with <br>lavender and chamomile, eases you <br> into restorative rest.</p>
                    </div>
                </div>
            </div>
            
            <div class="ritual-right-col">
                <div class="ritual-image-frame">
                    <img src="assets/img/shopbyconcern/Rectangle18.png" alt="Self Care Ritual" onerror="this.src='https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?q=80&w=2640&auto=format&fit=crop';">
                </div>
            </div>
        </div>
    </section>

    <!-- Join Community / Newsletter -->
    <section class="section" style="background: #3C3C3C; color: white; padding: 120px 0;">
        <style>
            .ritual-step-item {
                display: flex;
                flex-direction: column;
                gap: 12px;
                width: 405px;
                height: 186px;
            }

            .ritual-img-icon {
                width: 44px;
                height: 44px;
                object-fit: contain;
            }
        </style>
        <div class="container text-center">
            <h2 style="font-size: 3rem; color: white; margin-bottom: 20px;">Join our community</h2>
            <p style="opacity: 0.8; margin-bottom: 50px; max-width: 600px; margin: 0 auto 50px;">Sign up to receive exclusive offers, herbal wisdom, and early access to new releases.</p>
            
            <form style="max-width: 500px; margin: 0 auto; display: flex; gap: 10px;">
                <input type="email" placeholder="Email address" style="flex: 1; padding: 15px 25px; border-radius: 50px; border: 1px solid rgba(255,255,255,0.2); background: transparent; color: white;">
                <button type="submit" class="btn btn-primary btn-pill" style="white-space: nowrap;">SIGN UP</button>
            </form>
        </div>
    </section>
</main>

<?php include('includes/footer.php'); ?>
