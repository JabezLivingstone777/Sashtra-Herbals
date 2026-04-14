// Sashra Herbals - Global Wishlist System

let wishlistState = JSON.parse(localStorage.getItem('sashra_wishlist')) || [];

function toggleWishlist(product) {
    const index = wishlistState.findIndex(item => item.id === product.id || item.title === product.title);
    
    if (index > -1) {
        // Remove
        wishlistState.splice(index, 1);
        showNotification(`${product.title} removed from wishlist`, 'info');
    } else {
        // Add
        wishlistState.push({
            id: product.id,
            title: product.title,
            category: product.category,
            price: product.price,
            image: product.image,
            size: product.size || '1pc',
            badge: product.badge || ''
        });
        showNotification(`${product.title} added to wishlist`, 'success');
    }
    
    localStorage.setItem('sashra_wishlist', JSON.stringify(wishlistState));
    syncWishlistUI();
}

function syncWishlistUI() {
    // Update all heart icons across the page
    document.querySelectorAll('.product-wishlist, .wishlist-action').forEach(btn => {
        // Try to identify the product by closest card or data attributes
        const card = btn.closest('.product-card');
        const productTitle = card ? card.querySelector('.product-title').textContent.trim() : document.getElementById('product-title')?.textContent.trim();
        
        const isInWishlist = wishlistState.some(item => item.title === productTitle);
        const icon = btn.querySelector('i');
        
        if (icon) {
            if (isInWishlist) {
                icon.classList.remove('fa-regular');
                icon.classList.add('fa-solid');
                btn.classList.add('liked');
            } else {
                icon.classList.remove('fa-solid');
                icon.classList.add('fa-regular');
                btn.classList.remove('liked');
            }
        }
    });

    // Update wishlist count link in header if it exists
    const wishlistCountEl = document.querySelector('.wishlist-count');
    if (wishlistCountEl) {
        wishlistCountEl.textContent = wishlistState.length;
    }
}

// Simple notification helper
function showNotification(message, type = 'success') {
    const container = document.getElementById('notification-container') || createNotificationContainer();
    const notification = document.createElement('div');
    notification.className = `wishlist-notification ${type}`;
    notification.innerHTML = `
        <div class="notif-content">
            <i class="fa-solid ${type === 'success' ? 'fa-heart' : 'fa-heart-crack'}"></i>
            <span>${message}</span>
        </div>
    `;
    container.appendChild(notification);
    
    setTimeout(() => {
        notification.classList.add('fade-out');
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

function createNotificationContainer() {
    const container = document.createElement('div');
    container.id = 'notification-container';
    document.body.appendChild(container);
    return container;
}

// Initial sync
document.addEventListener('DOMContentLoaded', () => {
    syncWishlistUI();
    
    // Attach event listeners to all wishlist buttons
    document.body.addEventListener('click', (e) => {
        const wishlistBtn = e.target.closest('.product-wishlist, .wishlist-action');
        if (wishlistBtn) {
            e.preventDefault();
            e.stopPropagation();
            
            const card = wishlistBtn.closest('.product-card');
            let product = {};
            
            if (card) {
                product = {
                    title: card.querySelector('.product-title').textContent.trim(),
                    category: card.querySelector('.product-category').textContent.trim(),
                    price: parseFloat(card.getAttribute('data-price')) || 0,
                    image: card.querySelector('.product-img-wrapper img').src,
                    id: card.getAttribute('data-id') || Date.now()
                };
            } else {
                // Product detail page
                product = {
                    title: document.getElementById('product-title')?.textContent.trim(),
                    category: document.getElementById('product-category')?.textContent.trim(),
                    price: parseFloat(document.getElementById('product-price')?.textContent.replace('₹ ', '')) || 0,
                    image: document.getElementById('main-product-image')?.src,
                    id: new URLSearchParams(window.location.search).get('id')
                };
            }
            
            if (product.title) {
                toggleWishlist(product);
            }
        }
    });
});
