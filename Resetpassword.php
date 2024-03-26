<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <link rel="stylesheet" href="resetpassword.css">
</head>
<body>
  <h1>Reset Password</h1>
  <p>Please enter your email address to receive a one-time password (OTP) for password reset:</p>
  
  <form action="otp.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <input type="submit"  value="Send OTP">
  </form>
</body>
</html>
