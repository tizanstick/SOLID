<?php

//Crear o definir una clase abstracta 
abstract class Coche {
    abstract function precioMedioCoche();
}

//Crear o definir subclases 
class Renault extends Coche {

    // Funciones o métodos
    function precioMedioCoche() {
        return 18000;
    }
}

class Audi extends Coche {

    // Funciones o métodos
    function precioMedioCoche() {
        return 25000;
    }
}

class Mercedes extends Coche {

    // Funciones o métodos
    function precioMedioCoche() {
        return 27000;
    }
}

//Crear o definir una clase
class ImprimirPrecio {
    //Variables o atributos
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
    function imprimirPrecioMedioCoche($arrayCoches) {
        foreach($arrayCoches as $precioCoches) {
            var_dump($precioCoches->precioMedioCoche());
        }
    }
}

// Instanciar o utilizar una clase
$obj = new ImprimirPrecio;

// Extraer array de la funcion main
$aC = $obj->main();

// Pasar array a la funcion imprimirPrecioMedioCoche
$obj->imprimirPrecioMedioCoche($aC);
?>