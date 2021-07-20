<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@700&display=swap"
        rel="stylesheet">


    <style>
    .con-form {
        margin-bottom: 10px;
    }

    .contact {
        background-image: url("time.jpg");
    }

    #con-head {
        color: white;
        font-family: 'Kanit', sans-serif;
    }

    #con-content {
        color: white;
        font-family: 'Kanit', sans-serif;
    }

    #snd-msg {
        color: #fff;
        background-color: #009688;
        border-color: #009688;
    }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
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
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
                        <a class="nav-link active" href="contact.php">Contact Us</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <br>

    <div class="contact">
        <div class="jumbotron d-flex align-items-center mt-5" style="background-image: url(img/hero-2.jpg)">
            <div class="container text-center">
                <h1 class="display-2 mb-4" id="con-head">Contact Us!</h1>
                <p id="con-content">
                    Feel free to contact us...We are just a click away!
                </p>
            </div>
        </div> <!-- Contact Form Section -->
        <section id="gtco-contact-form" class="bg-white">
            <div class="container">
                <div class="section-content">
                    <!-- Section Title -->

                    <!-- End of Section Title -->
                    <div class="row">
                        <!-- Contact Form Holder -->
                        <div class="col-md-8 offset-md-2 contact-form-holder mt-4">
                            <form method="post" name="contact-us" action="">
                                <div class="row">
                                    <div class="col-md-6 form-input con-form">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Name">
                                    </div>
                                    <div class="col-md-6 form-input con-form">
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="col-md-12 form-input con-form">
                                        <input type="text" class="form-control" id="subject" name="subject"
                                            placeholder="Subject">
                                    </div>
                                    <div class="col-md-12 form-textarea">
                                        <textarea class="form-control" id="message" name="message" rows="6"
                                            placeholder="Your Message ..."></textarea>
                                    </div>
                                    <div class="col-md-12 form-btn text-center mt-3">
                                        <button class="btn btn-block btn-secondary btn-red" id="snd-msg" type="submit"
                                            name="submit" onclick="return false;">Send Message</button>

                                    </div>
                                </div>
                            </form>

                            <!-- End of Contact Form Holder -->
                        </div>
                    </div>
                </div>
        </section>
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