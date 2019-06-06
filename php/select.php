<?php
//sleep(3);
include "../db/db.php";
$result=$db->query("select * from classes");
$arr=[];
while ($row=$result->fetch_assoc()){
    $arr[]=$row;
}
echo json_encode($arr);