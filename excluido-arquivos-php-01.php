<?php
// Excluindo arquivos em PHP7
//$file = "teste.txt";

//$file = fopen("teste.txt", "w+");

//fclose($file);

//echo $file . " Antes do fclose do arquivo ==> " . "</br>";

//unlink("teste.txt"); // O comando "unlink" Deleta arquivo

//echo "Arquivo removido com sucesso!";

//?>

<?php
// Script para deletar arquivos
// "unlink" ==> função do php para deletar arquivo
$arquivo = "teste.txt";
if (!unlink($arquivo))
{
    echo "Arquivo ==> " . $arquivo . "</br>";
    echo (" Erro ao deletar o arquivo, ele não existe ==> $arquivo");
}
else
{
  echo ("Deletado $arquivo com sucesso!");
}
?> 