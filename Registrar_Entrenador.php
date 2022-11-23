
<html>
    <head>
        <meta charset = "usf-8" >
        <title>Registro</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href = "estilos/estilosPagina.css">
    </head>
    <?php require 'partials/header.php'?>
    <body>
    <form action="Registrar_Entrenador.php"  method="POST">
        <h1>Registro de Entrenador</h1>
        <h3>Registre todos los campos de lo contrario no lo dejara registrar</h3>
        <input type="text" name="Nombre" placeholder = "ingresa tu nombre">
        <input type="password" name="Contraceña" placeholder = "ingresa tu contraceña">
        <input type="password" name="Contraceña2" placeholder = "Confirma tu contraceña">
        <div> <br> <h4>Por favor sube una foto en donde se vea claramente tu rostro</h4> <br>
        <input type="file" name="Foto_Perfil"> 
        </div>
        <input type="text" name="Genero" placeholder = "ingresa tu genero">
        <input type="text" name="Tiempo de experiencia" placeholder = "¿Cuanto llevas siendo entrenador/@?">
        <input type="submit" value="Registrarme">
    
    
    
    
    </form>
    </body>
</html>