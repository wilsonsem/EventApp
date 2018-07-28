<?php
	//$db = new mysqli('servername', 'mysqlUser', 'mysqlPassword', 'databaseName')
	$db = new mysqli('localhost', 'root', '', 'programs');

	if($db->connect_error){
		echo $db->connect_error;
			die("<br>sorry we are having problem with the db connection");
	}else{
		// echo "successful";
	}
	
?>

<body>
	
</body>
</html>