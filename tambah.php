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
  </tr>
  <tr>
  <td><label for="prodi">Program Studi: </label></td>
  <td>
      <select name="prodi">
        <option>--- Pilih Program Studi ---</option>
        <option>Teknik Informatika</option>
        <option>Sistem Informasi</option>
      </select>
  </td>
  </tr>
  <tr>
    <td>Tempat</td>
    <td><input type="text" name="tempat"></td>
  </tr>
  <tr>
    <td><label for="jenis_kelamin">Jenis Kelamin: </label></td>
    <td>
        <label><input type="radio" name="jk" value="laki-laki"> Laki-laki</label>
        <label><input type="radio" name="jk" value="perempuan"> Perempuan</label>
    </td>
  </tr>
  <tr>
    <td><label for="agama">Agama: </label></td>
    <td>
      <select name="agama">
        <option>--- Pilih Agama ---</option>
        <option>Islam</option>
        <option>Kristen</option>
        <option>Hindu</option>
        <option>Budha</option>
        <option>Atheis</option>
      </select>
    </td>
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