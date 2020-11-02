<?php
// Usado Cookies com PHP7. Exemplo 02.

if (isset($_COOKIE["NOME_DO_COOKIE"]))
{
// $objeto = json_decode($_COOKIE["NOME_DO_COOKIE"], true); // Exibe em Json
   $objeto = json_decode($_COOKIE["NOME_DO_COOKIE"]); // Sem o "true" Exibe um Objeto

   echo $objeto->empresa;
}

?>
