<?php

class Calculadora
{
    /**
     * Calcula a soma de dois números
     * 
     * @param float $x
     * @param float $y
     * 
     * @return int
     */
    public function soma($x, $y) 
    {
        return $x + $y;
    }

    /**
     * Calcula a subtação de dois números
     * 
     * @param float $x
     * @param float $y
     * 
     * @return float
     */
    public function sub($x, $y)
    {
        return $x - $y;
    }

    public function mult($x, $y)
    {
        return $x * $y;
    }

    public function div($x, $y)
    {
        if ($y == 0) {
            return 0;
        }
            
        return $x / $y;
    }

    function pot($x, $y) 
    {

        if ($y < 0) {
            $x = 1 / $x;
            $y = $y * -1;
        }
    
        $total = 1;
    
        for ($i = 0; $i < $y; $i++) {
            $total = $total * $x;
        }
    
        return $total;
    }
}

?>