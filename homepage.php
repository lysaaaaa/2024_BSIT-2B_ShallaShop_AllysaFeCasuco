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

      <div class="header-search">
        <input type="search" name="search" placeholder="Search Product..." class="input-field">

        <button class="search-btn" aria-label="Search">
          <ion-icon name="search-outline"></ion-icon>
        </button>
      </div>

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
        <p onclick="location.href= 'cart.html'" class="header-action-label">Cart</p>
        <div class="btn-badge green" aria-hidden="true">2</div>
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
            <a href="#home" class="navbar-link">Home</a>
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

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home" style="background-image: url(home_img/home_bg.png)">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Home of Elegance</p>

            <h2 class="h1 hero-title">ShallaShop</h2>

            <button id="shop-now-btn" onclick="location.href= 'shopnow.php'" class="btn btn-primary">Shop Now</button>
          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

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





      <!-- 
        - #CATEGORY
      -->

      <section class="section category">
        <div class="container">

          <ul class="category-list">

            <li class="category-item">
              <figure class="category-banner">
                <img src="home_img/bracelet1.jpg" alt="Bracelet" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="bracelets.html" class="btn btn-secondary">Bracelet</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="home_img/earing2.jpg" alt="Earings" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="earings.html" class="btn btn-secondary">Earings</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="home_img/necklace4.jpg" alt="Necklace" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="necklaces.html" class="btn btn-secondary">Necklace</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="home_img/ring1.jpg" alt="ring" loading="lazy" width="510"
                  height="600" class="w-100">
              </figure>

              <a href="rings.html" class="btn btn-secondary">Ring</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="home_img/watch7.jpg" alt="Watch" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="watches.html" class="btn btn-secondary">Watch</a>
            </li>

            <li class="category-item">
              <figure class="category-banner">
                <img src="home_img/choker1.jpg" alt="Choker" loading="lazy" width="510" height="600"
                  class="w-100">
              </figure>

              <a href="chokers.html" class="btn btn-secondary">Choker</a>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #PRODUCT
      -->

      <section class="section product">
        <div class="container">

          <h2 class="h2 section-title">Products of the week</h2>

          <ul class="filter-list">

            <li>
              <button class="filter-btn  active">Best Seller</button>
            </li>

            <li>
              <button class="filter-btn">Hot Collection</button>
            </li>

            <li>
              <button class="filter-btn">Trendy</button>
            </li>

            <li>
              <button class="filter-btn">New Arrival</button>
            </li>

          </ul>

          <ul class="product-list">

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="home_img/bracelet4.jpg" alt="Bracelet" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-badge red"> -25%</div>

                  <div class="card-actions">

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">10k Gold Bracelet Hypoallergenic</a>
                  </h3>

                  <div class="card-price">
                    <data value="48.75">&pound;48.75</data>

                    <data value="65.00">&pound;65.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="home_img/choker3.jpg" alt="Choker" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-badge green"> New</div>

                  <div class="card-actions">

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>
                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Gothic Choker Gem Chains Velvet Necklace</a>
                  </h3>

                  <div class="card-price">
                    <data value="62.00">&pound;62.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="home_img/earing1.jpg" alt="Earing" loading="lazy"
                      width="800" height="1034" class="w-100">
                  </a>

                  <div class="card-actions">

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>
                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Delicate Teardrop Crystal</a>
                  </h3>

                  <div class="card-price">
                    <data value="32.00">&pound;32.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="home_img/necklace4.jpg" alt="Necklace" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-actions">

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Gold Crystal Pearl Drop Necklace Marquise Crystal Bridal Necklace</a>
                  </h3>

                  <div class="card-price">
                    <data value="84.00">&pound;84.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="home_img/ring4.jpg" alt="Ring" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-actions">
                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>
                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">925 Sterling Silver Double Butterfly Ring</a>
                  </h3>

                  <div class="card-price">
                    <data value="45.00">&pound;45.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="home_img/watch16.jpg" alt="Watch" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-actions">

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Michael Kors Women's Watch Camille</a>
                  </h3>

                  <div class="card-price">
                    <data value="30.00">&pound;30.00</data>

                    <data value="38.00">&pound;38.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="home_img/bracelet3.jpg" alt="bracelet3" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-actions">

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>

                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Gold Chain Bracelet</a>
                  </h3>

                  <div class="card-price">
                    <data value="25.00">&pound;25.00</data>

                    <data value="39.00">&pound;39.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="home_img/choker3.jpg" alt="Choker3" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-actions">

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>
                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Fashion Costume Jewelry Silver Chain</a>
                  </h3>

                  <div class="card-price">
                    <data value="85.00">&pound;85.00</data>

                    <data value="99.00">&pound;99.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="home_img/earing3.jpg" alt="Earing3" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-actions">

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>
                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Fashinable Cubic Zirconia Decor Geometric Cuff Hoop Earings For Women</a>
                  </h3>

                  <div class="card-price">
                    <data value="32.00">&pound;32.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="home_img/necklace3.jpg" alt="Necklace3" loading="lazy" width="800"
                      height="1034" class="w-100">
                  </a>

                  <div class="card-badge green">New</div>

                  <div class="card-actions">

                    <button class="card-action-btn cart-btn">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

                      <p>Add to Cart</p>
                    </button>
                  </div>

                </figure>

                <div class="card-content">
                  <h3 class="h4 card-title">
                    <a href="#">Gold Flower Necklace</a>
                  </h3>

                  <div class="card-price">
                    <data value="71.00">&pound;71.00</data>
                  </div>
                </div>

              </div>
            </li>

          </ul>

          <button  onclick="location.href= 'shopnow.php'" class="btn btn-outline">View All Products</button>

        </div>
      </section>

      <!-- 
        - #NEWSLETTER
      -->

      <section class="section newsletter">
        <div class="container">

          <div class="newsletter-card" style="background-image: url('./assets/images/newsletter-bg.png')">

            <h2 class="card-title">Subscribe Newsletter</h2>

            <p class="card-text">
              Enter your email below to be the first to know about new collections and product launches.
            </p>

            <form action="" class="card-form">

              <div class="input-wrapper">
                <ion-icon name="mail-outline"></ion-icon>

                <input type="email" name="emal" placeholder="Enter your email" required class="input-field">
              </div>

              <button type="submit" class="btn btn-primary w-100">
                <span>Subscribe</span>

                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
              </button>

            </form>

          </div>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="home_img/ShallaShop_Logo.png" alt="ShallaShop Logo">
          </a>

          <p class="footer-text">
            ShallaShop is a fashion theme for presents a complete wardrobe of uniquely crafted 
            Accessories inspired from the most contemporary
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Information</p>
          </li>

          <li>
            <a href="About_company.php" class="footer-link">About Company</a>
          </li>

          <li>
            <a href="payment_type.html" class="footer-link">Payment Type</a>
          </li>

          <li>
            <a href="become_an_agent.html" class="footer-link">Become an Agent</a>
          </li>

          <li>
            <a href="refund_policy.html" class="footer-link">Refund Policy</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Category</p>
          </li>

          <li>
            <a href="necklaces.html" class="footer-link">Necklace</a>
          </li>

          <li>
            <a href="earings.html" class="footer-link">Earrings</a>
          </li>

          <li>
            <a href="bracelets.html" class="footer-link">Bracelet</a>
          </li>

          <li>
            <a href="rings.html" class="footer-link">Rings</a>
          </li>

          <li>
            <a href="chokers.html" class="footer-link">Choker</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Help & Support</p>
          </li>

          <li>
            <a href="faq.html" class="footer-link">FAQ Information</a>
          </li>

          <li>
            <a href="return_policy.html" class="footer-link">Return Policy</a>
          </li>

          <li>
            <a href="shipping_delivery.html" class="footer-link">Shipping & Delivery</a>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 <a href="#">shallashop</a>. All Rights Reserved
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="privacy_policy.php" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li>
            <a href="terms_and_coditions.php" class="footer-bottom-link">Terms & Conditions</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>