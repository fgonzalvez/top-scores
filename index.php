<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
  <h1 class="text-center"> Top Scores </h1>
  <div class="container-fluid" style="width:600px;margin-top:50px;">
    <table class="table table-bordered table-hover text-center">
      <tr>
        <th class="text-center"> Position </th>
        <th class="text-center"> User </th>
        <th class="text-center"> Points </th>
      </tr>
<?php
  require "dbconfig.php"
  //Shows a table with the top 10 user_records
?>
<?php
	$sql_query="SELECT * FROM user_records order by record desc limit 10";
	$result_set=mysql_query($sql_query);
  $counter=1;
	while($row = mysql_fetch_array($result_set))
	{
    echo "<tr>";
		echo "<td>".$counter."</td><td>".$row[0]."</td><td>".$row[1]."</td>";
    echo "</tr>";
    $counter++;
	}
?>
    </table>
  </div>
</body>
</html>
