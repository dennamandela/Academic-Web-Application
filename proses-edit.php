<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['edit'])){

    // ambil data dari formulir
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $tempat = $_POST['tempat'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $tl = $_POST['tanggal_lahir'];

    // buat query
    $sql = "UPDATE mahasiswa SET nama='$nama', prodi='$prodi', tempat='$tempat', jk='$jk', agama='$agama', tanggal_lahir='$tl' WHERE nim=$nim";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php
        header('Location: index.php');
    } else {
        // kalau gagal tampilkan pesan
        header('Gagal menyimpan perubahan...');
    }


} else {
    die("Akses dilarang...");
}

?>