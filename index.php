<?php require("script.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="How to store form data in a json file with php">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>register form</title>
</head>

<body>

	<h2>Ohayo 🙋‍♂️</h2>
	
	<!-- Let's begin with our form element -->
	<form action="" method="post">
		<h3>register here</h3>
		<label>First Name</label>
		<input type="text" name="fname" required value="">
		<label>last Name</label>
		<input type="text" name="lname" required value="">
		<label>Enter your email</label>
		<input type="email" name="email" required value="">
		<label>Address</label>
		<textarea name="address" rows="4" cols="50"></textarea>

		<label> country</label>

		<select type="country" class="country" name="country">
			<option>select country</option>
			<option value="Egypt">Egypt</option>
			<option value="Aland Islands">Aland Islands</option>
			<option value="Albania">Albania</option>
			<option value="Algeria">Algeria</option>
			<option value="AS">American </option>
			<option value="AD">Andorra</option>
			<option value="AO">Angola</option>
			<option value="AI">Anguilla</option>
			<option value="AQ">Antarctica</option>
		</select>
		<br><br>
		<label>Select gender</label>
		<div class="gendeer">
			<label class="rad-label">
				Male
				<input type="radio" name="gender" value="Male">
				female
				<input type="radio" name="gender" value="Female">
				<div class="rad-design"></div>

			</label>


		</div>
		<label>Enter your password</label>
		<input type="password" name="password" required value="">
		<label>Department</label>
		<input type="text" name="Dname" value="PHP open sourse">



		<input type="submit" name="submit" value="submit" formaction="done.php" >

		<p class="error"><?php echo @$error; ?></p>
		<p class="success"><?php echo @$success; ?></p>
	</form>
	<script>
		if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
		}
	</script>
</body>

</html>