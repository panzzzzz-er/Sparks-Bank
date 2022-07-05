<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Customers</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>
  <body>

        <!-- Header -->
        <div class="sub-header">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-xs-12">
                <ul class="left-info">
                  <li><a href="#"><i class="fa fa-clock-o"></i>Mon-Fri 09:00-17:00</a></li>
                  <li><a href="#"><i class="fa fa-phone"></i>090-080-0760</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul class="right-icons">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <header class="">
          <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="index.html"><h2>Sparks Bank</h2></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  
                  <li class="nav-item active">
                    <a class="nav-link" href="customers.php">View Customers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="transfers.php">Transfers</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

        </header>

        <div class="main-banner header-text" id="top">
            <div class="Modern-Slider">
              <!-- Item -->
              <div class="item item-1">
                <div class="img-fill">
                    <div class="text-content">
                      <h6>view all customer</h6>
                      <h4>Our Customers</h4>
                    </div>
                </div>
              </div>
            </div>
        </div>

        <center>

        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "internship";

            $conn = mysqli_connect($servername, $username, $password, $database);
            if(!$conn){
                die("Connection not established: ".mysqli_connect_error());
            }else{

                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);
            }
        ?>

        <table class="table table-dark" style="margin-top: 30px; ">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Account No</th>
                        <th scope="col">Balance</th>

                    </tr>
                </thead>

                <style>
                    .mybtn {

                        box-shadow: 2px 2px 10px black;
                        border-radius: 30px;
                        font-weight: bold;
                        background-color: lightgreen;
                        color: green;
                    }

                    .mybtn:active {
                        background-color: green;
                        color: lightgreen;
                    }
                </style>
                <?php
                    echo "<tbody>";
                            while($row = mysqli_fetch_assoc($result)){
                            echo  '
                            <tr>
                              <td>'.$row['name'].'</td>
                              <td>'.$row['email'].'</td>
                              <td>'.$row['accno'].'</td>
                              <td>'.$row['bal'].'</td>
                              <td style="padding:10px 10px 10px 10px">

                              </td>
                            </tr>';
                        }


                        echo "</tbody>";
                ?>
        </table>
        </center>

  </body>
</html>
