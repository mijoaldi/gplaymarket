<?php
include 'conexion_be.php';
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, clave) 
          VALUES('$nombre_completo', '$correo', '$usuario', '$clave')";

//verificar que el correo no se repita en la base de Datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM  usuarios WHERE correo='$correo' ");
if (mysqli_num_rows($verificar_correo) > 0){
echo '
         <script>
         alert("este correo ya esta registrado, intenta con otro diferente");
         window.location = "../gplaymarket/registro_iniciar.php";
         </script>
    
    ';
    exit();
}

//verificar que el usuario no se repita en la base de datos
$verificar_usuario= mysqli_query($conexion, "SELECT * FROM  usuarios WHERE usuario='$usuario' ");
if (mysqli_num_rows($verificar_usuario) > 0){
echo '
         <script>
         alert("este usuario ya esta registrado, intenta con otro diferente");
         window.location = "../gplaymarket/registro_iniciar.php";
         </script>
    
    ';
    exit();
}


$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
        <script>
            alert("usuario almacenado exitosamente");
            window.location = "../gplaymarket/registro_iniciar.php";
        </script>
    ';

} else{
    echo '
        <script>
            alert("intentalo de nuevo, usuario no almacenado");
            window.location = "../gplaymarket/registro_iniciar.php";
        </script>
    ';

}

mysqli_close($conexion);

?>
