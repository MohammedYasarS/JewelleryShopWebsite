<?php
 include('connection.php');
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 $user=stripcslashes($user);
 $pass=stripcslashes($pass);
 $user=mysqli_escape_string($con,$user);
 $pass=mysqli_escape_string($con,$pass);
 $sql="select * from customer where Username='$user' and Password='$pass'";
 $result=mysqli_query($con,$sql);
 $row =  mysqli_fetch_array($result,MYSQLI_ASSOC);
 $count=mysqli_num_rows($result);
 if ($count==1) {
 	header("location:collection.html");
 }
 else{
 	echo "<h1><center>Login Failed.Invalid user or pass</center></h1>";
 }
?>