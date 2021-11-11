<?php 
    session_start();
?>

<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top ">
    <div class="container ">
        <div class="container-fluid ">
            <button class="navbar-toggler my-2 ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon ms-auto"></span>
            </button>
            <div class="collapse navbar-collapse ms-auto " id="navbarTogglerDemo01">
                <i class="bi bi-shop h2 mx-2 "></i>
                <a class="navbar-brand" href="index.php"> SHOESPING</a>
                <ul class="navbar-nav ms-auto me-auto mb-lg-0">
                    <li class="nav-item mx-3">
                        <a class="nav-link" aria-current="page" href="./product.php">PRODUCT</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="./about.php">ABOUT</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="./contact.php">CONTACT</a>
                    </li>
                </ul>
                <form class="d-flex mx-md-5">
                    <?php 
                        if(isset($_SESSION['userEmail'])) {
                            echo '<button type="button" class="btn btn-outline-dark btn-lg mx-2">'.$_SESSION['userFname'].'</button>
                            <a href="./includes/logout.inc.php" class="btn btn-dark p-3">LOGOUT</a>
                            ';
                        }

                        else {
                            echo '<a href="login.php" class="btn btn-outline-dark mx-2">LOGIN</a>
                            <a href="signup.php" class="btn btn-dark">SIGN UP</a>';
                        }
                    ?>

                    <!-- <a href="login.php" class="btn btn-outline-dark mx-2">LOGIN</a>
                    <a href="signup.php" class="btn btn-dark">SIGN UP</a> -->
                </form>
            </div>
        </div>
    </div>
</nav>