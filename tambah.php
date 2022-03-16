<html>
<head>
  <title>Tambah Data Mahasiswa</title>
</head>
<body>
  <h2>Tambah Mahasiswa</h2>
  <form method="post" action="proses.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>NIM</td>
    <td><input type="text" name="nim"></td>
  </tr>
  <tr>
    <td>Nama Mahasiswa</td>
    <td><input type="text" name="nama"></td>
  </tr
  <tr>
    <td>Program Studi</td>
    <td><input type="text" name="prodi"></td>
  </tr>
  <tr>
    <td>Tempat</td>
    <td><input type="text" name="tempat"></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td><input type="text" name="jk"></td>
  </tr>
  <tr>
    <td>Agama</td>
    <td><input type="text" name="agama"></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td><input type="date" name="tanggal_lahir"></td>
  </tr>
  </table>
  <br/>
  <br/>
  <input type="submit" name="kirim" value="Simpan">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>