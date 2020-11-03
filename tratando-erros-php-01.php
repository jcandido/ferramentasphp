<?php
// Tratando erros com PHP7. Exemplo 01.

function manipula_erro($code, $message, $file, $line) 
{
    echo json_encode(array(
        'code'=>$code,
        'message'=>$message,
        'file'=>$file,
        'line'=>$line
    ));
}
set_error_handler("manipula_erro");

$total = 100 / 0;

?>
