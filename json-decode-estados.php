<?php

$obj = file_get_contents('C:\xampp\htdocs\desafios\cidades-estados-brasil-json\Estados.json');

$decode = json_decode($obj, true);

for ($i = 0; $i < count($decode); $i++) {

    $doisNome = $decode[$i]['Nome'] . PHP_EOL;

    $doisID = $decode[$i]['ID'] . PHP_EOL;

    $doisSigla = $decode[$i]['Sigla'] . PHP_EOL;
    echo "<pre>";
    echo ("O estado $doisNome que tem a sigla $doisSigla tem o ID: $doisID" . PHP_EOL);
};
;
echo "</pre>";