<?php
// Tratando erros com PHP7. Exemplo 02.
// Erros de noticias/avisos sendo tratados com "error_reporting(E_ALL & ~E_NOTICE)"
// ou seja, igonora erros de avisos.

error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET("nome");

echo $nome;

?>
