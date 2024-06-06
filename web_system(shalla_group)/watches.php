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

        <center><h1>Watches</h1></center>
        

        <ul class="product-list">

        <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/watch12.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="9374">
            <input type="hidden" name="item_id" value="28473">
            <input type="hidden" name="item_name" value="Ladies White Stone Watch With Matching Stone Set">
            <input type="hidden" name="item_price" value="9000">
            <input type="hidden" name="image_url" value="home_img/watch12.jpg">
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
          <a href="#">Ladies White Stone Watch With Matching Stone Set</a>
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
          <img src="home_img/watch11.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="78264">
            <input type="hidden" name="item_id" value="9273">
            <input type="hidden" name="item_name" value="Square Quart Watch Elegant Ladies">
            <input type="hidden" name="item_price" value="8000">
            <input type="hidden" name="image_url" value="home_img/watch11.jpg">
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
          <a href="#">Square Quart Watch Elegant Ladies</a>
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
          <img src="home_img/watch10.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="83435">
            <input type="hidden" name="item_id" value="93745">
            <input type="hidden" name="item_name" value="OMEGA Seamaster Aqua Terra">
            <input type="hidden" name="item_price" value="5000">
            <input type="hidden" name="image_url" value="home_img/watch10.jpg">
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
          <a href="#">OMEGA Seamaster Aqua Terra</a>
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
          <img src="home_img/watch9.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="298734">
            <input type="hidden" name="item_id" value="8923">
            <input type="hidden" name="item_name" value="Accutime XOXO Analog Watch">
            <input type="hidden" name="item_price" value="4000">
            <input type="hidden" name="image_url" value="home_img/watch9.jpg">
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
          <a href="#">Accutime XOXO Analog Watch</a>
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
          <img src="home_img/watch8.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="7364">
            <input type="hidden" name="item_id" value="835784">
            <input type="hidden" name="item_name" value="Breitling Chronomat">
            <input type="hidden" name="item_price" value="10000">
            <input type="hidden" name="image_url" value="home_img/watch8.jpg>
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
          <a href="#">Breitling Chronomat</a>
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
          <img src="home_img/watch7.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="3853">
            <input type="hidden" name="item_id" value="835489">
            <input type="hidden" name="item_name" value="Silver blair Chronograph">
            <input type="hidden" name="item_price" value="8000">
            <input type="hidden" name="image_url" value="home_img/watch7.jpg">
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
          <a href="#">Silver blair Chronograph</a>
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
          <img src="home_img/watch6.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="98374">
            <input type="hidden" name="item_id" value="776384">
            <input type="hidden" name="item_name" value="Breitling Navitimer">
            <input type="hidden" name="item_price" value="8000">
            <input type="hidden" name="image_url" value="home_img/watch6.jpg">
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
          <a href="#">Breitling Navitimer</a>
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
          <img src="home_img/watch13.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="98837">
            <input type="hidden" name="item_id" value="83435">
            <input type="hidden" name="item_name" value="Parameter Quartz">
            <input type="hidden" name="item_price" value="9000">
            <input type="hidden" name="image_url" value="home_img/watch13.jpg">
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
          <a href="#">Parameter Quartz</a>
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
          <img src="home_img/watch14.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="9375">
            <input type="hidden" name="item_id" value="78343">
            <input type="hidden" name="item_name" value="Stainless OLEVS Quartz">
            <input type="hidden" name="item_price" value="8000">
            <input type="hidden" name="image_url" value="home_img/watch14.jpg">
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
          <a href="#">Stainless OLEVS Quartz</a>
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
          <img src="home_img/watch16.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="98374">
            <input type="hidden" name="item_id" value="87365">
            <input type="hidden" name="item_name" value="OLEVS Turbillon Self-winding Mechanical">
            <input type="hidden" name="item_price" value="7000">
            <input type="hidden" name="image_url" value="home_img/watch16.jpg">
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
          <a href="#">OLEVS Turbillon Self-winding Mechanical</a>
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
          <img src="home_img/watch16.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="8375">
            <input type="hidden" name="item_id" value="97234">
            <input type="hidden" name="item_name" value="Elegant Oval Quartz">
            <input type="hidden" name="item_price" value="16000">
            <input type="hidden" name="image_url" value="home_img/watch16.jpg">
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
          <a href="#">Elegant Oval Quartz</a>
        </h1>
        <div class="card-price">
          <data value="16000">₱16,000</data>
        </div>
      </div>
    </div>
  </li>
  

  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/watch17.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="837583">
            <input type="hidden" name="item_id" value="983295">
            <input type="hidden" name="item_name" value="Elegant Stylish Anne Klien Watch">
            <input type="hidden" name="item_price" value="10000">
            <input type="hidden" name="image_url" value="home_img/watch17.jpg">
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
          <a href="#">Elegant Stylish Anne Klien Watch</a>
        </h1>
        <div class="card-price">
          <data value="10000">₱10,000</data>
        </div>
      </div>
    </div>
  </li>

          </ul>

    
    
</body>
</html>

