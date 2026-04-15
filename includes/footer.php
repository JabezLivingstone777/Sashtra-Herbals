<footer id="main-footer">
    <div class="footer-container">
        <!-- Main Links Layout (1240x236) -->
        <div class="footer-links-layout">
            <!-- Categories Column -->
            <div class="footer-col">
                <h4 class="footer-title">Categories</h4>
                <ul class="footer-list">
                    <li><a href="#">Hair Care</a></li>
                    <li><a href="#">Skin Care</a></li>
                    <li><a href="#">Wellness</a></li>
                    <li><a href="#">Stress-Relief</a></li>
                    <li><a href="#">Weekend Rituals</a></li>
                </ul>
            </div>

            <!-- Quick Link Column -->
            <div class="footer-col">
                <h4 class="footer-title">Quick Link</h4>
                <ul class="footer-list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>

            <!-- Support Column -->
            <div class="footer-col">
                <h4 class="footer-title">Support</h4>
                <ul class="footer-list support-list">
                    <li>111 Bijoy sarani, Dhaka, DH 1515, <br> Bangladesh.</li>
                    <li>exclusive@gmail.com</li>
                    <li>+88015-88888-9999</li>
                </ul>
            </div>
        </div>

        <!-- Decorative Floral Image -->
        <div class="footer-decor-floral">
            <img src="assets/img/OBJECTS.png" alt="" onerror="this.src='https://i.ibb.co/vzX8d7Q/floral-placeholder.png';">
        </div>

        <!-- Bottom Copyright -->
        <div class="footer-bottom-bar">
            <p class="copyright-text">
                <span class="copyright-icon">©</span> Copyright Rimel 2022. All right reserved
            </p>
        </div>
    </div>
</footer>

<!-- Cart Popup Modal -->
<div id="cart-modal" class="modal-overlay">
    <!-- ... existing cart modal ... -->
    <div class="cart-modal-container">
        <!-- (omitted for brevity, but I will keep the original content) -->
        <div class="cart-modal-header">
            <h2 class="cart-modal-title">Shop Now</h2>
            <button class="cart-close-btn">&times;</button>
        </div>
        
        <div class="cart-modal-body">
            <div class="cart-items-section">
                <!-- Dynamically populated via JS -->
            </div>
            
            <div class="cart-summary-section">
                <div class="summary-box">
                    <div class="summary-row">
                        <span class="summary-label">Subtotal:</span>
                        <span class="summary-value subtotal-val">₹ 0</span>
                    </div>
                    <div class="summary-row">
                        <span class="summary-label">Shipping-Charges :</span>
                        <span class="summary-value shipping-val">₹ 0</span>
                    </div>
                    <div class="summary-divider"></div>
                    <div class="summary-row total-row">
                        <span class="summary-label">Total :</span>
                        <span class="summary-value total-val">₹ 0</span>
                    </div>
                    
                    <button class="checkout-btn" onclick="window.location.href='checkout.php'">Checkout</button>
                </div>
            </div>
        </div>
        
        <div class="cart-modal-footer">
            <button class="continue-shopping-btn">Continue Shopping</button>
        </div>
    </div>
</div>

<!-- Auth Modal (Sign In / Sign Up) -->
<div id="auth-modal" class="modal-overlay">
    <div class="auth-modal-container" id="auth-container">
        
        <!-- Forms Wrapper -->
        <div class="auth-panels-wrapper">
            
            <!-- Sign Up Panel (Visible by default) -->
            <div class="auth-panel signup-panel">
                <div class="panel-content">
                    <h2 class="auth-title">Sign up</h2>
                    <form class="auth-form">
                        <div class="auth-input-group">
                            <input type="text" placeholder="Name*" required>
                        </div>
                        <div class="auth-input-group">
                            <input type="email" placeholder="Email*" required>
                        </div>
                        <div class="auth-input-group">
                            <input type="password" placeholder="Password*" required>
                        </div>
                        <button type="submit" class="auth-primary-btn">Create Account</button>
                    </form>
                    
                    <div class="auth-divider">
                        <span>or</span>
                    </div>
                    
                    <button class="auth-social-btn">
                        <img src="https://www.gstatic.com/images/branding/product/1x/gsa_512dp.png" alt="Google" width="20">
                        <span>Sign up with google</span>
                    </button>
                </div>
            </div>

            <!-- Sign In Panel -->
            <div class="auth-panel signin-panel">
                <div class="panel-content">
                    <h2 class="auth-title">Sign in</h2>
                    <form class="auth-form">
                        <div class="auth-input-group">
                            <input type="email" placeholder="Email*" required>
                        </div>
                        <div class="auth-input-group">
                            <input type="password" placeholder="Password*" required>
                        </div>
                        
                        <div class="auth-extra-actions">
                            <label class="remember-me">
                                <input type="checkbox"> <span>Remember me</span>
                            </label>
                            <a href="#" class="forgot-link">Forgot Password ?</a>
                        </div>
                        
                        <button type="submit" class="auth-primary-btn">Log in</button>
                    </form>
                    
                    <div class="auth-divider">
                        <span>or</span>
                    </div>
                    
                    <button class="auth-social-btn">
                        <img src="https://www.gstatic.com/images/branding/product/1x/gsa_512dp.png" alt="Google" width="20">
                        <span>Sign in with google</span>
                    </button>
                </div>
            </div>

        </div>

        <!-- Overlay / Sliding Image Panel -->
        <div class="auth-overlay-container">
            <div class="auth-overlay">
                <!-- Overlay Left (Visible when Sign In is active) -->
                <div class="overlay-panel overlay-left">
                    <h2 class="switch-title">CREATE ACCOUNT</h2>
                    <button class="auth-outline-btn" id="to-signup">Sign Up</button>
                </div>
                <!-- Overlay Right (Visible when Sign Up is active) -->
                <div class="overlay-panel overlay-right">
                    <h2 class="switch-title">ALREADY HAVE ACCOUNT?</h2>
                    <button class="auth-outline-btn" id="to-signin">Sign In</button>
                </div>
            </div>
        </div>

        <button class="auth-close-btn" id="auth-close">&times;</button>
    </div>
</div>

<script src="assets/js/wishlist.js?v=<?php echo filemtime('assets/js/wishlist.js'); ?>"></script>
<script src="assets/js/cart.js?v=<?php echo filemtime('assets/js/cart.js'); ?>"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
