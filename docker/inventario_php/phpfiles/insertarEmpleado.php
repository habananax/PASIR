<html>
<head>
    <title>Inventario</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <h2>INSERTAR EMPLEADO</h2>
    <h3>Introduce los datos de un nuevo empleado</h3>
    <form action="./controladorInsertarEmpleado.php" method="post">
          <label for="cod">C&oacute;digo/DNI:</label><br> 
          <input type="text" id="cod" name="dni"><br>
          <label for="nom">Nombre:</label><br>
          <input type="text" id="nom" name="nombre"><br>
          <label for="ape">Apellidos:</label><br>
          <input type="text" id="ape" name="apellidos"><br>
          <label for="dep">Departamento:</label><br>
          <select id="dep" name="departamento">
            <option value="Marketing">Marketing</option>
            <option value="Desarrollo">Desarrollo</option>
            <option value="Soporte">Soporte</option>
          </select><br>
          <label for="email">Email:</label><br>
          <input type="text" id="email" name="email"><br>
          <input type="submit">
    </form>

</body>
</html>
