<?php
class Position
{
    public $x;  // posición horizontal (de izquierda a derecha)
    public $y;  // posición vertical (de arriba hacia abajo)

    // Esta función especial (constructor) se usa para crear un nuevo objeto
    // y darle un lugar inicial (x e y) en la pantalla.
    // Nota: primero se pasa "y" y luego "x".
    public function __construct($y, $x)
    {
        $this->y = $y;  // guarda el valor vertical
        $this->x = $x;  // guarda el valor horizontal
    }

    // Esta función actualiza la posición usando otra cosa llamada ProgramWindow
    // Copia la posición "x" e "y" del ProgramWindow a este objeto Position.
    public function move($programWindow)
    {
        $this->x = $programWindow->x;  // actualiza posición horizontal
        $this->y = $programWindow->y;  // actualiza posición vertical
    }
}
