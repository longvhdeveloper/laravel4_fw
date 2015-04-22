<?php
class Captcha
{
    public function make()
    {
        $str = Str::random(6, 'alpha');

        Session::put('key', $str);

        $width = 100;
        $height = 25;

        $image = imagecreatetruecolor($width, $height);
        $text = imagecolorallocate($image, 255, 255, 255);
        $background = imagecolorallocate($image, 190, 190, 180);

        imagefilledrectangle($image, 0, 0, $width, $height, $background);

        imagestring($image, 5, 21, 4, $str, $text);

        ob_start();
        imagejpeg($image);

        $jpeg = ob_get_clean();

        return 'data:image/jpeg;base64,' . base64_encode($jpeg);
    }
}