<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Setting the pages character encoding -->
	<meta charset="UTF-8">

	<!-- The meta viewport will scale my content to any device width -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Link to my stylesheet -->
	<link rel="stylesheet" href="styles.css">
	<title>Start up</title>
</head>

<body>

	<h2>Display people data in an html table</h2>

	<table>

		<!-- The tables header -->
		<tr>
			<th>First name</th>
			<th>last name</th>
			<th>Email</th>
			<th>country</th>
			<th>sex</th>
			<th>Department</th>
			<th>Actions</th>

		</tr>

		<!-- The html template we will use in our loop -->
		<?php
		$json_data = file_get_contents("messages.json");
		$dataa = json_decode($json_data, true);
		if (count($dataa) != 0) {

			foreach ($dataa as $dd) {

		?>
				<tr>
					<td>
						<?php echo $dd['first-name'] ?>
					</td>
					<td>
						<?php echo $dd['last-name'] ?>
					</td>
					<td>
						<?php echo $dd['email'] ?>
					</td>
					<td>
						<?php echo $dd['country'] ?>
					</td>
					<td>
						<?php echo $dd['Gender'] ?>
					</td>
					<td>
						<?php echo $dd['Dname'] ?>
					</td>
					<td>
						<!-- Edit actions -->
						
						<input type="Update" name="update" value="update" formaction="update.php" >
						<input type="Delete" name="delete" value="delete" formaction="" >
					</td>

				</tr>
		<?php

			}
		}


		?>

	</table>
</body>

</html>