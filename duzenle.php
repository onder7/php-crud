<?php
require_once('inc/db.php');


$data = [
    "baslik" => "Ayhan Özdemir",
];

$where = "id = 2";

$database->update("icerik", $data, $where);
if($database){    echo "ok";}