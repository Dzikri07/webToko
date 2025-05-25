<section class="container">
  <h2>SNKRS</h2>
  <div class="card-grid">
    <?php for($i=1; $i<=4; $i++): ?>
      <div class="card small-card">
        <img src="img/placeholder.png" alt="SNKRS <?= $i ?>">
        <p>SNKRS <?= $i ?></p>
      </div>
    <?php endfor; ?>
  </div>
</section>
