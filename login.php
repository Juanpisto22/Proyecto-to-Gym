<html>
    <head>
        <meta charset = "utf-8">
        <title>Ingresar como usuario</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href = "estilos/estilosPagina.css">
    
    
    </head>
    <body>
    <?php require 'partials/header.php'?>
        <h1>Ingreso Usuario</h1>
        <form action="login.php" method="post" >
            <input type="text" name="Nombre" placeholder = "ingresa tu nombre">
            <input type="password" name="Contraceña" placeholder = "ingresa tu contraceña">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>

