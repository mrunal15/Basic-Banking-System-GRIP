<?php
include("connect.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Kanit:ital@1&family=Oswald:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="main.css" media="all">

    <style>
    body {
        background-image: url("images/view.jpg");

    }
    </style>
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">GRIP BANK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="allcus.php">View all</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="transfer.html">Transfer money</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="history.php">Transaction history</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <?php

include('connect.php');


$acc = $_GET['acc'];

$query='select * from banktb where acc="'.$acc.'"';
$query_run= mysqli_query($conn,$query);


while($res = mysqli_fetch_array($query_run)){
?>



    <div class="card " style="max-width: 840px;">
        <!-- <div class="row g-5"> -->
        <!-- <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div> -->
        <!-- <div class="col-md-8"> -->
        <div class="card-body">
            <h5 class="card-title">ACCOUNT NUMBER <?php echo $res['acc'];  ?></h5>
            <p class="card-text">
                NAME: <?php echo $res['name'];  ?><br>
                EMAIL: <?php echo $res['email'];  ?> <br>
                BALANCE: <?php echo $res['balance'];  ?>
            </p>
            <p class="card-text">ACCOUNT TYPE : <?php echo $res['actyp'];  ?></p>
        </div>
        <!-- </div> -->
        <!-- </div> -->
    </div>

    <?php 
}

mysqli_error($conn);
?>


    <footer class="container-fluid fixed-bottom " id="myfooter">
        <p class="float-end"><a class="footer-data" href="index.php">Back to top</a></p>
        <p>Copyright © 2021GRIP Bank <a class="footer-data" href="#">Privacy</a> · <a class="footer-data"
                href="#">Terms</a></p>
    </footer>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    $(document).ready(function() {
        $('#tabledata').DataTable();
    })
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->




</body>

</html>