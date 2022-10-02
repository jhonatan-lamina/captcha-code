<?php
session_start();
// Generation of random string
$random_alpha = md5(rand());
// Generate a captcha of length
$captcha = substr($random_alpha, 0, 6);
$_SESSION["captcha"] = $captcha;
// Width and Height of captcha
$target_layer = imagecreatetruecolor(165,50);
// Backgorund color of captcha
$captcha_background = imagecolorallocate($target_layer, 236,239,241);
imagefill($target_layer,0,0,$captcha_background);
// Captch Text Color RGB
$captcha_text_color = imagecolorallocate($target_layer, 39,55,70);
// Lines
$line_color = imagecolorallocate($target_layer, 64,64,64); 
for($i=0;$i<6;$i++) {
    imageline($target_layer,0,rand()%50,200,rand()%50,$line_color);
}
// Pixels
$pixel_color = imagecolorallocate($target_layer, 0,0,255);
for($i=0;$i<1000;$i++) {
    // Width and height of text image rand()
    imagesetpixel($target_layer,rand()%200,rand()%50,$pixel_color);
}  
// Text Size
$font_size = 32;
// you_are_the_one is a font file
imagettftext($target_layer, $font_size, -5, 25, 35, $captcha_text_color, 'you_are_the_one.ttf', $captcha);
header("Content-type: image/jpeg");
imagejpeg($target_layer);
?>