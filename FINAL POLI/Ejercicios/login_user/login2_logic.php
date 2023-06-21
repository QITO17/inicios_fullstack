<?php
session_start();
       
$host = 'localhost';
$user = 'root';
$pass = '';
$bd = 'rappi';
$conextion = mysqli_connect($host, $user, $pass, $bd);

$corr = $_POST['corr'];
$clave = $_POST['clave'];
$type_user = $_POST['type_user'];

$query = "SELECT user_type FROM login WHERE correo_electronico = '$corr' AND clave = '$clave'";
$result = mysqli_query($conextion, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $type_user = $row['user_type'];

    if ($type_user === 'admin') {
        $_SESSION['es_admin'] = true;
        echo '<script>window.location.href = "../index.php";</script>';
        exit;
    } else {
        $_SESSION['es_admin'] = false;
        echo '<script>window.location.href = "../index.php";</script>';
        exit;
    }
} else {
    echo '<script>window.location.href = "./formuLogin.php";</script>';
    exit;
}
?>
