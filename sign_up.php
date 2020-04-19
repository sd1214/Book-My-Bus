

<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="styles2.css" >
	<title>SIGN UP</title>
</head>
<body>
    <section class="banner">
         <img src="dark_background7.jpg" height="700px" width="1400px"  alt="welcome banner">
    </section>

    <div id="login_box">
         <h1>Sign Up</h1>
     <form  class="form" action='sign_up.php' method='POST'>
         <label class="notice">Please fill in the form to create an account</label>
         <br><br>
         <input type="text" name="username" id="username" placeholder="Username" required>
         <input type="text" name="number" id="number" placeholder="Mobile Number" required>
         <input type="email" name="email" id="email" placeholder="Email" required>
         <input type="password" name="password" id="password" placeholder="Password" required>
         <input type="password" name="r_password" id="r_password" placeholder="Re-enter Password" required>
         <input type="checkbox" name="remember" id="remember" value="isremember">
         <label>Remember me</label><br><br>
         <button class="signup" name="signup" type="submit" id="signup" onclick="isremember()">Sign Up</button>
         <a href="home_page.php" class="cancel">Cancel</a>
     </form>
    </div>
    <p class="text">Already a user? <a class="a" href='login.php'>Login</a></p>
</body>
</html>

<?php
    include('dbcon.php');
    // if(isset($_POST['cancel']))
    //   header('location:home_page.php');
    if(isset($_POST['signup']))
     {
         $username=$_POST['username'];
         $number=$_POST['number'];
         $email=$_POST['email'];
         $password=$_POST['password'];
         $r_password=$_POST['r_password'];
         if($password!=$r_password)
          { ?>
             <script>
             alert ('Password or Re-entered password not matched');
            //  window.open('sign_up.php','self');
            </script>
            <?php
             die;
          }
          if(!$username|| !$number|| !$email|| !$password|| !$r_password)
            die;
        $query="INSERT INTO sign_up (username,number_,email,password_,r_password)
                 VALUES ('$username','$number','$email','$password','$r_password')";
        $run=mysqli_query($con,$query);
        if($run)
        {
        ?>
        <script>
             alert ('Data added Successfully!');
             window.open('booking_page.php'); 
            //  window.open('C:\\xampp\\htdocs\\project\\booking_page.php');
        </script>
        
        <?php
        // header('location:booking_page.php');
        }
     }
?>