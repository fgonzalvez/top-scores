<?php require "dbconfig.php" ?>

<?php
if (isset($_GET["user"]) && isset($_GET["record"])) {
	$user = $_GET["user"];
	$record = $_GET["record"];

	$sql_query = "INSERT INTO user_records(user,record) VALUES('$user','$record')";
	mysql_query($sql_query);

  echo "Record saved";
}
?>
