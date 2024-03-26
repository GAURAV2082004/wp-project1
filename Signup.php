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
    <div class="container" style="height: 482px;">
        <form autocomplete="off" method="post" action="Signup.php">
                <h2>Sign Up</h2>
                <div class="input-group">
                    <input type="text" name="name" required>
                    <label>Name</label>
                    <span class="line"></span>
                </div>
                <div class="input-group">
                    <input type="text" name="email" required>
                    <label>Email</label>
                    <span class="line"></span>
                </div>
                <div class="input-group">
                    <input type="password" name="pass" required>
                    <label>Password</label>
                    <span class="line"></span>
                </div>
                <button type="submit" name="submit">Done</button>

            </form>
    </div>
    <?php
    $host = "localhost";
    $user = "root";
    $database_name = "Signup";
    $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $conn = mysqli_connect($host, $user, $password, $database_name)or die("Could not connect to Database");
        $query = "INSERT INTO users(username,password,email) VALUES ('$name', '$pass', '$email')";
        if (!mysqli_query($conn, $query)) {
            die("Error: " . mysqli_error($conn));
        } else {
            echo "<script>alert('Successfully Signed up! Your email is your username');
        window.location = 'login.php';</script > ";
        }
        mysqli_close($conn);
    }
    ?>
</body>

</html>
<script>
      function data()
{


    var a=document.getElementById("fullName").value;
    var b=document.getElementById("username").value; 
    var c=document.getElementById("email").value;
    var d=document.getElementById("phoneNumber").value;
    var e=document.getElementById("password").value;
    var f=document.getElementById("confirmPassword").value;
    var unamePattern =/^\w{3,20}$/;
        

       if (a==""|| b==""|| c==""|| d==""|| e==""|| f=="") 
         {
           alert("please Enter all details")
               return false;
        }else if (d.length<10||d.length>10) {
              alert("Enter a valid number");
            return false;
        }else if (isNaN(d)){
              alert("please enter valid number no characters");
            return false;
        }else if (e!=f) {
              alert("password mismatched");
        } else if (!unamePattern.test(b)) {
          alert( "* No special character at the beginning or end of the username, and spaces in between");
          return false;
        }else
           {
           return true;
        }
    
} 
</script>