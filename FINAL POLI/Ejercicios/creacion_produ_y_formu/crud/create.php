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

        
        $nom = $_POST['nom'];
        $des = $_POST['des'];
        $preC = $_POST['preC'];



        $fileinfo=PATHINFO($_FILES["image"]["name"]);
            $newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
            move_uploaded_file($_FILES["image"]["tmp_name"],"../upload/" . $newFilename);
            $location="upload/" . $newFilename; 
        

        $sql = "INSERT INTO products(nombre, descripcion, precio, image1) values ('$nom', '$des', $preC, '$location')";
    
        if(mysqli_query($conextion, $sql)){
            echo '<script>window.location.href = "../../index.php";</script>';
        }else{
            echo 'Error Lo Siento'. $sql. mysqli_error($conextion);
        }

        
    ?>
