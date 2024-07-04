<?php

$bookName = "Voyage avec un âne dans les Cévennes";
$readOrNot = false;
$releaseYears = 2017;
$bookPrice = 6.20;

echo $bookName."<br>".$releaseYears."<br>".$bookPrice." €<br>";
if ($readOrNot == false) {
    echo "Je n'ai pas lu ce livre.";
} else {
    echo "J'ai lu ce livre.";
}
?>