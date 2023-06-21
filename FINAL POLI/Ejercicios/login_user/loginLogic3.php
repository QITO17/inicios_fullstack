<?php
       
$host = 'localhost';
$user = 'root';
$pass = '';
$bd = 'rappi';
$conextion = mysqli_connect($host, $user, $pass, $bd);

$corr = $_POST['corr'];
$clave = $_POST['clave'];

$query = "SELECT user_type FROM login WHERE correo_electronico = '$corr' AND clave = '$clave'";
$result = mysqli_query($conextion, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $type_user = $row['user_type'];

    if ($type_user === 'admin') {
        echo '<script>window.location.href = "../creacion_produ_y_formu/crud/panel.php";</script>';
        exit;
    } else {
        echo '<script>window.location.href = "../index.php";</script>';
        exit;
    }
} else {
    echo '<script>window.location.href = "./formuLogin.php";</script>';
    exit;
}
?>
