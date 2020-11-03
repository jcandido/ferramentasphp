<?php
// Usando uma imagem existente e tratada pelo GD com PHP7 alterando o tipo da fonte. Exemplo 01.

$imagem = imagecreatefromjpeg("certificado.jpg");

$corTitulo = imagecolorallocate($imagem, 0, 0, 0); // Gera título na cor preto
$cinza = imagecolorallocate($imagem, 100, 100, 100); // Gera na cor cinza

imagettftext($imagem, 32, 0, 320, 250, $corTitulo, "/home/jcandido/ferramentasphp/fonts/Bevan/Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($imagem, 32, 0, 375, 350, $corTitulo, "../ferramentasphp/fonts/Playball/Playball-Regular.ttf", utf8_decode("João Candido"));
imagestring($imagem, 3, 400, 370, utf8_decode("Concluído em ") .date("d/m/Y") , $corTitulo);

header("Content-Type: image/jpeg");

imagejpeg($imagem); // Gera imagem dentro da imagem "certificado.jpg" e exibe no navegador
// imagejpeg($imagem, "certificado-".date("Y-m-d") . ".jpg"); // Salva a imagem em disco

imagedestroy($imagem);

?>
