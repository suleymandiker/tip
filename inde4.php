<?php 
//conection: 
$link = mysqli_connect("localhost","root","123456","tip_db") or die("Error " . mysqli_error($link)); 

//consultation: 

$query = "SELECT name FROM tip_users" or die("Error in the consult.." . mysqli_error($link)); 

//execute the query. 

$result = $link->query($query); 

//display information: 

while($row = mysqli_fetch_array($result)) { 
  echo $row["name"] . "<br>"; 
} 
?> 
