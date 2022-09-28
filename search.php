<?php

 $searchTerm = trim($_GET["keyname"]);

if($searchTerm == "")
{
	echo "Enter name you are searching for.";
	exit();
}

include("connection.php");
$link = mysqli_connect($host, $user, $pwd, $db);

$query ="SELECT * FROM registration WHERE id LIKE '%$searchTerm%'";

$results = mysqli_query($link, $query);

 
if(mysqli_num_rows($results) >= 1)
{
	$output = "";
	while($row = mysqli_fetch_array($results))
	{
echo 

		$output .= "ID: " . $row['id'] . "<br />";
		$output .= "Full Name: " . $row['Full_Name'] . "<br />";
		$output .= "Date Of Birth: " . $row['DOB'] . "<br />";
		$output .= "Address: " . $row['Address'] . "<br /><br />";
		$output .= "County: " . $row['County'] . "<br />";
		$output .= "Gender: " . $row['Gender'] . "<br />";
		$output .= "Education: " . $row['Education'] . "<br />";
		$output .= "Marital: " . $row['Marital'] . "<br /><br />";
		$output .= "Offence: " . $row['Offence'] . "<br />";
		$output .= "Date_in: " . $row['Date_in'] . "<br />";
		$output .= "File_num: " . $row['File_num'] . "<br /><br />";
	}
	echo $output;
  }
else

	echo'<body bgcolor="Green">';
	echo'<center>';
	echo "<h2>No record found please check your ID </h2>";
	echo "<br/>";
	echo "<br/>";
	echo'</center>';
	echo'</body>';
	 echo "<font size='5'>"."Click" . "<a href='search-form.php'>"."  ". "here"  . "</a>"  . "  " . "to verify your ID"."</font>";
?>
