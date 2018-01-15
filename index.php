<?php
class Komputer{
    function koneksi(){
        $host = "localhost";
        $username = "root";
        $pass = "";
        $db = "db_komputer";
        return mysqli_connect($host,$username,$pass,$db);
    }
    function login()
    {
        session_start();
        if(isset($_POST['btnLogin'])){
        $user = $_POST['textusername'];
            $pass = sha1(trim($_POST['textpassword']));
                     $query = "SELECT * FROM user WHERE username='$user' AND password='$pass'";
                     $result = mysqli_query($this->koneksi(),$query);
            $count = mysqli_num_rows($result);
            if ($count == 1){
            $data = mysqli_fetch_object($result);  
                $_SESSION['username'] = $data->username;
                $_SESSION['hak_akses'] = $data->hak_akses;
                header('location:index.php');
            }else{
                header('location:login.php');
            }
        }
    }
    function logout(){
        session_start();
        session_unset();
        header('location:login.php');
    }
    function index(){
        session_start();
        if(isset($_POST['simpan'])){
            if($_POST['simpan'] == "tambah"){
                $this->proses_tambah();
            }
            if($_POST['simpan'] == "update"){
                $this->proses_update();
            }
        }
        if(empty($_SESSION['username'])){
            header('location:login.php');
        }
        $query = mysqli_query($this->koneksi(),"SELECT * FROM tb_komputer");
        include 'view.php';
    }
    function proses_tambah(){
        $nama = $_POST['nama'];
        $merk = $_POST['merk'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        $sql = mysqli_query($this->koneksi(),"INSERT INTO tb_komputer VALUES (NULL,'$nama','$merk','$stok','$harga')");
        if($sql){
            header("location: index.php");
        }
    } 
    function proses_update(){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $merk = $_POST['merk'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];
        $sql = mysqli_query($this->koneksi(),
        "UPDATE tb_komputer SET  
        namaKomputer = '$nama',
        merk = '$merk',
        stok='$stok',
        harga='$harga'
        WHERE id ='$id'");
if($sql){
            header("location: index.php");
        }
    }
    function tambah(){
        include 'tambah.php';
    }
    function delete(){
        include 'delete.php';
    }
    function update(){
        include 'update.php';
    }
}
$page  = isset($_GET['p']) ? $_GET['p'] : "index";
$data = new Komputer();
$data -> {$page}();
?>
