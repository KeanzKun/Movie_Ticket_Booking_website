<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
<style>
      table {
        border-collapse: separate;
        border-spacing: 0 40px;
      }


		#form  
		{
			 height:60px;
			width:500px;
			font-size:14pt;
			position:relative;
			left:100px;
		}
	
	p{
		position:relative;left:100px;color:#fff
		
	}
	
</style>

<link rel=stylesheet href="style/mystyle.css">
</head>
<body class=nav>

<nav style="background-color:rgb(33,33,33);">
	<a href="index.php">
		<img src="image/logo.png" class="logo">
	</a>	

<h1 style="color:rgb(233,29,66);position:relative;left:100px;">Create CFtv Account</h1>
<p style="left:1500px;top:-100px;"> Already have account?</p>
<a href="logIn.php" style="color:rgb(233,29,66);position:absolute;right:200px;top:140px;">Sign In </a>
</nav>

<form  action="httpbin.org./post" method="post">
	<tr>
	<td>
	<input type="email" id=form name=email placeholder=Email>
	</td>
	</tr>
	<table>
	<tr>
	<td>

	<input type=password id=form name=password placeholder=Password>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	<input type=password id=form name=retype placeholder="Retype password" >
	<p> Contain minimum 8 characters <br>
												Include at least 1 number  <br>
												Include both lowercase and uppercase letters
										</p>
										
	</td>

	</tr>
		<td>
		<input type="text" id=form name=name placeholder=Name>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<input type="text" id=form name=name placeholder="Gender">
		
		</td>
	<tr>
		<td>
		<p > 
			Date of Birth
			</p>
		<input type="date" id=form name=dateOfBirth placeholder="Date of Birth">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<input type="tel" id=form name=mobileNumber placeholder="Mobile Number">
			
		</td>	
										</tr>
	<tr>
	<td>
		<input type="text" id=form name=address placeholder="Address">
	</td>
	</tr>
		
	</table>
	<br>
	<button type="submit" style=" background-color: #E91D42; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  position:relative;
  left:1100px;">SIGN UP </button>
	
	
	
</form >



<?php include('includes/footer.php');?>


</body>







</html>