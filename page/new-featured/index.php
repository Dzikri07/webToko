<!-- page/home/index.php -->
<section>
  <div class="container">
    <div class="card large-card">
      <img src="model.png" alt="Model Image">
    </div>
    <?php for($i=1; $i<=4; $i++): ?>
      <div class="card small-card">
        <img src="../produk<?= $i ?>.png" alt="Product <?= $i ?>">
      </div>
    <?php endfor; ?>
  </div>
</section>
