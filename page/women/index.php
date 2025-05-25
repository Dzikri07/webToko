<section class="container">
  <h2>Welcome to Dzikri Store</h2>
  <div class="card-grid">
    <?php for($i=1; $i<=4; $i++): ?>
      <div class="card small-card">
        <img src="img/placeholder.png" alt="Featured <?= $i ?>">
        <p>Featured <?= $i ?></p>
      </div>
    <?php endfor; ?>
  </div>
</section>
