<?php
include('Conexion.php');
$cuenta=$_POST['cuenta'];
$contrase=$_POST['contrase'];



$consulta="SELECT * FROM alumno where cuenta='$cuenta' and contrase='$contrase'";
$resultado=mysqli_query($conectar,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:Menu.html");

}else{
    ?>
    <?php
    include("MYGYM(Login).html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conectar);
