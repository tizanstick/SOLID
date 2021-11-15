<?php

//Crear o definir la interface
interface Conexion {

    // Funciones o métodos
    function getDatos($acceso);

    // Funciones o métodos
    function setDatos($acceso): void;
}

//Crear o definir las clases
class AccesoDatos {

    //Variables o atributos
    private $conexion;

    // Funciones o métodos
    public function accesoDatosDB($conexionDB) {
        $this->conexion = $conexionDB;
    }

    // Funciones o métodos
    public function pasarDatos() {
        $acceso = $this->conexion;
        return $acceso;
    }
}

class DatabaseService implements Conexion {
    
    // Funciones o métodos
    public function getDatos($acceso) {
        $CONN = mysqli_connect($acceso[0], $acceso[2], $acceso[3], $acceso[1]);
        // Check connection
        if (!$CONN)
        {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo("Connected successfully");
        //return $CONN;
    }

    // Funciones o métodos
    public function setDatos($acceso): void {

    }
}

class APIService implements Conexion {

    // Funciones o métodos
    public function getDatos($acceso) {
        $CONN = mysqli_connect($acceso[0], $acceso[2], $acceso[3], $acceso[1]);
        // Check connection
        if (!$CONN)
        {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo("Connected successfully");
        //return $CONN;
    }

    // Funciones o métodos
    public function setDatos($acceso): void {
        
    }
}
// Defino un array como si el usuario ingresara los datos de acceso
$conexionDB = array(
    "localhost",
    "solid",
    "root",
    ""
);
// Instanciar o utilizar las clases
$pasarAcceso = new AccesoDatos;
$verDatos = new DatabaseService;

// Paso los datos del array a la clase encargada de dar los accesos
$pasarAcceso->accesoDatosDB($conexionDB);

// Guardo la salida de datos en la variable acceso
$acceso = $pasarAcceso->pasarDatos();

// Imprimo la respuesta de conexión en la clase donde se implementó la interface 
echo $verDatos->getDatos($acceso);
?>