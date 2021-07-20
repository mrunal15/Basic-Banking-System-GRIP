<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="main.css" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Document</title>
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
        <div class="container-fluid"><a class="navbar-brand" href="index.php">GRIP BANK</a><button
                class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-0 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle active" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Services </a>
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
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php" tabindex="-1"
                            aria-disabled="true">Contact Us</a></li>
                </ul>

            </div>
        </div>
    </nav>
    <table id="history-table" class=" table table-striped table-hover table-bordered cs">
        <tr class="bg-dark text-white text-center" id="history-head">
            <th>SENDERS NAME</th>
            <th>SENDERS A/C NUMBER </th>
            <th>RECIEPTANTS NAME </th>
            <th>RECIEPTANTS NUMBER</th>
            <th>AMOUNT TRANSFERED</th>
            <th>MESSAGE</th>
        </tr><?php include('connect.php');


    $query="SELECT * FROM transfer";
    $query_run=mysqli_query($conn, $query);


    while($res=mysqli_fetch_array($query_run)) {
        ?><tr class="text-center" style="color:back; font-weight:bold;">
            <td><?php echo $res['sendName'];
        ?></td>
            <td><?php echo $res['sendAcc'];
        ?></td>
            <td><?php echo $res['recName'];
        ?></td>
            <td><?php echo $res['recAcc'];
        ?></td>
            <td><?php echo $res['amount'];
        ?></td>
            <td><?php echo $res['message'];
        ?></td>
        </tr><?php
    }

    mysqli_error($conn);
    ?>
    </table>

    <div class="foot">
        <footer class="container-fluid fixed-bottom " id="myfooter">
            <p class="float-end"><a class="footer-data" href="index.php">Back to top</a></p>
            <p>Copyright © 2021GRIP Bank <a class="footer-data" href="#">Privacy</a> · <a class="footer-data"
                    href="#">Terms</a></p>
        </footer>

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