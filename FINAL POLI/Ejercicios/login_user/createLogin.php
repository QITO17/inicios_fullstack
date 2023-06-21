<?php

       
        $host = 'localhost';

        $user = 'root';

        $pass = '';

        $bd = 'rappi';

        $conextion = mysqli_connect($host, $user, $pass, $bd);

        if($conextion){

            echo 'Conexión exitosa';

        }else{

            die('Error De Conexión'. mysqli_connect_error());
            
        }

        
        $corr = $_POST['corr'];
        $clave = $_POST['clave'];
        $type_user = $_POST['type_user'];
        

        $sql = "INSERT INTO login(correo_electronico, clave, user_type) values ('$corr', '$clave', '$type_user')";
    
        if(mysqli_query($conextion, $sql)){
            echo '<script>window.location.href = "../index.php";</script>';
        }else{
            echo 'Error Lo Siento'. $sql. mysqli_error($conextion);
        }

        
    ?>
