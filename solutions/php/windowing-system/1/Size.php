<?php
class Size
{
    // Estas son las características (propiedades) que tendrá este objeto:
    
    public $width;  // ancho
    public $height; // alto

    // Esta es una función especial llamada "constructor"
    // Se usa para darle valores iniciales al objeto cuando se crea

    // El constructor recibe dos números:
    // uno para la altura (height) y otro para el ancho (width)
    public function __construct($height, $width)
    {
        // Se guarda la altura y el ancho en el objeto
        $this->height = $height;
        $this->width = $width;
    }
}
