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
    <div class="container-fluid">
        <fieldset>
            <legend class="text-center">Tambah Data</legend>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 ">
                    <form action="index.php" method="POST">
                        <div class="form-group">
                            <label>Nama Laptop</label>
                            <input type="text" class="form-control" placeholder="Nama Laptop" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Merk</label>
                            <input type="text" class="form-control" placeholder="Merk" name="merk">
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" class="form-control" placeholder="Stok" name="stok">
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <div class="input-group">
                                <div class="input-group-addon">Rp.
                                </div>
                                <input type="text" class="form-control" name="harga">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="simpan" value="tambah"><span class="fa fa-save" aria-hidden="true"></span> Simpan</button>
                        <button type="reset" class="btn btn-danger"><span class="fa fa-refresh" aria-hidden="true"></span> Reset</button>
                    </form>
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
