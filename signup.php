<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="login.css">
  <title>WeTravel</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  </head>
  <body>
    
    <div class="center">
      <h1>Log in</h1>
      <form action ="signup.php" method="post">
        <div class="txt_field">
          <input type="text" name="Username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
            <input type="text" name="Email"required>
            <span></span>
            <label>Email</label>
          </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <button type="submit" value="Login"> Send</button>
        <div class="signup_link">
          Not a member? <a href="#">Signup</a>
        </div>
      </form>
    </div>
    <script>
      function validateForm(event) {
        event.preventDefault(); 
       
        var username = document.querySelector('input[type="text"]').value;
        var password = document.querySelector('input[type="password"]').value;
  
        
        if (username.trim() === '' || password.trim() === '') {
          alert('Ju lutem plotësoni të gjitha fushat!');
        } else {
         
          alert('Fushat e plotësuar! Mund të vazhdoni.');
        }
        
      }
  
      
      document.querySelector('form').addEventListener('submit', validateForm);
    </script>
  </body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['password'];

    
    $username = trim($username);
    $email = trim($email);
    $password = trim($password);
       
    

    
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
    $conn = mysqli_connect('localhost', 'root', '', 'wetravel');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
    $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";

    if (mysqli_query($conn, $sql)) {
        header("Location: /projekti/index.html");
        mysqli_close($conn);
        die();
    } else {
        header("Location: /projekti/signup.php?errCode=DatabaseError");
        mysqli_close($conn);
        die();
    }
}

?>
