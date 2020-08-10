<?php
$filefolder = "files/oth_files/";

$authUser = $_SERVER['REMOTE_ADDR'];
$handlec = fopen($filefolder."_IP_S.txt", "r");
$cont_ips = fread( $handlec, filesize( $filefolder."_IP_S.txt" ) );
fclose( $handlec );

$chars = explode(", ", $cont_ips);

echo "<br>";
for( $i=0; $i<count($chars); $i++ ){
    echo $i." - ".$chars["$i"]."<br>";
    if( strcmp($chars[$i], $authUser)==0 ){
        $setip = false;
    }
}

exit();

echo ""."<br>"."<br>".$arr[1];



$cont_ips = $cont_ips.", ".$cont_ips;

$handlec2 = fopen($filefolder."_IP_S.txt", "w");
fwrite($handlec2, $cont_ips );
fclose( $handlec2 );


exit();

$var1 = "1er23asd a  \n<br>";
$ival1 = doubleval( $var1 );
$ival1 = $ival1 + 1.5;

exit( 
        "".$ival1
        
        
        
        );

$text = 'A Simple Text String';
// Create a blank image and add some text
$im = imagecreatetruecolor(640, 260);
imagefill ( $im, 0, 0, imagecolorallocate($im, 210, 210, 210) );
$text_color = imagecolorallocate($im, 0, 0, 0);

//imagefilledrectangle($im, 0, 0, 100, 100, imagecolorallocate($im, 255, 255, 255));
// imagestring($im, 1, 5, 5, $text, $text_color );

imagerectangle ( $im , 0, 0, 639, 259, $text_color );


for( $i=0; $i<260; $i++ ){
     imagesetpixel ( $im, $i , $i , $text_color );
}

$font = 'arial';

// Save the image as 'simpletext.jpg'
imagejpeg($im, 'simpletext.jpg');

// Free up memory
imagedestroy($im);


?>
<html>
    <img src="simpletext.jpg"></img>
</html>

