<?php

class MenoresMultiplicaveis
{
    public static function run()
    {
        fscanf(STDIN, "%s", $arrStr);
        fscanf(STDIN, "%s", $alvo);

        echo (json_encode(self::resolver($arrStr, $alvo)));
    }

    public static function resolver($arrStr, $alvo)
    {
        $nums = json_decode($arrStr);

        if (count($nums) < 2) {
            return [0, 0];
        }

        // Funcional
        $melhorPar = [0, 0];
        $menorSoma = PHP_INT_MAX;

        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $i + 1; $j < count($nums); $j++) {
                if ($nums[$i] * $nums[$j] === (int)$alvo) {
                    $soma = $nums[$i] + $nums[$j];
                    if ($soma < $menorSoma) {
                        $menorSoma = $soma;
                        $melhorPar = [$nums[$i], $nums[$j]];
                    }
                }
            }
        }
        return $melhorPar;

        // Otimizada
        // $melhorPar = [0, 0];
        // $menorSoma = PHP_INT_MAX;

        // for ($i = 0; $i < count($nums); $i++) {
        //     $num1 = $nums[$i];

        //     if ($num1 > $alvo) break;

        //     if ($alvo % $num1 === 0) {
        //         $num2 = $alvo / $num1;

        //         $left = $i + 1;
        //         $right = count($nums) - 1;
        //         while ($left <= $right) {
        //             $mid = intdiv($left + $right, 2);
        //             if ($nums[$mid] === $num2) {
        //                 $soma = $num1 + $num2;
        //                 if ($soma < $menorSoma) {
        //                     $menorSoma = $soma;
        //                     $melhorPar = [$num1, $num2];
        //                 }
        //                 break;
        //             } elseif ($nums[$mid] < $num2) {
        //                 $left = $mid + 1;
        //             } else {
        //                 $right = $mid - 1;
        //             }
        //         }
        //     }
        // }

        // return $melhorPar;
    }
}

MenoresMultiplicaveis::run();
