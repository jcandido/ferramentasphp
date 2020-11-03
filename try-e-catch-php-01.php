<?php
//Try e Catch para tratamentos de erros ou exceção. Exemplo 01.

try 
{
    throw new Exception("Houve um erro. Verificar.", 400);
} catch (Exception $e) 
{
    echo json_encode(array(
    "message"=>$e->getMessage(), // Usa Método "getMessage"
    "line"=>$e->getLine(),       // Usa Método "getLine"
    "file"=>$e->getFile(),       // Usa Método "getFile"
    "code"=>$e->getCode()        // Usa Método "getCode"
    ));
}
?>
