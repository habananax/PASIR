<html>
  <head>
    <title>Inventario</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <h3>Editando los datos de un empleado existente...</h3>
  
<?php 

//incluimos la clase con la que trabajamos
require("./empleado.php");


//recoger valores del form
$dni = $_POST["dni"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$departamento = $_POST["departamento"];
$email = $_POST["email"];

echo "El dni del formulario es: $dni<br>";
//hemos recogido datos del formulario... creamos objeto
$empleadoNuevo = new Empleado($dni,$nombre,$apellidos,$departamento,$email);
echo $empleadoNuevo->getDNI()."<br>";


//Vamos a por la
$SQLUpdate = $empleadoNuevo->getUpdateSQL();

echo "La sentencia SQL a ejecutar es: ".$SQLUpdate."<br>";

$servername = "bbdd";
$username = "root";
$password = "secret";

try {
  $conn = new PDO("mysql:host=$servername;dbname=inventario", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}

try {
    //la function exec está programada en la clase PDO,
    // y he leido que lo que hace es ejecutar el SQL que tenga
    //el parámetro dentro de la mysql a la que estemos conectados
   $conn->exec($SQLUpdate);
   echo "Actualizaci&oacute;n correcta";
} catch (PDOException $e) {
    echo "Update failed: " . $e->getMessage();
    die();
}

//cerramos la conexión
$conn = null;


?>
<a href="./index.html">Volver a inicio</a>
</body>
</html>
