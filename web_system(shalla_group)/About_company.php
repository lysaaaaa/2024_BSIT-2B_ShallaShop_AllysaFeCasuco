
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
    <center><h2>About ShallaShop</h2></center>
    <h3>Title: Discover ShallaShop: Your Gateway to Exquisite Jewelry</h3>

<p>Welcome to ShallaShop, where elegance meets convenience in the world of online jewelry shopping.
 Established with a passion for craftsmanship and a commitment to offering the finest pieces, we are your 
 premier destination for luxurious adornments.</p>

<h4>Our Story: </h4>
<p>At ShallaShop, our journey began with a vision to redefine the online jewelry shopping experience.
 Inspired by the timeless allure of precious metals and gemstones, we embarked on a mission to curate a 
 collection that speaks to the modern sophisticate while honoring the traditions of craftsmanship. Every piece
  in our catalog tells a story of dedication, artistry, and attention to detail.</p>

<h4>What Sets Us Apart:</h4>
<p>1. Quality Assurance: We handpick each item in our collection, ensuring that only the highest quality materials 
and craftsmanship make it to your doorstep.<br>
   
2. Exquisite Craftsmanship: From classic designs to contemporary creations, our jewelry is crafted by skilled 
artisans who bring decades of expertise to every piece.<br>

3. Unparalleled Selection: Whether you're seeking a statement necklace, elegant earrings, or a timeless engagement
 ring, our diverse range of styles ensures there's something for every taste and occasion.<br>

4. Ethical Sourcing: We are committed to ethical sourcing practices, partnering with suppliers who share our 
values of sustainability and responsible mining.<br>

5. Customer Satisfaction: Your satisfaction is our top priority. From seamless online shopping experiences to
 personalized assistance, we strive to exceed your expectations at every turn.</p>

<h4>Our Collection:</h4>
<p>Explore our meticulously curated collection, featuring a stunning array of:</p><br>

<p>- Engagement Rings: Symbolize your eternal love with a ring that captures the essence of romance and commitment.<br>
- Necklaces & Pendants: Elevate any ensemble with our selection of necklaces and pendants, ranging from delicate 
chains to statement pieces adorned with precious gemstones.<br>
- Earrings: From understated studs to glamorous chandeliers, our earrings are designed to dazzle and delight.<br>
- Bracelets & Bangles: Add a touch of elegance to your wrist with our selection of bracelets and bangles, 
crafted to perfection.</p>

<h4>Why Choose ShallaShop?:</h4>
<p>- Convenience: Shop from the comfort of your home with our user-friendly website and secure checkout process.<br>
- Expert Guidance: Need assistance finding the perfect piece or selecting the right gift? Our knowledgeable
 team is here to help.<br>
- Global Reach: With worldwide shipping and a commitment to customer satisfaction, we cater to jewelry lovers
 across the globe.</p>

<h4>Join Us: </h4>
<p>Experience the beauty and allure of fine jewelry with ShallaShop. Whether you're celebrating a special moment 
or treating yourself to something extraordinary, we invite you to explore our collection and discover the perfect 
piece that reflects your unique style and personality. Welcome to a world of timeless elegance and unparalleled 
craftsmanship. Welcome to ShallaShop.</p>

<?php include 'footer.php'; ?>
    
</body>
</html>