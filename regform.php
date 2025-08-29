<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width,
initial-scale=1.0">
     <title>Student Registration Form</title>
</head>
<body>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve from data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $course =  $_POST["course"];
    $phno = $_POST["phno"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];

    // Display submitted information
    echo "<h2>Registration Successful</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</P>";
    echo "<p>Course: $course</p>";
    echo "<p>Phone Number: $phno</p>";
    echo "<p>Address: $address</p>";
      echo "<p>Gender: $gender</p>";
}else {
   // Display the registration form
   echo "<h2>Student Registration Form</h2>";
   echo "<form method='post' action='" .
htmlspecialchars($_SERVER["PHP_SELF"])  . "'>";
   echo "  <label for='name'>Name:</label>";
   echo "  <input type='text' name='name'
required><br><br>";

   echo "  <label for='email'>Email:</label>";
   echo "  <input type='email' name='email'
required><br><br>";

   echo "  <label for='course'>Course:</label>";
   echo "  <input type='text' name='course'
required><br><br>";

   echo "  <label for='phno'>Phone Number:</label>";
   echo "  <input type='phno' name='phno'
required><br><br>";
   echo "  <label for='address'>Address:</label>";
   echo "  <input type='address' name='address'
required><br><br>";

   echo " <label>Gender:</label>";
   echo " <input type='radio' name='gender' value='male'
required> Male";
   echo "<input type='radio' name='gender' value='female'
required> Female<br><br>";

   echo "  <input type='submit' value='Submit'>";

   echo "</form>";
}
?>

</body>
</html>