   
   // Example code for adding items to the cart (this can be customized further)
   let cartCount = 0;
   
   function updateCartCount() {
     document.getElementById('cart-count').innerText = cartCount;
   }
   
   function addToCart() {
     cartCount;
     updateCartCount();
   }
   
   setInterval(() => addToCart(), 5000); // Simulate adding an item to the cart every 5 seconds

   
   document.addEventListener('DOMContentLoaded', function() {
    // Initialize Typed.js on the selected text
    const typed = new Typed('.multiple-text', {
        strings: ['Welcome to Pearl of Africa Cheese!', 'Discover our amazing cheese dishes!', 'Pairing cheese like never before!'],
        typeSpeed: 100,
        backSpeed: 100,
        backDelay: 1000,
        loop: true
    });

    // Apply ScrollReveal to the same text
    ScrollReveal().reveal('.multiple-text', {
        distance: '80px',
        duration: 1000,
        delay: 200
    });
});
