<?php

if (isset($_POST['num'])) {
    main($_POST['num']);
};

function main($num)
{
    if (isPrimeNumber($num) == true) {
        echo $num . ' - простое число;';
    } else {
        $nextNum = getNextPrimeNumber($num);
        $prevNum = getPreviousPrimeNumber($num);
        echo $num . ' - составное число; ' . $nextNum . ' - простое число выше ' . $prevNum . ' - простое число ниже';
    }
}

function isPrimeNumber($number)
{
    if ($number == 1) {
        return false;
    }
    if ($number == 2) {
        return true;
    }
    if ($number % 2 == 0) {
        return false;
    }

    $i = 3;
    $max_factor = (int)sqrt($number);
    while ($i <= $max_factor) {
        if ($number % $i == 0) {
            return false;
        }
        $i += 2;
    }
    return true;
}

function getNextPrimeNumber($num)
{
    while (!isPrimeNumber($num)) {
        $num += 1;
    }
    return $num;
}

function getPreviousPrimeNumber($num)
{
    while (!isPrimeNumber($num)) {
        $num -= 1;
    }
    return $num;
}