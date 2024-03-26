<?php
// Assuming you have a function to generate OTP
function generateOTP() {
  // Generate a random 6-digit OTP
  return mt_rand(100000, 999999);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate the email address
  $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
  if (!$email) {
    // Invalid email format, you can handle this error accordingly
    echo "Invalid email format";
    exit;
  }

  // Generate OTP
  $otp = generateOTP();

  // Send OTP to the user's email address
  $to = "$email";
  $subject = "Reset Password OTP";
  $message = "Your OTP for password reset is: " . $otp;

  // You can use a library like PHPMailer or the built-in mail() function to send the email
  // Here's an example using mail() function (Note: This might not work on all servers)
  $headers = "From: mithildevkar0001@gmail.com"; // Replace with your email address
  if (mail($to, $subject, $message)) {
    echo "OTP sent successfully to your email address.";
  } else {
    echo "Failed to send OTP. Please try again later.";
  }
} else {
  // If someone tries to access this file directly without POST data
  echo "Invalid request";
}
?>
