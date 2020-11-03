<?php
// Gerando Thumbnail de uma imagem pelo GD com PHP7. Exemplo 01.

header("Content-type: image/jpeg");

$arquivo = "wallpaper.jpg";

$nova_largura = 256;
$nova_altura = 256;

list($velha_largura, $velha_altura) = getimagesize($arquivo);

$nova_imagem = imagecreatetruecolor($nova_largura, $nova_altura);
$velha_imagem = imagecreatefromjpeg($arquivo);

// imagecopyresampled($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);
imagecopyresampled($nova_imagem, $velha_imagem, 0, 0, 0, 0, $nova_largura, $nova_altura, $velha_largura, $velha_altura);

imagejpeg($nova_imagem);

imagedestroy($velha_imagem);
imagedestroy($nova_imagem);

?>
