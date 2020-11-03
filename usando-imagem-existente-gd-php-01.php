<?php
// Usando uma imagem existente e tratada pelo GD com PHP7. Exemplo 01.

$imagem = imagecreatefromjpeg("certificado.jpg");

$corTitulo = imagecolorallocate($imagem, 0, 0, 0); // Gera título na cor preto
$cinza = imagecolorallocate($imagem, 100, 100, 100); // Gera na cor cinza

imagestring($imagem, 5, 450, 150, "CERTIFICADO", $corTitulo);
imagestring($imagem, 5, 440, 350, utf8_decode("João Candido"), $corTitulo);
imagestring($imagem, 3, 440, 370, utf8_decode("Concluído em ") .date("d/m/Y") , $corTitulo);

header("Content-Type: image/jpeg");

// imagejpeg($imagem); // Gera imagem dentro da imagem "certificado.jpg" e exibe no navegador
imagejpeg($imagem, "certificado-".date("Y-m-d") . ".jpg"); // Salva a imagem em disco

imagedestroy($imagem);

?>
