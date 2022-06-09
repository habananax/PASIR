<html>
  <head>
    <title>Inventario</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
      <h2>Empleados de la Empresa<br></h2>
  
<?php 

//incluimos la clase con la que trabajamos
require("./empleado.php");


//recoger valores del form
$tipoOrdenacion = $_POST["tipoOrdenacion"];

//hemos recogido datos del formulario...
$SQLSelect = Empleado::getSelectSQL($tipoOrdenacion);

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

    echo "<table><tr><th>DNI</th><th>Nombre</th><th>Apellidos</th><th>Departamento</th><th>email</th></tr>";
    foreach ($conn->query($SQLSelect) as $row) {
      echo "<tr><td>".$row['dni']."</td><td>".$row['nombre']."</td><td>".$row['apellidos']."</td><td>".$row['departamento']."</td><td>".$row['email']."</td></tr>";
    }
    echo "</table>";
   
} catch (PDOException $e) {
    echo "Select failed: " . $e->getMessage();
    die();
}

//cerramos la conexión
$conn = null;


?>
<a href="./index.html" style="padding: 10px;">Volver a inicio</a>
</body>
</html>
