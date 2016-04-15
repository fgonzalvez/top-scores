<?php require "dbconfig.php" ?>
<?php
  header("Content-type: text/xml");
	$sql_query="SELECT * FROM user_records order by record desc limit 10";
	$result_set=mysql_query($sql_query);
  echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>' . "\n";
  echo "<response>\n";
	while($row = mysql_fetch_array($result_set))
	{
    echo "<userRecord><user>".$row[0]."</user><record>".$row[1]."</record></userRecord>";
	}
  echo "</response>\n";
?>
