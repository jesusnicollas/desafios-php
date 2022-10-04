<?php
    #
    #$array = json_decode(file_get_contents('C:\Users\nicollas.souza\Desktop\cidades-estados-brasil-json\Estados.json', true));
    #echo ('<pre>');
    #print_r($array) . PHP_EOL;
    #echo ('<pre>');
    #    #echo ("FIM") . PHP_EOL;
    #
    #
    #
    #
    #    # ['ID' => $ID, 'Sigla' => $SIGLA, 'Nome' => $NOME] = $array[25];
    #
    #    #var_dump("O ID do estado do $NOME, é : $ID")
    #
    #
    #;



$cidades = [
'SP' => [
    'Sao paulo',
    'Iepe',
    'Registro',
    'Taboao da serra'
],
'PR' => [
    'um' =>'Maringa',
    'Astorga',
    'Curitiba',
    'Juliante'
]
];
$encode = json_encode($cidades, JSON_HEX_AMP| JSON_PRETTY_PRINT);
echo "<pre>";
print_r($encode);
echo "</pre>";
$decode = json_decode($encode, TRUE);
echo "<pre>";
print_r($decode);
echo "</pre>";