<?php

class AnnalynsInfiltration
{
    public function canFastAttack($is_knight_awake)
    {
        //si caballero esta despierto no podemos atacar 
        return !$is_knight_awake;
    }

    public function canSpy(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        //solo podemos espiar si uno de los 3 esta despierto
        return $is_knight_awake || $is_archer_awake || $is_prisoner_awake;
    }

    public function canSignal(
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        // si arquero esta despierto $is_archer_awake
        // y prisionero esta despieto podemos infiltrarnos
        return !$is_archer_awake && $is_prisoner_awake;
    }

    public function canLiberate(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake,
        $is_dog_present
    ) {
        //podemos liberar a pricionero de 2 formas
        // si el perro esta presente y el arquero esta dormido
        return ($is_dog_present && !$is_archer_awake) || 
            ($is_prisoner_awake && (!$is_knight_awake && !$is_archer_awake));
        // o si el pricionero esta despierto y el caballero y el arquero estan dormidos
    }
}
