<html>

<head>
    <title>Data Laptop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width = width-device,initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css">
    <link rel="stylesheet" href="assets/plugin/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Katalog Komputer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto pull-right">
                <li class="nav-item">
                    <a href="" class="nav-link">Home</a>
                </li>
            </ul>
            Halo,
            <a href="" class="nav-link disabled">
                <?php echo $_SESSION['username'] ?>
            </a>
            <a href="index.php?p=logout"><span class="fa fa-sign-out"></span></a>
        </div>
    </nav>
    <div class="container-fluid">
        <fieldset>
            <legend class="text-center">Katalog Laptop</legend>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 text-center">
                    <table class="table table-inverse table-condensed table-sm  animated shake">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Laptop</th>
                                <th>Merk</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <?php if($_SESSION['hak_akses'] == "admin"){ ?>
                                <th>Aksi</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no =  1 ;
                            while ($row  = mysqli_fetch_object($query)){
                            ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $no++  ?>
                                    </th>
                                    <td>
                                        <?php echo $row->namaKomputer ?>
                                    </td>
                                    <td>
                                        <?php echo $row->merk ?>
                                    </td>
                                    <td>
                                        <?php echo $row->stok?>
                                    </td>
                                    <td>
                                        <?php echo $row->harga ?>
                                    </td>
                                    <?php if($_SESSION['hak_akses'] == "admin"){ ?>
                                    <td>
                                        <a class="btn btn-primary" href="index.php?p=update&id=<?php echo $row->id;?>">
                                            <span class="fa fa-pencil"></span>
                                        </a>
                                        <a class="btn btn-danger" href="index.php?p=delete&id=<?php echo $row->id;?>">
                                            <span class="fa fa-trash"></span>
                                        </a>
                                    </td>
                                    <?php } ?>
                                </tr>
                                <?php
                                        }
                                ?>
                        </tbody>
                    </table>
                    <?php if($_SESSION['hak_akses'] == "admin"){ ?>
                    <a href="index.php?p=tambah" class="btn btn-block btn-primary">Add Data</a>
                    <?php } ?>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </fieldset>
    </div>
</body>
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</html>
