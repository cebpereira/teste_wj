<?php

class PlayerMain
{
    public static function run()
    {
        fscanf(STDIN, "%s", $nums);
        $list = explode(",", $nums);

        echo (self::resolver($list));
    }

    public static function resolver($list)
    {
        // Sem funções nativas
        $maiorDivisor = 0;

        if (count($list) < 2) {
            error_log("Erro: Deve haver pelo menos dois números." . PHP_EOL);
        }

        $maiorDivisor = $list[0];

        for ($i = 1; $i < count($list); $i++) {
            $maiorDivisor = self::mdc($maiorDivisor, $list[$i]);
        }

        return $maiorDivisor;

        // Com funções nativas
        // $gcd = gmp_gcd(...$list);

        // return $gcd;
    }

    public static function mdc($num1, $num2)
    {
        while ($num2 != 0) {
            $resto = $num1 % $num2;
            $num1 = $num2;
            $num2 = $resto;
        }
            
        return $num1;
    }
}

PlayerMain::run();
