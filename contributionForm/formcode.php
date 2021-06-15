<?php 

include 'DbConnection1.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	//$name = $_POST['name']; // Get Name from form
	//$email = $_POST['email']; // Get Email from form
	//$comment = $_POST['comment']; // Get Comment from form
   
    $userid=$_POST['userid'];
    $passid=$_POST['passid'];
    $username=$_POST['username'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $country=$_POST['country'];
    $zip=$_POST['zip'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $point=$_POST['point'];
    $english=$_POST['english'];
    $descr=$_POST['descr'];

	$sql = "INSERT INTO registrationtlb (userid,passid, username,phone,address,country,zip,email,gender,point,english,descr)
			VALUES ('$userid', '$passid', '$username','$phone','$address','$country','$zip','$email','$gender','$point','$english','$descr')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Information Stored Successfully ')</script>";
	} else {
		echo "<script>alert('info does not add.')</script>";
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   
<meta charset="utf-8">
<title>Form user Contribution</title>
<meta name="keywords" content="example, JavaScript Form Validation, Sample registration form" />
<meta name="description" content="This document is an example of JavaScript Form Validation using a sample registration form. " />
<link rel='stylesheet' href='form.css' type='text/css' />
<script type="text/javascript" src="validation.js"></script>

</head>
<body onload="document.registration.userid.focus();">
<h1>Contribution Form !!!!</h1>
<p>
    NOTE:-Please enter valide information........<br> when your data get 
    evaluated then you will gate massage on your entered Email id 
</p>
  <p>  Use tab keys to move from one input field to the next.</p>
<form name='registration' onSubmit="return formValidation();" action="" method="POST">
<ul>
<li><label for="userid"><b style="color: red;">*</b>  User id:</label></li>
<li><input type="text" name="userid"  size="12" /></li>

<li><label for="passid"><b style="color: red;">*</b>  Password:</label></li>
<li><input type="password" name="passid" size="12" /></li>

<li><label for="username"><b style="color: red;">*</b> Name:</label></li>
<li><input type="text" name="username" size="50"  /></li>

<li><label for="pnone">Phone_No:</label></li>
<li><input type="text" name="phone" size="50" placeholder="Optional" /></li>

<li><label for="address"><b style="color: red;">*</b> Address:</label></li>
<li><input type="text" name="address" size="50" placeholder="home_no,city,dist,state" /></li>

<li><label for="country"><b style="color: red;">*</b> Country:</label></li>
<li><select name="country">
<option selected="" value="Default">(Please select a country)</option>
<option value="Australia">Australia</option>
<option value="canada">Canada</option>
<option value="India">India</option>
<option value="Russia">Russia</option>
<option value="USA">USA</option>
<option value="Other">Other</option>
</select></li>

<li><label for="zip"><b style="color: red;">*</b> ZIP Code:</label></li>
<li><input type="text" name="zip" /></li>

<li><label for="email"><b style="color: red;">*</b> Email:</label></li>
<li><input type="text" name="email" size="50" /></li>

<li><label id="gender"><b style="color: red;">*</b> Gender:</label></li>
<li><input type="radio" name="gender" value="Male" /><span>Male</span></li>
<li><input type="radio" name="gender" value="Female" /><span>Female</span></li>

<li><label for="point"><b style="color: red;">*</b> Point:</label></li>
<li><select name="point">
<option selected="" value="Default">(select a point)</option>
<option value="Let's Friendly with covid-19/histroy">Let's Friendly with covid-19/histroy</option>
<option value="Let's Friendly with covid-19/symptom">Let's Friendly with covid-19/symptom</option>
<option value="Let's Friendly with covid-19/precution">Let's Friendly with covid-19/precution</option>
<option value="Impact on Education">Impact on Education</option>
<option value="Impact On Industry"> Impact On Industry</option>
<option value="Impact On Farmers">Impact On Farmers</option>
<option value="Impact On Science and Technology"> Impact On Science and Technology</option>
<option value="Impact On Indian Economy"> Impact On Indian Economy</option>
<option value="Impact On Security"> Impact On Security</option>
<option value="Impact On Transportation"> Impact On Transportation</option>
<option value="Impact On Different Contries"> Impact On Different Contries</option>
<option value=" Impact On Environment & Tourism">  Impact On Environment & Tourism</option>
</select></li>

<li><label><b style="color: red;">*</b> Language:</label></li>
<li><input type="checkbox" name="english" value="en" checked /><span>English</span></li>
<li><input type="checkbox" name="english" value="noen" /><span>Non English</span></li>

<li><label for="desc"><b style="color: red;">*</b> Add Point:</label></li>
<li><textarea name="descr" id="desc" placeholder="Write here your point description which you want to add"></textarea></li>
<li><input type="submit" name="submit" value="Submit" /></li>
</ul>
</form>

</body>
</html>
