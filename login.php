<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "msm traders";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function createAccount($username, $email, $address, $telephone, $password) {
    global $conn;
    

    $username = $conn->real_escape_string($username);
    $email = $conn->real_escape_string($email);
    $address = $conn->real_escape_string($address);
    $telephone = $conn->real_escape_string($telephone);
    $password = $conn->real_escape_string($password);
    
    $checkUsernameQuery = "SELECT * FROM useraccounts WHERE username = '$username'";
    $checkUsernameResult = $conn->query($checkUsernameQuery);
    if ($checkUsernameResult->num_rows > 0) {
        echo "<p style='color: white;'>Username already taken. Please choose a different username.</p>";
        return; 
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    
    $sql = "INSERT INTO useraccounts (username, email, address, telephone, password) VALUES ('$username', '$email', '$address', '$telephone', '$hashedPassword')";
    if ($conn->query($sql) === TRUE) {
        echo "<p style='color: white;'>Account created successfully!</p>";
    } else {
        echo "<p style='color: white;'>Error creating account: </p>" . $conn->error;
    }
}


function login($username, $password) {
    global $conn;
    
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);
    
    $sql = "SELECT * FROM useraccounts WHERE username = '$username'";
    $result = $conn->query($sql);
    
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
    
        if (password_verify($password, $row['password'])) {
            $username = $row['username'];
            $email = $row['email'];
            $address = $row['address'];
            $telephone = $row['telephone'];

            
            header("Location: myaccount.php?username=$username&email=$email&address=$address&telephone=$telephone");
            echo "<p style='color: white;'>Login successful!</p>";
            
            exit(); 
        } else {
            echo "<p style='color: white;'>Invalid username or password.</p>";
        }
    } else {
        echo "<p style='color: white;'>Invalid username or password.</p>";
    }
}


if (isset($_POST['btnregister'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];
    $password = $_POST['password'];

    createAccount($username, $email, $address, $telephone, $password);
}

if (isset($_POST['btnsubmit'])) {
    $username = $_POST['uname'];
    $password = $_POST['pword'];

   login($username, $password);
}
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
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox"> Remember me</label>
                        <a href="forgetPassword.php">Forgot password?</a>
                    </div>
                    <button type="submit" class="btnsubmit" id="btnsubmit" name ="btnsubmit">Login</button>

                    <div class="login-register">
                        <p> Don't have an account? <a href="#" class="register-link"> Register</a></p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <h2>Registration</h2>
                <form action="login.php" method="post">
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
                        <input type="password" id="password" name=" password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number 
                        and one uppercase and lowercase letter, and at least 8 or more characters"  required>
                        <label>Password</label>
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