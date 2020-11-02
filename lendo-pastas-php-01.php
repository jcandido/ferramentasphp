<?php
// Lendo e manipulando pastas/diretórios com PHP 7

$name = "cenel";
echo $name;

if (!is_dir($name)) {
    mkdir($name);
    echo " Dentro do if que atendeu a condição  ";
    echo $name;
    echo " ===>  ";
    echo "Diretório $name criado com sucesso";
 } else {
    echo " Dentro do 'else' : ";
    echo $name;
    rmdir($name);
    echo "Diretório $name já existe";
}

//echo "  - Não está funcionando - Deveria criar a pasta 'cenel' " . $name

?>
