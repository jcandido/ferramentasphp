<?php
// Try e Catch para tratamentos de erros ou exceção. Exemplo 02.
// Função "finally"

function trataNome($nome) 
{
    if (!$nome) 
    {
        
        throw new Exception("Ocorreu um erro ==> Nenhum nome foi informado.", 1);
    }
    echo ucfirst($nome)."</br>";
}

try 
{
    trataNome("JCandido");
    trataNome("Mirian Candido");
    trataNome("Daniela Candido");
    trataNome("");
} 

catch (Exception $e) 
{
    echo json_encode(array("message"=>$e->getMessage()));
}
finally 
{
    echo "</br>" . "Executou o bloco Try!";
}

//    echo json_encode(array(
 //    "message"=>$e->getMessage(), // Usa Método "getMessage"
 //   "line"=>$e->getLine(),       // Usa Método "getLine"
 //   "file"=>$e->getFile(),       // Usa Método "getFile"
 //   "code"=>$e->getCode()        // Usa Método "getCode"
 //   ));

?>