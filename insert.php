<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "course_registration";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("❌ Connection failed: " . $conn->connect_error);
}
function test_input($data) {
  return htmlspecialchars(stripslashes(trim($data)));
}


$name = test_input($_POST["name"]);
$email = test_input($_POST["email"]);
$password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Secure hash
$website = test_input($_POST["website"]);
$register = test_input($_POST["register"]);
$comment = test_input($_POST["comment"]);
$gender = test_input($_POST["gender"]);


$sql = "INSERT INTO users (name, email, password, website, register_course, comment, gender)
        VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $name, $email, $password, $website, $register, $comment, $gender);


if ($stmt->execute()) {
  echo "<h3>✅ Registration Successful!</h3>";
} else {
  echo "❌ Error: " . $stmt->error;
}


$stmt->close();
$conn->close();
?>
