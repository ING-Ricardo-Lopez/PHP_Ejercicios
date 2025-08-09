<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizzas, $personas)
    {
        return $gramos = $pizzas * (($personas * 20) + 200);
    }

    public function calculateSauceRequirement($pizzas,$lataSalsa)
    {
        return $cantidadSalsa = ($pizzas * 125) / $lataSalsa;
    }

    public function calculateCheeseCubeCoverage($longitudQueso,$grosorCapa,$diametroPizza)
    {
        $pizza = ($longitudQueso**3) / ($grosorCapa * M_PI * $diametroPizza);
        return floor($pizza);
    }

    public function calculateLeftOverSlices($cantidadPizza,$amigos)
    {
        $totalPorciones = $cantidadPizza * 8;
        $porcionesRepartidas = intdiv($totalPorciones, $amigos) * $amigos;
        return $totalPorciones - $porcionesRepartidas;
    }
}
