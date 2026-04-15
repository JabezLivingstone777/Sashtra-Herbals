<?php include('includes/header.php'); ?>

<main id="about-page">

    <!-- About Hero Banner -->
    <section class="about-hero-section">
        <div class="about-hero-overlay">
            <div class="about-hero-content">
                <span class="about-hero-label">Our Story</span>
                <h1 class="about-hero-title">Rooted in Nature,<br>Crafted with Care</h1>
                <p class="about-hero-subtitle">Empowering Your Wellness Through Thoughtful Herbal Care</p>
            </div>
        </div>
    </section>

    <!-- Brand Story Section -->
    <section class="about-brand-section">
        <div class="about-brand-container">
            <div class="about-brand-left">
                <span class="about-section-label">Who We Are</span>
                <h2 class="about-brand-title">The Heart Behind Sastra Herbals</h2>
                <p class="about-brand-text">
                    Born from a deep reverence for nature and ancestral wisdom, Sastra Herbals was founded with one mission—to bring the healing power of plants into your daily life, without compromise.
                </p>
                <p class="about-brand-text">
                    We work closely with nature to craft gentle, effective formulations that nurture your body, mind, and everyday rituals. Every product is a testament to purity, potency, and purpose.
                </p>
                <div class="about-brand-values">
                    <div class="about-value-item">
                        <span class="about-value-icon"><i class="fa-solid fa-leaf"></i></span>
                        <span class="about-value-text">100% Natural</span>
                    </div>
                    <div class="about-value-item">
                        <span class="about-value-icon"><i class="fa-solid fa-flask-vial"></i></span>
                        <span class="about-value-text">No Synthetics</span>
                    </div>
                    <div class="about-value-item">
                        <span class="about-value-icon"><i class="fa-solid fa-seedling"></i></span>
                        <span class="about-value-text">Ethically Sourced</span>
                    </div>
                </div>
            </div>
            <div class="about-brand-right">
                <div class="about-brand-img-frame">
                    <img src="assets/img/shopbyconcern/Rectangle18.png" alt="Sastra Herbals Story"
                         onerror="this.src='https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?q=80&w=2640&auto=format&fit=crop';">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="about-stats-section">
        <div class="about-stats-container">
            <div class="about-stat-item">
                <span class="about-stat-number">100%</span>
                <span class="about-stat-label">Natural Ingredients</span>
            </div>
            <div class="about-stat-divider"></div>
            <div class="about-stat-item">
                <span class="about-stat-number">20+</span>
                <span class="about-stat-label">Herbal Extracts</span>
            </div>
            <div class="about-stat-divider"></div>
            <div class="about-stat-item">
                <span class="about-stat-number">5000+</span>
                <span class="about-stat-label">Happy Customers</span>
            </div>
            <div class="about-stat-divider"></div>
            <div class="about-stat-item">
                <span class="about-stat-number">Zero</span>
                <span class="about-stat-label">Synthetic Preservatives</span>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="about-mission-section">
        <div class="about-mission-container">
            <div class="about-mission-img">
                <img src="assets/img/products/women.png" alt="Our Mission"
                     onerror="this.src='https://images.unsplash.com/photo-1512403754473-27834f0b99ce?q=80&w=2670&auto=format&fit=crop';">
            </div>
            <div class="about-mission-text">
                <span class="about-section-label">Our Mission</span>
                <h2 class="about-mission-title">Empowering Wellness Through Every Ritual</h2>
                <p class="about-mission-desc">
                    At Sastra Herbals, we believe wellness is not a destination—it's a daily practice. Our mission is to make nature's finest botanicals accessible, effective, and indulgent for every individual.
                </p>
                <p class="about-mission-desc">
                    Each product in our collection is carefully formulated using time-tested Ayurvedic principles, combined with modern scientific understanding of plant chemistry—delivering real results you can feel and see.
                </p>
                <a href="shop.php" class="btn btn-primary about-mission-btn">Explore Our Products</a>
            </div>
        </div>
    </section>

    <!-- Connect With Us Section -->
    <section class="about-connect-section" id="contact">
        <div class="about-connect-outer">

            <!-- Left Column: Connect with us -->
            <div class="connect-left-container">
                <h2 class="connect-main-title">Connect with us</h2>
                <p class="connect-description">
                    Empowering Your Wellness Through Thoughtful Herbal Care<br>
                    We work closely with nature to craft gentle, effective<br>
                    formulations that nurture your body, mind, and everyday<br>
                    rituals.
                </p>

                <div class="connect-info-list">
                    <!-- Phone -->
                    <div class="connect-info-item">
                        <div class="connect-icon-circle">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <div class="connect-info-detail">
                            <span class="connect-info-text">+91 9052724545</span>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="connect-info-item">
                        <div class="connect-icon-circle">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="connect-info-detail">
                            <span class="connect-info-text">SASTRA HERBALS, Industrial Estate, B-1, IDA,<br>
                            Musi Nagar, Moula Ali, Hyderabad,<br>
                            Secunderabad, Telangana 500040</span>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="connect-info-item">
                        <div class="connect-icon-circle">
                            <i class="fa-solid fa-paper-plane"></i>
                        </div>
                        <div class="connect-info-detail">
                            <span class="connect-info-text">shashtraherbal@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Contact Form -->
            <div class="connect-right-container">
                <div class="connect-form-wrapper">
                    <h3 class="connect-form-title">Let us know more about you and your goals</h3>

                    <form class="connect-form" action="#" method="POST">
                        <!-- Name Row -->
                        <div class="connect-form-row">
                            <div class="connect-field-group">
                                <input type="text" class="connect-input" placeholder="First Name" id="first-name" name="first_name">
                            </div>
                            <div class="connect-field-group">
                                <input type="text" class="connect-input" placeholder="Last Name" id="last-name" name="last_name">
                            </div>
                        </div>

                        <!-- Email & Phone Row -->
                        <div class="connect-form-row">
                            <div class="connect-field-group connect-field-email">
                                <span class="connect-input-icon"><i class="fa-regular fa-envelope"></i></span>
                                <input type="email" class="connect-input connect-input-with-icon" placeholder="Enter your email" id="contact-email" name="email">
                            </div>
                            <div class="connect-field-group connect-field-phone">
                                <div class="connect-phone-prefix">
                                    <img src="https://flagcdn.com/w20/in.png" alt="India" class="connect-flag">
                                    <span class="connect-dropdown-arrow">&#9660;</span>
                                    <span class="connect-country-code">+91</span>
                                </div>
                                <input type="tel" class="connect-input connect-input-phone" placeholder="" id="contact-phone" name="phone">
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="connect-field-group connect-field-full">
                            <textarea class="connect-textarea" placeholder="Write your Query Here" id="contact-message" name="message" rows="5"></textarea>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="connect-submit-btn" id="connect-submit">Submit Now</button>
                    </form>
                </div>
            </div>

        </div>
    </section>

</main>

<?php include('includes/footer.php'); ?>

<script>
    // Connect form submission handler
    document.getElementById('connect-submit')?.addEventListener('click', function(e) {
        e.preventDefault();
        const btn = this;
        btn.textContent = 'Sending...';
        btn.style.opacity = '0.7';
        setTimeout(() => {
            btn.textContent = 'Message Sent!';
            btn.style.background = '#8A9B64';
            setTimeout(() => {
                btn.textContent = 'Submit Now';
                btn.style.opacity = '1';
                btn.style.background = '';
                document.querySelector('.connect-form').reset();
            }, 2500);
        }, 1200);
    });
</script>
