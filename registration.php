<?php 
	print '
	<h1>Registracija</h1>
	<div id="register">';
	
	if ($_POST['_action_'] == FALSE) {
		print '
		<form action="" id="registracija_obrazac" name="registracija" method="POST">
			<input type="hidden" id="_action_" name="_action_" value="TRUE">
			
			<label for="fname">Ime *</label><br>
			<input type="text" id="fname" name="ime" placeholder="Vaše ime.." required>
			<br><br>
			<label for="lname">Prezime *</label><br>
			<input type="text" id="lname" name="prezime" placeholder="Vaše prezime" required>
			<br><br>
			<label for="email">E-mail *</label><br>
			<input type="email" id="email" name="email" placeholder="Vaš e-mail.." required>
			<br><br>
			<label for="username">Username:* <small>(Username mora sadržavati između 5 i 10 znakova)</small></label><br>
			<input type="text" id="username" name="username" pattern=".{5,10}" placeholder="Username.." required>
			<br><br>		
			<label for="password">Password:* <small>(Lozinka mora imati najmanje 4 znaka)</small></label><br>
			<input type="password" id="password" name="password" placeholder="Password.." pattern=".{4,}" required>
			<br><br>
			<label for="country">Zemlja:</label><br>
			<select name="country" id="country">';
				#Select all countries from database webprog, table countries
				$query  = "SELECT * FROM countries";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '<option value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
				}
			print '
			</select><br><br>
			<input type="submit" value="Submit">
		</form>';
	}
	else if ($_POST['_action_'] == TRUE) {
		
		$query  = "SELECT * FROM users";
		$query .= " WHERE email='" .  $_POST['email'] . "'";
		$query .= " OR username='" .  $_POST['username'] . "'";
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		if ($row['email'] == '' || $row['username'] == '') {
			# password_hash https://secure.php.net/manual/en/function.password-hash.php
			# password_hash() creates a new password hash using a strong one-way hashing algorithm
			$pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);
			
			$query  = "INSERT INTO users (ime, prezime, email, username, password, country)";
			$query .= " VALUES ('" . $_POST['ime'] . "', '" . $_POST['prezime'] . "', '" . $_POST['email'] . "', '" . $_POST['username'] . "', '" . $pass_hash . "', '" . $_POST['country'] . "')";
			$result = @mysqli_query($MySQL, $query);
			
			# ucfirst() — Make a string's first character uppercase
			# strtolower() - Make a string lowercase
			echo '<p>' . ucfirst(strtolower($_POST['ime'])) . ' ' .  mb_convert_encoding(ucfirst(strtolower($_POST['prezime'])), "UTF-8") . ', Hvala Vam na registraciji </p>
			<hr>';
		}
		else {
			echo '<p>Navedeni e-mail ili username se već koriste!</p>';
		}
	}
	print '
	</div>';
?>