<?php
 $n=$_POST ['name'];
 $e=$_POST ['email'];
 $a=$_POST ['address'];
 $c=$_POST ['contactno'];
 $u=$_POST ['username'];
 $p=$_POST ['password'];
 $link=mysqli_connect("localhost","root","","yasar");
 $sql="INSERT INTO customer(Name,E-Mail,Address,Contact_No,Username,Password) values('$n','$e','$a','$c','$u','$p')";
if (mysqli_query($link,$sql)) {
    echo"success";
}
else{
    echo"not";
}
?>