<?php

// function factorial($n)
// {
//     if ($n <= 1) return 1;
//     return $n * factorial($n - 1); // здесь происходит повторный вызов функции
// }
//
// echo factorial(5); // 120
//
// factorial();
//echo 5;


// function factorial($n)
// {
//     $result = 1;
//     for ($i = 1; $i <= $n; $i++) {
//         $result *= $i;
//     }
//     return $result;
// }
//
// echo factorial(5); // 120

$array = [1, 1, 1 => [2, 2, 2 => [3, 3, 3=>[4,4,4,4,4,4], 3, 3,], 2, 2], 1, 1, 1,];

function get($arr)
{
    foreach ($arr as $item) {
        if (is_array($item)) {
            get($item);

        }else{
            echo $item;
        }

    }

}


get($array);


