<?php

//Crear o definir una clase abstracta 
abstract class Coche {
    abstract function numAsientos();
}

//Crear o definir subclases 
class Renault extends Coche {

    // Funciones o métodos
    function numAsientos() {
        return 5;
    }
}

class Audi extends Coche {

    // Funciones o métodos
    function numAsientos() {
        return 6;
    }
}

class Mercedes extends Coche {

    // Funciones o métodos
    function numAsientos() {
        return 4;
    }
}

//Crear o definir una clase
class ImprimirAsientos {
    //Variables o atributoss
    var $arrayCoches;

    // Funciones o métodos
    function main() {
        $this->arrayCoches = array(
            new Renault,
            new Audi,
            new Mercedes
        );
        return $this->arrayCoches;
    }
    
    // Funciones o métodos
    function imprimirAsientoCoche($arrayCoches) {
        foreach($arrayCoches as $precioCoches) {
            var_dump($precioCoches->numAsientos());
        }
    }
}

// Instanciar o utilizar una clase
$obj = new ImprimirAsientos;

// Extraer array de la funcion main
$aC = $obj->main();

// Pasar array a la funcion imprimirAsientoCoche
$obj->imprimirAsientoCoche($aC);
?>