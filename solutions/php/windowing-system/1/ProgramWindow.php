<?php

// Esta es una clase llamada "ProgramWindow"
// Puedes imaginarla como una "ventana" en una pantalla de computadora.
class ProgramWindow
{
    // Estas son las características (propiedades) de la ventana:
    
    public $x;      // la posición horizontal (de izquierda a derecha)
    public $y;      // la posición vertical (de arriba hacia abajo)
    public $width;  // el ancho de la ventana
    public $height; // la altura de la ventana

    // Esta es una función especial que se llama automáticamente cuando se crea una ventana.
    // Se encarga de darle valores iniciales a las propiedades.
    public function __construct(){
        $this->x = 0;        // la ventana empieza en la posición horizontal 0 (muy a la izquierda)
        $this->y = 0;        // la ventana empieza en la posición vertical 0 (muy arriba)
        $this->width = 800;  // la ventana mide 800 píxeles de ancho
        $this->height = 600; // la ventana mide 600 píxeles de alto
    }
    
    // Esta función permite cambiar el tamaño de la ventana
    // Recibe un objeto que tiene las nuevas medidas (alto y ancho)
    public function resize($size)
    {
        // Se cambia el alto y el ancho de la ventana por los del objeto recibido
        $this->height = $size->height;
        $this->width = $size->width;
    }
    
    // Esta función cambia la posición de la ventana (pero el nombre no es muy claro)
    // Recibe un objeto que tiene las coordenadas (x, y) y las aplica a la ventana
    public function position($position)
    {
        $this->x = $position->x; // cambia la posición horizontal
        $this->y = $position->y; // cambia la posición vertical
    }

    // Esta función hace lo mismo que la de arriba, pero tiene un mejor nombre: "move" (mover)
    public function move($position)
    {
        $this->x = $position->x; // mueve la ventana en horizontal
        $this->y = $position->y; // mueve la ventana en vertical
    }
}
