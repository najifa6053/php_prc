<!DOCTYPE HTML>
<html>
<head>
  <style>.error {color: #FF0000;}</style>
</head>
<body>


<h2>Course Registration Form</h2>
<p><span class="error">* required field</span></p>


<form method="post" action="insert.php">
  Name: <input type="text" name="name" required><br><br>
  Email: <input type="text" name="email" required><br><br>
  Password: <input type="password" name="password" required><br><br>
  Website: <input type="text" name="website"><br><br>
  Register Course:
  <select name="register">
    <option value="">Select Course</option>
    <option>HTML</option>
    <option>CSS</option>
    <option>JAVA</option>
    <option>PHP</option>
  </select><br><br>
  Comment: <textarea name="comment" rows="5" cols="40" required></textarea><br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other<br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>
