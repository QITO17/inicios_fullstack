
    <?php
        $host = 'localhost';

        $user = 'root';

        $pass = '';

        $bd = 'rappi';

        $conextion = mysqli_connect($host, $user, $pass, $bd);

        $id = $_POST['idd']; 

        $sql = "delete from products where referencia=".$id;

        if(mysqli_query($conextion, $sql)){
            echo '<script>window.location.href = "../../index.php";</script>';
        }else{
             echo 'Error Lo Siento'. $sql. mysqli_error($conextion);
        }
    ?>
