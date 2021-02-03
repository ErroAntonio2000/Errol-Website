<?php
$conn=mysqli_connect("localhost","root","","event_reg");
$db=mysqli_select_db($conn,"event_reg");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$org=$_POST['org'];

$query= "INSERT INTO rsvps(id, fname, lname, email, tel, org) VALUE (NULL, '$fname', '$lname', '$email', '$tel', '$org')";
$insert=mysqli_query($conn,$query);
if($insert){
	echo"<script>window.alert('Thank You For Confirming Your RSVP. See You At #TechExpo2019!')</script>";
	header('refresh:0;url=index.php');
}else{
	echo"<script>window.alert('Unable to RSVP. Please Try Again Later')</script>";
	header('refresh:0;url=index.php');
}

?>