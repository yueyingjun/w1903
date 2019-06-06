<?php
include "../db/db.php";
$id=$_GET["id"];
$attr=$_GET["attr"];
$val=$_GET["val"];

$db->query("update classes set {$attr}='{$val}' where id=".$id);

if($db->affected_rows>0){
    echo "ok";
}
