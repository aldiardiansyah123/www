<?php 
include '../database1.php';
$diri = new Diri();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>
<body>
    <?php 
        foreach($diri->show($_GET['id']) as $data)
        {
            $id = $data['id'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $jk = $_POST['jk'];
            $agama = $_POST['agama'];
        }
    ?>
    <fieldset>
        <legend>Show Biodata</legend>
            <table>
                <tr>
                    <th>Nama Siswa</th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" cols="40" readonly><?php echo $alamat; ?></textarea></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>"readonly></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <?php
                    if ($jk==pria) {?>
                        <input type="radio" name="jk" value="pria" checked/>Laki-Laki
                        <input type="radio" name="jk" value="wanita">Perempuan
                    <?php
                    }elseif ($jk==wanita) {?>
                        <input type="radio" name="jk" value="pria">Laki-Laki
                        <input type="radio" name="jk" value="wanita" checked/>Perempuan
                    <?php } ?>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td><select name="agama">  
                        <option value="">Agama</option><?php echo $jk?>
                        <option value="Islam">Islam</option><?php echo $jk?>
                        <option value="Kristen">Kristen</option><?php echo $jk?>
                        </select></td>
                </tr>
            </table>
    </fieldset>
</body>
</html>