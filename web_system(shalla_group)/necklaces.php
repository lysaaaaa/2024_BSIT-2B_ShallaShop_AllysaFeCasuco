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

    <form class="search-form" action="search.php" method="get">
            <input type="text" name="query" placeholder="Search...">
                <button type="submit"><i class="fa fa-search"></i></button>
        </form>

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

          </body>

        <center><h1>Necklaces</h1></center>
        

        <ul class="product-list">

        <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/necklace7.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="3758">
            <input type="hidden" name="item_id" value="4352">
            <input type="hidden" name="item_name" value="Gold Plated Sunflower Necklace">
            <input type="hidden" name="item_price" value="4500">
            <input type="hidden" name="image_url" value="home_img/necklace7.jpg">
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
          <a href="#">Gold Plated Sunflower Necklace</a>
        </h1>
        <div class="card-price">
          <data value="4500">₱4,500</data>
        </div>
      </div>
    </div>
  </li>

  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/necklace1.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="3268">
            <input type="hidden" name="item_id" value="4938">
            <input type="hidden" name="item_name" value="Paved Diamond Serpenti">
            <input type="hidden" name="item_price" value="10000">
            <input type="hidden" name="image_url" value="home_img/necklace1.jpg">
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
          <a href="#">Paved Diamond Serpenti</a>
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
          <img src="home_img/necklace2.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="3186">
            <input type="hidden" name="item_id" value="4278">
            <input type="hidden" name="item_name" value="Sleek Diamond">
            <input type="hidden" name="item_price" value="9000">
            <input type="hidden" name="image_url" value="home_img/necklace2.jpg">
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
          <a href="#">Sleek Diamond</a>
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
          <img src="home_img/necklace4.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="3298">
            <input type="hidden" name="item_id" value="4329">
            <input type="hidden" name="item_name" value="Gold Crystal Pearl Drop">
            <input type="hidden" name="item_price" value="8000">
            <input type="hidden" name="image_url" value="home_img/necklace4.jpg">
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
          <a href="#">Gold Crystal Pearl Drop</a>
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
          <img src="home_img/necklace5.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="8263">
            <input type="hidden" name="item_id" value="57263">
            <input type="hidden" name="item_name" value="Infinity">
            <input type="hidden" name="item_price" value="5000">
            <input type="hidden" name="image_url" value="home_img/necklace5.jpg">
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
          <a href="#">Infinity</a>
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
          <img src="home_img/necklace6.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="2735">
            <input type="hidden" name="item_id" value="0872">
            <input type="hidden" name="item_name" value="Pearl Double Layer">
            <input type="hidden" name="item_price" value="4000">
            <input type="hidden" name="image_url" value="home_img/necklace6.jpg">
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
          <a href="#">Pearl Double Layer</a>
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
          <img src="home_img/necklace9.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="29621">
            <input type="hidden" name="item_id" value="7861376">
            <input type="hidden" name="item_name" value="Sun Pendant">
            <input type="hidden" name="item_price" value="5000">
            <input type="hidden" name="image_url" value="home_img/necklace9.jpg">
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
          <a href="#">Sun Pendant</a>
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
          <img src="home_img/necklace10.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="82652">
            <input type="hidden" name="item_id" value="98263">
            <input type="hidden" name="item_name" value="Retro Pearl Diamond">
            <input type="hidden" name="item_price" value="8000">
            <input type="hidden" name="image_url" value="home_img/necklace10.jpg">
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
          <a href="#">Retro Pearl Diamond</a>
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
          <img src="home_img/necklace8.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="8162">
            <input type="hidden" name="item_id" value="82633">
            <input type="hidden" name="item_name" value="Antlers Emerald">
            <input type="hidden" name="item_price" value="4000">
            <input type="hidden" name="image_url" value="home_img/necklace8.jpg">
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
          <a href="#">Antlers Emerald</a>
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
          <img src="home_img/necklace11.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="10176">
            <input type="hidden" name="item_id" value="78252">
            <input type="hidden" name="item_name" value="Pure Sparkle">
            <input type="hidden" name="item_price" value="15000">
            <input type="hidden" name="image_url" value="home_img/necklace11.jpg">
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
          <a href="#">Pure Sparkle</a>
        </h1>
        <div class="card-price">
          <data value="15000">₱15,000</data>
        </div>
      </div>
    </div>
  </li>
  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/necklace12.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="11561">
            <input type="hidden" name="item_id" value="7253">
            <input type="hidden" name="item_name" value="Marquise Pear Leaf Collar">
            <input type="hidden" name="item_price" value="11000">
            <input type="hidden" name="image_url" value="home_img/necklace12.jpg">
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
          <a href="#">Marquise Pear Leaf Collar</a>
        </h1>
        <div class="card-price">
          <data value="11000">₱11,000</data>
        </div>
      </div>
    </div>
  </li>
  

  <li>
    <div class="product-card">
      <figure class="card-banner">
        <a href="#">
          <img src="home_img/necklace3.jpg" alt="bracelet" loading="lazy" width="800" height="1034" class="w-100">
        </a>
        <div class="card-actions">
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="order_id" value="12653">
            <input type="hidden" name="item_id" value="93734">
            <input type="hidden" name="item_name" value="Micro Gold Plated">
            <input type="hidden" name="item_price" value="3500">
            <input type="hidden" name="image_url" value="home_img/necklace3.jpg">
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
          <a href="#">Micro Gold Plated</a>
        </h1>
        <div class="card-price">
          <data value="3500">₱3,500</data>
        </div>
      </div>
    </div>
  </li>
          </ul>

    
    
</body>
</html>

