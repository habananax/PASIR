<html>
<head>
    <title>Inventario</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <h2>MOSTRAR EMPLEADOS</h2>
    <h3>Introduce el tipo de ordenaci&oacute;n</h3>
    <form action="./controladorMostrarEmpleados.php" method="post">
          <br><input type="radio" name="tipoOrdenacion" value="precioasc">Nombre Ascendente
          <br><input type="radio" name="tipoOrdenacion" value="preciodesc">Nombre Descendente
          <br><input type="radio" name="tipoOrdenacion" value="descripcionasc">Apellidos Ascendente
          <br><input type="radio" name="tipoOrdenacion" value="descripciondesc">Apellidos Descendente
          <br>
          <input type="submit">
    </form>

</body>
</html>
