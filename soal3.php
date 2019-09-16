<?php
session_start();
if (isset ($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
if (isset($_SESSION['Login'])) {
    echo "<h1>Selamat Datang ". $_SESSION['Login'] ."</h1>";
    }else {
        die ("Anda belum login! Anda tidak berhak masuk ke halaman
    ini.Silahkan login <a href='session01.php'>di sini</a>");
    }
    } else {
?>
<html>
<head>
    <title>Document</title>
</head>
<fieldset>
<legend align="center"><marquee>FORMULIR BARANG</marquee></legend>
<body>
    <form action="" method="GET">
    <table align="center">
    <tr>
    <td>Nama</td>                
    <td>:</td>
    <td><input required type="text" name="nama"></td>
    </tr>
    <tr>
    <td>Alamat/Kp</td>              
    <td>:</td>
    <td><input required type="text" name="jl"></td>
    </tr>
    <tr>
    <td>Kecematan</td>
    <td>:</td>
    <td><input required type="text" name="kec"></td>
    </tr>
    <trait<>
    <td>Kota</td>
    <td>:</td>
    <td><input required type="text" name="kota"></td>
    </tr>
    <tr>
    <td>Provinsi</td>
    <td>:</td>
    <td><input required type="text" name="pro"></td>
    </tr>
    <tr>
    <td>Kampung/Jalan</td>
    <td>:</td>
    <td><input required type="text" name="kp"></td>
    </tr>
    <tr>
    <td>Nama Barang</td>         
    <td>:</td>
    <td><input required type="text" name="nb"></td>
    </tr>
    <tr>
    <td>Harga Barang</td>        
    <td>:</td>
    <td><input type="number" name="hb"></td>
    </tr>
    <tr>
    <td>Jumlah Barang</td>       
    <td>:</td>
    <td><input required type="number" name="jb"></td>
    </tr>
    <tr>
    <td>Deskripsi</td>           
    <td>:</td>
    <td><textarea required name="ds" cols="20" rows="5"></textarea></td>
    </tr>
    <tr>
    <td>Tanggal Pembelian</td>   
    <td>:</td>
    <td><input required type="date" name="tb"></td>
    </tr>
    <tr>
    <td><input type="submit" name="Login" value="Simpan"> <input type="reset" name="reset" value="Reset"></td>
    </tr></fieldset>
    <?php
if (isset($_GET['Login'])) {
    $Nama = $_GET['nama'];
    $Alamat = $_GET['jl'];
    $Alamat1 = $_GET['kec'];
    $Alamat2 = $_GET['kota'];
    $Alamat3 = $_GET['pro'];
    $Alamat4 = $_GET['kp'];
    $Nama_Barang = $_GET['nb'];
    $Harga_Barang = $_GET['hb'];
    $Jumlah_Barang = $_GET['jb'];
if ($Jumlah_Barang>=10) {
    echo"Selamt anda mendapatkan diskon 20%<br>";
    $diskon=$Harga_Barang*20/100;
}elseif ($Jumlah_Barang>=5) {
    echo"<marquee><b><i>Selamat anda mendapatkan diskon 10%</i></b></marquee><br>";
    $diskon=$Harga_Barang*10/100;
}elseif ($Jumlah_Barang<0) {
    echo"Pesanan Tidak Bisa Diproses<br>";
    die;
}
    $jumlahharga= $Harga_Barang*$Jumlah_Barang;
    $total=$jumlahharga-$diskon;
    $Deskripsi = $_GET['ds'];
    $Tanggal_Pembelian = $_GET['tb'];

    echo"Nama : $Nama <br>";
    echo"Alamat : $Alamat <br>";
    echo"Kecamatan : $Alamat1 <br>";
    echo"Kota : $Alamat2 <br>";
    echo"Provinsi : $Alamat3 <br>";
    echo"Kampung/Jalan : $Alamat4 <br>";
    echo"Nama Barang : $Nama_Barang <br>";
    echo"Harga Barang : $Harga_Barang <br>";
    echo"Deskripsi : $Deskripsi <br>";
    echo"Tanggal Pembelian : $Tanggal_Pembelian <br>";
    echo"<hr>";
    echo"Jumlah Barang : $Jumlah_Barang <br>";
    echo"Diskonnn : $diskon <br>";
    echo"Jumlah Harga : $jumlahharga <br>";
    echo"TOTAL : $total";
}    
?>
</body>
</html>
    <?php } ?>