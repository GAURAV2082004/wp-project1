<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <link rel="stylesheet" href="Forgetpassword.css">
</head>
<body>
  <h1>Forgot Password</h1>
  <p>Please enter your email address to reset your password:</p>
  
  <form action="Resetpassword.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <input type="submit" value="Reset Password">
  </form>
</body>
</html>
