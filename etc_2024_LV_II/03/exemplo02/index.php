<?php

    function somar($v1=0, $v2=0)
    {
        $total = $v1 + $v2;
        return $total;
    }
    $a = 10;
    $b = 20;
    
    echo "<p>O resultado da soma de $a + $b e: ". somar($a, $b) .  "</p>";
    echo "<p>O resultado da soma de 5 + 3 e: ". somar(5, 3) .  "</p>";