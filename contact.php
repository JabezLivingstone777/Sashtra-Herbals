<?php include('includes/header.php'); ?>

<main id="contact-page">

    <!-- Contact Hero Banner -->
    <section class="shop-hero-section contact-hero-style">
        <div class="contact-hero-content-wrap">
            <span class="about-hero-label">Get In Touch</span>
            <h1 class="shop-hero-title">Contact Us</h1>
            <p class="hero-subtitle">We'd love to hear from you. Reach out and we'll get back to you shortly.</p>
        </div>
    </section>



    <!-- Connect With Us Section (same as About page) -->
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

</main>

<?php include('includes/footer.php'); ?>

<script>
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
