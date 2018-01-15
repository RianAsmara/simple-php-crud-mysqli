<?php
if(isset($_POST['submit'])){
    if($_POST['submit'] == 'login'){
        if($_POST['username'] == 'admin' && $_POST['password'] == 'admin'){
            echo "Login Sukses";
        }else{
            echo "Login Gagal";
        }
    }
}
?>
