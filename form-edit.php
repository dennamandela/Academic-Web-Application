<?php
include ("koneksi.php");

//kalau tidak ada nim di query string
if (!isset ($_GET['nim'] )){
    header ('Location: index.php');
}

//ambil nim dari query string
$id = $_GET['nim'];

//buat query untuk diambil data dari database
$sql = "SELECT * FROM mahasiswa WHERE nim=$id";
$query = mysqli_query($koneksi, $sql);
$mahasiswa = mysqli_fetch_assoc($query);

//jika data yang di-edit tidak ditemukan
if(mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>

<html>
<head>
  <title>Edit Data Mahasiswa</title>
</head>
<body>
  <h2>Edit Mahasiswa</h2>
  <form method="post" action="proses-edit.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>NIM</td>
    <td><input type="text" name="nim" value="<?php echo $mahasiswa['nim'] ?>"></td>
  </tr>
  <tr>
    <td>Nama Mahasiswa</td>
    <td><input type="text" name="nama" value="<?php echo $mahasiswa['nama'] ?>"></td>
  </tr>
  <tr>
  <td><label for="prodi">Program Studi: </label></td>
  <?php $prodi = $mahasiswa['prodi']; ?>
  <td>
      <select name="prodi">
        <option>--- Pilih Program Studi ---</option>
        <option <?php echo ($prodi == 'Teknik Informatika') ? "selected": "" ?>>Teknik Informatika</option>
        <option <?php echo ($prodi == 'Sistem Informasi') ? "selected": "" ?>>Sistem Informasi</option>
      </select>
  </td>
  </tr>
  <tr>
    <td>Tempat</td>
    <td><input type="text" name="tempat" value="<?php echo $mahasiswa['tempat'] ?>"></td>
  </tr>
  <tr>
    <td><label for="jenis_kelamin">Jenis Kelamin: </label></td>
    <?php $jk = $mahasiswa['jk']; ?>
    <td>
        <label><input type="radio" name="jk" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
        <label><input type="radio" name="jk" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
    </td>
  </tr>
  <tr>
    <td><label for="agama">Agama: </label></td>
    <?php $agama = $mahasiswa['agama']; ?>
    <td>
      <select name="agama">
        <option>--- Pilih Agama ---</option>
        <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
        <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
        <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
        <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
        <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
      </select>
    </td>
  <tr>
    <td>Tanggal Lahir</td>
    <td><input type="date" name="tanggal_lahir"> <?php echo $mahasiswa['tanggal_lahir'] ?></td>
  </tr>
  </table>
  <br/>
  <br/>
  <input type="submit" name="edit" value="Update">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>