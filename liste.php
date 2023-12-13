<?php

require_once('inc/db.php');
$baslik="asdasd";
$users = $database->select("icerik", "*", null, "baslik ASC", 222);


 foreach ($users as $user) {
     echo $user['baslik'] . '- ' . $user['yazi']. '<a href="sil.php?id='.$user['id'].'">Sil</a><br>';
 }
?>
