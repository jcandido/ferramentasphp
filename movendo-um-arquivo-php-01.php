<?php
// Movendo um arquivo com PHP7

$dir1 = "pasta_01";
$dir2 = "pasta_02";

if (!is_dir($dir1)) mkdir($dir1);

if (!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename))
{
    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");
    fwrite($file, date("Y-m-d H:i:s"));
    fclose("$file");
}
rename(
    $dir1 . DIRECTORY_SEPARATOR . $filename, // Arquivo origem
    $dir2 . DIRECTORY_SEPARATOR . $filename  // Arquivo destino
    );

echo "Arquivo movido com sucesso!";

//echo "Pasta 01 ==> " . $dir1 . "</br>";
//echo "Pasta 02 ==> " . $dir2;

?>
