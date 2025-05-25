<section class="container">
  <h2>Sale</h2>
  <div class="card-grid">
    <?php for($i=1; $i<=4; $i++): ?>
      <div class="card small-card">
        <img src="img/placeholder.png" alt="Sale <?= $i ?>">
        <p>Sale <?= $i ?></p>
      </div>
    <?php endfor; ?>
  </div>
</section>
