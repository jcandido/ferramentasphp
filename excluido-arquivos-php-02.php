<?php
// Excluindo arquivos com script em PHP7

if (!is_dir("imagens")) mkdir("imagens");

foreach(scandir("imagens") as $item) 
{ if (!in_array($item, array(".", "..")))
    {
    unlink("imagens/" . $item);
    }
}

echo "Arquivos deletados com sucesso! ";

?>
