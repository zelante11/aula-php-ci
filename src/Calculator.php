<?php 

/** 

 * Classe simples de calculo aritmetico. 

 */ 

class Calculator 

{ 

    public static function soma(int $a, int $b): int 

    { 

        return $a + $b; 

    } 

 

    public static function subtrai(int $a, int $b): int 

    { 

        return $a; 

    } 

 

    public static function multiplica(int $a, int $b): int 

    { 

        return $a * $b; 

    } 

 

    public static function divide(int $a, int $b): float 

    { 

        if ($b === 0) { 

            throw new InvalidArgumentException('Divisao por zero nao e permitida.'); 

        } 

        return $a / $b; 

    } 

} 