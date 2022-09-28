<html>
<head>
  <title>Delete Schedule</title>
  <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='1250' cellpadding='8' cellspacing='0' height='200'>
        
          <tr>
            <td colspan="3" bgcolor='#999999' valign='center'>

<?php
ob_start();
include("connection.php");
$sql="select * from schedule";
$result=mysqli_query($con,$sql);
?>


<?php

//To delete:
if(isset($_POST["delete"])){
$id=$_POST["id"];
$sql="delete from schedule where id='$_POST[id]'";
$delete=mysqli_query($con,$sql);
if($delete){
print "<script language=\"javascript\">
	alert(\"Successfully deleted!...\")
	location.href=\"deleteschedule.php\"
	</script>";
}
else{
print "<script language=\"javascript\">
	alert(\"Not deleted!...\")
	location.href=\"deleteschedule.php\"
	</script>";
}
}
?>



<?php

print "<table width='100%' bgcolor='GREEN' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><b>DELETE PRISONER RECORD</b></caption>
<tr bgcolor='#green'>
<th width='3%'>National id</th>
<th width='10%'>Full Name</th>
<th width='10%'>Date</th>
 <th width='15%'>Start Time</th>
<th width='10%'>Section</th>
<th width='10%'>End Time</th>


</tr>";
$i=1;
while($row=mysqli_fetch_assoc($result)){
print "<form method=POST>";
print"<tr bgcolor='white'>
<td>$i<input type=\"hidden\" name=\"id\" value=\"$row[id]\"></td>
<td>$row[id]</td>
<td>$row[name]</td>
<td>$row[date]</td>
<td>$row[timestart]</td>
<td>$row[section]</td>
<td>$row[timeend]</td>

<td align='center'><input type=submit name=delete value=delete></td>
</tr>";
print "</form>";
$i++;
}
print"</table>";
?>

<br/>

			</td>
          </tr>
          <tr>
		  <td align="center" bgcolor='green'><a href="officerpanel.php" target="_parent">Panel Panel <b>|</b></a>
			<a href="viewschedule.php" target="_parent">View Schedule<b>|</b></a>
			<a href="index.php" target="_parent">Log out</a></td>
		
          </tr>
          <tr>
            <td colspan='3' align='center' bgcolor='silver' height='1'>
					&copy; <i>2022</i>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					MERU PRISONS SERVICE BY <I>DENIS</I>
            </td>
          </tr>
	</table>
</body>
</head>
</html>

