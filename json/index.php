<?php

$pessoas = array();

array_push($pessoas, array(

    'nome' => 'Rafael',
    'idade' => 24
));

array_push($pessoas, array(

    'nome' => 'João',
    'idade' => 30
));

//print_r($pessoas[0]['nome']);

echo json_encode($pessoas);


$json = '[{"nome":"Rafael","idade":24},{"nome":"Jo\u00e3o","idade":30}]';
$data =  json_decode($json, true); // sem o true isso vira objeto
var_dump($data);

?>