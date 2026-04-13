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
                <a href="shop.php?category=Hair+Care" class="category-card">
                    <div class="category-img-wrapper">
                        <img src="assets/img/hair.png" alt="Hair Care" onerror="this.src='https://images.unsplash.com/photo-1556228720-195a672e8a03?q=80&w=2574&auto=format&fit=crop';">
                    </div>
                    <h3>Hair Care</h3>
                </a>
                <a href="shop.php?category=Skin+Care" class="category-card">
                    <div class="category-img-wrapper">
                        <img src="assets/img/skin.jpg" alt="Skin Care" onerror="this.src='https://images.unsplash.com/photo-1612817288484-6f916006741a?q=80&w=2670&auto=format&fit=crop';">
                    </div>
                    <h3>Skin Care</h3>
                </a>
                <a href="shop.php?category=Wellness" class="category-card">
                    <div class="category-img-wrapper">
                        <img src="assets/img/wellness.png" alt="Wellness">
                    </div>
                    <h3>Wellness</h3>
                </a>
                <a href="shop.php?category=Aromatherapy" class="category-card">
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
                    <div class="product-card" data-price="500">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product1.png" alt="Advanced Hair Renew Oil">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title"><a href="product.php?id=1">Advanced Hair Renew Oil</a></h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 500/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 2 -->
                    <div class="product-card" data-price="500">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product2.png" alt="Hair Renew Oil">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title"><a href="product.php?id=2">Hair Renew Oil</a></h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 500/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 3 -->
                    <div class="product-card" data-price="500">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product3.png" alt="Anti-Dandruff Hair Pack">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title"><a href="product.php?id=3">Anti-Dandruff Hair Pack</a></h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 500/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 4 -->
                    <div class="product-card" data-price="500">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product4.png" alt="Powder Hair Cleanser">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title"><a href="product.php?id=4">Powder Hair Cleanser</a></h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 500/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 5 -->
                    <div class="product-card" data-price="450">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product5.png" alt="Botanical Shampoo">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title"><a href="product.php?id=5">Botanical Shampoo</a></h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 450/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 6 -->
                    <div class="product-card" data-price="480">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product6.png" alt="Herbal Conditioner">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title"><a href="product.php?id=6">Herbal Conditioner</a></h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 480/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 7 -->
                    <div class="product-card" data-price="600">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product7.png" alt="Scalp Treatment">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title"><a href="product.php?id=7">Scalp Treatment</a></h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 600/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 8 -->
                    <div class="product-card" data-price="550">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product8.png" alt="Leafy Hair Mask">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title"><a href="product.php?id=8">Leafy Hair Mask</a></h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 550/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 9 -->
                    <div class="product-card hidden-card" data-price="720">
                        <div class="product-img-wrapper">
                            <img src="assets/img/products/product9.png" alt="Vital Hair Serum">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Hair Care</span>
                            <h4 class="product-title"><a href="product.php?id=9">Vital Hair Serum</a></h4>
                            <div class="product-footer">
                                <span class="product-price">₹ 720/<small> 1pc</small></span>
                                <button class="btn-add-to-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 10 -->
                    <div class="product-card hidden-card" data-price="350">
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
                <div class="ritual-header">
                    <span class="ritual-subtitle">Daily Practice</span>
                    <h2 class="ritual-main-title">The Ritual</h2>
                </div>
                
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

    <!-- Suggested Routines Section -->
    <section class="routines-section">
        <div class="routines-main-wrapper">
            <div class="routines-header">
                <span class="routines-subtitle">Build Your Ritual</span>
                <h2 class="routines-title">Suggested Routines</h2>
            </div>
            
            <div class="routines-grid">
                <!-- Morning Routine Row -->
                <div class="routine-row morning-row">
                    <div class="routine-text-block">
                        <h3 class="routine-type-title">Morning Routine</h3>
                        <ol class="routine-list">
                            <li>Cleanser (Gentle Botanical Wash)</li>
                            <li>Toner (Rose & Neroli)</li>
                            <li>Serum (Radiance Oil)</li>
                            <li>Moisturizer (Hydration Elixir)</li>
                            <li>SPF (Natural Botanicals)</li>
                        </ol>
                    </div>
                    <div class="routine-image-block">
                        <img src="assets/img/shopbyconcern/Routin.png" alt="Morning Ritual" onerror="this.src='https://images.unsplash.com/photo-1570172619669-d0dfd8763564?q=80&w=2670&auto=format&fit=crop';">
                    </div>
                </div>
                
                <!-- Night Routine Row -->
                <div class="routine-row night-row">
                    <div class="routine-image-block">
                        <img src="assets/img/shopbyconcern/routine1.png" alt="Night Ritual" onerror="this.src='https://images.unsplash.com/photo-1552046122-03184de85e08?q=80&w=2574&auto=format&fit=crop';">
                    </div>
                    <div class="routine-text-block">
                        <h3 class="routine-type-title">Night Routine</h3>
                        <ol class="routine-list">
                            <li>Cleanser (Botanical Makeup Remover)</li>
                            <li>Essence (Lavender & Chamomile)</li>
                            <li>Night Serum (Recovery Blend)</li>
                            <li>Night Cream (Restorative Oil)</li>
                            <li>Sleep Tea (Serenity Elixir)</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Custom Section Container -->
    <section class="next-section-layout">
        <div class="next-section-container">
            <div class="next-inner-content">
                <div class="next-header">
                    <span class="next-label">Knowledge</span>
                    <h2 class="next-title">Got Questions?</h2>
                </div>
                
                <div class="next-faq-wrapper">
                    <div class="faq-list-container">
                        <div class="faq-item">
                            <div class="faq-question">
                                <span>WHAT IS THE DURATION OF THE COHORT?</span>
                                <div class="faq-icon-plus">+</div>
                            </div>
                            <div class="faq-answer">
                                <p>Our botanical wisdom cohorts typically run for 12 weeks, with deep-dive sessions twice a month to ensure seasonal alignment.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <span>HOW LONG WILL I HAVE ACCESS TO THE CONTENT?</span>
                                <div class="faq-icon-plus">+</div>
                            </div>
                            <div class="faq-answer">
                                <p>You will have lifetime access to the recorded sessions and the botanical guides so you can revisit them each season.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <span>WHAT EDITING SOFTWARE DO YOU TEACH?</span>
                                <div class="faq-icon-plus">+</div>
                            </div>
                            <div class="faq-answer">
                                <p>We focus on the art of capturing nature's essence using standard creative tools, with a emphasis on organic storytelling.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <span>I'M UNABLE TO ACCESS THE COHORT CONTENT, WHAT SHOULD I DO?</span>
                                <div class="faq-icon-plus">+</div>
                            </div>
                            <div class="faq-answer">
                                <p>Please reach out to our sanctuary support at care@sashraherbals.com and our team will guide you back to your learning path.</p>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="faq-know-more">Know more</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Join Our Community Section -->
    <section class="community-section-layout">
        <div class="community-container">
            <div class="community-content">
                <div class="community-header">
                    <h2 class="community-title">JOIN OUR COMMUNITY</h2>
                    <p class="community-subtitle">RECEIVE SEASONAL RITUALS, EARLY ACCESS, AND BOTANICAL WISDOM</p>
                </div>
                
                <form class="community-form">
                    <input type="email" placeholder="Enter your Email here" class="community-input">
                    <button type="submit" class="community-submit">Join Now</button>
                </form>
                
                <div class="community-socials">
                    <span class="social-text">follow us on our social to stay update</span>
                    <div class="social-icons">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Decorative Leaf -->
            <div class="community-decor-leaf">
                <img src="assets/img/plant.png" alt="">
            </div>

        </div>
    </section>
    <!-- FAQ Accordion Script -->
    <script>
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                
                // Close other open items (optional, but cleaner)
                document.querySelectorAll('.faq-item').forEach(otherItem => {
                    otherItem.classList.remove('active');
                });
                
                if (!isActive) {
                    item.classList.add('active');
                }
            });
        });

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
                if (cartCountElement) {
                    cartCountElement.textContent = totalItems;
                    cartCountElement.style.transform = 'scale(1.3)';
                    setTimeout(() => cartCountElement.style.transform = 'scale(1)', 200);
                }

                // Update Summary Values
                if (subtotalVal) subtotalVal.textContent = `₹ ${subtotal}`;
                const shipping = subtotal > 0 ? 50 : 0;
                if (shippingVal) shippingVal.textContent = `₹ ${shipping}`;
                if (totalVal) totalVal.textContent = `₹ ${subtotal + shipping}`;
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
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
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

            updateCartUI();
        });
    </script>
</main>


<?php include('includes/footer.php'); ?>
