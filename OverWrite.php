<?php

$ServerData1 = $_GET['TheValue'];

$_WritingIntoAFile = file_put_contents('DB.json', '{"data": {"Message1" : "'.$ServerData1.'"}}');
echo $_WritingIntoAFile;

?>