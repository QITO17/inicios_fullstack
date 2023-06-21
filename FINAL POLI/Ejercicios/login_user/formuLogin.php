<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles_formu.css">
    <title>Document</title>
</head>
<body>
    <div class="conteinerRappi2">
        <h1>CREAR USUARIO O ADMIN</h1>
        <div class="createe">
            <div class="formulario">
                <form method="post" action="./createLogin.php" class="formu">
                    <div>
                        <label for="corr">correo electronico</label>
                        <input type="text" require name="corr" id="corr">
                    </div>
                    <div>
                        <label for="clave">clave</label>
                        <input type="password" require name="clave" id="clave">
                    </div>

                    <div>
                        <label for="type_user">tipo usuario(admin o usuario)</label>
                        <input type="text" require name="type_user" id="type_user">
                    </div>

                    <input class="boton" type="submit" value="Crear" name="enviar">
                </form>
            </div>
        </div>
    </div>
</body>
</html>