<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<style type="text/css">
.red{
color: red;
}
</style>
</head>
<body>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $dateofbirthErr =$degreeErr=$bloodgroupErr= "";
$name = $email = $gender = $dateofbirth = $degree =$bloodgroup= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
$nameErr = "Name is required";
} else {
$name = test_input($_POST["name"]);
}

if (empty($_POST["email"])) {
$emailErr = "Email is required";
} else {
$email = test_input($_POST["email"]);
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format";
}

if (empty($_POST["dateofbirth"])) {
$dateofbirthErr = "Cannot be Empty";
} else {
$dateofbirth = test_input($_POST["dateofbirth"]);
}

if (empty($_POST["gender"])) {
$genderErr = "At least on of them must be selected";
} else {
$gender = test_input($_POST["gender"]);
}

if (empty($_POST["degree"])) {
$degree ="";
} else {
$degree =test_input($_POST["degree"]);
}


if (empty($_POST["bloodgroup"])) {
$bloodgroup ="Must be selected";
} else {
$bloodgroup =test_input($_POST["bloodgroup"]);
}

}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

NAME<br>
<input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
EMAIL<br>
<input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
DATE OF BIRTH<br>
<input type="date" name="dateofbirth">
<span class="error">*<?php echo $dateofbirthErr;?></span>
<br><br>
GENDER<br>
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
DEGREE<br>
<input type="checkbox" id="d1" name="degree" value="SSC">SSC
<input type="checkbox" id="d2" name="degree" value="HSC">HSC
<input type="checkbox" id="d3" name="degree" value="BSc">BSc
<input type="checkbox" id="d4" name="degree" value="MSc">MSc
<br><br>
BLOOD GROUP<br>
<select name="bloodgroup">
<option value=""></option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
</select><br><br>

<input type="submit" name="submit" value="Submit">

</form>
<?php

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<?php
echo "<h1>Input :</h1>";
echo $name."<br>";
echo $email."<br>";
echo $dateofbirth."<br>";
echo $gender."<br>";
echo $degree."<br>";
echo $bloodgroup."<br>";

?>
</body>
</html>