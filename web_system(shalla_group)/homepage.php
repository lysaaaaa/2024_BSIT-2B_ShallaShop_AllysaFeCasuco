<?php
session_start();
$search_results = isset($_SESSION['search_results']) ? $_SESSION['search_results'] : [];
unset($_SESSION['search_results']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ShallaShop - Biggest shopping center</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="home_img/ShallaShop_Icon.png" type="image/svg+xml">

  <!-- custom css link -->
  <link rel="stylesheet" href="homepage.css">
  <link rel="stylesheet" href="account.css">

  <!-- google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <!-- #HEADER -->
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
                <?php endif; ?>
              </div>
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
    <article>

      <!-- #HERO -->
      <section class="hero" id="home" style="background-image: url(home_img/home_bg.png)">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Home of Elegance</p>

            <h2 class="h1 hero-title">ShallaShop</h2>

            <button id="shop-now-btn" onclick="location.href= 'shopnow.php'" class="btn btn-primary">Shop Now</button>
          </div>

        </div>
      </section>

      <!-- #SERVICE -->
      <section class="service">
        <div class="container">

          <ul class="service-list">

            <li class="service-item">
              <div class="service-item-icon">
                <img src="home_img/service-icon-1.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Free Shipping</p>
                <p class="service-item-text">On All Order Over Php5000</p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-item-icon">
                <img src="home_img/service-icon-2.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Easy Returns</p>
                <p class="service-item-text">30 Day Returns Policy</p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-item-icon">
                <img src="home_img/service-icon-3.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Secure Payment</p>
                <p class="service-item-text">100% Secure Gaurantee</p>
              </div>
            </li>

            <li class="service-item">
              <div class="service-item-icon">
                <img src="home_img/service-icon-4.svg" alt="Service icon">
              </div>

              <div class="service-content">
                <p class="service-item-title">Special Support</p>
                <p class="service-item-text">24/7 Dedicated Support</p>
              </div>
            </li>

          </ul>

        </div>
      </section>

      <!-- #CATEGORY -->
      <section class="section category">
        <div class="container">

          <ul class="category-list">

            <li class="category-item">
              <figure class="category-banner">
                <img src="home_img/bracelet1.jpg" alt="Bracelet" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="bracelets.php" class="btn btn-secondary">Bracelet</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="home_img/earing2.jpg" alt="Earings" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="earings.php" class="btn btn-secondary">Earings</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="home_img/necklace4.jpg" alt="Necklace" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="necklaces.php" class="btn btn-secondary">Necklace</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="home_img/ring1.jpg" alt="ring" loading="lazy" width="510"
                  height="600" class="w-100">
              </figure>

              <a href="rings.php" class="btn btn-secondary">Ring</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="home_img/watch7.jpg" alt="Watch" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="watches.php" class="btn btn-secondary">Watch</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="home_img/choker1.jpg" alt="Choker" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="chokers.php" class="btn btn-secondary">Choker</a>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>

  <!-- #FOOTER -->
  <footer>
    <div class="container">

      <ul class="footer-top-list">

        <li>
          <a href="#" class="footer-logo">
            <img src="home_img/ShallaShop_Logo.png" alt="ShallaShop logo" width="130" height="31">
          </a>
        </li>

        <li>
          <address class="footer-address">
            <p class="footer-address-title">Head Office</p>

            <ul>
              <li>
                <p class="footer-address-text">Pasig City, Philippines</p>
              </li>
              <li>
                <a href="mailto:info@shallashop.com" class="footer-address-link">info@shallashop.com</a>
              </li>
              <li>
                <a href="tel:+0123456789" class="footer-address-link">(+63) 917 0000 000</a>
              </li>
            </ul>
          </address>
        </li>

        <li>
          <address class="footer-address">
            <p class="footer-address-title">Branch Office</p>

            <ul>
              <li>
                <p class="footer-address-text">Quezon City, Philippines</p>
              </li>
              <li>
                <a href="mailto:branch@shallashop.com" class="footer-address-link">branch@shallashop.com</a>
              </li>
              <li>
                <a href="tel:+0123456789" class="footer-address-link">(+63) 917 1000 000</a>
              </li>
            </ul>
          </address>
        </li>

      </ul>

    </div>
  </footer>

</body>

</html>