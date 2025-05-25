<?php
require_once('../model/koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $tanggal = $_POST['tanggal'];
  $penulis = $_POST['penulis'];
  $judul = $_POST['judul'];
  $deskripsi = $_POST['deskripsi'];
  $posting = $_POST['posting'];

  $conn = (new koneksi())->getConnection();
  $stmt = $conn->prepare("INSERT INTO artikel (tanggal, penulis, judul, deskripsi, posting) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $tanggal, $penulis, $judul, $deskripsi, $posting);
  
  if ($stmt->execute()) {
    header("Location: daftar-artikel.php");
    exit();
  } else {
    echo "Gagal menambahkan artikel.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tambah Artikel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-5">
  <h2>Tambah Artikel</h2>
  <form method="POST" action="">
    <div class="form-group">
      <label>Tanggal</label>
      <input type="date" name="tanggal" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Penulis</label>
      <input type="text" name="penulis" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Judul</label>
      <input type="text" name="judul" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Deskripsi</label>
      <textarea name="deskripsi" class="form-control" required></textarea>
    </div>
    <div class="form-group">
      <label>Posting</label>
      <select name="posting" class="form-control">
        <option value="Ya">Ya</option>
        <option value="Tidak">Tidak</option>
      </select>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="daftar-artikel.php" class="btn btn-secondary">Batal</a>
  </form>
</body>
</html>
