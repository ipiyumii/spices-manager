<!DOCTYPE html>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "msm traders";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}                                         

if (isset($_POST['vrfybtn'])) 
    $username = $_POST['uname'];

    
    $sql = "SELECT * FROM useraccounts WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
  
      header("Location: resetPassword.php?username=$username");
      exit();
  } else {
      echo "<p style='color: white;'>Username does not exist in the database!</p>";
  }


$conn->close();
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
    <link rel="stylesheet" href="forgetPasswordStyle.css">
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
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
                <h2>Forget Password?</h2>
                <form action="forgetPassword.php" method ="post">
                    <div class="input-box">
                        <span class="icon"><i class="bi bi-person-fill"></i></span>
                        <input type="text" id="uname" name="uname" required>
                        <label>User Name</label>
                    </div>

                    <button type="submit" name="vrfybtn" class="btnsubmit">Reset password</button>
                    <br><br>
	                
                </form>
            </div>
        </div>
      </section>

    <script src="script.js"></script>
</body>
</html>