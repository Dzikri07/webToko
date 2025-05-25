<section class="container">
  <h2>Kids Collection</h2>
  <div class="card-grid">
    <?php for ($i = 1; $i <= 4; $i++): ?>
      <div class="card small-card">
        <img src="../img/produk<?= $i ?>.png" alt="Product <?= $i ?>">
        <p>Product <?= $i ?></p>
      </div>
    <?php endfor; ?>
  </div>
</section>
