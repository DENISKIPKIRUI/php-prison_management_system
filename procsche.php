<?php
include("connection.php");
$id=$_POST['IDNumber'];
$name=$_POST['StaffName'];
$time1=$_POST['timestart'];
$time2=$_POST['timeend'];
$date=$_POST['date'];
$section=$_POST['section'];

 $sql = "INSERT INTO `prisonpro`.`schedule` (`id`,`name`, `date`, `timestart`,`section`,`timeend`) 
	VALUES ('{$id}', '{$name}', '{$date}','{$time1}','{$section}','{$time2}');";
$retval = mysqli_query( $con,$sql);
if ($id==1) {
  // code...
  $sql="select * from user_tbl where name='".$name."' and id='".$id."";
  $res=mysqli_query($con,$sql);
  $records = mysqli_num_rows($res);
$row = mysqli_fetch_assoc($res);
  if ($records==0) {
    // code...
    die('enter valid id');
  }

}
if(! $retval )
{
  die('The data is already: ' . mysql_error());
 
}
  ?>
 					<script type="text/javascript">
						alert("New Record is Added thank you");
						window.location = "schedule.php";
					</script>
        

					<?php

mysql_close($con);
?>