
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>

  <title>PEARL OF AFRICA CHEESE</title>
  
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
      tailwind.config = {
          plugins: [require('daisyui')],
      }
  </script>
  
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.0.0/dist/full.css" rel="stylesheet">
  
  <script src="//unpkg.com/alpinejs" defer></script>
  <link rel="shortcut icon" href="log.jpg" type="image/x-icon">

  <link rel="stylesheet" href="style.css">

</head>
<body>
  <header class="navbar">
    <div class="flex items-center">
        <img src="log.jpg" alt="Pearl of Africa Cheese" class="h-8 w-8 mr-2">
        <span class="text-xl font-bold">PEARL OF AFRICA CHEESE</span>
    </div>

    <nav class="nav-links">
      <ul>
        <li><a href="#home" i class="fas fa-home">HOME</a></li>
        <li><a href="#products" i class="fas fa-box">PRODUCTS</a></li>
        <li><a href="#shop" i class="fas fa-shopping-cart">SHOP</a></li>
        <li><a href="#about" i class="fas fa-info">ABOUT</a></li>
        <li><a href="#contact" i class="fas fa-inbox">CONTACT</a></li>
      </ul>
    </nav>
    
    <div class="user-actions">
      <a href="cart.html" class="cart-icon">
        <span id="cart-count">0</span> 🛒
      </a>
      <!-- User Actions -->
      <div class="d-flex gap-2 ms-lg-3">
        <a href="forms.php" id="loginButton" class="btn btn-outline rounded-pill px-3" style="background-color: black; color:darkgoldenrod">Login / Sign up
        </a>
    </div>
    </div>
  </header>

  <section id="home" class="relative h-screen bg-gray-200">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('hot_dogs.jpg'); filter: brightness(0.5);"></div>

    <!-- Text Content -->
    <div class="relative z-10 container mx-auto flex flex-col items-center justify-center h-full text-center text-white">
        <h1 class="multiple-text text-4xl md:text-5xl font-bold mt-6" style="color: rgb(9, 194, 9);">Welcome to Pearl of Africa Cheese!</h1>
        <p class="text-lg md:text-3xl font-bold mt-4">Welcome to Pearl of Africa Cheese!
            <br> the home of extra-ordinary and affordable cheese and more!</p>
    </div>
</section>

          <!--PRODUCTS SECTION-->
          
<section id="products" class="py-24" style="background-color: darkgreen">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-8" style="color:darkgoldenrod;">OUR CHEESE MENU</h2>
        <p class="text-lg mb-12" style="color: black;">Explore our extra-ordinary and affordable cheese crafted from the finest ingredients of Africa.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Cheese Item 1 -->
            <div class="bg-gray-800 rounded-lg shadow-lg p-6 transition-transform transform hover:scale-105" style="background-color: darkgoldenrod;">
                <img src="CHEDDAR CHEESE.jpg" alt="Cheddar Cheese" class="w-full h-48 rounded-lg object-cover mb-4">
                <h3 class="text-2xl font-semibold" style="color: darkgreen;">CHEDDAR CHEESE</h3>
                <p class="text-black mb-2">A rich, sharp cheese with a creamy texture, perfect for sandwiches or a cheese platter.</p>
            </div>

            <!-- Cheese Item 2 -->
            <div class="rounded-lg shadow-lg p-6 transition-transform transform hover:scale-105" style="background-color: darkgoldenrod;">
                <img src="MOZARELLA.jpg" alt="Mozzarella Cheese" class="w-full h-48 rounded-lg object-cover mb-4">
                <h3 class="text-2xl font-semibold" style="color: darkgreen;">MOZZARELLA CHEESE</h3>
                <p class="text-black mb-2">Soft and milky, this cheese is perfect for pizzas, salads, and pastas.</p>
            </div>

            <!-- Cheese Item 3 -->
            <div class="bg-gray-800 rounded-lg shadow-lg p-6 transition-transform transform hover:scale-105" style="background-color: darkgoldenrod;">
                <img src="BRIE.jpg" alt="Brie Cheese" class="w-full h-48 rounded-lg object-cover mb-4">
                <h3 class="text-2xl font-semibold" style="color: darkgreen;">FETA CHEESE</h3>
                <p class="text-black mb-2">Tangy and salty, perfect for salads and Mediterranean dishes.</p>
            </div>

            <!-- Cheese Item 4 -->
            <div class="bg-gray-100 rounded-lg shadow-lg p-6 transition-transform transform hover:scale-105" style="background-color: darkgoldenrod;">
                <img src="g.jpg" alt="Gouda Cheese" class="w-full h-48 rounded-lg object-cover mb-4">
                <h3 class="text-2xl font-semibold" style="color: darkgreen;">GOUDA CHEESE</h3>
                <p class="text-black mb-2">A smooth, nutty cheese with a rich flavor that pairs well with fruits.</p>
            </div>

            <!-- Cheese Item 5 -->
            <div class="bg-gray-100 rounded-lg shadow-lg p-6 transition-transform transform hover:scale-105" style="background-color: darkgoldenrod;">
                <img src="blue.jpg" alt="Blue Cheese" class="w-full h-48 rounded-lg object-cover mb-4">
                <h3 class="text-2xl font-semibold" style="color: darkgreen;">PUNNER CHEESE</h3>
                <p class="text-black mb-2">Fresh and milky, ideal for pizzas and caprese salads.</p>
            </div>

            <!-- Cheese Item 6 -->
            <div class="bg-gray-100 rounded-lg shadow-lg p-6 transition-transform transform hover:scale-105" style="background-color: darkgoldenrod;">
                <img src="PARMESAN .jpg" alt="Parmesan Cheese" class="w-full h-48 rounded-lg object-cover mb-4">
                <h3 class="text-2xl font-semibold" style="color: darkgreen;">PARMESAN CHEESE</h3>
                <p class="text-black mb-2">A hard, aged cheese with a sharp, salty flavor. Perfect for grating over pasta.</p>
            </div>
             <!-- Cheese Item 7 -->
             <div class="bg-gray-100 rounded-lg shadow-lg p-6 transition-transform transform hover:scale-105" style="background-color: darkgoldenrod;">
                <img src="par.webp" alt="Parmesan Cheese" class="w-full h-48 rounded-lg object-cover mb-4">
                <h3 class="text-2xl font-semibold" style="color: darkgreen;">HALLOUME CHEESE</h3>
                <p class="text-black mb-2">A classic cypriot cheese that`s perfect for grilling,frying and snacking.</p>
            </div>
        </div>
    </div>
</section>

<section id="shop" class="py-12" style="background-color: darkgoldenrod;">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-10" style="color: darkgreen;">SHOP WITH US NOW</h2>

               <!-- Notification about negotiable prices for bulk purchases -->
               <div class=" text-center mb-8 p-4 rounded-lg shadow-md" style="background-color: black;">
                <p class="text-lg font-semibold" style="color: darkgoldenrod;">💡 Special Offer: Prices are negotiable if you buy in bulk! Contact us for more details.</p>
            </div>
        </div>

            <!-- Cheese cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="cheeseGrid">
    
                <!-- Halloume cheese -->
                <div class="card shadow-lg hover:shadow-xl transition-transform transform hover:scale-105" style="background-color: black;">
                    <figure class="px-10 pt-10">
                        <img src="ched.jpg" alt="Cheddar Cheese" class="rounded-xl h-50 object-cover">
                    </figure>
                    <div class="card-body text-center">
                        <h3 class="text-xl font-bold" style="color: darkgoldenrod;">HALLOUME CHEESE</h3>
                        <p class="mt-2" style="color: darkgreen;">Aged for perfection, Cheddar offers a rich, sharp flavor and smooth texture.</p>
                        <p class="text-lg font-bold mt-4" style="color: darkgoldenrod;">UGX 20000 per kg</p>
                        <div class="mt-4">
                            <button onclick="addToCart('HALLOUME CHEESE', 20000)" class="btn w-full order-btn" style="background-color: darkgreen; color: darkgoldenrod;">ADD TO CART</button>
                        </div>
                    </div>
                </div>
    
                <!-- parmesan Cheese -->
                <div class="card shadow-lg hover:shadow-xl transition-transform transform hover:scale-105" style="background-color: black;">
                    <figure class="px-10 pt-10">
                        <img src="GROUND.jpg" alt="Gouda Cheese" class="rounded-xl h-50 object-cover">
                    </figure>
                    <div class="card-body text-center">
                        <h3 class="text-xl font-bold" style="color: darkgoldenrod;">PARMESAN CHEESE</h3>
                        <p class="mt-2" style="color: darkgreen;">Rich, creamy, and slightly sweet, perfect for snacking or cooking.</p>
                        <p class="text-lg font-bold mt-4" style="color: darkgoldenrod;">UGX 22000 per kg</p>
                        <div class="mt-4">
                            <button class="btn w-full order-btn" style="background-color: darkgreen; color: darkgoldenrod;">ADD TO CART</button>
                        </div>
                    </div>
                </div>
    
                <!-- Punner Cheese -->
                <div class="card bg-white shadow-lg hover:shadow-xl transition duration-300 transition-transform transform hover:scale-105" style="background-color: black;">
                    <figure class="px-10 pt-10">
                        <img src="par.webp" alt="Parmesan Cheese" class="rounded-xl h-50 object-cover">
                    </figure>
                    <div class="card-body text-center">
                        <h3 class="text-xl font-bold" style="color: darkgoldenrod;">PUNNER CHEESE</h3>
                        <p class="mt-2" style="color: darkgreen;">Aged for 24 months, ideal for grating over pasta and salads.</p>
                        <p class="text-lg font-bold mt-4" style="color: darkgoldenrod;">UGX 30000 per kg</p>
                        <div class="mt-4">
                            <button class="btn w-full order-btn" style="background-color: darkgreen; color: darkgoldenrod;">ADD TO CART</button>
                        </div>
                    </div>
                </div>
    
                <!-- gouda Cheese) -->
                <div class="card bg-white shadow-lg hover:shadow-xl transition duration-300 transition-transform transform hover:scale-105" style="background-color: black;">
                    <figure class="px-10 pt-10">
                        <img src="feta.jpg" alt="Feta Cheese" class="rounded-xl h-50 object-cover">
                    </figure>
                    <div class="card-body text-center">
                        <h3 class="text-xl font-bold" style="color: darkgoldenrod;">GOUDA CHEESE</h3>
                        <p class="mt-2" style="color: darkgreen;">Tangy and salty, perfect for salads and Mediterranean dishes.</p>
                        <p class="text-lg font-bold mt-4" style="color: darkgoldenrod;">UGX 25000 per kg</p>
                        <div class="mt-4">
                            <button class="btn w-full order-btn" style="background-color: darkgreen; color: darkgoldenrod;">ADD TO CART</button>
                        </div>
                    </div>
                </div>
    
                <!-- feta Cheese -->
                <div class="card bg-white shadow-lg hover:shadow-xl transition duration-300 transition-transform transform hover:scale-105" style="background-color: black;">
                    <figure class="px-10 pt-10">
                        <img src="blue cheese.webp" alt="Blue Cheese" class="rounded-xl h-50 object-cover">
                    </figure>
                    <div class="card-body text-center">
                        <h3 class="text-xl font-bold" style="color: darkgoldenrod;">FETA CHEESE</h3>
                        <p class="mt-2" style="color: darkgreen;">Pungent and bold with blue veins, perfect for strong cheese lovers.</p>
                        <p class="text-lg font-bold mt-4" style="color: darkgoldenrod;">UGX 32000 per kg</p>
                        <div class="mt-4">
                            <button class="btn w-full order-btn" style="background-color: darkgreen; color: darkgoldenrod;">ADD TO CART</button>
                        </div>
                    </div>
                </div>
    
                <!-- mozzallera -->
                <div class="card bg-white shadow-lg hover:shadow-xl transition duration-300 transition-transform transform hover:scale-105" style="background-color: black;">
                    <figure class="px-10 pt-10">
                        <img src="pune.jpg" alt="Puneer Cheese" class="rounded-xl h-50 object-cover">
                    </figure>
                    <div class="card-body text-center">
                        <h3 class="text-xl font-bold" style="color: darkgoldenrod;">MOZARELLA CHEESE</h3>
                        <p class="mt-2" style="color: darkgreen;">Fresh and milky, ideal for pizzas and caprese salads.</p>
                        <p class="text-lg font-bold mt-4" style="color: darkgoldenrod;">UGX 23000 per kg</p>
                        <div class="mt-4">
                            <button class="btn w-full order-btn" style="background-color: darkgreen; color: darkgoldenrod;">ADD TO CART</button>
                        </div>
                    </div>
                </div>

                <!-- CHEDDAR -->
                <div class="card bg-white shadow-lg hover:shadow-xl transition duration-300 transition-transform transform hover:scale-105" style="background-color: black;">
                    <figure class="px-10 pt-10">
                        <img src="pune.jpg" alt="Puneer Cheese" class="rounded-xl h-50 object-cover">
                    </figure>
                    <div class="card-body text-center">
                        <h3 class="text-xl font-bold" style="color: darkgoldenrod;">CHEDDAR CHEESE</h3>
                        <p class="mt-2" style="color: darkgreen;">Fresh and milky, ideal for pizzas and caprese salads.</p>
                        <p class="text-lg font-bold mt-4" style="color: darkgoldenrod;">UGX 23000 per kg</p>
                        <div class="mt-4">
                            <button onclick="addToCart" class="btn w-full order-btn" style="background-color: darkgreen; color: darkgoldenrod;">ADD TO CART</button>
                        </div>
                    </div>
                </div>
    
            </div>
    
        
            </div>
    </section>

    <section id="about" class="py-24" style="background-color: darkgreen;">
        <div class="container mx-auto text-center">
            <!-- Title -->
            <h2 class="text-4xl font-extrabold mb-6 text-blue-900 transition-all" style="color: darkgoldenrod;">
                About Us
            </h2>
    
            <!-- Paragraph Text -->
            <p class="text-lg text-gray-800 mb-12 max-w-3xl mx-auto leading-relaxed transition-all duration-500 hover:scale-105" style="color: black;">
                At <span class="font-semibold" style="color: darkgoldenrod;">Pearl of Africa Cheese</span>, We Are Passionate About Crafting The Finest Cheeses, Using Traditional Methods And Locally Sourced Ingredients. Our Journey Began With A Simple Mission: To Bring The Authentic Taste Of Artisan Cheese To Your Table. 
                Each Cheese We Produce Reflects Our Commitment To <span class="font-semibold" style="color: darkgoldenrod;">Quality, Sustainability, And The Rich Flavors Of The Land.</span>
            </p>
    
            <!-- Image -->
            <img class="w-full h-64 object-cover rounded-lg mb-10 shadow-lg transform hover:scale-105 transition duration-500" src="g.jpg" alt="Assorted Cheese Selection">
    
            <!-- Subtitle -->
            <h3 class="text-2xl font-semibold mb-4" style="color: black;">Our Values</h3>
    
            <!-- Values List -->
            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-8 mb-12">
                <!-- Quality -->
                <li class="rounded-lg shadow-md p-6 transform transition-transform duration-300 hover:scale-105" style="background-color: darkgoldenrod;">
                    <h4 class="text-xl font-bold mb-2" style="color: darkgreen;">Quality</h4>
                    <p class="text-black">We believe in using only the best ingredients to create exceptional cheese.</p>
                </li>
    
                <!-- Sustainability -->
                <li class="rounded-lg shadow-md p-6 transform transition-transform duration-300 hover:scale-105" style="background-color: darkgoldenrod;">
                    <h4 class="text-xl font-bold" style="color: darkgreen;">Sustainability</h4>
                    <p class="text-black">Our cheese is made with eco-friendly practices, ensuring we protect our planet.</p>
                </li>
    
                
                <li class="rounded-lg shadow-md p-6 transform transition-transform duration-300 hover:scale-105" style="background-color: darkgoldenrod;">
                    <h4 class="text-xl font-bold mb-2" style="color: darkgreen;">Tradition</h4>
                    <p class="text-black">We honor traditional cheese-making techniques passed down through generations.</p>
                </li>
    
                
                <li class="rounded-lg shadow-md p-6 transform transition-transform duration-300 hover:scale-105" style="background-color: darkgoldenrod;">
                    <h4 class="text-xl font-bold mb-2" style="color: green;">Community</h4>
                    <p class="text-black">We support local farmers and promote a strong, connected community.</p>
                </li>
            </ul>
    
            
            <p class="text-lg mb-8 max-w-2xl mx-auto leading-relaxed transition-all duration-500 hover:scale-105" style="color: black;">
                Join us on this delicious journey and discover the world of artisan cheeses. Whether you are a cheese lover or a curious foodie, we have something special for you. 
                Explore our menu and experience the best that cheese has to offer!
            </p>
    
            
            <a href="#products" class="btn btn-outline-black rounded-pill px-3" style="background-color: black; color: darkgoldenrod;">
             Explore Our Menu
            </a>
        </div>
    </section>

    <section id="contact" class="py-16" style="background-color: darkgoldenrod;">
        <div class="container mx-auto px-4">
          <div class="text-center mb-12">
            <h2 class="text-4xl font-bold" style="color: green;">CONTACT US</h2>
            <p class="text-black mt-2 text-2xl">We Offer The Best Quality Products!</p>
          </div>
      
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Reservation form -->
            <div class="p-8 shadow-lg rounded-lg" style="background-color: darkgreen;">

              <form>
                <div class="form-control mb-4">
                  <label class="label">
                    <span class="label text-xl" style="color: black;">Name</span>
                  </label>
                  <input type="text" placeholder="Your Name" class="input input-bordered w-full" style="background-color: white; color: black;" required>
                </div>
                <div class="form-control mb-4">
                  <label class="label">
                    <span class="label text-xl" style="color: black;">Email</span>
                  </label>
                  <input type="email" placeholder="Your Email" class="input input-bordered w-full" style="background-color: white; color: black;" required>
                </div>
                <div class="form-control mb-4">
                  <label class="label">
                    <span class="label text-xl" style="color: black;">Phone</span>
                  </label>
                  <input type="tel" placeholder="Your Phone Number" class="input input-bordered w-full" style="background-color: white; color: black;" required>
                </div>
                <div class="form-control mb-4">
                    <label class="label">
                      <span class="label text-xl" style="color: black;">Message</span>
                    </label>
                    <input type="text" placeholder="Enter Your Message" class="input input-bordered w-full" style="background-color: white; color: black;" required>
                  </div>
                
                <button type="submit" class="btn w-full" style="background-color: black; color: darkgoldenrod;">
                  Submit Message
                </button>
              </form>
            </div>
      
            <!-- Reservation Information -->
            <div class="flex flex-col justify-center items-center text-center p-8 shadow-lg rounded-lg" style="background-color: darkgreen;">
              <h3 class="text-3xl font-bolder" style="color: goldenrod;">Visit Us</h3>
              <p class="mt-4 font-bold" style="color: black;">
                Come and enjoy our cheesy masterpieces made with the finest ingredients.
              </p>
              <p class="mt-2 font-bold" style="color: black;">
                Address: Wakaliga Rubaga division
              </p>
              <p class="mt-2 font-bold" style="color: black;">
                Phone:  +256 705 885 495
                phone:  +256 777 119 194
              </p>
              <p class="mt-2 font-bold" style="color: black;">
                Email: pearlofafricastepc@gmail.com
              </p>
            </div>
          </div>
        </div>
      </section>

    

    <footer class="py-8" style="background-color: darkgreen;">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
            
            <!-- About Section -->
            <div>
                <h4 class="text-lg font-bold mb-4" style="color: darkgoldenrod;">Pearl of Africa Cheese</h4>
                <p class="text-sm" style="color: black;">Bringing the finest artisan cheeses to your table with a commitment to quality and tradition.</p>
            </div>
            
            <!-- Blogs and FAQs -->
            <div>
                <h4 class="text-lg font-bold mb-4" style="color: darkgoldenrod;">Quick Links</h4>
                <ul>
                    <li><a href="#blogs" class="text-sm text-black hover:text-white transition duration-300">Blogs</a></li>
                    <li><a href="#faqs" class="text-sm text-black hover:text-white transition duration-300">FAQs</a></li>
                </ul>
            </div>
    
            
            <div>
                <h4 class="text-lg font-bold mb-4" style="color: darkgoldenrod;">Contact Us</h4>
                <ul>
                    <li class="text-sm text-black">Phone: +256 705 885 495</li>
                    <li class="text-sm text-black">Phone: +256 777 119 194</li>
                    <li class="text-sm text-black">Email: <a href="" class="hover:text-black transition duration-300">
                        pearlofafricastepc@gmail.com</a></li>
                </ul>
            </div>
        </div>

        <!-- Social Media Icons -->
        <div class="container mx-auto mt-8 flex justify-center space-x-6">
            <a href="https://facebook.com" target="_blank" class="hover:text-black transition duration-300" style="color: darkgoldenrod;">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.675 0h-21.35c-.729 0-1.325.596-1.325 1.325v21.351c0 .728.596 1.324 1.325 1.324h11.497v-9.283h-3.129v-3.621h3.129v-2.671c0-3.099 1.894-4.787 4.661-4.787 1.325 0 2.463.099 2.793.143v3.24h-1.918c-1.504 0-1.795.715-1.795 1.764v2.311h3.588l-.467 3.621h-3.121v9.283h6.116c.729 0 1.325-.596 1.325-1.324v-21.35c0-.729-.596-1.325-1.325-1.325z"/>
                </svg>
            </a>
            <a href="https://twitter.com" target="_blank" class="hover:text-black transition duration-300" style="color: darkgoldenrod;">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-2.719 0-4.924 2.206-4.924 4.924 0 .386.043.762.128 1.124-4.092-.205-7.719-2.165-10.141-5.144-.424.729-.667 1.575-.667 2.476 0 1.708.87 3.215 2.19 4.099-.807-.026-1.566-.247-2.228-.617v.062c0 2.385 1.698 4.374 3.946 4.827-.413.112-.849.172-1.296.172-.317 0-.626-.03-.927-.086.627 1.956 2.445 3.379 4.6 3.419-1.685 1.321-3.809 2.11-6.114 2.11-.398 0-.79-.023-1.177-.068 2.179 1.396 4.768 2.21 7.548 2.21 9.055 0 14.01-7.505 14.01-14.01 0-.213-.005-.426-.014-.637.962-.694 1.8-1.562 2.462-2.549z"/>
                </svg>
            </a>
            <a href="https://instagram.com" target="_blank" class="hover:text-black transition duration-300" style="color: darkgoldenrod;">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.206.056 1.878.246 2.318.41.586.22 1.01.48 1.45.92.44.44.7.864.92 1.45.163.44.354 1.112.41 2.318.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.056 1.206-.246 1.878-.41 2.318-.22.586-.48 1.01-.92 1.45-.44.44-.864.7-1.45.92-.44.163-1.112.354-2.318.41-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.206-.056-1.878-.246-2.318-.41-.586-.22-1.01-.48-1.45-.92-.44-.44-.7-.864-.92-1.45-.163-.44-.354-1.112-.41-2.318-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.056-1.206.246-1.878.41-2.318.22-.586.48-1.01.92-1.45.44-.44.864-.7 1.45-.92.44-.163 1.112-.354 2.318-.41 1.266-.058 1.646-.07 4.85-.07m0-2.163c-3.259 0-3.667.014-4.947.072-1.277.058-2.154.27-2.909.573-.79.316-1.462.741-2.133 1.413-.672.672-1.097 1.343-1.413 2.133-.303.755-.515 1.632-.573 2.909-.058 1.28-.072 1.688-.072 4.947s.014 3.667.072 4.947c.058 1.277.27 2.154.573 2.909.316.79.741 1.462 1.413 2.133.672.672 1.343 1.097 2.133 1.413.755.303 1.632.515 2.909.573 1.28.058 1.688.072 4.947.072s3.667-.014 4.947-.072c1.277-.058 2.154-.27 2.909-.573.79-.316 1.462-.741 2.133-1.413.672-.672 1.097-1.343 1.413-2.133.303-.755.515-1.632.573-2.909.058-1.28.072-1.688.072-4.947s-.014-3.667-.072-4.947c-.058-1.277-.27-2.154-.573-2.909-.316-.79-.741-1.462-1.413-2.133-.672-.672-1.343-1.097-2.133-1.413-.755-.303-1.632-.515-2.909-.573-1.28-.058-1.688-.072-4.947-.072z"/>
                    <path d="M12 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm6.406-11.845c-.796 0-1.44.645-1.44 1.44s.645 1.44 1.44 1.44 1.44-.645 1.44-1.44-.645-1.44-1.44-1.44z"/>
                </svg>
            </a>
            <a href="https://linkedin.com" target="_blank" class="hover:text-black transition duration-300" style="color: darkgoldenrod;">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19.448 19.448h-3.555v-5.45c0-1.298-.026-2.971-1.81-2.971-1.81 0-2.088 1.414-2.088 2.879v5.542h-3.554v-11.206h3.414v1.529h.047c.475-.898 1.637-1.844 3.369-1.844 3.602 0 4.268 2.369 4.268 5.456v6.065zm-12.28-12.281c-1.145 0-2.073-.927-2.073-2.072s.928-2.073 2.073-2.073c1.145 0 2.073.928 2.073 2.073s-.928 2.072-2.073 2.072zm1.778 12.281h-3.555v-11.206h3.555v11.206zm14.054-19.448h-24v24h24v-24z"/>
                </svg>
            </a>
        </div>
    
        <!-- Footer Bottom -->
        <div class="container mx-auto mt-8 text-center">
            <p class="text-sm font-bold" style="color: black;">&copy; 2024 Pearl of Africa Cheese. All Rights Reserved.</p>
        </div>
    </footer>

<!-- Scripts for Typed.js and ScrollReveal -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="script.js"></script>
<script src="assets/validation.js"></script>
</body>
</html>
