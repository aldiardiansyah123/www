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
        <legend>Edit Data Siswa</legend>
        <form action="proses.php?aksi=update" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
               <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><textarea name="alamat" id="" cols="20" rows="10"  value="<?php echo $alamat; ?>"></textarea></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>"></td>
            </tr>
            <tr>
            <th>Jenis Kelamin</th>
               <?php
              if($jk==Pria){ ?>
                  <input type="radio" name="jk" value="Pria" checked/>Laki Laki
                  <input type="radio" name="jk" value="Wanita" checked/>Perempuan
             <?php 
              }elseif($jk == Wanita){?>
                  <input type="radio" name="jk" value="Pria" />Laki Laki
                  <input type="radio" name="jk" value="Wanita"checked/>Perempuan
               <?php }?>
            </tr>
               <tr>
              <th>Agama</th>
              <td>
                    <select name="agama">
                    <option value="islam">islam</option>
                    <option value="kristen">kristen</option>
                    <option value="hindu">hindu</option>
                    <option value="budha">budha</option>
                    </select>
             </td>
           </tr>
            </table>
            <input type="submit" name="save" value="Simpan">
          <input type="reset">
        </form>
    </fieldset>
</body>
</html>