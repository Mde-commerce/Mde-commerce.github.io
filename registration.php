<!DOCTYPE html>
<?php
    @include 'db.php';?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['firstname'])) {
        // removes backslashes
        $firstname = stripslashes($_REQUEST['firstname']);
        $firstname = mysqli_real_escape_string($con, $firstname);
         $lastname = stripslashes($_REQUEST['lastname']);
        //escapes special characters in a string
        $lastname = mysqli_real_escape_string($con, $lastname);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $gender  = stripslashes($_REQUEST['gender']);
        $gender   = mysqli_real_escape_string($con, $gender);
        $city    = stripslashes($_REQUEST['city']);
        $city    = mysqli_real_escape_string($con, $city);
        $dob   = stripslashes($_REQUEST['dob']);
        $dob    = mysqli_real_escape_string($con, $dob);
        
        $query    = "INSERT into `md` (firstname, lastname, email, password, gender, city, dob)
                     VALUES ('$firstname','$lastname','$email','$password', '$gender','$city', '$dob')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="firstname" placeholder="firstname" required />
          <input type="text" class="login-input" name="lastname" placeholder="lastname" required />
        <input type="text" class="login-input" name="email" placeholder="Email" required/>
        <input type="password" class="login-input" name="password" placeholder="Password"required/>
          <input type="text" class="login-input" name="gender" placeholder="gender" required />
            <input type="text" class="login-input" name="city" placeholder="city" required />
              <input type="text" class="login-input" name="dob" placeholder="dob" required />
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
<?php
    }
?>
</body>
</html>
