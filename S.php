<?php
// Llamamos al archivo que conecta con la base de datos
require_once __DIR__."./DBconection.php";

//Crear o definir una clase
class Coche{

    //Variables o atributos
    var $marca;

    // Funciones o métodos
    function setMarca($miMarca){

        $this->marca = $miMarca;
    }

    function getMarcaCoche(){

        return $this->marca;
    }
}

//Crear o definir una clase
class CocheDB{

    // Funciones o métodos
    function guardarCoche($coche): void
    {
        $CONN = DBconection::databaseConection();
        $sql = "INSERT INTO coche (coche) VALUES ('$coche')";
        mysqli_query($CONN, $sql);
        mysqli_close($CONN);
    }

    function eliminarCoche($coche): void
    {
        $CONN = DBconection::databaseConection();
        $sql = "DELETE FROM coche WHERE coche='$coche'";
        mysqli_query($CONN, $sql);
        mysqli_close($CONN);
    }
}
// Instanciar o utilizar una clase
$coche1 = new Coche;
$coche2 = new Coche;
$coche3 = new Coche;
$cocheDB1 = new CocheDB;
$cocheDB2 = new CocheDB;
$cocheDB3 = new CocheDB;

// Accedo a la funcion o método set() para configurar las marcas de los coches
$coche1->setMarca("Audi");
$coche2->setMarca("Renault");
$coche3->setMarca("Ford");

// Muesto las marcas que se asignaron
echo $coche1->getMarcaCoche();
echo $coche2->getMarcaCoche();
echo $coche3->getMarcaCoche();
$cocheA = $coche1->getMarcaCoche();
$cocheB = $coche2->getMarcaCoche();
$cocheC = $coche3->getMarcaCoche();
// Accedo a la funcion o método guardar() para agregar los datos a la base de datos
$cocheDB1->guardarCoche($cocheA);
$cocheDB1->guardarCoche($cocheB);
$cocheDB1->guardarCoche($cocheC);

// Accedo a la funcion o método eliminar() para borrar los datos a la base de datos
$cocheDB1->eliminarCoche($cocheA);
$cocheDB1->eliminarCoche($cocheB);
$cocheDB1->eliminarCoche($cocheC);
?>