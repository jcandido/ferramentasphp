<?php
// Lendo conteúdo de arquivos. Ex. Arquivos em CSV

$nomearquivo = "usuarios.csv"; // Guarda o nome do arquivo na variavel "$nopmearquivo"

if (file_exists($nomearquivo)) { // Se o arquivo usuarios.csv existir continua
    
    $arquivo = fopen($nomearquivo, "r"); // Abre o arquivo usuarios.csv para somente leitura
    
    $cabecalho = explode(";", fgets($arquivo)); // Explode o conteudo das colunas separando-as com ";"

    $dados = array();

    while ($linha = fgets($arquivo)) { // Lê arquivo usuarios.csv enquanto não for fim de arquivo

        $linhaDados = explode(";", $linha);
        $linhaArray = array();

        for ($i = 0; $i < count($cabecalho); $i++) {
            $linhaArray[$cabecalho[$i]] = $linhaDados[$i];

        }
        array_push($dados, $linhaArray);

//        var_dump($linha);
    }
    fclose($arquivo);
    echo json_encode($dados);


    //    var_dump($cabecalho);
}
//    echo $nomearquivo;
//    echo $arquivo;

?>
