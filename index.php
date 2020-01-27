<?php
include 'src/hexConverter.php';

$hexCodes = array('#FFF', '#FFFFFF', 'FFF', 'FFFFFF', 'FFFF');
$alphas = array('0.3', '1', '0.5', '1', '1');

foreach ($hexCodes as $i => $hexCode) {
    $hexConverter = new hexConverter($hexCode, $alphas[$i]);
    echo $hexConverter->convert()."\n";
}




