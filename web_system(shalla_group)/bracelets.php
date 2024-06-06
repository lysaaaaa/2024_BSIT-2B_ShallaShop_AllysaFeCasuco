<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ShallaShop - Biggest shopping center</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="home_img/ShallaShop_Icon.png" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="homepage.css">
  <link rel="stylesheet" href="account.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <form class="search-form" action="search.php" method="get">
            <input type="text" name="query" placeholder="Search...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>


      <a href="#" class="logo">
        <img src="home_img/ShallaShop_Logo.png" alt="ShallaShop Logo" width="130" height="31">
      </a>

      <div class="header-actions">
      <div class="account-container">
        <button class="account-icon">
            <img src="home_img/account.png" alt="Account Icon">
            <p>Account</p>
            <div class="dropdown-menu">
          <?php if (isset($_SESSION['user_id'])): ?>
          <div id="account">
            <a href="profile.php" class="dropdown-item">Me</a> 
            <a href="logout.php" class="dropdown-item">Log Out</a>
          </div>
          <?php else: ?>
                <a href="login.php" class="dropdown-item">Log In</a>
                <a href="signup.php" class="dropdown-item">Sign Up</a>
        </div>
        <?php endif; ?>
        </button>
    </div>

    <button class="header-action-btn">
        <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
        <p class="header-action-label">Search</p>
    </button>

    <button class="header-action-btn">
        <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>
        <p onclick="location.href= 'cart.php'" class="header-action-label">Cart</p>
        <div class="btn-badge green" aria-hidden="true"></div>
    </button>
  </div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" alt="ShallaShop logo" width="130" height="31">
          </a>

          <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <script src="script.js"></script>

        <ul class="navbar-list">

          <li>
            <a href="homepage.php" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="shopnow.php" class="navbar-link">Shop</a>
          </li>

          <li>
            <a href="About_company.php" class="navbar-link">About</a>
          </li>

          <li>
            <a href="contact.php" class="navbar-link">Contact</a>
          </li>

        </ul>

      </nav>

    </div>
  </header>

  <body>
        <center><h1>bracelets</h1></center>
        

        <ul class="product-list">

        <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/bracelet1.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="1">
            <input type="hidden" name="item_id" value="1234">
            <input type="hidden" name="item_name" value="Serpenti Full Dias Bangle">
            <input type="hidden" name="item_price" value="10000">
            <input type="hidden" name="image_url" value="home_img/bracelet1.jpg">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">Serpenti Full Dias Bangle</a>
        </h1>
        <div class="card-price">
          <data value="10000">₱10,000</data>
        </div>
      </div>
    </div>
  </li>

            

  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/bracelet3.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="2">
            <input type="hidden" name="item_id" value="5678">
            <input type="hidden" name="item_name" value="The Cuban Bracelet">
            <input type="hidden" name="item_price" value="5000">
            <input type="hidden" name="image_url" value="home_img/bracelet3.jpg">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">The Cuban Bracelet</a>
        </h1>
        <div class="card-price">
          <data value="5000">₱5,000</data>
        </div>
      </div>
    </div>
  </li>
              
              <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/bracelet2.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="3">
            <input type="hidden" name="item_id" value="91011">
            <input type="hidden" name="item_name" value="Lily leaf of the Valley">
            <input type="hidden" name="item_price" value="8000">
            <input type="hidden" name="image_url" value="home_img/bracelet2.jpg">
            <label for="quantity">Quantity:</label>
              <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">Lily leaf of the Valley</a>
        </h1>
        <div class="card-price">
          <data value="8000">₱8,000</data>
        </div>
      </div>
    </div>
  </li>
    

            <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/bracelet4.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="4">
            <input type="hidden" name="item_id" value="1213">
            <input type="hidden" name="item_name" value="Elite Series 22k Gold">
            <input type="hidden" name="item_price" value="4000">
            <input type="hidden" name="image_url" value="home_img/bracelet4.jpg">
            <label for="quantity">Quantity:</label>
              <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">Elite Series 22k Gold</a>
        </h1>
        <div class="card-price">
          <data value="4000">₱4,000</data>
        </div>
      </div>
    </div>
  </li>

  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/bracelet5.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="5">
            <input type="hidden" name="item_id" value="1314">
            <input type="hidden" name="item_name" value="Crescendo Small Bracelet">
            <input type="hidden" name="item_price" value="6000">
            <input type="hidden" name="image_url" value="home_img/bracelet5.jpg">
            <label for="quantity">Quantity:</label>
              <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">Crescendo Small Bracelet</a>
        </h1>
        <div class="card-price">
          <data value="6000">₱6,000</data>
        </div>
      </div>
    </div>
  </li>

  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/bracelet6.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="6">
            <input type="hidden" name="item_id" value="1516">
            <input type="hidden" name="item_name" value="Plated Brass Chain">
            <input type="hidden" name="item_price" value="5000">
            <input type="hidden" name="image_url" value="home_img/bracelet6.jpg">
            <label for="quantity">Quantity:</label>
              <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">Plated Brass Chain</a>
        </h1>
        <div class="card-price">
          <data value="5000">₱5,000</data>
        </div>
      </div>
    </div>
  </li>
  
  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/bracelet7.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="7">
            <input type="hidden" name="item_id" value="1920">
            <input type="hidden" name="item_name" value="Luxury Leaf Clover Simple Charm Bracelet">
            <input type="hidden" name="item_price" value="5000">
            <input type="hidden" name="image_url" value="home_img/bracelet7.jpg">
            <label for="quantity">Quantity:</label>
              <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">Luxury Leaf Clover Simple Charm Bracelet</a>
        </h1>
        <div class="card-price">
          <data value="5000">₱5,000</data>
        </div>
      </div>
    </div>
  </li>
  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/bracelet8.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="8">
            <input type="hidden" name="item_id" value="2122">
            <input type="hidden" name="item_name" value="Sandra Nail Bangle">
            <input type="hidden" name="item_price" value="4000">
            <input type="hidden" name="image_url" value="home_img/bracelet8.jpg">
            <label for="quantity">Quantity:</label>
              <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">Sandra Nail Bangle</a>
        </h1>
        <div class="card-price">
          <data value="4000 ">₱4,000</data>
        </div>
      </div>
    </div>
  </li>

  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/bracelet9.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="9">
            <input type="hidden" name="item_id" value="2324">
            <input type="hidden" name="item_name" value="Butterfly Charm Tennis Bracelet">
            <input type="hidden" name="item_price" value="4000">
            <input type="hidden" name="image_url" value="home_img/bracelet9.jpg">
            <label for="quantity">Quantity:</label>
              <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">Butterfly Charm Tennis Bracelet</a>
        </h1>
        <div class="card-price">
          <data value=" 4000">₱4, 000</data>
        </div>
      </div>
    </div>
  </li>

  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/bracelet10.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="10">
            <input type="hidden" name="item_id" value="2526">
            <input type="hidden" name="item_name" value="PalmBeach Men's Yellow Gold Plated Bracelet">
            <input type="hidden" name="item_price" value="5000">
            <input type="hidden" name="image_url" value="home_img/bracelet10.jpg">
            <label for="quantity">Quantity:</label>
              <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">PalmBeach Men's Yellow Gold Plated Bracelet</a>
        </h1>
        <div class="card-price">
          <data value="5000 ">₱5,000</data>
        </div>
      </div>
    </div>
  </li>
             
  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/bracelet11.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="11">
            <input type="hidden" name="item_id" value="2728">
            <input type="hidden" name="item_name" value="Vintage Knitted Stainless Steal Twisted Gold Bangle Bracelet">
            <input type="hidden" name="item_price" value="6000">
            <input type="hidden" name="image_url" value="home_img/bracelet11.jpg">
            <label for="quantity">Quantity:</label>
              <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">Vintage Knitted Stainless Steal Twisted Gold Bangle Bracelet</a>
        </h1>
        <div class="card-price">
          <data value=" 6000">₱6,000</data>
        </div>
      </div>
    </div>
  </li>

  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/bracelet12.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="12">
            <input type="hidden" name="item_id" value="2930">
            <input type="hidden" name="item_name" value="Hand Chain Bracelet with Bead Detail">
            <input type="hidden" name="item_price" value="7000">
            <input type="hidden" name="image_url" value="home_img/bracelet2.jpg">
            <label for="quantity">Quantity:</label>
              <input type="number" name="quantity" value="1" min="1" required>
            <button type="submit" class="card-action-btn cart-btn">
              <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
              <p>Add to Cart</p>
            </button>
          </form>
        </div>
      </figure>
      <div class="card-content">
        <h1 class="h4 card-title">
          <a href="#">Hand Chain Bracelet with Bead Detail</a>
        </h1>
        <div class="card-price">
          <data value="7000">₱7,000</data>
        </div>
      </div>
    </div>
  </li>

          </ul>

          <script>
            function toggleDropdown() {
                var dropdownMenu = document.getElementById('dropdownMenu');
                dropdownMenu.classList.toggle('show');
            }
    
            window.onclick = function(event) {
                if (!event.target.matches('.header-action-btn')) {
                    var dropdowns = document.getElementsByClassName('dropdown-menu');
                    for (var i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        </script>
        
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    
</body>
</html>

