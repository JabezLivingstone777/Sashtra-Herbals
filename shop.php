<?php 
include('includes/header.php'); 

// Dynamic Category Breadcrumb Logic
$selected_category = isset($_GET['category']) ? $_GET['category'] : '';

$category_map = [
    'Hair Care' => 'Hair.webp',
    'Skin Care' => 'skincare.webp',
    'Wellness' => 'wellneess.webp',
    'Weekend Rituals' => 'weekend ritual.webp',
    'Stress Relief' => 'stressrelief.webp',
    'AntiAging' => 'antiaging.webp'
];

$banner_image = 'breadcrum1.png'; // Default
if (!empty($selected_category) && isset($category_map[$selected_category])) {
    $banner_image = $category_map[$selected_category];
}

// Check which directory the image is in
if ($banner_image === 'breadcrum1.png') {
    $banner_path = 'assets/img/shop/' . $banner_image;
} else {
    $banner_path = 'assets/img/breadcrums/' . $banner_image;
}
?>

<main>
    <!-- Shop Breadcrumb Section -->
    <section class="shop-hero-section" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('<?php echo $banner_path; ?>');">
        <div class="container">
            <h1 class="shop-hero-title"><?php echo !empty($selected_category) ? htmlspecialchars($selected_category) : 'Our Shop'; ?></h1>
        </div>
    </section>

    <!-- Breadcrumb Slug Bar -->
    <div class="breadcrumb-slug-bar">
        <div class="container">
            <nav class="breadcrumb-nav">
                <a href="index.php" class="breadcrumb-link">Home</a>
                <span class="breadcrumb-separator">/</span>
                <?php if (!empty($selected_category)): ?>
                    <a href="shop.php" class="breadcrumb-link">Shop</a>
                    <span class="breadcrumb-separator">/</span>
                    <span class="breadcrumb-current"><?php echo htmlspecialchars($selected_category); ?></span>
                <?php else: ?>
                    <span class="breadcrumb-current">Shop</span>
                <?php endif; ?>
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
                        <h3>Categories</h3>
                        <span class="toggle-icon">-</span>
                    </div>
                    <ul class="sidebar-list" id="sidebar-categories">
                        <li>
                            <label class="custom-checkbox">
                                <input type="checkbox" data-category="Hair Care">
                                <span class="checkmark"></span>
                                Hair Care <span class="count">(5)</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-checkbox">
                                <input type="checkbox" data-category="Skin Care">
                                <span class="checkmark"></span>
                                Skin Care <span class="count">(2)</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-checkbox">
                                <input type="checkbox" data-category="Wellness">
                                <span class="checkmark"></span>
                                Wellness <span class="count">(3)</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-checkbox">
                                <input type="checkbox" data-category="Stress Relief">
                                <span class="checkmark"></span>
                                Stress Relief <span class="count">(5)</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-checkbox">
                                <input type="checkbox" data-category="Weekend Rituals">
                                <span class="checkmark"></span>
                                Weekend Rituals <span class="count">(7)</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-checkbox">
                                <input type="checkbox" data-category="AntiAging">
                                <span class="checkmark"></span>
                                AntiAging <span class="count">(1)</span>
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
                <div class="shop-product-grid" id="shop-product-grid">
                    <?php
                    $products = json_decode(file_get_contents(__DIR__ . '/assets/js/products.json'), true);
                    foreach ($products as $idx => $p):
                        $order = $idx + 1;
                    ?>
                    <div class="product-card" data-price="<?php echo $p['price']; ?>" data-order="<?php echo $order; ?>" data-category="<?php echo htmlspecialchars($p['category']); ?>">
                        <div class="product-img-wrapper">
                            <?php if (!empty($p['badge'])): ?>
                            <div class="product-badge"><?php echo htmlspecialchars($p['badge']); ?></div>
                            <?php endif; ?>
                            <div class="product-wishlist"><i class="fa-regular fa-heart"></i></div>
                            <a href="product.php?id=<?php echo $p['id']; ?>">
                                <img src="<?php echo htmlspecialchars($p['image']); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>">
                            </a>
                        </div>
                        <div class="product-info">
                            <span class="product-category"><?php echo htmlspecialchars($p['category']); ?></span>
                            <h4 class="product-title"><a href="product.php?id=<?php echo $p['id']; ?>"><?php echo htmlspecialchars($p['name']); ?></a></h4>
                            <div class="product-footer">
                                <span class="product-price">₹ <?php echo $p['price']; ?>/<small> <?php echo htmlspecialchars($p['size']); ?></small></span>
                                <button class="btn-add-to-cart"
                                    data-title="<?php echo htmlspecialchars($p['name']); ?>"
                                    data-category="<?php echo htmlspecialchars($p['category']); ?>"
                                    data-price="<?php echo $p['price']; ?>"
                                    data-image="<?php echo htmlspecialchars($p['image']); ?>">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </section>

    <script>
        // Category Filter
        function applyFilters() {
            const checked = Array.from(
                document.querySelectorAll('#sidebar-categories input[type="checkbox"]:checked')
            ).map(cb => cb.getAttribute('data-category'));

            document.querySelectorAll('.product-card').forEach(card => {
                if (checked.length === 0 || checked.includes(card.getAttribute('data-category'))) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        document.querySelectorAll('#sidebar-categories input[type="checkbox"]').forEach(cb => {
            cb.addEventListener('change', applyFilters);
        });

        // Auto-apply filter from URL param (e.g. ?category=Hair+Care)
        const urlParams = new URLSearchParams(window.location.search);
        const presetCategory = urlParams.get('category');
        if (presetCategory) {
            const match = document.querySelector(
                `#sidebar-categories input[data-category="${presetCategory}"]`
            );
            if (match) {
                match.checked = true;
                applyFilters();
            }
        }

        // Add to Cart
        document.querySelectorAll('.btn-add-to-cart').forEach(btn => {
            btn.addEventListener('click', function() {
                window.addToCart({
                    title: this.getAttribute('data-title'),
                    category: this.getAttribute('data-category'),
                    price: parseFloat(this.getAttribute('data-price')),
                    image: this.getAttribute('data-image'),
                    quantity: 1
                });
            });
        });

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
        const productGrid = document.getElementById('shop-product-grid');

        if (sortSelect) {
            sortSelect.addEventListener('change', function() {
                const criteria = this.value;
                const cards = Array.from(productGrid.querySelectorAll('.product-card'));

                cards.sort((a, b) => {
                    const priceA = parseFloat(a.getAttribute('data-price'));
                    const priceB = parseFloat(b.getAttribute('data-price'));
                    const orderA = parseInt(a.getAttribute('data-order'));
                    const orderB = parseInt(b.getAttribute('data-order'));

                    if (criteria === 'Price: Low to High') {
                        return priceA - priceB;
                    } else if (criteria === 'Price: High to Low') {
                        return priceB - priceA;
                    } else if (criteria === 'Newest First') {
                        return orderB - orderA;
                    }
                    return 0;
                });

                productGrid.innerHTML = '';
                cards.forEach(c => productGrid.appendChild(c));
            });
        }

    </script>
</main>

<?php include('includes/footer.php'); ?>