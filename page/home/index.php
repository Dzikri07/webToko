<?php
// data to page
  $mysqli = $koneksi->getConnection();
  $sql = "
    SELECT id, name, image_url, price
    FROM products
    ORDER BY created_at DESC
  ";
  $result = $mysqli->query($sql);

  if (! $result) {
      echo "<p>Error query: " . $mysqli->error . "</p>";
      return;
  }
?>
<section class="featured-section">
  <div class="product-grid">
    <?php while ($prod = $result->fetch_assoc()): ?>
      <div class="product-card">
        <img src="<?= htmlspecialchars($prod['image_url']) ?>" alt="<?= htmlspecialchars($prod['name']) ?>">
        <div class="product-info">
          <h3><?= htmlspecialchars($prod['name']) ?></h3>
          <p>Rp <?= number_format($prod['price'], 0, ',', '.') ?></p>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</section>

