<?php 
class Database {
    // $host = untuk memberitau kita menggunakan server lokal yaitu localhost,
    // $user = username dari localhost
    // $pass = password untuk masuk ke localhost mysql kita, kosongkan jika tidak menggunakan password
    // $db = untuk memberi akses kita menggunakan database mana di server lokal kita (localhost)
    public $host = "localhost", $user = "root", $pass = 123, $db="biodata";
    public $koneksi;
    public function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if($this->koneksi)
        {
            // echo "berhasil";
        } else {
            return "Koneksi Database Gagal";
        }
    }
}
class Diri extends Database {
    // Menampilkan Semua Data
    public function index()
    {
        
        $data1 = mysqli_query($this->koneksi,"select * from selfbio");
        // var_dump($datadata1);
        return $data1;
    }
    // Menambah Data
    public function create($nama, $alamat, $tgl_lahir, $jk, $agama, $umur)
    {
        
        mysqli_query($this->koneksi,"insert into selfbio values('','$nama','$alamat', '$tgl_lahir', '$jk', '$agama', '$umur')");
    }
    // Menampilkan Data Berdasarkan id
    public function show($id)
    {
        $data1 = mysqli_query($this->koneksi,"select * from selfbio where id='$id'");
        return $data1;
    }
    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $data1 = mysqli_query($this->koneksi,"select * from selfbio where id='$id'");
        return $data1;
    }
    // mengupdate data berdasarkan id
    public function update($nama, $alamat, $tgl_lahir, $jk, $agama, $umur)
    {
        mysqli_query($this->koneksi,"update selfbio set nama='$nama',alamat='$alamat', tanggal lahir='$tgl_lahir',
        jenis kelamin='$jk', agama ='$agama', umur ='$umur'  where id='$id'");
    }
    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from selfbio where id='$id'");
    }
}
// koneksi db
$db = new Database();
?>