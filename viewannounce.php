<html>
<head>
  <title>View Announce Details </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='darkgrey' width='1200' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='#999999' valign='center'>

<?php


 include("connection.php");
 $tbl_name="announce";
$sql="select * from $tbl_name";
$sel= mysqli_query($con,$sql);

echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='silver'>
<caption><h3>ANNOUNCE  DETAILS</h3></caption>
<tr bgcolor='#CCCCCC'>
<th width='3%'>To</th>
<th width='10%'>Id</th>
<th width='15%'>Subject</th>
<th width='10%'>Message</th>
</tr>";

   while($row=mysqli_fetch_assoc ($sel))
{
echo "<tr bgcolor='white'>";
echo  "<td width='3%'>".$row ['to']."</td>";
echo  "<td width='10%'>".$row ['Id']."</td>";
echo  "<td width='10%'>".$row ['subject']."</td>";
echo  "<td width='10%'>".$row ['message']. "</td>";

echo "</tr>";
}
echo"</table>";

?>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center"><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>
			<a href="deleteannounce.php" target="_parent">Delete <b>|</b></a>
			<a href="index.php" target="_parent">Log out</a></td>
		
		
          </tr>
          <tr>
            <td align='center' bgcolor='white' height='1'>
					&copy; 2022
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					MERU PRISONS SERVICE
            </td>
          </tr>
	</table>
</body>
</head>
</htm