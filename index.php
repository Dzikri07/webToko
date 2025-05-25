<?php
  session_start();
  require __DIR__ . '/model/koneksi.php';
  $module = isset($_GET['module'])
      ? preg_replace('/[^a-z\-]/', '', $_GET['module'])
      : 'home';
  $contentFile = __DIR__ . "/page/{$module}/index.php";
  if (! file_exists($contentFile)) {
      $module      = '404';
      $contentFile = __DIR__ . "/page/404/index.php";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dzikri Store</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- NAVBAR -->
<div class="top-menu">
  <div class="top-menu__left">
    <!-- Tampilkan nama user di sini -->
    <?php if (!empty($_SESSION['email'])): ?>
      <span>Welcome, <?= htmlspecialchars($_SESSION['email'], ENT_QUOTES) ?></span>
    <?php else: ?>
      <span>Welcome, Guest</span>
    <?php endif; ?>
  </div>
  <div class="top-menu__right">
    <a href="#">Find a Store</a>
    <a href="#">Help</a>
    <a href="#">Join Us</a>

    <?php if (empty($_SESSION['email'])): ?>
      <!-- Belum login: Sign In -->
      <a href="admin/login.php" class="sign-in">Sign In</a>
    <?php else: ?>
      <!-- Sudah login: Keluar -->
      <a href="admin/logout.php" class="sign-out">Keluar</a>
    <?php endif; ?>
  </div>
</div>


  <div class="top-nav">
 
    <div class="bottom-nav">
      <?php
      $menus = [
        'home'          => 'Home',
        'new-featured'  => 'New & Featured',
        'men'           => 'Men',
        'women'         => 'Women',
        'kids'          => 'Kids',
        'sale'          => 'Sale',
        'snkrs'         => 'SNKRS',
      ];
      foreach ($menus as $key => $label):
        $active = $module === $key ? 'active' : '';
      ?>
        <a href="?module=<?= $key ?>" class="<?= $active ?>">
          <?= $label ?>
        </a>
      <?php endforeach ?>
    </div>
    <div class="icons">
      <div class="search-bar"><input type="text" placeholder="Search"></div>
      <span>❤</span>
      <span>🛒</span>
    </div>
  </div>

  <div class="ad">
    <p>Free Standard Delivery &amp; 30-Day Free Returns</p>
    <div class="links">
      <a href="join">Join Now</a>
      <a href="view">View Details</a>
    </div>
  </div>
  <div class="product-controller">
  <div class="sort">
    <label for="sort-select"></label>
    <select id="sort-select">
      <option value="latest">The Latest</option>
      <option value="popular">Most Popular</option>
      <option value="price-low">Price: Low to High</option>
      <option value="price-high">Price: High to Low</option>
    </select>
  </div>
  <button class="filter-btn">
    Filters <span class="icon">⚙️</span>
  </button>
</div>


  <!-- nge include konten -->
  <main>
    <?php include $contentFile; ?>
  </main>

  <!-- FOOTER -->

    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h4>EXPLORE CHANEL.COM</h4>
                <ul>
                    <li><a href="#">Haute Couture</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">High Jewelry</a></li>
                    <li><a href="#">Fine Jewelry</a></li>
                    <li><a href="#">Watches</a></li>
                    <li><a href="#">Eyewear</a></li>
                    <li><a href="#">Fragrance</a></li>
                    <li><a href="#">Makeup</a></li>
                    <li><a href="#">Skincare</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>ONLINE SERVICES</h4>
                <ul>
                    <li><a href="#">Payment Methods</a></li>
                    <li><a href="#">Shipping Options</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Care & Services</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>BOUTIQUE SERVICES</h4>
                <ul>
                    <li><a href="#">Store Locator</a></li>
                    <li><a href="#">Book an Appointment</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>THE HOUSE OF CHANEL</h4>
                <ul>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Do Not Sell or Share My Personal Information</a></li>
                    <li><a href="#">Report to Society</a></li>
                    <li><a href="#">Fighting Counterfeits</a></li>
                    <li><a href="#">Accessibility</a></li>
                    <li><a href="#">California Transparency in Supply Chains</a></li>
                    <li><a href="#">CHANEL Racial Justice Efforts</a></li>
                    <li><a href="#">Transparency in Coverage</a></li>
                    <li><a href="#">Sustainability-Linked Bond Update</a></li>
                    <li><a href="#">Responsible Jewellery Statement</a></li>
                    <li><a href="#">Consumer Health Data Privacy Notice</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2025 Chanel. All rights reserved.

            
        </div>
    </footer>
</body>
</html>
