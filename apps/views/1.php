<?php
/**
 * Created by PhpStorm.
 * User: O
 * Date: 10/3/2016
 * Time: 10:26 AM
 */

/*
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
Find the sum of all the multiples of 3 or 5 below 1000.
*/

/*
 * Найти все числа кратные 3 или 5 до 1000
 * затем показать их суммы
 * */

$j=0;
for ($i=1; $i<1000; $i++){

    if ($i % 3 == 0 || $i % 5 == 0) // false, 13%5=3
    {
        $j=$j+$i;
      //  echo $i . ' Числа делятся на 3 или 5 без остатка<br>';
    }
    else
    {
       //echo $i . 'Числа делятся с остатком<br>';
    }
}
echo $j;
