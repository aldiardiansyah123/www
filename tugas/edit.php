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
    <title>Latihan CRUD - Edit Data</title>
</head>
<body>
    <?php 
        foreach($diri->edit($_GET['id']) as $data)
        {
            $id = $data['id'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $tgl_lahir = $data['tgl_lahir'];
            $jk = $data['jk'];
            $agama = $data['agama'];
        }
    ?>
    <fieldset>
        <legend>Edit Biodata</legend>
        <form action="proses.php?aksi=update" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" cols="40" required><?php echo $alamat; ?></textarea></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>"required></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <?php
                    if ($jk==pria) {?>
                        <input type="radio" name="jk" value="pria">Laki-Laki
                        <input type="radio" name="jk" value="wanita">Perempuan
                    <?php
                    }elseif ($jk==wanita) {?>
                        <input type="radio" name="jk" value="pria">Laki-Laki
                        <input type="radio" name="jk" value="wanita">Perempuan
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
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>