
<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="styles3.css" >
	<title>Admin Login</title>
</head>
<body>
    <section class="banner">
         <img src="dark.jpg" height="700px" width="1400px"  alt="welcome banner">
    </section>

    <div id="admin_login_box">
         <h1>Admin Pannel</h1>
         <br>

     <form  class="form" action="admin.php" method="POST">
          <input type="text" name="username" id="username" placeholder="Username" required>
          <input type="password" name="password" id="password" placeholder="Password" required>
          <input type="checkbox" name="remember" id="remember" value="isremember" >
          <label>Remember me</label><br>
          <button class="admin_login" name="admin_login" type="submit" id="login" onclick="isremember()">Login</button>
         <!-- <input class="signup" type="submit" id="signup" value="Sign Up"> -->
         
     </form>
    </div>
</body>
</html>

<?php
   include('dbcon.php');
  
   if(isset($_POST['admin_login']))
   {
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $error=array();
    if(empty($username)){ array_push($error,"Username is required"); }
    if(empty($password)){ array_push($error,"Password is required"); }
    

        $query="SELECT * FROM admin where username='$username' AND 
                                            password_='$password'";
        $run=mysqli_query($con,$query);
        $row= mysqli_num_rows($run);
        if($row<1)
        {   
            ?>
            <script>
             alert ('Invalid Username and password');
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
            header('location:admin_dashboard.php');
        }

   }
?>