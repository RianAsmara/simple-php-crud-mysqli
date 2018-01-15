<?php
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $sql = mysqli_query($this->koneksi(),"DELETE FROM tb_komputer WHERE 
    id = '$id'");
    if($sql){
        header('location:index.php');
    } else {
        echo "Data Gagal Dihapus" . mysqli_error($sql);
    }
}
?>
