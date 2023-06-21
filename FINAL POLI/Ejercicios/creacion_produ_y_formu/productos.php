<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="createe">
        <form method="post" action="./crud/create.php" enctype='multipart/form-data' class="formu">
            <div>
                <label for="nom">Nombre</label>
                <input type="text" name="nom" id="nom">
            </div>
            <div>
                <label for="des">Description</label>
                <input type="text" name="des" id="des">
            </div>

            <div>
                <label for="preC">Precio</label>
                <input type="number" name="preC" id="preC">
            </div>
            <input type="file" name="image" id="image" />

            <input type="submit" value="enviar" name="enviar">

        </form>
    </div>


    <div>
        <h2>Actualizar</h2>
        <form method="post" action="./crud/update.php" class="formu">
            <div>
                <label for="nom">Nuevo nombre</label>
                <input require type="text" name="nom" id="nom">
            </div>
            <div>
                <label for="des">Nueva Description</label>
                <input require type="text" name="des" id="des">
            </div>
            <div>
                <label for="preC">Nuevo Precio</label>
                <input require type="number" name="preC" id="preC">
            </div>

        <input type="submit" value="enviar" name="enviar">
        </form>
    </div>


    <div>
        <h2>Delete</h2>
        <form method="post" action="./crud/eliminar.php" class="formu">
            <div>
                <label for="idd">Referencia a eliminar</label>
                <input require type="text" name="idd" id="idd">
            </div>
        <input type="submit" value="enviar" name="enviar">
        </form>
    </div>
</body>
</html>