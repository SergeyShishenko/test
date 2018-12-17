<?php
/*
header("Content-Type: image/png");

$im=imagecreate(200,100);
$bg_color=imagecolorallocate($im,0,0,0);
$txt_color=imagecolorallocate($im,255,255,255);
imagestring($im,5,50,50,"Text...",$txt_color);

imagepng($im,'1a.png',9);
imagepng($im,NULL,9);
imagedestroy($im);
*/

/*
header("Content-Type: image/jpg");

$im=imagecreate(200,100);
$bg_color=imagecolorallocate($im,0,0,0);
$txt_color=imagecolorallocate($im,255,255,255);
imagestring($im,5,50,50,"Text...",$txt_color);

imagejpeg($im,'1a.jpg',75);
imagejpeg($im,NULL,75);
imagedestroy($im);
*/

/*
header("Content-Type: image/png");

$im=imagecreatefromjpeg("1.jpg");
$txt_color=imagecolorallocate($im,255,0,0);
$shadow=imagecolorallocate($im,0,255,0);

$font="./arial.ttf";

imagettftext($im, 32, -30, 54, 54, $shadow, $font, "Text...");
imagettftext($im, 32, -30, 50, 50, $txt_color, $font, "Text...");

imagepng($im,'1a.png',9);
imagepng($im,NULL,9);
*/
 
header("Content-Type: image/jpg");

$im=imagecreatefromjpeg("1.jpg");
$txt_color=imagecolorallocate($im,255,0,0);
$shadow=imagecolorallocate($im,0,255,0);

$font="./arial.ttf";

imagettftext($im, 32, -30, 54, 54, $shadow, $font, "Text1...");
imagettftext($im, 32, -30, 50, 50, $txt_color, $font, "Text1...");

imagejpeg($im,'1a.jpg',75);
imagejpeg($im,NULL,75);

?>



<?PHP
 
    // class image {
    
    //     private $image;
    //     private $type;
    
    //     public function load($filename) {
    
    //         if(is_file($filename)) {
    
    //             $info = getimagesize($filename);
    //             $this->type = $info[2];
    
    //             if ($this->type == IMAGETYPE_JPEG) {
    //                 $this->image = imagecreatefromjpeg($filename);
    //             } else if ($this->type == IMAGETYPE_GIF) {
    //                 $this->image = imagecreatefromgif($filename);
    //             } else if ($this->type == IMAGETYPE_PNG) {
    //                 $this->image = imagecreatefrompng($filename);
    //             }
    
    //         }
    
    //     }
    
    //     public function save($filename, $permissions = 0664, $compression = 100, $type = false) {
    
    //         if(!$type) {
    //             $type = $this->type;
    //         }
    
    //         if ($type == IMAGETYPE_JPEG) {
    //             imagejpeg($this->image, $filename, $compression);
    //         } else if ($type == IMAGETYPE_GIF) {
    //             imagegif($this->image, $filename);
    //         } else if ($type == IMAGETYPE_PNG) {
    
    //             imagealphablending($this->image, false);
    //             imagesavealpha($this->image, true);
    //             imagepng($this->image, $filename);
    
    //         }
    
    //         if ($permissions != null) {
    //             chmod($filename, $permissions);
    //         }
    
    //     }
    
    //     public function output($type = false) {
    
    //         if(!$type) {
    //             $type = $this->type;
    //         }
    
    //         if ($type == IMAGETYPE_JPEG) {
    //             imagejpeg($this->image);
    //         } else if ($type == IMAGETYPE_GIF) {
    //             imagegif($this->image);
    //         } else if ($type == IMAGETYPE_PNG) {
    //             imagepng($this->image);
    //         }
    
    //     }
    
    //     public function getWidth() {
    //         return imagesx($this->image);
    //     }
    
    //     public function getHeight() {
    //         return imagesy($this->image);
    //     }
    
    //     public function intelligentResize($width, $height) {
    
    //         $aspectRatio = $width / $height;
    //         $aspectRatioImg = $this->getWidth() / $this->getHeight();
    
    //         if($aspectRatio < $aspectRatioImg) {
    //             $this->resizeToWidth($width);
    //         } else {
    //             $this->resizeToHeight($height);
    //         }
    
    //     }
    
    //     public function resizeToHeight($height) {
    
    //         $ratio = $height / $this->getHeight();
    //         $width = $this->getWidth() * $ratio;
    //         $this->resize($width, $height);
    
    //     }
    
    //     public function resizeToWidth($width) {
    
    //         $ratio = $width / $this->getWidth();
    //         $height = $this->getheight() * $ratio;
    //         $this->resize($width, $height);
    
    //     }
    
    //     public function scale($scale) {
    
    //         $width = $this->getWidth() * $scale / 100;
    //         $height = $this->getheight() * $scale / 100;
    //         $this->resize($width, $height);
    
    //     }
    
    //     public function resize($width, $height) {
    
    //         $width = round($width);
    //         $height = round($height);
    
    //         $new = imagecreatetruecolor($width, $height);
    
    //         if ($this->type == IMAGETYPE_PNG) {
    //             imagealphablending($new, false);
    //             imagesavealpha($new, true);
    //         }
    
    //         imagecopyresampled(
    //             $new, $this->image, 0, 0, 0, 0, $width, $height,
    //             $this->getWidth(), $this->getHeight()
    //         );
    
    //         $this->image = $new;
    
    //     }
    
    // }
?>