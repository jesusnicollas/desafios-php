<?php
$json = '[
    {
        "pais": "Brasil",
        "medalhas": {
            "ouro": 3,
            "prata": 5,
            "bronze": 3
        }
    },
    {
        "pais": "Costa rica",
        "medalhas": {
            "ouro": 5,
            "prata": 4,
            "bronze": 4
        }
    },
    {
        "pais": "Estados unidos",
        "medalhas": {
            "ouro": 4,
            "prata": 3,
            "bronze": 5
        }
    },
    {
        "pais": "Trindade e tobago",
        "medalhas": {
            "ouro": 4,
            "prata": 3,
            "bronze": 4
        }
    }
]';

$dadosEmJson = json_decode($json, true);

$numeroPaises = count($dadosEmJson);
print_r("Numero de paises participantes: $numeroPaises");

#$dec = array_map(function ($item) {
#$item['pais'] = mb_convert_case($item['pais'], MB_CASE_UPPER);
#return $item;
#} ,$dec);
#
#var_dump($dec);

$dadosEmJson = array_map(function ($item) {
    $item['pais'] = mb_convert_case($item['pais'], MB_CASE_TITLE);
    return $item;
}, $dadosEmJson);


?>