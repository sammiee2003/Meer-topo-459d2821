
<?php

echo "hoeveel landen wil je toevoegen?". PHP_EOL;
$aantal = readline("");

for ($i = 0; $i < $aantal; $i ++){
    $landen = array();
    echo "welke land wil je toevoegen?". PHP_EOL;
    $land = readline("");
    echo "wat is de hoofdstad van $land ?". PHP_EOL;
    $stad = readline("");
    $topo[$land] = $stad;
}
foreach ($topo as $landen => $stad){
    echo "de volgende landen en steden zijn toegevoegd aan de database:". PHP_EOL;
    echo $landen . " , ". $stad . PHP_EOL;

}
