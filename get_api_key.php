<?php
include('./admin/database/config.php');

// get api_key from the database
$statement = $pdo->prepare("SELECT * FROM tbl_payment WHERE id=1");
$statement->execute();
$result = $statement->fetchAll();
foreach ($result as $row) {
   echo $api_key = $row['api_key'];
}
?>