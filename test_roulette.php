<?php

require_once 'roulette.php';

$test_resultat = 2;
$test_verif = 2;


function test_resultat($resulat): bool
{
    if ($resulat >= 0 && $resulat <= 36) {
        return true;
    } else {
        return false;
    }
}

function test_iswin($test_resulat, $test_verif): bool
{
    if ($test_resulat === $test_verif) {
        return true;
    } else {
        return false;
    }
}

function test_ispair($test_resulat): bool
{
    if ($test_resulat % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
