<?php
session_start();
if (isset ($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user == "lukman" && $pass = "123") {
        $_SESSION['login'] = $user;
        echo "<h1>Anda Berhasil LOGIN</h1>";
        echo "<h2>Klik</h2> <a href='session02.php'>Disini(session02.php)
        </a>
            untuk menuju kehalaman pemeriksaan session";
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