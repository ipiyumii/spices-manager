<!DOCTYPE html>
<?php
  // date_default_timezone_set('America/New_York');

  // if(isset($_POST['btnregister']))
  // {
  //     $hostname = "localhost";
  //     $username = "root";
  //     $password = "";
  //     $databaseName = "spices_db";

  //     $username = $_POST["username"];
  //     $email = $_POST["email"];
  //     $address = $_POST["address"];
  //     $telephone = $_POST["telephone"];
  //     $upassword = $_POST["password"];

  //     $connect1 = mysqli_connect($hostname, $username, $password, $databaseName);

  //     if ($connect1->connect_error) 
  //         {
  //           die("Connection failed: " . $connect1->connect_error);
  //         }

  //         $query1 = "INSERT INTO `user_details`(`user_name`, `email`,'address','telephone','password') VALUES ('$username','$email',' $address',' $telephone',' $upassword')";

  //         if ($connect1->query($query1) === TRUE) 
  //         {
  //           echo '<script>alert("Your account successfully created... Now you can log!!!")</script>';
  //           echo'<script>window.location.href = index.php</script>'
  //           // echo '<script>window.location.href = "LoginPage.php"</script>';
  //         } 
  //         else 
  //         {
  //           die("Error: " . $query1 . "<br>" . $connect1->error);
  //         }

  //     $result1 = mysqli_query($connect1,$query1);

  //     mysqli_close($connect1);
  // }

  // if(isset($_POST['btnsubmit']))
  // {
  //   $hostname = "localhost";
  //   $username = "root";
  //   $password = "";
  //   $databaseName = "spices_db";

  //   $uname = $_POST["uname"];
  //   $upword = $_POST["pword"];

  //   $connect2 = mysqli_connect($hostname, $username, $password, $databaseName);

  //   $query2 = "SELECT 'user_name','password' FROM 'user_details' WHERE  user_name = '$uname' AND password = '$upword'";

  //   $result2 = mysqli_query($connect2,$query2);

  //   $rows = mysqli_num_rows($result2);

  //   if($rows > 0){
  //     $_SESSION['uname'] = $uname;
  //     echo'<script> alert("login successful!!")</script>';
  //     echo '<script>window.location.href = index.php</script>'
  //     exit();
  //   }
  //   else{
  //     echo'<script> alert("login unsuccessful!! please check your user name or password")</script>';
  //     echo'<script>window.location.href = index.php</script>'
  //     exit();
  //   }
  //  }
  
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSM Traders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="homestyle.css">
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body id="login">
    <section id="nav-bar"> 
        <nav class="navbar navbar-expand-lg navbar-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="images/logo-no-background.png" alt="logo"></a>
            
    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
            aria-label="Toggle navigation">
              <i class="navbar-toggler-icon" ></i>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto font">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="About.php">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#">Login</a>
                </li>
                <li class="nav-item">        
                <div class="iconsContainer">
                  <div class="icons">
                    <a href="cart.php"> <div class="icon"><i class="bi bi-cart4"></i></div> </a>  
                    <a href="myAccount.php"> <div class="icon"><i class="bi bi-person-circle"></i></div> </a> 
                  </div>
                </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </section>

      <section id="loginfrom">
        <div class="wrapper">
            <div class="form-box login">
                <h2>Login</h2>
                <form action="login.php" method ="post">
                    <div class="input-box">
                        <span class="icon"><i class="bi bi-person-fill"></i></span>
                        <input type="text" id="uname" name="uname" required>
                        <label>User Name</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" id="pword" name="pword" required>
                        <label>password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox"> Remember me</label>
                        <a href="#">Forgot password?</a>
                    </div>
                    <button type="submit" class="btnsubmit" id="btnsubmit" name ="btnsubmit">Login</button>

                    <div class="login-register">
                        <p> Don't have an account? <a href="#" class="register-link"> Register</a></p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <h2>Registration</h2>
                <form action="login.php" method="psot">
                    <div class="input-box">
                        <span class="icon"><i class="bi bi-person-fill"></i></span>
                        <input type="text" id="username" name="username" required>
                        <label>User Name</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="bi bi-envelope-fill"></i></span>
                        <input type="email" id="email" name="email" required>
                        <label>E-mail</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="bi bi-geo-alt-fill"></i></span>
                        <input type="text" id="address" name="address" required>
                        <label>Address</label>
                    </div>
                    <div class="input-box"> 
                        <span class="icon"><i class="bi bi-telephone-fill"></i></span>
                        <input type="text" id="telephone" name="telephone" required>
                        <label>Telephone</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" id="password" name=" password" required>
                        <label>password</label>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox"> Agree to the terms and conditions</label>
                    </div>
                    <button type="submit" class="btnsubmit" id ="btnregister" name="btnregister">Register</button>

                    <div class="login-register">
                        <p> Already have an account? <a href="#" class="login-link"> Login</a></p>
                    </div>
                </form>
            </div>
        </div>
      </section>

      <script src="script.js"></script>
</body>
</html>