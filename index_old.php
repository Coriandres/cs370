<?php
include_once($_SERVER['DOCUMENT_ROOT']."/lib/include.php");
var_dump($db);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CS 370</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	</head>
	<body>
	
	<script>
		var popularNames = <?=json_encode($db->query("SELECT name FROM events LIMIT 10")->fetchAll(PDO::FETCH_ASSOC)) ?>;
		var dog;
	</script>
	</body>
</html>