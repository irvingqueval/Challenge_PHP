<?php

$stevensonBooks = ['Enlevé !' => 1886, 'Le Club du suicide' => 1878, 'Le Voleur de cadavres' => 1884]; // sets the value of our variable to the contents of the array

asort($stevensonBooks); // sorting by cross-referencing content

foreach ($stevensonBooks as $title => $years) {
    echo '> ' . $years . ' - ' . $title . "\n";
}


?>