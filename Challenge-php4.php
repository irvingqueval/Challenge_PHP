<?php

$stevensonMovies = [
    'La Planète au trésor : Un nouvel univers' => ['Martin Short', 'Joseph Gordon-levitt', 'Brian Murray'],
    'Dr Jekyll et M. Hyde' => ['Michael Caine', 'Cheryl Ladd', 'Joss Ackland'],
    "L'Ordre des Pirates" => ['Diane Willems', 'François Göske', 'Jürgen Vogel']
];

foreach ($stevensonMovies as $title => $actors) {
    $actorsList = implode(', ', $actors);
    echo 'Dans le film ' . $title . ', les principaux acteurs sont : ' . "\n" . $actorsList . "\n" ."\n";
}



?>