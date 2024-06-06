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


        <center><h1>Rings</h1></center>
        

        <ul class="product-list">

        <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/ring1.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="16628">
            <input type="hidden" name="item_id" value="86342">
            <input type="hidden" name="item_name" value="Diamond Leaf Eternity Ring">
            <input type="hidden" name="item_price" value="5000">
            <input type="hidden" name="image_url" value="home_img/ring1.jpg">
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
          <a href="#">Diamond Leaf Eternity Ring</a>
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
          <img src="home_img/ring2.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="927372">
            <input type="hidden" name="item_id" value="836872">
            <input type="hidden" name="item_name" value="Rhinestone Decor Ring">
            <input type="hidden" name="item_price" value="6000">
            <input type="hidden" name="image_url" value="home_img/ring2.jpg">
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
          <a href="#">Rhinestone Decor Ring</a>
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
          <img src="home_img/ring3.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="8922">
            <input type="hidden" name="item_id" value="92737">
            <input type="hidden" name="item_name" value="Sparkly Snake Ring">
            <input type="hidden" name="item_price" value="8000">
            <input type="hidden" name="image_url" value="home_img/ring3.jpg">
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
          <a href="#">Sparkly Snake Ring</a>
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
          <img src="home_img/ring4.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="9872">
            <input type="hidden" name="item_id" value="9273">
            <input type="hidden" name="item_name" value="Butterfly Ring">
            <input type="hidden" name="item_price" value="7000">
            <input type="hidden" name="image_url" value="home_img/ring4.jpg">
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
          <a href="#">Butterfly Ring</a>
        </h1>
        <div class="card-price">
          <data value="7000">₱7,000</data>
        </div>
      </div>
    </div>
  </li>
  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/ring5.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="8162">
            <input type="hidden" name="item_id" value="828763">
            <input type="hidden" name="item_name" value="Solitairing Ring">
            <input type="hidden" name="item_price" value="7000">
            <input type="hidden" name="image_url" value="home_img/ring5.jpg">
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
          <a href="#">Solitairing Ring</a>
        </h1>
        <div class="card-price">
          <data value="7000">₱7,000</data>
        </div>
      </div>
    </div>
  </li>

  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/ring6.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="98723">
            <input type="hidden" name="item_id" value="98737">
            <input type="hidden" name="item_name" value="Diamond Initial Pinky Ring">
            <input type="hidden" name="item_price" value="5000">
            <input type="hidden" name="image_url" value="home_img/ring6.jpg">
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
          <a href="#">Diamond Initial Pinky Ring</a>
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
          <img src="home_img/ring7.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="772873">
            <input type="hidden" name="item_id" value="98734">
            <input type="hidden" name="item_name" value="Lion Head Ring">
            <input type="hidden" name="item_price" value="9000">
            <input type="hidden" name="image_url" value="home_img/ring7.jpg">
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
          <a href="#">Lion Head Ring</a>
        </h1>
        <div class="card-price">
          <data value="9000">₱9,000</data>
        </div>
      </div>
    </div>
  </li>
  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/ring8.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="87628">
            <input type="hidden" name="item_id" value="863784">
            <input type="hidden" name="item_name" value="Rhombus Band Tungsten Carbide">
            <input type="hidden" name="item_price" value="9000">
            <input type="hidden" name="image_url" value="home_img/ring8.jpg">
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
          <a href="#">Rhombus Band Tungsten Carbide</a>
        </h1>
        <div class="card-price">
          <data value="9000">₱9,000</data>
        </div>
      </div>
    </div>
  </li>

  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/ring9.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="97254">
            <input type="hidden" name="item_id" value="8763">
            <input type="hidden" name="item_name" value="Roman Numeral Chain Spinner">
            <input type="hidden" name="item_price" value="10000">
            <input type="hidden" name="image_url" value="home_img/ring9.jpg">
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
          <a href="#">Roman Numeral Chain Spinner</a>
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
          <img src="home_img/ring10.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="107654">
            <input type="hidden" name="item_id" value="72337">
            <input type="hidden" name="item_name" value="Sapphire or Diamond Unisex">
            <input type="hidden" name="item_price" value="9000">
            <input type="hidden" name="image_url" value="home_img/ring10.jpg">
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
          <a href="#">Sapphire or Diamond Unisex</a>
        </h1>
        <div class="card-price">
          <data value="9000">₱9,000</data>
        </div>
      </div>
    </div>
  </li>
             
  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/ring11.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="115623">
            <input type="hidden" name="item_id" value="99273">
            <input type="hidden" name="item_name" value="Green Emerald Unisex Ring">
            <input type="hidden" name="item_price" value="8000">
            <input type="hidden" name="image_url" value="home_img/ring11.jpg">
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
          <a href="#">Green Emerald Unisex Ring</a>
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
          <img src="home_img/ring12.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="72365">
            <input type="hidden" name="item_id" value="873264">
            <input type="hidden" name="item_name" value="Yellow Gold IP Sandstone Finish Tungsten Ring">
            <input type="hidden" name="item_price" value="9500">
            <input type="hidden" name="image_url" value="home_img/ring12.jpg">
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
          <a href="#">Yellow Gold IP Sandstone Finish Tungsten Ring</a>
        </h1>
        <div class="card-price">
          <data value="9500">₱9,500</data>
        </div>
      </div>
    </div>
  </li>
          </ul>

    
    
</body>
</html>

