<?php
session_start();


$username = $_GET['username'] ?? '';
$email = $_GET['email'] ?? '';
$address = $_GET['address'] ?? '';
$telephone = $_GET['telephone'] ?? '';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSM Traders</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="accountstyle.css">
    <link rel="stylesheet" href="dashboardstyle.css">
    
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface|Poppins">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
<input type="checkbox" name="" id="menu">
<div class="sidebar">
	<div class="sidebar-brand">
		<h2><span class="fa fa-user-o"> </span> MSM Traders</h2>
	</div>

	<div class="sidebar-menu">
		<ul>
			<li><a href="#" class="active"><span class="bi bi-person-circle"></span><span>My Account</span></a></li>
			<li><a href="cart.php"><span class="bi bi-cart-fill"></span><span>My cart</span></a></li>
			<li><a href="myorders.php"><span class="bi bi-box2-heart"></span><span>My orders</span></a></li>
            <li><a href="spiceShop.php"><span class="bi bi-shop-window"></span><span>Spice Shop</span></a></li>
			<li><a href="notification.php"><span class="bi bi-bell-fill"></span><span>Notification</span></a></li>
		</ul>
	</div>
</div>

    <div class="content">
        <header>
            <p><label for="menu"> <span class = "fa fa-bars"></span></label>
            <span class="my-account"> My Account</span></p>

            <div id="dropdown" class="user-wrapp">
                <div>
                    <div class="iconsContainer">
                            <div class="icons"> 
                            <a href="myAccount.php"> <div class="icon"><i class="bi bi-person-circle"></i></div> </a> 
                            <a href="index.php"> <div class="icon"><i class="bi bi-house-fill"></i></div> </a> 
                            </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <div class="main-content" id="main-content">
        <div class="icon">
            <span><i class="bi bi-person-circle"></i> <h2></h2></span>
        </div>
     
        <div class="details" id="details">
        <form action="myaccount.php" method="POST">
            <label for=""> Username</label> <br>
            <input type="text" name="name" id="name" value="<?php echo $username; ?>"> <br> <br> 

            <label for="">Email</label> <br>
            <input type="text" name="email" id="email" value="<?php echo $email; ?>"> <br> <br>

            <label for="">Address</label> <br>
            <input type="text" name="address" id="address" value="<?php echo $address; ?>"> <br> <br>

            <label for="">Telephone</label> <br>
            <input type="text" name="tele" id="tele" value="<?php echo $telephone; ?>">

            
        </form>
    </div>
    </div>
</body>
</html>