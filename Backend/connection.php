<?php



$dbcon = mysqli_connect('mysql13.000webhost.com', 'a4548574_starmon', 'Bulbasaur92', 'a4548574_Patient');


// Check connection

if (!$dbcon) {
  
die('error connecting to db');

}

echo 'You have connected sucessfully';

/*
$sql = "INSERT INTO errors (Date, ErrorID, Site, Tag, Description)
VALUES ('2013-01-02', '2CoEJMUb', 'Cleaveland', 'Missed Visit', 'Patient missed day 15 visit; outside 3-5 day range')";

if (!mysqli_query($dbcon,$sql)) {
  die('Error: ' . mysqli_error($dbcon));
}
echo "1 record added";

*/

$result = mysqli_query($dbcon,"SELECT * FROM errors");

echo "<table border='1'>
<tr>
<th> Date </th>
<th> ErrorID </th>
<th> Site </th>
<th> Tag </th>
<th> Description </th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Date'] . "</td>";
  echo "<td>" . $row['ErrorID'] . "</td>";  
  echo "<td>" . $row['Site'] . "</td>";  
  echo "<td>" . $row['Tag'] . "</td>";
  echo "<td>" . $row['Description'] . "</td>";    
  echo "</tr>";
}

echo "</table>";

mysqli_close($dbcon);






?>