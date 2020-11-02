<?php
// Usando Cokies com PHP7. Exemplo 01.

$dados = array("Cenel Info Criação de Sites");

setcookie("NOME_DO_COOKIE", json_encode($dados), time() + 3600);

echo "Ok. Cookie gravado";

?>
