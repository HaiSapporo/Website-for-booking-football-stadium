<html>
<head>
<title>History of reservation</title>
</head>
<body background=images.jpg>
<center>
<br><br>
<p style="font-family:impact; font-size:30pt; color:lightgreen">HISTORY</p>

<?php
	session_start();

	$conn=mysqli_connect("127.0.0.1","2018_f3","2018_f3","2018_f3_");
	$strSQL = "SELECT * FROM history,field WHERE field.admin = '".$_SESSION['UserID']."' AND history.s_name=field.Name ";
	$objQuery = mysqli_query($conn,$strSQL);
	

	while($row=mysqli_fetch_array($objQuery))
{
	$name=$row['u_name'] ;
	$STN2=$row['s_name'] ;
	$date=$row['date'];
	$stt=$row['started_time'];
	$stp=$row['stopped_time'];
	echo $row['s_name']." : ".$row['date']." : ".$row['started_time']." - ".$row['stopped_time']." : ".$row['how_long']." : ".$row['u_name'];
	echo "<a href=delete_ad.php?name=$name&STN=$STN2&stt=$stt&stp=$stp&date=$date>cancle</a>";
	echo "  <a href=check.php?name=$name&STN=$STN2&stt=$stt&stp=$stp&date=$date>check</a><br>";


}
?>

</body>
</html>