<?php
//panggil koneksi
include "koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Mahasiswa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dosen.php">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="matakuliah.php">Matakuliah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jadwal.php">Jadwal</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <div class="container">
    <div class="mt-3">
      <h3 class="text-center">KELOMPOK 1</h3>
    </div>

     <div class="card mt-3">
        <div class="card-header bg-primary text-white">
            Data Dosen
        </div>
        <div class="card-body">

      <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
        TAMBAH DATA DOSEN
        </button>

        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>NO</th>
                <th>NIP</th>
                <th>NAMA</th>
                <th>JABATAN</th>
                <th>Aksi</th>
            </tr>
            <?php
            //tampilkan data
            $no = 1;
            $tampil = mysqli_query($koneksi, "SELECT * FROM dosen ORDER BY id_dosen DESC");
            while ($data = mysqli_fetch_array($tampil)):
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['nip'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['jabatan'] ?></td>
                <td>
                 <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $no ?>">Edit</a>
                <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $no ?>">Delete</a>
                </td>
            </tr>

              <!-- Modal ubah-->
    <div class="modal fade" id="modalUbah<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Form Data Dosen</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="aksi_crud.php">
            <input type="hidden" name="id_dosen" value="<?= $data['id_dosen'] ?>"> 
        <div class="modal-body">
            
            <div class="mb-3">
                <label class="form-label">NAMA</label>
                <input type="text" class="form-control" name="tnama" value="<?= $data['nama']?>" placeholder="Masukkan Nama Anda">
            </div>

            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" class="form-control" name="tnip" value="<?= $data['nip']?>" placeholder="Masukkan NIP Anda">
            </div>

            <div class="mb-3">
                <label class="form-label">JABATAN</label>
                <input type="text" class="form-control" name="tjabatan" value="<?= $data['jabatan']?>" placeholder="Masukkan Jabatan Anda">
            </div>   
        </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Exit</button>
            <button type="submit" class="btn btn-primary" name="bedit" >Edit</button>
            </div>
        </form>
        </div>
    </div>
    </div>
            </div>
             <!--Akhir Modal ubah-->


              <!-- Modal Hapus-->
    <div class="modal fade" id="modalHapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="aksi_crud.php">
            <input type="hidden" name="id_dosen" value="<?= $data['id_dosen'] ?>"> 
        <div class="modal-body">
          <h5 class="text-center" > Apakah Yakin Menghapus Data? <br>
          <span class="text-danger"><?= $data['nama']?> - <?= $data['nama']?></span>
         </h5>  
          
        </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Exit</button>
            <button type="submit" class="btn btn-primary" name="bhapus" >Ya, Hapus Data</button>
            </div>
        </form>
        </div>
    </div>
    </div>
            </div>
             <!--Akhir Modal Hapus-->
            <?php endwhile; ?>
        </table>
    

    <!-- Modal tambah-->
    <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Form Data Dosen</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="aksi_crud.php">
        <div class="modal-body">
            
            <div class="mb-3">
                <label class="form-label">NAMA</label>
                <input type="text" class="form-control" name="tnama" placeholder="Masukkan Nama Anda">
            </div>

            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" class="form-control" name="tnip" placeholder="Masukkan NIP Anda">
            </div>

            <div class="mb-3">
             <label class="form-label">JABATAN</label> 
             <input type="text" class="form-control" name="tjabatan" placeholder="Masukkan Jabatan Anda">
            </div>    
        </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Exit</button>
            <button type="submit" class="btn btn-primary" name="bsave" >Save</button>
            </div>
        </form>
        </div>
    </div>
    </div>
            </div>
        </div>
    </div>
         <!-- Akhir Modal Tambah-->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>