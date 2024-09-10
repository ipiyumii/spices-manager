<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "msm traders";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['chngbtn'])) {
    $username = $_POST['uname'];
    $enteredOtp = $_POST['otp'];
    $newPassword = $_POST['pword'];


    $sql = "SELECT otp FROM otp WHERE id = 1";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $storedOtp = $row['otp'];

        if ($enteredOtp === $storedOtp) {
           
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $sql = "UPDATE useraccounts SET password = '$hashedPassword' WHERE username = '$username'";
            
            if ($conn->query($sql) === TRUE) {
                echo "Password reset successful!";
                header("Location: login.php");
                exit();
            } else {
                echo "<p style='color: white;'>Error updating password: </p>" . $conn->error;
            }
        } else {
            echo "<p style='color: white;'>Invalid OTP. Please try again.</p>";
        }
    } else {
        echo "<p style='color: white;'>Error retrieving OTP.</p>";
    }
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
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
<style>
  .input-box {
  position: relative;
}

.input-box label {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 10px;
  pointer-events: none;
  transition: all 0.3s ease;
}

.input-box input:focus ~ label,
.input-box input:valid ~ label {
  top: 10px;
  font-size: 12px;
  color: #777;
}
</style>
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
                <h2>Reset Password</h2>
                <form action="resetPassword.php" method ="post">
                    <div class="input-box">
                        <span class="icon"><i class="bi bi-lock-fill"></i></span>
                        <input type="text" id="uname" name="uname" required>
                        <label> Confirm Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" id="txtpass" name="pword"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number 
                        and one uppercase and lowercase letter, and at least 8 or more characters"  required>
                        <label> New password</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" id="txtpass" name="otp" title="Enter the OTP sent to your provided contact number"  required>
                        <label> Enter OTP</label>
                    </div>
                    
                    
                    <br>
                    <button type="submit" name="chngbtn" class="btnsubmit">Change</button>
                    <br><br>
                    <button type="reset" id="resetbtn" name="resetb" class="btnsubmit">Reset</button>
                </form>
            </div>
        </div>
      </section>

      <script src="script.js"></script>
</body>
</html>