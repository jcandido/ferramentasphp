<?php
// Lendo e manipulando pastas/diretórios com PHP 7. Exemplo 02.

$pasta = scandir("cenel"); // Lê (escaneia), conteúdo de um diretório/pasta
$data = array();

foreach($pasta as $diretorio) {
    if (!in_array($diretorio, array(".", ".."))) { // A exclamação significa "se não encontrar"

        $filename = $pasta . DIRECTORY_SEPARATOR . $diretorio; // Monta caminho da pasta com barra de acordo
                                                               // com o sistema operacional
        
        $info = pathinfo($filename); // Instancia a variavel $info com o conteúdo capturado
                                     // pelo "pathinfo" da variavel $filename

        $info["size"] = filesize($filename); // Não funcionou ???

        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename)); // Funcionou parcialmente ???

        $info["url"] = "http://localhost/php7/cenel/DIR/" . $filename; // Não funcionou ???
        
        array_push($data, $info);

//        var_dump($info); // Exibe o conteúdo da variavel $info

    }
}
echo json_encode($data);


//var_dump($pasta); // Exibe resultado da leitura (Escaneamento)


// Abaixo o resultado da execução deste scrip PHP 7
/*
array(4) { ["dirname"]=> string(5) "Array" ["basename"]=> string(9) "html5.png" ["extension"]=> string(3) "png" ["filename"]=> string(5) "html5" } 
array(4) { ["dirname"]=> string(5) "Array" ["basename"]=> string(9) "mysql.png" ["extension"]=> string(3) "png" ["filename"]=> string(5) "mysql" } 
array(4) { ["dirname"]=> string(5) "Array" ["basename"]=> string(8) "php7.png" ["extension"]=> string(3) "png" ["filename"]=> string(4) "php7" }
*/

/* Início do bloco comentado
array(4) {
    ["dirname"]=>
    string(5) "Array"
    ["basename"]=>
    string(9) "html5.png"
    ["extension"]=>
    string(3) "png"
    ["filename"]=>
    string(5) "html5"
  }
  array(4) {
    ["dirname"]=>
    string(5) "Array"
    ["basename"]=>
    string(9) "mysql.png"
    ["extension"]=>
    string(3) "png"
    ["filename"]=>
    string(5) "mysql"
  }
  array(4) {
    ["dirname"]=>
    string(5) "Array"
    ["basename"]=>
    string(8) "php7.png"
    ["extension"]=>
    string(3) "png"
    ["filename"]=>
    string(4) "php7"
  }
   Término do bloco comentado
 */

?>
