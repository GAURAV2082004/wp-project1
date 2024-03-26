<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">

    <link rel="shortcut icon" href="log.ico">
</head>

<body>
    <div class="container">
        <form autocomplete="off" method="post" action="login.php">
            <h2>Sign In</h2>
            <div class="input-group">
                <input type="text" name="name" required>
                <label>Username</label>
                <span class="line"></span>
            </div>
            <div class="input-group">
                <input type="password" name="pass" required>
                <label>Password</label>
                <span class="line"></span>
            </div>
            <div class="check">
                <label>
                    <input type="checkbox"> Remember Me
                </label>
                <a href="Resetpassword.php">Forgot Password?</a>


            </div>
            <button type="submit" name="submit">Login</button>
            <div class="signup">
                <p>Don't have an account? <a href="Signup.php">Sign Up</a></p>
            </div>
            <?php
            $host = "localhost";
            $user = "root";
            $database_name = "Signup";
            $password = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST['name'];
                $pass = $_POST['pass'];
                $conn = mysqli_connect($host, $user, $password, $database_name);

                $query = "SELECT '$username', '$password' FROM users WHERE email='$username' AND password='$pass'";

                //fetching result
                $result = mysqli_query($conn, $query);
                $user_info = mysqli_fetch_assoc($result);

                // Check if user exists and password is
                if (!$user_info) { //if user not found in the database
                    echo "<script> alert('Invalid username or password!!!')</script>";
                } else {
                    echo "<script>alert('Successfully logged in!');
                    window.location='homepage.html';
                    </script> ";
                }
                // $user_info = mysqli_fetch_array($result, MYSQLI_BOTH);
                // echo $user_info[0];
                // echo $user_info[1];
                mysqli_close($conn);
            }

            ?>
        </form>
    </div>
    <script src="logdin.js"></script>
</body>

</html>