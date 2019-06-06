<?php
include "db/db.php";

$db->query("insert into classes (name) VALUES ('abcdef')");

echo $db->insert_id;



