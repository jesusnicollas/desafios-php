<?php

$json = '{
    "SP":[
       "Sao paulo",
       "Iepe",
       "Registro",
       "Taboao da serra"
    ],
    "PR":[
       "Maringa",
       "Curitiba",
       "Astorga",
       "Juliante"
    ]
 }';


 var_dump($json) . PHP_EOL;
 
 echo ("FIM") . PHP_EOL;

 var_dump(json_decode($json));


?>