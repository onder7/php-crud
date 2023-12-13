<?php

require_once('inc/db.php');
echo $id=$_GET['id'];

$where = "id = $id";

$database->delete("icerik", $where);


