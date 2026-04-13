// Sashra Herbals - Global Cart System

let cartState = JSON.parse(localStorage.getItem('sashra_cart')) || [];

function updateCartUI() {
    const cartCountElement = document.querySelector('.cart-count');
    const cartItemsContainer = document.querySelector('.cart-items-section');
    const subtotalVal = document.querySelector('.subtotal-val');
    const shippingVal = document.querySelector('.shipping-val');
    const totalVal = document.querySelector('.total-val');

    if (!cartItemsContainer) return;

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
                        <button class="qty-btn" onclick="window.updateCartQty(${index}, -1)">-</button>
                        <span class="qty-text">${item.quantity}</span>
                        <button class="qty-btn" onclick="window.updateCartQty(${index}, 1)">+</button>
                    </div>
                    <span class="cart-item-price">₹ ${item.price * item.quantity}</span>
                    <button class="cart-item-remove" onclick="window.removeCartItem(${index})">
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

    // Persist to LocalStorage
    localStorage.setItem('sashra_cart', JSON.stringify(cartState));
}

window.updateCartQty = (index, delta) => {
    cartState[index].quantity += delta;
    if (cartState[index].quantity < 1) cartState[index].quantity = 1;
    updateCartUI();
};

window.removeCartItem = (index) => {
    cartState.splice(index, 1);
    updateCartUI();
};

window.addToCart = (product) => {
    const existingItem = cartState.find(item => item.title === product.title);
    if (existingItem) {
        existingItem.quantity += product.quantity || 1;
    } else {
        cartState.push({
            ...product,
            quantity: product.quantity || 1
        });
    }
    updateCartUI();
    
    // Open modal
    const cartModal = document.getElementById('cart-modal');
    if (cartModal) cartModal.classList.add('active');
};

document.addEventListener('DOMContentLoaded', function() {
    const cartModal = document.getElementById('cart-modal');
    const closeModalBtns = document.querySelectorAll('.cart-close-btn, .continue-shopping-btn');
    const openCartBtn = document.querySelector('.cart-icon');

    if (openCartBtn) {
        openCartBtn.addEventListener('click', (e) => {
            e.preventDefault();
            if (cartModal) cartModal.classList.add('active');
        });
    }

    if (closeModalBtns) {
        closeModalBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                if (cartModal) cartModal.classList.remove('active');
            });
        });
    }

    window.addEventListener('click', (e) => {
        if (e.target === cartModal) cartModal.classList.remove('active');
    });

    updateCartUI();
});
