<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<?php
		$name = $email = $username = $password = $confirmpassword = $date = $sex = $martialstatus = $adress = $city = $zip = $home = $mobile = $creditcard = $expiry = $salary = $website = $gpa = "";
		$nameNotFilled = $emailNotFilled = $usernameNotFilled = $passwordNotFilled = $confirmpasswordNotFilled = $dateNotFilled = $sexNotFilled = $martialstatusNotFilled = $addressNotFilled = $cityNotFilled = $zipNotFilled = $homeNotFilled = $mobileNotFilled = $creditcardNotFilled = $expiryNotFilled = $salaryNotFilled = $websiteNotFilled = $gpaNotFilled = "";

		if($_SERVER["REQUEST_METHOD"]== "POST"){
			if(empty($_POST["name"])){
				$nameNotFilled = "This filed is required";
			}else{
				$name = test_input($_POST["name"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      			$nameErr = "Only letters and white space allowed";
    }
			}
		}

		if($_SERVER["REQUEST_METHOD"]== "POST"){
			if(empty($_POST["email"])){
				$emailNotFilled = "This filed is required";
			}else{
				$email = test_input($_POST["email"]);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      			$emailErr = "Invalid email format";
    }
			}
		}

		if($_SERVER["REQUEST_METHOD"]== "POST"){
			if(empty($_POST["username"])){
				$usernameNotFilled = "This filed is required";
			}else{
				$username = test_input($_POST["username"]);
			}
		}

		if($_SERVER["REQUEST_METHOD"]== "POST"){
			if(empty($_POST["password"])){
				$passwordNotFilled = "This filed is required";
			}else{
				$password = test_input($_POST["password"]);
				if (!preg_match("/(^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/",$password)) {
      			$nameErr = "Weak password";
   				 }
			}
		}

		if($_SERVER["REQUEST_METHOD"]== "POST"){
			if(empty($_POST["confirmpassword"])){
				$confirmpasswordNotFilled = "This filed is required";
			}else{
				$confirmpassword = test_input($_POST["confirmpassword"]);
				if($_POST["password"] != $_POST["confirmpassword"]){
					$passwordNotFilled = "Passwords do NOT match";
				}
			}
		}

		if($_SERVER["REQUEST_METHOD"]== "POST"){
			if(empty($_POST["date"])){
				$dateNotFilled = "";
			}else{
				$date = test_input($_POST["date"]);
				if(!preg_match("/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[12])\/(19|20)\d{2}$/", $date)){
					$dateNotFilled = "Wrong Format";
				}
			}
		}

		if($_SERVER["REQUEST_METHOD"]== "POST"){
			if(empty($_POST["sex"])){
				$sexNotFilled = "";
			}else{
				$sex = test_input($_POST["sex"]);
			}
		}

		if($_SERVER["REQUEST_METHOD"]== "POST"){
			if(empty($_POST["martialstatus"])){
				$martialstatusNotFilled = "";
			}else{
				$martialstatus = test_input($_POST["martialstatus"]);
			}
		}

		if($_SERVER["REQUEST_METHOD"]== "POST"){
			if(empty($_POST["address"])){
				$addressNotFilled = "This filed is required";
			}else{
				$address = test_input($_POST["address"]);
			}
		}

		if($_SERVER["REQUEST_METHOD"]== "POST"){
			if(empty($_POST["city"])){
				$cityNotFilled = "This filed is required";
			}else{
				$city = test_input($_POST["city"]);
			}
		}

		if($_SERVER["REQUEST_METHOD"]== "POST"){
			if(empty($_POST["zip"])){
				$zipNotFilled = "This filed is required";
			}else{
				$zip = test_input($_POST["zip"]);
				if(!preg_match("/\d{6}/", $zip)){
					$zipNotFilled = "Wrong format";
				}
			}
		}

		if($_SERVER["REQUEST_METHOD"]== "POST"){
			if(empty($_POST["home"])){
				$homeNotFilled = "This filed is required";
			}else{
				$home = test_input($_POST["home"]);
				if(!preg_match("/^\+998-7[0-9]-\d{3}-\d{4}$/", $home)){
					$homeNotFilled = "Wrong format";
				}
			}
		}

		if($_SERVER["REQUEST_METHOD"]== "POST"){
			if(empty($_POST["mobile"])){
				$mobileNotFilled = "This filed is required";
			}else{
				$mobile = test_input($_POST["mobile"]);
				if(!preg_match("/^\+998-9[0-9]-\d{3}-\d{4}$/", $mobile)){
					$mobileNotFilled = "Wrong format";
				}
			}
		}

		if($_SERVER["REQUEST_METHOD"]== "POST"){
			if(empty($_POST["creditcard"])){
				$creditcardNotFilled = "This filed is required";
			}else{
				$creditcard = test_input($_POST["creditcard"]);
				if(!preg_match("/^\d{4}-\d{4}-\d{4}-\d{4}-$/", $creditcard)){
					$creditCardNotFilled = "Wrong format";
				}
			}
		}

		if($_SERVER["REQUEST_METHOD"]== "POST"){
			if(empty($_POST["expiry"])){
				$expiryNotFilled = "This filed is required";
			}else{
				$expiry = test_input($_POST["expiry"]);
				if(!preg_match("/^(0[1-9]|1[012])\/(2[0-9])/", $expiry)){
					$expiryNotFilled = "Wrong format";
				}
			}
		}

		if($_SERVER["REQUEST_METHOD"]== "POST"){
			if(empty($_POST["salary"])){
				$salaryNotFilled = "This filed is required";
			}else{
				$salary = test_input($_POST["salary"]);
				if(!preg_match("/^\$(\d)/", $salary)){
					$salaryNotFilled = "Wrong format";
				}
			}
		}

		if($_SERVER["REQUEST_METHOD"]== "POST"){
			if(empty($_POST["website"])){
				$websiteNotFilled = "This filed is required";
			}else{
				$website = test_input($_POST["website"]);
				if(!preg_match("/https?\/\/(www\.)?(\w+)(\.\w+)/", $website)){
					$websiteNotFilled = "Wrong URL";
				}
			}
		}

		if($_SERVER["REQUEST_METHOD"]== "POST"){
			if(empty($_POST["gpa"])){
				$gpaNotFilled = "This filed is required";
			}else{
				$gpa = test_input($_POST["gpa"]);
				if(!preg_match("/(^([0-3]\.[0-9][0-9])$)|(^(4\.[0-4][0-9])$)|(^(4\.[5][0])$)/", $gpa)){
					$gpaNotFilled = "Wrong number";
				}
			}
		}
		?>

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

			<p><input type="text" name="name" placeholder="Name"> <span>Kyle Johnson</span></p> 
			<span class="error">* <?php echo $nameNotFilled;?></span> 

			<p><input type="text" name="email" placeholder="Email"> <span>kylejohnson@gmail.com</span></p>
			<span class="error">* <?php echo $emailNotFilled;?></span> 

			<p><input type="text" name="username" placeholder="Username"> <span>kjohnson</span></p>
			<span class="error">* <?php echo $usernameNotFilled;?></span> 

			<p><input type="password" name="password" placeholder="Password">
				<ul>
					<li>at least 1 Capital Letter</li>
					<li>at least 1 Lowercase Letter</li>
					<li>at least 1 digit</li>
					<li>at least 8 characters</li>
				</ul>
			</p>
			<span class="error">* <?php echo $passwordNotFilled;?></span> 

			<p><input type="password" name="confirmpassword" placeholder="Confirm Password"> <span>Confirm your password</span></p>
			<span class="error">* <?php echo $confirmpasswordNotFilled;?></span> 

			<p><input type="text" name="date" placeholder="DD/MM/YYYY"> <span>Date of Birth</span></p>
			<span class="error"><?php echo $dateNotFilled;?></span> 

			<p> <span>Choose your sex</span>
				<input type="radio" name="sex" value="male"> Male
				<input type="radio" name="sex" value="female"> Female
			</p>
			<span class="error"><?php echo $sexNotFilled;?></span> 

			<p>
				<span>Indicate your martial status</span>
				<input type="radio" name="martialstatus" value="single"> Single
				<input type="radio" name="martialstatus" value="married"> Married
				<input type="radio" name="martialstatus" value="divorced"> Divorced
			</p>
			<span class="error"><?php echo $martialstatusNotFilled;?></span> 

			<p><input type="text" name="address" placeholder="Address"> <span>21 Amir Temur Avenue</span></p>
			<span class="error">* <?php echo $addressNotFilled;?></span> 

			<p><input type="text" name="city" placeholder="City"> <span>Tashkent</span></p>
			<span class="error">* <?php echo $cityNotFilled;?></span> 

			<p><input type="text" name="zip" placeholder="Zip Code"> <span>100017</span></p>
			<span class="error">* <?php echo $zipNotFilled;?></span> 

			<p><input type="text" name="home" placeholder="Home Number"> <span>(follow the given format) +998-71-209-8894</span></p>
			<span class="error">* <?php echo $homeNotFilled;?></span> 

			<p><input type="text" name="mobile" placeholder="Mobile number"> <span>(follow the given format) +998-90-351-5161</span></p>
			<span class="error">* <?php echo $mobileNotFilled;?></span> 

			<p><input type="text" name="creditcard" placeholder="Credit Card Number"> <span>1234-5342-7645-9989</span></p>
			<span class="error">* <?php echo $creditcardNotFilled;?></span> 

			<p><input type="text" name="expiry" placeholder="Credit Card Expiry Date"> <span>07/24</span></p>
			<span class="error">* <?php echo $expiryNotFilled;?></span> 

			<p><input type="text" name="salary" placeholder="Monthly Salary"> <span>$7000.00</span></p>
			<span class="error">* <?php echo $salaryNotFilled;?></span> 

			<p><input type="text" name="website" placeholder="Your website's full URL"> <span>http://github.com</span></p>
			<span class="error">* <?php echo $websiteNotFilled;?></span> 

			<p><input type="text" name="gpa" placeholder="Overall GPA"> <span>4.3</span></p>
			<span class="error">* <?php echo $gpaNotFilled;?></span> 
		<div>
				<input type="submit" value="Register">
			
		</div>
		</form>

				<?php
				echo "<h2>THANKS FOR SUBMITTING YOUR DATA</h2>";
				echo $name;
				echo "<br>";
				echo $email;
				echo "<br>";
				echo $password;
				echo "<br>";
				echo $date;
				echo "<br>";
				echo $sex;
				echo "<br>";
				echo $martialstatus;
				echo "<br>";
				echo $address;
				echo "<br>";
				echo $city;
				echo "<br>";
				echo $zip;
				echo "<br>";
				echo $home;
				echo "<br>";
				echo $mobile;
				echo "<br>";
				echo $creditcard;
				echo "<br>";
				echo $expiry;
				echo "<br>";
				echo $salary;
				echo "<br>";
				echo $website;
				echo "<br>";
				echo $gpa;
				?>



	</body>
</html>