<?php

  
class Empleado {

  // ********************************************
  // ESTADO!!!
  // ********************************************
  // Properties

  private $dni;   
  private $nombre;
  private $apellidos;
  private $departamento;
  private $email;  
  
  // ********************************************
  // COMPORTAMIENTO!!!
  // ********************************************
  // Methods
  // Constructor
  function __construct($nDNI, $nNombre, $nApellidos, $nDepartamento, $nEmail) {
  
    $this->dni = $nDNI;
    $this->nombre = $nNombre;
    $this->apellidos = $nApellidos;
    $this->departamento = $nDepartamento;
    $this->email = $nEmail;

  }

  
  //Getters

  function getDNI() {
    return $this->dni;
  }

  function getNombre() {
    return $this->nombre;
  }
  
  function getApellidos() {
    return $this->apellidos;
  }

  function getDepartamento() {
    return $this->departamento;
  }
  
  function getEmail() {
    return $this->email;
  }

  function imprimeEmpleado() {
    return "<p>$this->dni,$this->nombre,$this->apellidos,$this->departamento,$this->email</p>";
  }


  //sql para inserción del producto
  function getInsertSQL() {
    $sql = "INSERT INTO empleados (dni, nombre, apellidos, departamento, email) VALUES ('$this->dni','$this->nombre','$this->apellidos','$this->departamento','$this->email') ";

    return $sql;
  }


  //sql para inserci      n del producto
  function getUpdateSQL() {
    $sql = "UPDATE empleados SET dni = '$this->dni', nombre = '$this->nombre', apellidos = '$this->apellidos', departamento = '$this->departamento', email = '$this->email' WHERE dni = '$this->dni' ";

    return $sql;
  }


  public static function getSelectSQL($tipoOrdenacion) {

    $sql = "SELECT * FROM empleados ORDER BY ";

    switch ($tipoOrdenacion) {
      case "nombreasc":
        $sql = $sql . "nombre ASC";
        break;
      case "preciodes":
        $sql = $sql . "nombre DESC";
        break;
      case "apellidosasc":
        $sql = $sql . "apellidos ASC";
        break;
      case "apellidosdesc":
          $sql = $sql . "apellidos DESC";
          break;
      default:
        $sql = $sql . "nombre ASC";
    }

    return $sql;
  }


}
?>
