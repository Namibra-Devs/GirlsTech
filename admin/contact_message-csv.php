<?php
include 'config.php';
$now = gmdate("D, d M Y H:i:s");
header('Content-Type: text/csv; charset=utf-8');  
header('Content-Disposition: attachment; filename=messages_list.csv');  
$output = fopen("php://output", "w");  
fputcsv($output, array('SL', 'Sender Name', 'Sender Email', 'Sender Message'));  
$statement = $pdo->prepare("SELECT * FROM tbl_messages");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
foreach ($result as $row) {
	fputcsv($output, array($row['id'],$row['name'], $row['email'], $row['message']));
} 
fclose($output);
?>