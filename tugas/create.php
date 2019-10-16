<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
     <legend>Data diri</legend>
       <form action="proses.php?aksi=tambah"method="post">
       <table>
           <tr>
              <th>Nama</th>
              <td><input type="text" name="nama" required></td>
           </tr>
           <tr>
              <th>Alamat</th>
              <td><textarea name="alamat" id="" cols="20" rows="5"></textarea></td>
           </tr>
           <tr>
              <th>Tanggal Lahir</th>
              <td><input type="date" name="tgl_lahir"></td>
           </tr>
           <tr>
              <th>Jenis Kelamin</th>
              <td><input type="radio" name="jk" value="Pria"/>Laki Laki
                  <input type="radio" name="jk" value="Wanita"/>Perempuan
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
       <hr>
          <input type="submit" name="save" value="Simpan">
          <input type="reset">
       </form>
</fieldset>
</body>
</html>