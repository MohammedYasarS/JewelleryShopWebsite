<!DOCTYPE html>
<html>
    <head>
        <title>SIGNUP</title>
<style>
h1{
	color: red;
	  text-align: center;
	 font-family:papyrus ,monospace;
	 font-size: 45px;
	 background-color:black;
	 border-radius: 20px;
	 display:inline-block;
	 margin-left: 400px;
     padding: 5px;
	 border: 4px solid lime;
}
div{
	display: inline-flex;

}
td{
	padding:8px;
	color: white;
	backdrop-filter: blur(3px);
  -webkit-backdrop-filter: blur(3px);
}
table{
	margin-left:600px;
	background-image: url(log5.jpg);
	background-repeat: no-repeat;
	background-size: cover;
}
p{
	background-color: black;
	font-size: 40px;
	color: white;
	font-family:papyrus ,monospace;
	display: inline-block;
	margin: 50px;
	border: 5px solid red;
	border-radius:15px;
}
body{
	background-image: url(bg2.jpg);
	background-repeat: no-repeat;
	background-size:cover;
}
	ul{
		margin: 0;
		padding: 0;
		background-color:#333;
	}
	li a{
		display: block;
		border-radius: 4px;
		color: black;
		text-align: center;
		padding: 14px 16px;
		font-size: 25px;
		font-family:georgia;
		font-weight:900;
		}
	
	li{
		margin: 5px;
		padding-right: 50px;
		float: left;	
		border-right: 1px solid #111;
		list-style: none;
	}
	li:nth-child(4){
		border-right: none;
		 background-color: rgb(2, 123, 28);
  		 color: white;
		 cursor: pointer;
		 border-radius: 10px 10px;
		 padding-right: 0;
	}
	li:last-child{
		border-right: none;
		 background-color: red;
  		 color: white;
		 cursor: pointer;
		 border-radius: 14px 14px;
		 float: right;
		 padding-right: 0;
	}
	.active{
		background-color: red;
		border-radius: 10px 10px;
	}
	li a:hover:not(.active){
		background-color: #111;
		color: white;
	}
input[type=submit]{
  background-color: red;
  color: white;
  padding: 5px 5px;
  display: inline-block;
  cursor: pointer;
  border-radius: 5px 5px;
  margin-left: 250px;
}
input[type=submit]:hover{
	background-color: #4CAF50;
	color: black;
}
</style>
</head>
<body>
	<h1>~Toufik Store Dindigul~</h1><br>
<marquee style="color: white; background: black;">~WELCOME TO TOUFIK STORE!~</marquee>
<ul>
	<li><a class="active" href="hompage1.html">Home</a></li>
	<li><a href="about.html">About Us</a></li>
	<li><a href="contact.html">Contact</a></li>
	<li><a href="login1.php">LOGIN</a></li>
	<li><a href="logout.php">LOGOUT</a></li>
</ul>
	<form name="f2" action="table.php" onsubmit="return validation()" method="POST">
	<p>SIGNUP</p>
	<div>
	<table>
			<tr><td>NAME:</td>
				<td><input type="text" id="name" name="name" placeholder="Enter your Name"/></td></tr><br>
		<tr><td>E-mail:</td>
			<td><input type="text" id="email" name="email" placeholder="Enter your E-mail"/></td></tr><br><br>
		<tr><td><label for="ADDRESS">ADDRESS:</label></td>
			<td><textarea id="add" name="address" rows="2" cols="20" placeholder="Enter your ADDRESS"></textarea></td></tr><br><br>
		<tr><td>CONTACT NUMBER:</td><td><input type="text" id="contno" name="contactno" placeholder="Enter your Mobile Number"/></td></tr><br><br>
		<tr><td>USERNAME :</td><td><input type="text" id="user" name="username" placeholder="Create your USERNAME"/></td></tr><br><br>
		<tr><td>PASSWORD :</td><td><input type="text" id="pass" name="password" placeholder="Create your PASSWORD"/></td></tr><br><br>
		<tr><td><input type="submit" value="SUBMIT"></td></tr>
	</table>
	</div>
	</form>	
	<div style="position: absolute;
	top: 350px; left: 80px;
	width: 500px;
	height: 300px;"><img src="j.jpeg" width="500px">
	</div>
<script>
	function validation()
	{
		var name=document.f2.name.value;
		var email=document.f2.email.value;
		var addrs=document.f2.add.value;
		var con=document.f2.contno.value;
		var uname=document.f2.user.value;
		var ps=document.f2.pass.value;
	if(name.length==""){
			alert("Name Field is empty");
			return false;
		}
	if(email.length==""){
			alert("E-mail Field is empty");
			return false;
		}
	if(addrs.length==""){
			alert("Address Field is empty");
			return false;
		}
	if(con.length==""){
			alert("Contact Number Field is empty");
			return false;
		}
	if(uname.length==""){
			alert("username Field is empty");
			return false;
		}
	if(ps.length==""){
			alert("password Field is empty");
			return false;
		}
	}
</script>
</body>
</html>