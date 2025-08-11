<?php

class PlayerMain
{
    public static function run()
    {
        fscanf(STDIN, "%s", $input_nums);
        $list = explode(",", $input_nums);

        echo (self::resolver($list[0], $list[1]) . PHP_EOL);
    }

    public static function resolver($num1, $num2)
    {
        // Sem funções nativas
        $mdc = self::mdc($num1, $num2);

        $mmc = ($num1 * $num2) / $mdc;

        return $mmc;

        // Com funções nativas
        // $lcm = gmp_lcm($num1, $num2);

        // return $lcm;
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
