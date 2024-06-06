<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Shop Now</title>
      <link rel="stylesheet" href="homepage.css">
      <link rel="stylesheet" href="account.css">
      <link rel="stylesheet" href="shopnow.css">
    </head>
  <body>
  <!-- 
    - #HEADER
  -->

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
    <main>
        <center><h1>Categories</h1></center>
        <ul class="product-list">

        <section class="categories">
            <div class="category">
                <img src="home_img/necklace2.jpg" alt="Necklaces">
                <h2>Necklaces</h2>
                <p>Explore our exquisite collection of necklaces.</p>
                <a href="necklaces.php">Shop Necklaces</a>
            </div>
            <div class="category">
                <img src="home_img/bracelet1.jpg" alt="Bracelets">
                <h2>Bracelets</h2>
                <p>Discover beautiful bracelets for every occasion.</p>
                <a href="bracelets.php">Shop Bracelets</a>
            </div>
            <div class="category">
                <img src="home_img/choker2.jpg" alt="Chokers">
                <h2>Chokers</h2>
                <p>Find elegant and trendy chokers.</p> 
                <a href="chokers.php">Shop Chokers</a>
            </div>
            <div class="category">
                <img src="home_img/ring2.jpg" alt="Rings">
                <h2>Rings</h2>
                <p>Choose from a variety of stunning rings.</p>
                <a href="rings.php">Shop Rings</a>
            </div>
            <div class="category">
                <img src="home_img/earing6.jpg" alt="Earings">
                <h2>Earrings</h2>
                <p>Browse our collection of stylish earings.</p>
                <a href="earings.php">Shop Earings</a>
            </div>
            <div class="category">
                <img src="home_img/watch11.jpg" alt="Watchs">
                <h2>Watchs</h2>
                <p>Browse our collection of stylish watches.</p>
                <a href="watches.php">Shop Watches</a>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
