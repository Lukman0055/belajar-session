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
<body>
    <fieldset>
    <legend>
     Daftar TNI
    </legend>
    <form action="" method="get">
        <label for="">Berat Badan</label>
        <input type="number" min="1" name="s" required>
        <br>
        <label for="">Tinggi Badan</label>
        <input type="number" min="1" name="k" required>
        <input type="submit" name="simpan" value="simpan">
    </form>
    </fieldset>

    <?php
    if (isset($_GET['simpan'])) {
        $bb = $_GET['s'];
        $tb = $_GET['k'];
        function tni($berat , $tinggi){
        if ($berat >= 60 && $tinggi >= 165) {
            $e = "Diterma";
        }else {
            $e = "Tidak Diterima";
        }
        return $e;
    }
        $terima = tni($bb, $tb);
        echo "Berat Badan anda : $bb<br> Tinggi Badan anda : $tb<br>Status Anda : $terima";
    }
    ?>
</body>
</html>
    <?php } ?>