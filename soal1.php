<?php
session_start();
if (isset ($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user == "lukman" && $pass = "123") {
        $_SESSION['Login'] = $user;
        echo "Silahkan masuk<br>";
        echo "<a href='soal2.php'>Daftar TNI</a><br>";
        echo "<a href='soal3.php'>Shoping</a><br>";
        echo "<a href='soal4.php'>LogOUT</a><br>";

    }else {
        die ("Anda belum login! Anda tidak berhak masuk ke halaman
    ini.Silahkan login <a href='session01.php'>di sini</a>");
    }
} else {
    ?>
    <html>
        <head>
        <title>Login here...</title>
        </head>
        <body>
            <form action="" method="post">
                <h2>Login here...</h2>
                username : <input type="text" name="user"><br>
                password : <input type="password" name="pass"><br>
                <input type="submit" name="Login" value="Log In">
            </form>
        </body>
    </html>
<?php } ?>