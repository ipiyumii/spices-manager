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


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $inquiry = $_POST['inquiry'];

   
    
    if (empty($name) || empty($email) || empty($telephone) || empty($inquiry)) {
     
      echo "Please fill in all the fields.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      
      echo "Please enter a valid email address.";
  } elseif (!preg_match("/^\d{10}$/", $telephone)) {
     
      echo "Please enter a valid telephone number.";
  } else {
      
      $currentDate = date('Y-m-d');


      $sql = "INSERT INTO inquiries (name, email, telephone, inquiry,date) 
              VALUES ('$name', '$email', '$telephone', '$inquiry', '$currentDate')";
      $result = mysqli_query($conn, $sql);

    if ($result) {
        
        echo "Inquiry submitted successfully.";
    } else {
      
        echo "Error: " . mysqli_error($conn);
    }
}
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
  <link rel="stylesheet" href="contactstyle.css">
  <link rel="stylesheet" href="homestyle.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
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
              <a class="nav-link " href="login.php">Login</a>
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

  <section>
    <div class="container about-contact-container">
    <div class="row formrow">
        <div class="col-md-7">
            <h4>Get In Touch..</h4>
            <form action="contact.php" method="POST">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
              </div>
              <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Enter your telephone number" required>
              </div>
              <div class="mb-3">
                <label for="inquiry" class="form-label">Supplier/Customer inquiry</label>
                <textarea class="form-control" id="inquiry" name="inquiry" rows="3" placeholder="Type your message here..." required></textarea>
              </div>
              <button type="submit" class="btn btn-secondary btncontact">Submit</button>
            </form>
        </div>
        <div class="col-md-5">
            <h4>Contact us</h4><hr>
            <div class="mt-5">
                <div class="d-flex">
                    <i class="bi bi-geo-alt-fill"></i>
                    <p>Address:</p>
                    <p>No 10, Kandy Rd, Mawathagama</p>
                </div> <hr>
                <div class="d-flex">
                    <i class="bi bi-telephone-fill"></i>
                    <p>Tele:</p>
                    <p> 0773598598</p>
                </div> <hr>
                <div class="d-flex">
                    <i class="bi bi-whatsapp"></i>
                    <p>Whatsapp:</p>
                    <p>0773598598</p>
                </div> <hr>
                <div class="d-flex">
                    <i class="bi bi-envelope-fill"></i>
                    <p>Email:</P>
                    <p>hidhayathulla@gmail.com</p>
                </div> <hr>
            </div>
        </div>
    </div>
    </div>
 </section>
</body>
</html>