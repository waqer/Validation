<!DOCTYPE html>
<html>
	<head>
	<title>Registration Form</title>
	</head>
	<body>
		<h1 align="center">Welcome to Registration Page</h1>	
		
				<form action = "index.php" method ="POST">
			User ID	: 	<input type="text" name="id"><br>
			Password:
						<input type="password" name="psw"><br>
			Name	: 	<input type="text" name="name"><br>
			Address	: 	<input type="text" name="address"><br>
			Country : 	<select>
						<option value="BD">BD</option>
						<option value="UK">UK</option>
						<option value="USA">USA</option>
						<option value="BRA">BRAZIL</option>
						</select>
						<br>
			ZIP 	: 	<input type="text" name="zip"><br>			
			E-mail	: 	<input type="text" name="email"><br>
			Gender:
						<input type="radio" name="gender" value="female">Female
						<input type="radio" name="gender" value="male">Male
						<br>
			Language: 	<br>	<input type="checkbox" name="lan" value="ENGLISH"> NON ENGLISH<br>
						<input type="checkbox" name="lan" value="NON ENGLISH" checked> ENGLISH<br>
			
			ABOUT	:	<br><textarea rows="5" cols="50">
			
						</textarea>	
						<br>	
			
			<input type="submit" name="submit" value="Submit">
			</form>
	</body>	
	
	
	
	
	<?php
	
    if(isset($_POST['submit']))
	{
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
		$pass=$_POST['psw'];

        if(empty($id)){
            echo '*Id is required'.'<br>';
        }
        if(empty($name)){
            echo '* Name is required'.'<br>';
        }
		if(empty($pass)){
            echo '*Password is required'.'<br>';
        }


        if(empty($email)){
            echo '* Email is required'.'<br>';
        }



        $myfile = fopen("user.txt", "w") or die("Unable to open file!");
		$txt = $id."\r\n".$name."\r\n".$email."\r\n".$pass."\r\n";
		fwrite($myfile, $txt);
		fclose($myfile);
	}	
    
	?>



</html>