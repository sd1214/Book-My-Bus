<?php
    session_start();
    // if(isset($_session['uid']))
    // {
    //     header('booking_page.php');
    // }
    // else
    // {
    //     header('location:admin.php');
    // }
?>
<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="styles3.css" >
	<title>Customer login</title>
</head>
<body>
    <section class="banner">
         <img src="dark_background10.jpg" height="700px" width="1400px"  alt="welcome banner">
    </section>

    <div id="login_box">
         <h1>Customer Login</h1>
         <br>
     <form  class="form" action="login.php" method="POST" >
         <input type="email" name="email" id="email" placeholder="Email" Required>
         <input type="password" name="password" id="password" placeholder="Password" Required>
        
         <input type="checkbox" name="remember" id="remember" value="isremember">
         <label>Remember me</label><br><br>
         <button class="login" name="login" type="submit" id="login" onclick="isremember()">Login</button>
         <!-- <button class="signup" name="signup" type="submit" id="signup" >Sign Up</button> -->
     </form>
    </div>
    <p class="text">New user? <a class="a" href='sign_up.php'>Sign Up</a></p>
</body>
</html>

<?php

   include('dbcon.php');
   if(isset($_POST['login']))
   {
       $email=$_POST['email'];
       $password=$_POST['password'];
       $query="SELECT * FROM sign_up where email='$email' AND 
       password_='$password'";
       $run=mysqli_query($con,$query);

   
       $row= mysqli_num_rows($run);
        if($row<1)
        {   
            ?>
            <script>
             alert ('Invalid Email_ID and password');
            </script>
            <?php
            die;
        }
        else
        {
            $data=mysqli_fetch_assoc($run);
            $id=$data['id'];
            // session_start();
            $_session['uid']=$id;
            header('location:booking_page.php');
        }
   }
?>