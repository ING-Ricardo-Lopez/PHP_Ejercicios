<?php
class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        //trim es para eliminar los espacion de las cadenas
        //substr es para seleccionar un fragmento de una cadena por longitud y posicion
        return substr(trim($name), 0, 1);
    }
    public function initial(string $name): string
    {
        //strtouper es para devolver una cadena en mayusculas
        return strtoupper($this->firstLetter($name)) . ".";
    }
    public function initials(string $name): string
    {
        //explode es para dividir cadenas mediante un diferenciador que se asigne
        $names = explode(' ',$name);
        return $this->initial($names[0]) . ' ' . $this->initial($names[1]);
    }
    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $first_initials = $this->initials($sweetheart_a);
        $second_initials = $this->initials($sweetheart_b);
        return <<<HEART
        ******       ******
      **      **   **      **
    **         ** **         **
   **            *            **
   **                         **
   **     $first_initials  +  $second_initials     **
    **                       **
      **                   **
        **               **
          **           **
            **       **
              **   **
                ***
                 *
   HEART;
    }
}
