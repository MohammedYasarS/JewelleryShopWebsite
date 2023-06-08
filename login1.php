<!doctype html>
<html>
    <head>
        <title>LOGIN</title>
	<script>
		function validation()
		{
			var id=document.f1.user.value;
			var ps=document.f1.pass.value;
			if (id.length=="" && ps.length==""){
				alert("UserName and Password Fields are empty");
				return false;
		}
		else{
			if(id.length==""){
				alert("username Field is empty");
				return false;
			}
			if(ps.length==""){
				alert("password Field is empty");
				return false;
			}
			}
		}
	</script>
	
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
body{
	background-image: url(bg5.jpg);
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
div{
	display: inline-flex;

}
td{
	padding:8px;
	color: white;
	backdrop-filter: blur(3px);
  -webkit-backdrop-filter: blur(3px);
  font-family:georgia;
}
table{
	margin-left:700px;
	background-image: url(log5.jpg);
	background-repeat: no-repeat;
	background-size: cover;
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
.button{
	background-color: red;
	color:white ;
	padding: 30px 30px;
	text-align: center;
	display: inline-block;
	cursor: pointer;
	border-radius: 12px 12px;
	font-family: Georgia, 'Times New Roman', Times, serif;
	
}
.button:hover{
	background-color: rgb(2, 123, 28);
	color:black;
}
input[type=submit]{
  background-color: red;
  color: white;
  padding: 16px 32px;
  display: inline-block;
  cursor: pointer;
  border-radius: 8px 8px;
  font-family: Georgia, 'Times New Roman', Times, serif;
}
input[type=submit]:hover{
	background-color: rgb(2, 123, 28);
	color:black;
}    
</style>
</head>
<body>
	<h1>~Toufik Store Dindigul~</h1>
	<marquee style="color: white; background: black;">~WELCOME TO TOUFIK STORE!~</marquee>
	<ul>
	<li><a class="active" href="hompage1.html">Home</a></li>
	<li><a href="about.html">About Us</a></li>
	<li><a href="contact.html">Contact</a></li>
	<li><a href="login1.php">LOGIN</a></li>
	<li><a href="logout.php">LOGOUT</a></li>
</ul>
	<p>USER LOGIN</p>
	<form name="f1" action="authentication1.php" onsubmit="return validation()" method="POST">
	<div>
	<table>
		<tr><td>USERNAME:</td>
			<td><input type="text" id="user" name="user" placeholder="Enter your USERNAME"/>
		</td></tr>
		<tr><td>PASSWORD:</td>
			<td><input type="password" id="pass" name="pass" placeholder="Enter your PASSWORD"/>
		</td></tr>
		<tr><td>
		 <input type="submit" value="LOGIN"></input>
		</td></tr>
	<center><tr><td><a class="button" href="signup.php">NEW USER REGISTRATION</a></td></tr></center>
</table>
</div>
</form>	
	<div style="position: absolute;
	top: 320px; left: 80px;
	width: 700px;
	height: 300px;"><img src="j.jpeg">
	</div>
</body>
</html>	