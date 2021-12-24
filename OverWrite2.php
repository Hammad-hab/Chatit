<?php
$ServerData1 = $_GET['TheValue2'];
$_WritingIntoAFile = file_put_contents('https://github.com/Hammad-hab/Json/blob/main/DB2.json', '{"data": {"Message2" : "'.$ServerData1.'"}}');
echo $_WritingIntoAFile;
?>
