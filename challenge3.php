<?php
$livres = [
    "Treasure Island" => 1883,
    "Strange Case of Dr Jekyll and Mr Hyde" => 1886,
    "Travels with a Donkey in the Cévennes" => 1879
];

asort($livres);

foreach ($livres as $titre => $annee) {
    echo "> $annee - $titre\n";
}
?>
