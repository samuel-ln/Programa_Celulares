<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña']; 
//Aqui recibiran los datos por teclado 
//luego se crea un inico de sesion 
session_start(); //metodo 
$_SESSION['usuario']=$usuario;

include('db.php');

$consulta="SELECT*FROM usuarios where Nombre_usuario='$usuario' and contraseña='$contraseña'";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas){
header("location:home.php");
}else{
?>
<?php
include("index.php"); 
?>
<h1>ERROR EN LA AUTENTICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
