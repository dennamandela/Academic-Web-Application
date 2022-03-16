<?php 
    include 'koneksi.php'; 
?>

<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
    <body>
        <header>
            <h3>Data Mahasiswa</h3>
        </header>
        <table border="1">
            <thead>
                <tr>
                    <td>NIM</td>
                    <td>Nama</td>
                    <td>Program Studi</td>
                    <td>Tempat</td>
                    <td>Jenis Kelamin</td>
                    <td>Tanggal Lahir</td>
                    <td>Agama</td>
                    
                </tr>
            </thead>
            <a href="tambah.php">(+)Tambah Data Mahasiswa</a>
            <tbody>
                <?php
                $sql = "select * from mahasiswa";
                $query = mysqli_query($koneksi, $sql);

                while($mahasiswa = mysqli_fetch_array($query)){
                    echo "<tr>";
                        echo "<td>".$mahasiswa['nim']."</td>";
                        echo "<td>".$mahasiswa['nama']."</td>";
                        echo "<td>".$mahasiswa['prodi']."</td>";
                        echo "<td>".$mahasiswa['tempat']."</td>";
                        echo "<td>".$mahasiswa['jk']."</td>";
                        echo "<td>".$mahasiswa['tanggal_lahir']."</td>";
                        echo "<td>".$mahasiswa['agama']."</td>";
                    echo "</tr>";
                
                }
                ?>
            </tbody>
        </table>
    </body>
</html>