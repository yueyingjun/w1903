<?php
include "../db/db.php";
$db->query("delete from classes where id=".$_GET['id']);

if($db->affected_rows>0){
    echo "ok";
}