<?php
$upload_dir = "uploads/";
$img = $_POST['hidden_data'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = $upload_dir . "0" . ".png";
$success = file_put_contents($file, $data);
print $success ? $file : 'Unable to save the file.';
exit( "LOAD OK!<br>phppostok.php<br>" );
?>
<html></html>