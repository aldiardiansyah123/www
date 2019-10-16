<?php 
// menambah / memanggil file database.php
include '../database1.php';
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BIODATA</title>
</head>
<body>
    <center>Data Siswa</center>
    <a href="/tugas/create.php">Input  Biodata</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Umur</th>
            <th colspan="3">Aksi</th>
        </tr>
        <?php
            $diri = new Diri();
            $no = 1;
            foreach($diri->index() as $data) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['tgl_lahir']; ?></td>
            <td><?php echo $data['jk']; ?></td>
            <td><?php echo $data['agama']; ?></td>
            <td><?php echo $data['umur']; ?></td>
            <td><a href="show.php?id=<?php echo $data['id']; ?>&aksi=show">Show</a></td>
            <td><a href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit">Edit</a></td>
            <td><a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete">Delete</a></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>