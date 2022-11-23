<?php
include("database.php");
//Eliminar cuando no se nesecite la confirmación
//de la conexión a la base de datos
if ($conex){
    echo "Conexion a base de datos exitosa";
}
//////////////////////////////////////////////////


if(isset($_POST['Registrarme'])){

if (strlen($_POST['Nombre'] >= 1) &&
    strlen($_POST['Password'] >= 1) &&
    strlen($_POST['Password2'] >= 1) &&
    strlen($_POST['Cedula'] >= 1) &&
    strlen($_POST['Edad'] >= 1) &&
    strlen($_POST['TipoGenero'] >= 1) &&
    strlen($_POST['Altura'] >= 1) &&
    strlen($_POST['Peso'] >= 1) 
    ){
        $Nombre     =trim($_POST['Nombre']);
        $Password   =trim($_POST['Password']);    
        $Password2  =trim($_POST['Password2']);
        $Cedula     =trim($_POST['Cedula']);
        $Edad       =trim($_POST['Edad']);
        $TipoGenero =trim($_POST['TipoGenero']);
        $Altura     =trim($_POST['Altura']);
        $Peso       =trim($_POST['Peso']);
        $consulta = "INSERT INTO usuarios2 (Nombre, Password, Password2, Cedula, Edad, TipoGenero, Altura, Peso,)
         VALUES ('$Nombre','$Password','$Password2',$Cedula,'$Edad','$TipoGenero','$Altura','$Peso')";
         $resultado = mysql_query($conex,$consulta);
         if($resultado){
            ?>
            <h3 class="ok" >¡Te has registrado exitosamente!</h3>
            <?php
         }else {
            ?>
            <h3 class="bad" >¡Ups ha ocurrido un error!</h3>
            <?php

         }

    }   else{
        ?>
            <h3 class="bad" >¡Por favor complete los campos!</h3>
            <?php

    }

}

?>