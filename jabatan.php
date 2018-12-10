<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        img {
            float : left;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css">
    <script type="text/javascript" src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/jquery.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <title>SISTEM INFORMASI PENGGAJIAN</title>
</head>
<body>
    <ul class="nav nav-tabs" role="tablist">
    <div class="navbar">
        <a class="navbar-brand" href="home.php">Sistem Informasi Penggajian Karyawan</a>
        <ul class="nav navbar-nav">
            <li>
                <a href="home.php">Home</a>
            </li>
            <li class="active">
                <a href="jabatan.php">Jabatan</a>
            </li>
            <li>
                <a href="tunjangan.php">Jenis Tunjangan</a>
            </li>
            <li>
                <a href="karyawan.php">karyawan</a>
            </li>
        </ul>
    </div>
      
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="tab1">
            <h1>Data Jabatan</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Jabatan</th>
                        <th>Nama Jabatan</th>
                        <th>Gaji Pokok</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>Staff Keuangan</td>
                        <td>Rp 5.000.000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2</td>
                        <td>Staff Personalia</td>
                        <td>Rp 2.000.000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>3</td>
                        <td>Staff Operator</td>
                        <td>Rp 1.500.000</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>4</td>
                        <td>Direktur</td>
                        <td>Rp 6.000.000</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>5</td>
                        <td>Sekertaris</td>
                        <td>Rp 5.000.000</td>
                    </tr>
                </tbody>
        </div>
        
</body>
</html>