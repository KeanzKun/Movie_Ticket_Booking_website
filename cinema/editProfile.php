<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style/mystyle.css'>
<?php include('includes/navigation.php'); ?>

<head>
	<title>Edit Profile</title>
</head>

<body>
	<h1 style=text-align:center>My Profile</h1>
	<hr style="width: 300px; margin:auto">

	<form action="???.php">
		<table id="profileTable">
			<tr>
				<td>
					<table>
						<tr>
							<p>
								<img src="image/profilepic.png" style="width:200px;height: 200px;"><br>
								<input type="file" id="imageUpload" name="profilePicture" placeholder="Photo" required="" capture>

								<!--refer to https://stackoverflow.com/questions/41406509/add-a-profile-picture-in-form-in-html-and-css  &  https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file-->
							</p>
						</tr>
						<tr>
							<br><input type="submit" value="Save Changes">
						</tr>
					</table>
				</td>
				<td id="inputField">
					<p>
						<label for="name">Name:</label><br>
						<input type="text" id="name" name="name" value="John Doe"><br>
					</p>

					<p>
						<label for="gender">Name:</label><br>
						<input type="radio" id="gender" name="gender" value="male" checked>
						<label for="male">Male</label>
						<input type="radio" id="gender" name="gender" value="female">
						<label for="female">Female</label>
					</p>

					<p>
						<label for="address">Address:</label><br>
						<input type="text" id="address" name="addressline1" value="12, Jalan 34"><br>
						<input type="text" id="address" name="addressline2" value="Taman Bunga, Semenyih"><br>
						<input type="text" id=address name="postcode" pattern="[0-9]{5}" maxlength="5" value="32000">
						<select id="address" name="state">
							<option value="johor">Johor</option>
							<option value="kedah">Kedah</option>
							<option value="kelantan">Kelantan</option>
							<option value="malacca">Malacca</option>
							<option value="negerisembilan">Negeri Sembilan</option>
							<option value="pahang">Pahang</option>
							<option value="penang">Penang</option>
							<option value="perak">Perak</option>
							<option value="perlis">Perlis</option>
							<option value="sabah">Sabah</option>
							<option value="sarawak">Sarawak</option>
							<option value="selangor" selected>Selangor</option>
							<option value="terengganu">Terengganu</option>
						</select>
					</p>

					<p>
						<label for="email">Email:</label><br>
						<input type="email" id="email" name="email" value="john@example.com"><br>
					</p>

					<p>
						<label for="phone">Mobile Number:</label><br>
						<input type="tel" id="phone" name="phone" value="0123456789">
					</p>

					<p>
						<label for="birthday">Date of Birth:</label>
						<input type="date" id="birthday" name="birthday" value="1989-05-23">
					</p>
				</td>
			</tr>
		</table>
	</form>
</body>
<?php include('includes/footer.php'); ?>

</html>