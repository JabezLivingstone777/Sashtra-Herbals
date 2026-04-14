<?php include('includes/header.php'); ?>

<link rel="stylesheet" href="assets/css/checkout.css?v=<?php echo time(); ?>">

<main class="checkout-page">

    <!-- Step Progress Bar -->
    <div class="checkout-progress-bar">
        <div class="container">
            <div class="progress-steps">
                <a href="javascript:history.back()" class="progress-step completed">
                    <span class="step-label">CHECKOUT</span>
                </a>
                <span class="progress-arrow"><i class="fa-solid fa-arrow-right"></i></span>
                <span class="progress-step active">
                    <span class="step-label">SHIPPING</span>
                </span>
                <span class="progress-arrow"><i class="fa-solid fa-arrow-right"></i></span>
                <span class="progress-step">
                    <span class="step-label">PAYMENT</span>
                </span>
            </div>
        </div>
    </div>

    <!-- Checkout Body -->
    <div class="checkout-body">
        <div class="container">
            <div class="checkout-layout">

                <!-- LEFT: Form Panel -->
                <div class="checkout-form-panel">

                    <!-- Contact Info -->
                    <div class="form-section">
                        <h2 class="form-section-title">Contact Info</h2>

                        <div class="form-row two-col">
                            <div class="form-group">
                                <input type="text" id="full-name" class="form-input" placeholder="Enter your Full name" autocomplete="name">
                                <div class="input-underline"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" class="form-input" placeholder="Enter your Email" autocomplete="email">
                                <div class="input-underline"></div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <input type="tel" id="mobile" class="form-input" placeholder="Enter your Mobile Number" autocomplete="tel" pattern="[6-9][0-9]{9}" maxlength="10">
                                <div class="input-underline"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Shipping Address -->
                    <div class="form-section">
                        <h2 class="form-section-title">Shipping Address</h2>

                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" id="address1" class="form-input" placeholder="Address 1" autocomplete="address-line1">
                                <div class="input-underline"></div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" id="village" class="form-input" placeholder="Village/Town" autocomplete="address-level2">
                                <div class="input-underline"></div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" id="landmark" class="form-input" placeholder="Land mark">
                                <div class="input-underline"></div>
                            </div>
                        </div>

                        <div class="form-row two-col">
                            <div class="form-group select-group">
                                <select id="country" class="form-input form-select" autocomplete="country">
                                    <option value="India" selected>India</option>
                                    <option value="Other">Other</option>
                                </select>
                                <i class="fa-solid fa-chevron-down select-arrow"></i>
                                <div class="input-underline"></div>
                            </div>
                            <div class="form-group select-group">
                                <select id="state" class="form-input form-select" autocomplete="address-level1">
                                    <option value="" disabled selected>Select your State</option>
                                    <option>Andhra Pradesh</option>
                                    <option>Arunachal Pradesh</option>
                                    <option>Assam</option>
                                    <option>Bihar</option>
                                    <option>Chhattisgarh</option>
                                    <option>Goa</option>
                                    <option>Gujarat</option>
                                    <option>Haryana</option>
                                    <option>Himachal Pradesh</option>
                                    <option>Jharkhand</option>
                                    <option>Karnataka</option>
                                    <option>Kerala</option>
                                    <option>Madhya Pradesh</option>
                                    <option>Maharashtra</option>
                                    <option>Manipur</option>
                                    <option>Meghalaya</option>
                                    <option>Mizoram</option>
                                    <option>Nagaland</option>
                                    <option>Odisha</option>
                                    <option>Punjab</option>
                                    <option>Rajasthan</option>
                                    <option>Sikkim</option>
                                    <option>Tamil Nadu</option>
                                    <option>Telangana</option>
                                    <option>Tripura</option>
                                    <option>Uttar Pradesh</option>
                                    <option>Uttarakhand</option>
                                    <option>West Bengal</option>
                                    <option>Delhi</option>
                                </select>
                                <i class="fa-solid fa-chevron-down select-arrow"></i>
                                <div class="input-underline"></div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" id="pincode" class="form-input" placeholder="Enter your pincode" autocomplete="postal-code" pattern="[0-9]{6}" maxlength="6">
                                <div class="input-underline"></div>
                            </div>
                        </div>

                        <div class="form-row">
                            <label class="save-address-checkbox">
                                <input type="checkbox" id="save-address">
                                <span class="custom-checkbox"></span>
                                <span class="checkbox-label">Save this address for next order</span>
                            </label>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="form-actions">
                        <button type="button" class="btn-cancel" onclick="history.back()">Cancel</button>
                        <button type="button" class="btn-save" id="save-btn" onclick="saveAddress()">Save</button>
                    </div>
                </div>

                <!-- RIGHT: Order Summary Panel -->
                <div class="order-summary-panel">
                    <div class="order-summary-inner">
                        <div class="order-summary-header">
                            <h3 class="order-summary-title">Your Order</h3>
                            <button class="edit-order-btn" onclick="window.location.href='shop.php'" title="Edit Cart">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                        </div>

                        <div class="order-items-list" id="order-items-list">
                            <!-- Populated by JS from localStorage -->
                            <div class="order-empty-msg" id="order-empty">
                                <p>Your cart is empty.</p>
                                <a href="shop.php" class="back-to-shop-link">Shop Now</a>
                            </div>
                        </div>

                        <div class="order-summary-totals">
                            <div class="total-row">
                                <span class="total-label">Subtotal:</span>
                                <span class="total-value" id="checkout-subtotal">₹ 0</span>
                            </div>
                            <div class="total-row">
                                <span class="total-label">Shipping-Charges :</span>
                                <span class="total-value" id="checkout-shipping">₹ 0</span>
                            </div>
                            <div class="total-row grand-total-row">
                                <span class="total-label">Total :</span>
                                <span class="total-value grand-total" id="checkout-total">₹ 0</span>
                            </div>
                        </div>

                        <button class="btn-continue-payment" id="continue-payment-btn" onclick="proceedToPayment()">
                            Continue to Payment
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</main>

<?php include('includes/footer.php'); ?>

<script>
// Checkout Page Logic
document.addEventListener('DOMContentLoaded', function () {
    renderOrderSummary();
    loadSavedAddress();
});

function renderOrderSummary() {
    const cartState = JSON.parse(localStorage.getItem('sashra_cart')) || [];
    const container = document.getElementById('order-items-list');
    const emptyMsg = document.getElementById('order-empty');
    const subtotalEl = document.getElementById('checkout-subtotal');
    const shippingEl = document.getElementById('checkout-shipping');
    const totalEl = document.getElementById('checkout-total');

    if (cartState.length === 0) {
        if (emptyMsg) emptyMsg.style.display = 'block';
        subtotalEl.textContent = '₹ 0';
        shippingEl.textContent = '₹ 0';
        totalEl.textContent = '₹ 0';
        return;
    }

    if (emptyMsg) emptyMsg.style.display = 'none';

    let subtotal = 0;
    let html = '';

    cartState.forEach((item, index) => {
        const itemTotal = item.price * item.quantity;
        subtotal += itemTotal;
        html += `
            <div class="order-item" data-index="${index}">
                <div class="order-item-img">
                    <img src="${escapeHtml(item.image)}" alt="${escapeHtml(item.title)}"
                         onerror="this.src='assets/img/products/product1.png'">
                </div>
                <div class="order-item-info">
                    <span class="order-item-cat">${escapeHtml(item.category)}</span>
                    <h4 class="order-item-name">${escapeHtml(item.title)}</h4>
                    <span class="order-item-meta">25ml/<small>1qty</small></span>
                </div>
                <div class="order-item-controls">
                    <div class="order-qty-control">
                        <button type="button" class="order-qty-btn" onclick="changeOrderQty(${index}, -1)">−</button>
                        <span class="order-qty-val">${item.quantity}</span>
                        <button type="button" class="order-qty-btn" onclick="changeOrderQty(${index}, 1)">+</button>
                    </div>
                    <span class="order-item-price">₹ ${itemTotal}</span>
                    <button type="button" class="order-item-delete" onclick="removeOrderItem(${index})" title="Remove">
                        <i class="fa-regular fa-trash-can"></i>
                    </button>
                </div>
            </div>
        `;
    });

    container.innerHTML = html + (document.getElementById('order-empty')?.outerHTML || '');

    const shipping = subtotal > 0 ? 50 : 0;
    subtotalEl.textContent = '₹ ' + subtotal;
    shippingEl.textContent = '₹ ' + shipping;
    totalEl.textContent = '₹ ' + (subtotal + shipping);
}

function changeOrderQty(index, delta) {
    const cartState = JSON.parse(localStorage.getItem('sashra_cart')) || [];
    if (!cartState[index]) return;
    cartState[index].quantity = Math.max(1, cartState[index].quantity + delta);
    localStorage.setItem('sashra_cart', JSON.stringify(cartState));
    renderOrderSummary();
    // Also sync global cart count
    const cartCountEl = document.querySelector('.cart-count');
    if (cartCountEl) {
        const total = cartState.reduce((sum, i) => sum + i.quantity, 0);
        cartCountEl.textContent = total;
    }
}

function removeOrderItem(index) {
    const cartState = JSON.parse(localStorage.getItem('sashra_cart')) || [];
    cartState.splice(index, 1);
    localStorage.setItem('sashra_cart', JSON.stringify(cartState));
    renderOrderSummary();
    const cartCountEl = document.querySelector('.cart-count');
    if (cartCountEl) {
        const total = cartState.reduce((sum, i) => sum + i.quantity, 0);
        cartCountEl.textContent = total;
    }
}

function saveAddress() {
    const form = {
        fullName: document.getElementById('full-name').value.trim(),
        email: document.getElementById('email').value.trim(),
        mobile: document.getElementById('mobile').value.trim(),
        address1: document.getElementById('address1').value.trim(),
        village: document.getElementById('village').value.trim(),
        landmark: document.getElementById('landmark').value.trim(),
        country: document.getElementById('country').value,
        state: document.getElementById('state').value,
        pincode: document.getElementById('pincode').value.trim(),
    };

    // Basic validation
    if (!form.fullName || !form.email || !form.mobile) {
        showAlert('Please fill in all Contact Info fields.', 'error');
        return;
    }
    if (!form.address1 || !form.state || !form.pincode) {
        showAlert('Please fill in your complete Shipping Address.', 'error');
        return;
    }
    if (!/^[6-9][0-9]{9}$/.test(form.mobile)) {
        showAlert('Please enter a valid 10-digit Indian mobile number.', 'error');
        return;
    }
    if (!/^[0-9]{6}$/.test(form.pincode)) {
        showAlert('Please enter a valid 6-digit pincode.', 'error');
        return;
    }

    const saveCheckbox = document.getElementById('save-address');
    if (saveCheckbox && saveCheckbox.checked) {
        localStorage.setItem('sashra_shipping_address', JSON.stringify(form));
    }

    // Store for payment step
    sessionStorage.setItem('sashra_shipping_form', JSON.stringify(form));

    showAlert('Address saved! Proceeding to payment...', 'success');
    setTimeout(() => { proceedToPayment(); }, 900);
}

function proceedToPayment() {
    const form = sessionStorage.getItem('sashra_shipping_form');
    if (!form) {
        showAlert('Please fill in and save your shipping details first.', 'error');
        return;
    }
    const cart = JSON.parse(localStorage.getItem('sashra_cart')) || [];
    if (cart.length === 0) {
        showAlert('Your cart is empty. Please add items before proceeding.', 'error');
        return;
    }
    window.location.href = 'payment.php';
}

function loadSavedAddress() {
    const saved = localStorage.getItem('sashra_shipping_address');
    if (!saved) return;
    try {
        const form = JSON.parse(saved);
        const setVal = (id, val) => { const el = document.getElementById(id); if (el && val) el.value = val; };
        setVal('full-name', form.fullName);
        setVal('email', form.email);
        setVal('mobile', form.mobile);
        setVal('address1', form.address1);
        setVal('village', form.village);
        setVal('landmark', form.landmark);
        setVal('country', form.country);
        setVal('state', form.state);
        setVal('pincode', form.pincode);
        const cb = document.getElementById('save-address');
        if (cb) cb.checked = true;
    } catch(e) {}
}

function showAlert(msg, type) {
    const existing = document.querySelector('.checkout-alert');
    if (existing) existing.remove();
    const el = document.createElement('div');
    el.className = 'checkout-alert checkout-alert-' + type;
    el.textContent = msg;
    document.querySelector('.checkout-form-panel').prepend(el);
    setTimeout(() => el.remove(), 3500);
}

function escapeHtml(str) {
    if (!str) return '';
    return String(str)
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#039;');
}
</script>
