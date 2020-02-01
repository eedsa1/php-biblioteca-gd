<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$grey = imagecolorallocate($image, 100, 100, 100);

//imagettftext($image, 32, 0, 320, 250, $titleColor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 320, 250, $titleColor, "C:/xampp/htdocs/php-biblioteca-gd/fonts/Bevan/Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $titleColor, "C:/xampp/htdocs/php-biblioteca-gd/fonts/Playball/Playball-Regular.ttf", "Fulano da Silva");
imagestring($image, 3, 440, 370, utf8_decode("Concluído em").date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

?>