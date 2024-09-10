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
    <link rel="stylesheet" href="stockStyle.css">
    <!-- <link rel="stylesheet" href="myaccountstyle.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface|Poppins">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script> 

    <!-- ---------STYLE SHEET-------- -->
    <style>
            .main-content{
            margin-left: 400px;
            /* margin-top: 100px; */
            padding: 10%;
            }
            #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            /* width: 100%; */
            }

            #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: 	#808080;
            color: white;
            }
        </style>
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
                <li><a href="#" class="active"><span class="bi bi-box2-heart"></span><span>Stock</span></a></li>
                <li><a href="reports.php"><span class="bi bi-newspaper"></span><span>Reports</span></a></li>
                <li><a href="enquiries.php"><span class="bi bi-chat-left-dots-fill"></span><span>Enquiries</span></a></li>


                
            </ul>
        </div>
    </div>

    <div class="content">
            <header>
                <p><label for="menu"> <span class = "fa fa-bars"></span></label>
                <span class="my-account"> Dashboard</span></p>
            </header>
        </div>
 
        <div class="main-content">
        <table id="customers">
            <tr>
                <th>Item Name</th>
                <th>Quantity Available</th>
              
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
            </tr>
            <tr>
                <td>Berglunds snabbköp</td>
                <td>Christina Berglund</td>
            </tr>
            <tr>
                <td>Centro comercial Moctezuma</td>
                <td>Francisco Chang</td>
            </tr>
            <tr>
                <td>Ernst Handel</td>
                <td>Roland Mendel</td>
            </tr>
            <tr>
                <td>Island Trading</td>
                <td>Helen Bennett</td>
            </tr>
            <tr>
                <td>Königlich Essen</td>
                <td>Philip Cramer</td>
            </tr>
            <tr>
                <td>Laughing Bacchus Winecellars</td>
                <td>Yoshi Tannamuri</td>
            </tr>
            <tr>
                <td>Magazzini Alimentari Riuniti</td>
                <td>Giovanni Rovelli</td>
            </tr>
            <tr>
                <td>North/South</td>
                <td>Simon Crowther</td>
            </tr>
            <tr>
                <td>Paris spécialités</td>
                <td>Marie Bertrand</td>
            </tr>
    </table>
    </div>
</body>
</html>