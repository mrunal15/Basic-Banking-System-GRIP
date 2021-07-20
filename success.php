<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css" media="all">
    <title>Document</title>
    <style>
    .card-success {
        background-image: url("images/transaction.png");
        width: 30vw;
        margin: auto;
        margin-top: 100px;
        height: 50vh;
        text-align: center;
        background-color: #979e9e;
        opacity: 90%;
        z-index: 10;
        border: 3px solid #ba2a2a;
    }

    #success-btn {
        position: relative;
        right: 2%;
        width: 55vh;
        background-color: #ba2a2a;
        border-color: #9e9e9e;
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
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
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

            </div>
        </div>
    </nav>





    <div class="container fc">
        <div class="ordercard">
            <div class="card-success">
                <i class="fas fa-check-circle icon"></i>
                <div class="card-body text-center">
                    <div class="main">


                    </div>


                    <div class="text-center pb-2 mt-4">
                        <a href="history.php" class="btn btn-primary" id="success-btn">
                            <i class="fa fa-check mr-2"></i>Transaction History
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot">
        <footer class="container-fluid fixed-bottom " id="myfooter">
            <p class="float-end"><a class="footer-data" href="index.php">Back to top</a></p>
            <p>Copyright © 2021GRIP Bank <a class="footer-data" href="#">Privacy</a> · <a class="footer-data"
                    href="#">Terms</a></p>
        </footer>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->



</body>

</html>