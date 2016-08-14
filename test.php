<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>example-DAYNAME-function - php mysql examples | w3resource</title>
<meta name="description" content="example-DAYNAME-function - php mysql examples | w3resource">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>Extracting name of the day from 2008-05-15:</h2>
<table class='table table-bordered'>
<tr>
<th>Name of the day from 2008-05-15</th>
</tr>
<?php
$hostname="localhost";
$username="root";
$password="";
$db = "db_ems";
$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
foreach($dbh->query('SELECT DAYNAME("2008-05-15")') as $row) {
echo "<tr>";
echo "<td>" . $row['DAYNAME("2006-05-15")'] . "</td>"; 
echo "</tr>";
}
?>
</tbody></table>
</div>
</div>
</div>
</body>
</html>
