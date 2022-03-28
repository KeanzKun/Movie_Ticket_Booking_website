<!DOCTYPE html>	
<html>
<head>
	<title>Log In</title>
<style>
      table {
        border-collapse: separate;
        border-spacing: 0 40px;
      }
	  body{
	background-color:rgb(33,33,33);  
	  }
	  p{
		  font-size:40px;
		  position:relative;
		  left:100px;
		  color:#fff;
		  text-align:center;
	  }
	  #login 
		{
			 height:60px;
			width:500px;
			font-size:14pt;
			position:relative;
			left:100px;
		}
	form{
		position:relative;
		left:350px;
	}
	  
</style>
<link rel=stylesheet href="style/mystyle.css">
</head>
<body>
<nav style="background-color:rgb(33,33,33);" >
	<a href="index.php">
		<img src="image/logo.png" class="logo" alt="logo">
	</a>	
</nav>
<h1 style="color:rgb(233,29,66);position:relative;text-align:center;">Reset Your Password</h1>

	<form action="httpbin.org./post" method="post">
				<table>

				<tr>
				<td>
				<p>Account Email	:</p>

				</td>
					<td>
					<input type="email"  id="login"  name=email >
					</td>

				</tr>


				</table>
	<button type="submit" style=" background-color: #E91D42; 
  border: none;
  color: white;
  padding: 20px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  position:relative;
  left:450px;
   font-size:30px;	">Submit </button>

</form>
<br><br><br>
<?php include "includes/footer.php" ;?>

</body>







</html>