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
    <div class="cart-modal-container">
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

<script src="assets/js/wishlist.js?v=<?php echo filemtime('assets/js/wishlist.js'); ?>"></script>
<script src="assets/js/cart.js?v=<?php echo filemtime('assets/js/cart.js'); ?>"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
