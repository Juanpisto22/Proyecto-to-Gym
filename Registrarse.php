
<html>  
    <head>
        <meta charset = "usf-8" >
        <title>Registro</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href = "estilos/estilosPagina.css">
    </head>
    <body>
    
    

    <h1>Registro Usuario</h1>
    <form  method="post">
        <input type="text" name="Nombre" placeholder = "ingresa tu nombre">
        <input type="password" name="password" placeholder = "ingresa tu contracena">
        <input type="password" name="password2" placeholder = "vuelve a escribir tu contracena">
        <input type="text" name="Cedula" placeholder = "ingresa tu cedula">
        <input type="text" name="Edad" placeholder = "ingresa tu edad">
        <input type="text" name="TipoGenero" placeholder = "igrese su genero">
        <!--<label for="TiposGenero">Elige tu genero</label>
        <select name="TipoGenero" id="TipoGenero">
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
            <option value="Elicoptero Apache">Elicoptero Apache</option>
            <option value="Otros">Otros</option>
        </select> --> 
        <input type="text" name="Altura" placeholder = "ingresa tu altura">
        <input type="text" name="Peso" placeholder = "ingresa tu peso en kg">
        <input type="submit" value="Registrarme">
        </form>
        <?php include 'Registro.php';?>
    </body>
    
</html>