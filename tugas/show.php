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
    <title>Document</title>
</head>
<body>
     <?php 
        foreach($diri->show($_GET['id']) as $data)
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
        <legend>Show Data Diri</legend>
        <table>
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"readonly></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><textarea name="alamat" id="" cols="20" rows="10"  value="<?php echo $alamat; ?>"readonly></textarea></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>"readonly></td>
            </tr>
            <tr>
            <th>Jenis Kelamin</th>
              <td>
              <?php
              if($jk==Pria){ ?>
                  <input type="radio" name="jk" value="Pria" checked/>Laki Laki
                  <input type="radio" name="jk" value="Wanita" />Perempuan
             <?php 
              }elseif($jk == Wanita){?>
                  <input type="radio" name="jk" value="Pria" checked/>Laki Laki
                  <input type="radio" name="jk" value="Wanita"/>Perempuan
               <?php }?>
              </td>
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
    </fieldset>
</body>
</html>