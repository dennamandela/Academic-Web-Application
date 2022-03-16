<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['kirim'])){

    // ambil data dari formulir
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $tempat = $_POST['tempat'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $tl = $_POST['tanggal_lahir'];

    // buat query
    $sql = "INSERT INTO mahasiswa (nim, nama, prodi, tempat, jk, agama, tanggal_lahir) VALUE ('$nim', '$nama', '$prodi', '$tempat', '$jk','$agama', '$tl')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>