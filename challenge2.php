<?php
function dechiffrerMessage($message) {
    $longueur = strlen($message);
    $cle = intdiv($longueur, 2);

    $sousChaine = substr($message, 5, $cle);

    $texte = str_replace('@#?', ' ', $sousChaine);

    $dechiffre = strrev($texte);

    return $dechiffre;
}

$messages = [
    "0@sn9sirppa@#?ia’jgtvryko1",
    "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj",
    "aopi?sgnirts@#?sedhtg+p9l!"
];

foreach ($messages as $index => $msg) {
    $resultat = dechiffrerMessage($msg);
    echo "Message " . ($index + 1) . " : " . $resultat . PHP_EOL;
}
?>
