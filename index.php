<?php

function writeSecretSentence(string $param1, string $param2) {
  $sentence = $param1 . " s'incline face à " . $param2 . "\n";
  return $sentence;
}

echo writeSecretSentence("le tigre", "le feu");
echo writeSecretSentence("le requin", "la terre");
echo writeSecretSentence("le singe", "l'eau");
echo writeSecretSentence("le perroquet", "le vent");

?>