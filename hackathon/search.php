<html>
<head><title>Hackathon</title></head>
<body>
<img src="img/logo.png"/>

<?php
$mysqli = new mysqli("localhost","furbrain_4","DoorStop21","furbrain_4");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$searchy = $_GET['skill'];
$query = "SELECT * from Skills where Name like '%".$searchy."%'";
echo $query;


// Perform query

if ($result = $mysqli -> query($query)) 
{
	?>
	<table>
	<?php
	while ($row = $result->fetch_assoc())	
	{
		?>
        <tr>
			<td><?php echo($row['Name']);?></td>
			<td><?php echo($row['Surname']);?></td>
		</tr>		
		<?php		
    }
	?>
	</table>
	<?php 

  $result -> free_result();
}

$mysqli -> close();
?>