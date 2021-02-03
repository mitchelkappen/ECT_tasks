<?php
$post_data = json_decode(file_get_contents('php://input'), true);
// the directory "data" must be writable by the server
$name = "videos/joepie.webm";
// $name = "videos/".$post_data['filename'].".webm";

$data = $post_data['filedata'];
echo $name;
echo "Joehoe, PHP voor WEBM wordt gebruikt!";
// write the file to disk
file_put_contents($name, $data);
?>
