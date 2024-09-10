<!DOCTYPE html>
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
    <link rel="stylesheet" href="dashboardstyle.css">
    <link rel="stylesheet" href="salesStyle.css">
    <!-- <link rel="stylesheet" href="myaccountstyle.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface|Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>

<body>
    <input type="checkbox" name="" id="menu">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="fa fa-user-o"> </span> Admin Dashboard</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href="sales.php" ><span class="bi bi-receipt-cutoff"></span><span>Sales</span></a></li>
                <li><a href="stock.php"><span class="bi bi-box2-heart"></span><span>Stock</span></a></li>
                <li><a href="stock.php" ><span class="bi bi-newspaper"></span><span>Reports</span></a></li>
                <li><a href="enquiries.php" class="active"><span class="bi bi-receipt-cutoff"></span><span>Enquiries</span></a></li>


            </ul>
        </div>
    </div>

    <div class="content">
        <header>
            <p><label for="menu"> <span class = "fa fa-bars"></span></label>
            <span class="my-account">Dashboard</span></p>

            <!-- <div id="dropdown" class="user-wrapp">
                <div>
                    <div class="iconsContainer">
                            <div class="icons"> 
                            <a href="myAccount.php"> <div class="icon"><i class="bi bi-person-circle"></i></div> </a> 
                            <a href="index.php"> <div class="icon"><i class="bi bi-house-fill"></i></div> </a> 
                            </div>
                    </div>
                </div>
            </div> -->
        </header>
    </div>

    <div class="main-content">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>User name</th>
                    <th>Address</th>
                    <th>Email</th>
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <td>Row 1 Data 1</td>
                        <td>Row 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>Row 2 Data 1</td>
                        <td>Row 2 Data 2</td>
                    </tr>
                </tbody>
        </table>
    </div>
</body>
</html>