
  
  
  let cartCount = 0; // Cart item count

// Function to add items to the cart
function addToCart() {
    cartCount++;  // Increment item count
    updateCartCount(); // Update the displayed cart count
}

// Function to update the cart count on the button
function updateCartCount() {
    document.getElementById('cartCount').textContent = cartCount;
}

// Function to toggle cart visibility (for demonstration)
function toggleCart() {
    alert("Cart is shown. Total items: " + cartCount); // Just a simple example to show cart info
}
