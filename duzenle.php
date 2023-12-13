<?php
require_once('inc/db.php');


$data = [
    "baslik" => "oNDER mONDER",
];

$where = "id = 2";

$database->update("icerik", $data, $where);
if($database){    echo "ok";}
