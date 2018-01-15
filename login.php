<?php
session_start();
if(!empty($_SESSION['username'])){
header('location:index.php');
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = width-device,initial-scale=1">
    <title>Login Form</title>
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugin/parsley/parsley.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <div class="alert alert-danger hidden" role="alert">
                    Ooops. Something Went Wrong
                </div>
                <div class="alert alert-success hidden" role="alert">
                    Success
                </div>

                <div class="card  animated shake">
                    <div class="card-header">
                        Login Form
                    </div>
                    <div class="card-body">
                        <form action="index.php?p=login" method="post" id="frmLogin" data-parsley-validate="">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="textusername" required="">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="textpassword" required="">
                            </div>
                    </div>
                    <div class="card-footer">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" name="btnLogin" value="Login">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugin/parsley/parsley.min.js"></script>

<script type="text/javascript">
    $(function() {
                $('#frmLogin').parsley();
            }

</script>

</html>
