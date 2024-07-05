<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)];
$stevensonWeapon = '';

if ($opponentWeapon == 'fists') {
    $stevensonWeapon = 'gun';
} elseif ($opponentWeapon == 'whip') {
    $stevensonWeapon = 'fists';
} elseif ($opponentWeapon == 'gun') {
    $stevensonWeapon = 'whip';
}

echo "\nThe opponent's weapon is: " . $opponentWeapon . "\n";
echo "Stevenson's weapon is: " . $stevensonWeapon . "\n";

?>