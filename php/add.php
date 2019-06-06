<?php
//sleep(3);
include "../db/db.php";
$db->query("insert into classes (name,age,sex,classes) VALUES ('','','','')");

if($db->affected_rows>0){
    echo $db->insert_id;
}else{
    echo "error";
}