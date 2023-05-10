<!DOCTYPE html>
<?php
//     date_default_timezone_set('America/New_York');

// if(isset($_POST['btncart']))
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
// }

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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="spiceshopstyle.css">
  <link rel="stylesheet" href="homestyle.css">
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

    <section id="spiceshp-products">
        <div class="row">
            <div class="col-12"> <h1 class="heading text-center">Our <span class="col-12">Products</span> </h1> </div>
        </div>
        <div class="row">
                    <div class="box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                        <img src="images/spiceShop/cinnamon.jpeg" class="imgSpiceShop mx-auto d-block img-fluid" alt="cinnamon">
                        <h3>Cinnamon</h3>
                        <div class="price">250g - Rs.500/=</div>
                        <div class="cart">
                            <a class="btn btn-outline-dark" href="#" name = "btncart" role="button">Add to cart</a>
                        </div>
                    </div>

                    <div class="box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                        <img src="images/spiceShop/cloves.webp" class="imgSpiceShop mx-auto d-block img-fluid" alt="cloves">
                        <h3>Cloves</h3>
                        <div class="price">250g - Rs.500/=</div>
                        <div class="cart">
                            <a class="btn btn-outline-dark" href="#" role="button">Add to cart</a>
                        </div>
                    </div>

                    <div class="box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                        <img src="images/spiceShop/chillie.jpeg" class="imgSpiceShop mx-auto d-block img-fluid" alt="chillie">
                        <h3>Dried Chillie</h3>
                        <div class="price">250g - Rs.500/=</div>
                        <div class="cart">
                            <a class="btn btn-outline-dark" href="#" role="button">Add to cart</a>
                        </div>
                    </div>

                    <div class="box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                        <img src="images/spiceShop/black peper.webp" class="imgSpiceShop mx-auto d-block img-fluid" alt="black peper">
                        <h3>Black Peper</h3>
                        <div class="price">250g - Rs.500/=</div>
                        <div class="cart">
                            <a class="btn btn-outline-dark" href="#" role="button">Add to cart</a>
                        </div>
                    </div>


                    <div class="box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                        <img src="images/spiceShop/nutmeg.jpeg" class="imgSpiceShop mx-auto d-block img-fluid" alt="nutmeg">
                        <h3>Nutmeg</h3>
                        <div class="price">250g - Rs.500/=</div>
                        <div class="cart">
                            <a class="btn  btn-outline-dark" href="#" role="button">Add to cart</a>
                        </div>
                    </div>

                    <div class="box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                        <img src="images/spiceShop/termeric.webp" class="imgSpiceShop mx-auto d-block img-fluid" alt="termeric">
                        <h3>Termeric</h3>
                        <div class="price">250g - Rs.500/=</div>
                        <div class="cart">
                            <a class="btn btn-outline-dark" href="#" role="button">Add to cart</a>
                        </div>
                    </div>
             
                    <div class="box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                        <img src="images/spiceShop/whole-cocoa-nut-chocolate-snack-theobroma-cacao-235584677.jpg" class="imgSpiceShop mx-auto d-block img-fluid" alt="cocova">
                        <h3>Cocova</h3>
                        <div class="price">250g - Rs.500/=</div>
                        <div class="cart">
                            <a class="btn btn-outline-dark" href="#" role="button">Add to cart</a>
                        </div>
                    </div>

                    <div class="box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                        <img src="images/spiceShop/cardamom2.jpg" class="imgSpiceShop mx-auto d-block img-fluid" alt="cardamom">
                        <h3>Cardamom</h3>
                        <div class="price">250g - Rs.500/=</div>
                        <div class="cart">
                            <a class="btn btn-outline-dark" href="#" role="button">Add to cart</a>
                        </div>
                    </div>
                    <div class="box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                        <img src="images/spiceShop/cariander.jpg" class="imgSpiceShop mx-auto d-block img-fluid" alt="cariander">
                        <h3>Koththamalli</h3>
                        <div class="price">250g - Rs.500/=</div>
                        <div class="cart">
                            <a class="btn btn-outline-dark" href="#" role="button">Add to cart</a>
                        </div>
                    </div>
                    <div class="box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                        <img src="images/spiceShop/mace.webp" class="imgSpiceShop mx-auto d-block img-fluid" alt="mace">
                        <h3>Mace</h3>
                        <div class="price">250g - Rs.500/=</div>
                        <div class="cart">
                            <a class="btn btn-outline-dark" href="#" role="button">Add to cart</a>
                        </div>
                    </div>
                    <div class="box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                        <img src="images/spiceShop/mustard-seeds.jpg" class="imgSpiceShop mx-auto d-block img-fluid" alt="mustard">
                        <h3>Mustard Seeds</h3>
                        <div class="price">250g - Rs.500/=</div>
                        <div class="cart">
                            <a class="btn btn-outline-dark" href="#" role="button">Add to cart</a>
                        </div>
                    </div>
                    <div class="box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                        <img src="images/spiceShop/white peper.jpg" class="imgSpiceShop mx-auto d-block img-fluid" alt="white peper">
                        <h3>White Peper</h3>
                        <div class="price">250g - Rs.500/=</div>
                        <div class="cart">
                            <a class="btn btn-outline-dark" href="#" role="button">Add to cart</a>
                        </div>
                    </div>
                    <div class="box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                        <img src="images/spiceShop/fenugreek.jpg" class="imgSpiceShop mx-auto d-block img-fluid" alt="fenugreek">
                        <h3>Fenugreek</h3>
                        <div class="price">250g - Rs.500/=</div>
                        <div class="cart">
                            <a class="btn btn-outline-dark" href="#" role="button">Add to cart</a>
                        </div>
                    </div>
                    <div class="box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                        <img src="images/spiceShop/cumin.jpg" class="imgSpiceShop mx-auto d-block img-fluid" alt="cumin">
                        <h3>Cumin</h3>
                        <div class="price">250g - Rs.500/=</div>
                        <div class="cart">
                            <a class="btn btn-outline-dark" href="#" role="button">Add to cart</a>
                        </div>
                    </div>
                    <div class="box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                        <img src="images/spiceShop/top-view-red-chilly-powder-260nw-2113542206.webp" class="imgSpiceShop mx-auto d-block img-fluid" alt="chillie powder">
                        <h3>Red Chillie Powder</h3>
                        <div class="price">250g - Rs.500/=</div>
                        <div class="cart">
                            <a class="btn btn-outline-dark" href="#" role="button">Add to cart</a>
                        </div>
                    </div>
                    <div class="box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                        <img src="images/spiceShop/garlic powder.jpg" class="imgSpiceShop mx-auto d-block img-fluid" alt="garlic powder">
                        <h3>Garlic Powder</h3>
                        <div class="price">250g - Rs.500/=</div>
                        <div class="cart">
                            <a class="btn btn-outline-dark" href="#" role="button">Add to cart</a>
                        </div>
                    </div>
                    <div class="box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                        <img src="images/spiceShop/cinnamon.jpeg" class="imgSpiceShop mx-auto d-block img-fluid" alt="cinnamon">
                        <h3>Cinnamon</h3>
                        <div class="price">250g - Rs.500/=</div>
                        <div class="cart">
                            <a class="btn btn-outline-dark" href="#" role="button">Add to cart</a>
                        </div>
                    </div>
                    <div class="box col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                        <img src="images/spiceShop/cinnamon.jpeg" class="imgSpiceShop mx-auto d-block img-fluid" alt="cinnamon">
                        <h3>Cinnamon</h3>
                        <div class="price">250g - Rs.500/=</div>
                        <div class="cart">
                            <a class="btn btn-outline-dark" href="#" role="button">Add to cart</a>
                        </div>
                    </div>

            </div>    
        </div>    
    </section>
</body>
</html>