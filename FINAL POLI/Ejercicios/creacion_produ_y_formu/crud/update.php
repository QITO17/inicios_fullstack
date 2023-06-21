<?php

       
        $host = 'localhost';

        $user = 'root';

        $pass = '';

        $bd = 'rappi';

        $conextion = mysqli_connect($host, $user, $pass, $bd);

        if($conextion){

        }else{

            die('Error De Conexión'. mysqli_connect_error());
            
        }

        $id = $_POST['Nid'];
        $nom = $_POST['nom'];
        $des = $_POST['des'];
        $preC = $_POST['preC'];
        

        $sql = "UPDATE products set nombre = '$nom', descripcion='$des', precio='$preC' WHERE referencia=". $id; 

    if(mysqli_query($conextion, $sql)){
        echo '<script>window.location.href = "../../index.php";</script>';
    }else{
        echo 'Error Lo Siento'. $sql. mysqli_error($conextion);
   }

?>