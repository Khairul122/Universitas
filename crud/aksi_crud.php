<?php
// Panggil koneksi database
include "koneksi.php";

// Uji tombol save
if (isset($_POST['bsave'])){
    // Simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO mahasiswa (nama, nim, alamat)
                                      VALUES ('$_POST[tnama]',
                                              '$_POST[tnim]',
                                              '$_POST[talamat]') ");

    // Uji simpan
    if ($simpan) {
        echo "<script>
                alert('Simpan data sukses!');
                document.location='index.php';
              </script>";
    } else {
        echo "<script>
        alert('Simpan data gagal!');
        document.location='index.php';
      </script>";
    }
}

// Uji tombol edit
if (isset($_POST['bedit'])){
    // Ubah data
    $edit = mysqli_query($koneksi, "UPDATE mahasiswa SET 
                                    nama = '$_POST[tnama]',
                                    nim = '$_POST[tnim]',
                                    alamat = '$_POST[talamat]'
                                    WHERE id_mahasiswa = '$_POST[id_mahasiswa]'");

    // Uji ubah
    if ($edit) {
        echo "<script>
              alert('Edit data sukses!');
              document.location='index.php';
            </script>";
    } else {
        echo "<script>
      alert('Edit data gagal!');
      document.location='index.php';
    </script>";
    }
}

// Uji tombol hapus
if (isset($_POST['bhapus'])){
    // Hapus data
    $delete = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mahasiswa = '$_POST[id_mahasiswa]'");

    // Uji hapus
    if ($delete) {
        echo "<script>
              alert('Hapus data sukses!');
              document.location='index.php';
            </script>";
    } else {
        echo "<script>
      alert('Hapus data gagal!');
      document.location='index.php';
    </script>";
    }
}
?>


<?php
// Panggil koneksi database
include "koneksi.php";

// Uji tombol save
if (isset($_POST['bsave'])){
    // Simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO dosen (nama, nip, jabatan)
                                      VALUES ('$_POST[tnama]',
                                              '$_POST[tnip]',
                                              '$_POST[tjabatan]') ");

    // Uji simpan
    if ($simpan) {
        echo "<script>
                alert('Simpan data sukses!');
                document.location='dosen.php';
              </script>";
    } else {
        echo "<script>
        alert('Simpan data gagal!');
        document.location='dosen.php';
      </script>";
    }
}

// Uji tombol edit
if (isset($_POST['bedit'])){
    // Ubah data
    $edit = mysqli_query($koneksi, "UPDATE dosen SET 
                                    nama = '$_POST[tnama]',
                                    nip = '$_POST[tnip]',
                                    jabatan = '$_POST[tjabatan]'
                                    WHERE id_dosen = '$_POST[id_dosen]'");

    // Uji ubah
    if ($edit) {
        echo "<script>
              alert('Edit data sukses!');
              document.location='dosen.php';
            </script>";
    } else {
        echo "<script>
      alert('Edit data gagal!');
      document.location='dosen.php';
    </script>";
    }
}

// Uji tombol hapus
if (isset($_POST['bhapus'])){
    // Hapus data
    $delete = mysqli_query($koneksi, "DELETE FROM dosen WHERE id_dosen = '$_POST[id_dosen]'");

    // Uji hapus
    if ($delete) {
        echo "<script>
              alert('Hapus data sukses!');
              document.location='dosen.php';
            </script>";
    } else {
        echo "<script>
      alert('Hapus data gagal!');
      document.location='dosen.php';
    </script>";
    }
}
?>


<?php
// Panggil koneksi database
include "koneksi.php";

// Uji tombol save
if (isset($_POST['bsave'])){
    // Simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO jadwal (mata_kuliah, waktu, ruang)
                                      VALUES ('$_POST[tmata_kuliah]',
                                              '$_POST[twaktu]',
                                              '$_POST[truang]') ");

    // Uji simpan
    if ($simpan) {
        echo "<script>
                alert('Simpan data sukses!');
                document.location='jadwal.php';
              </script>";
    } else {
        echo "<script>
        alert('Simpan data gagal!');
        document.location='jadwal.php';
      </script>";
    }
}

// Uji tombol edit
if (isset($_POST['bedit'])){
    // Ubah data
    $edit = mysqli_query($koneksi, "UPDATE jadwal SET 
                                    mata_kuliah = '$_POST[tmata_kuliah]',
                                    waktu = '$_POST[twaktu]',
                                    ruang = '$_POST[truang]'
                                    WHERE id_jadwal = '$_POST[id_jadwal]'");

    // Uji ubah
    if ($edit) {
        echo "<script>
              alert('Edit data sukses!');
              document.location='jadwal.php';
            </script>";
    } else {
        echo "<script>
      alert('Edit data gagal!');
      document.location='jadwal.php';
    </script>";
    }
}

// Uji tombol hapus
if (isset($_POST['bhapus'])){
    // Hapus data
    $delete = mysqli_query($koneksi, "DELETE FROM jadwal WHERE id_jadwal = '$_POST[id_jadwal]'");

    // Uji hapus
    if ($delete) {
        echo "<script>
              alert('Hapus data sukses!');
              document.location='jadwal.php';
            </script>";
    } else {
        echo "<script>
      alert('Hapus data gagal!');
      document.location='jadwal.php';
    </script>";
    }
}
?>

<?php
// Panggil koneksi database
include "koneksi.php";

// Uji tombol save
if (isset($_POST['bsave'])){
    // Simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO mata_kuliah ( nama_matakuliah, sks)
                                      VALUES ('$_POST[tnama_matakuliah]',
                                              '$_POST[tsks]') ");

    // Uji simpan
    if ($simpan) {
        echo "<script>
                alert('Simpan data sukses!');
                document.location='matakuliah.php';
              </script>";
    } else {
        echo "<script>
        alert('Simpan data gagal!');
        document.location='matakuliah.php';
      </script>";
    }
}

// Uji tombol edit
if (isset($_POST['bedit'])){
    // Ubah data
    $edit = mysqli_query($koneksi, "UPDATE mata_kuliah SET 
                                    nama_matakuliah = '$_POST[tnama_matakuliah]',
                                    sks = '$_POST[tsks]',
                                    WHERE id_matakuliah = '$_POST[id_matakuliah]'");

    // Uji ubah
    if ($edit) {
        echo "<script>
              alert('Edit data sukses!');
              document.location='matakuliah.php';
            </script>";
    } else {
        echo "<script>
      alert('Edit data gagal!');
      document.location='matakuliah.php';
    </script>";
    }
}

// Uji tombol hapus
if (isset($_POST['bhapus'])){
    // Hapus data
    $delete = mysqli_query($koneksi, "DELETE FROM mata_kuliah WHERE id_matakuliah = '$_POST[id_matakuliah]'");

    // Uji hapus
    if ($delete) {
        echo "<script>
              alert('Hapus data sukses!');
              document.location='matakuliah.php';
            </script>";
    } else {
        echo "<script>
      alert('Hapus data gagal!');
      document.location='matakuliah.php';
    </script>";
    }
}
?>