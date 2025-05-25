<div class="container mt-4 mb-4"><i class="fas fa-newspaper"></i>
  <h2>Daftar Artikel</h2>
  

<div class="row">
  <div class="col">
    <div class="mb-4 mt-2">
      <a href="tambah-artikel.php" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Artikel</a>
  </div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>NO</th>
          <th>TANGGAL</th>
          <th>PENULIS</th>
          <th>JUDUL</th>
          <th>DESKRIPIS</th>
          <th>POSTING</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php
          require_once('../model/Artikel.php');
          $artikel = new Artikel();
          $no = 1;
          $article = $artikel->getAll();
          
          foreach($article as $row){
            ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $row['tanggal'];?></td>
              <td><?=$row['penulis'];?></td>
              <td><?=$row['judul'];?></td>
              <td><?=$row['deskripsi'];?></td>
              <td><?=$row['posting'];?></td>
              <td class="text-center">
              <a href="#" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye text-success"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit text-primary"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash text-danger"></i></a>
            </td>
            </tr>
            <?php
          }
        ?>
      </tbody>
    </table>
  </div>
</div>