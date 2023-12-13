<?php

require_once('inc/db.php');
if($_POST)
{
$baslik=$_POST['baslik'];
$yazi=$_POST['yazi'];
    $data = [
    "baslik" => $baslik,
    "yazi" => $yazi,
];

$database->insert("icerik", $data);
if($database){    echo "ok";}
}
else
{
    echo 'post edilmemiş';
}
?>