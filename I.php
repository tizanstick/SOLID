<?php
//Crear o definir las interfaces
interface IAve {
    // Funciones o métodos
    function comer(): void;
}

interface IAveVoladora {
    // Funciones o métodos
    function volar(): void;
}

interface IAveNadadora {
    // Funciones o métodos
    function nadar(): void;
}
//Crear o definir las clases  
class Loro implements IAve, IAveVoladora {
    // Funciones o métodos
    public function comer(): void{
        //...
    }

    public function volar(): void{
        //...
    }
}

class Pinguino implements IAve, IAveNadadora {
    // Funciones o métodos
    public function comer(): void{
        //...
    }

    public function nadar(): void{
        //...
    }
}
?>
