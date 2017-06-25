<html>
<body>

<?php
$dbcon = mysqli_connect('mysql13.000webhost.com', 'a4548574_starmon', 'Bulbasaur92', 'a4548574_Patient');

// Check connection
if (!$dbcon) {
  
die('error connecting to db');

}

echo 'You have connected sucessfully';



/*
// escape variables for security
$Date = $_GET [mysqli_real_escape_string($dbcon, $_POST['Date'])];
$ErrorID = $_GET [mysqli_real_escape_string($dbcon, $_POST['ErrorID'])];
$Site = $_GET [mysqli_real_escape_string($dbcon, $_POST['Site'])];
$Tag = $_GET [mysqli_real_escape_string($dbcon, $_POST['Tag'])];	
$Description = $_GET [mysqli_real_escape_string($dbcon, $_POST['Description'])];

	
$sql="INSERT INTO errors (Date, ErrorID, Site, Tag, Description)
VALUES ('" . $Date . "', '" . $ErrorID . "', '" . $Site . "', '" . $Tag . "', '" . $Description . "')";



if (!mysqli_query($dbcon,$sql)) {
  die('Error: ' . mysqli_error($dbcon));
}
echo "1 record added";

mysqli_close($dbcon);
*/


$Date = $_GET["Date"];
$ErrorID = $_GET["ErrorID"];
$Tag = $_GET["Tag"];
$Site = $_GET["Site"];
$Description = $_GET["Description"];

$query = "INSERT INTO errors (Date, ErrorID, Site, Tag, Description)
VALUES ('" . $Date . "', '" . $ErrorID . "', '" . $Site . "', '" . $Tag . "', '" . $Description . "')";

if (!mysqli_query($dbcon,$query)) {
  die('Error: ' . mysqli_error($dbcon));
}
echo " 1 record added";

mysqli_close($dbcon);



?>
</body>
</html>
