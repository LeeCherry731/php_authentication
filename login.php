<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.0/font/bootstrap-icons.min.css"
        integrity="sha512-yLNTU6YQWEtsM/WVkUqd2jRzzq5hmfFUMVvziVlkgC0R9HTElDtyF4DiWiBeMS36npvN+NWwrr764A4AWGcmQQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;400&family=Raleway:wght@200;300;400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/product.css">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /> -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.svg" />
    <title>Login</title>
</head>

<body style="overflow-x: none;">

    <?php 
        include "navbar.php";
    ?>
    <br>
    <br>

    <div class="container mt-5">
        <main class="container" style="margin-top: 50px;">
            <div class="col-md-12 col-lg-12">
                <h4 class="mb-3">LOGIN USER</h4>
                <form class="needs-validation" novalidate="" action="./includes/login.inc.php" method="post">
                    <div class="row g-3">



                        <div class="col-12">
                            <label for="email" class="form-label">Email </label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>


                        <div class="col-12">
                            <label for="username" class="form-label">Password</label>
                            <div class="input-group has-validation">

                                <input type="password" class="form-control" name="password" id="username"
                                    placeholder="Username" required="">
                                <div class="invalid-feedback">
                                    Your password is required.
                                </div>
                            </div>
                        </div>

                        <hr>
                        <button type="submit" class="btn btn-outline-dark col-3 ms-auto me-auto">Dark</button>

                </form>
            </div>
    </div>
    </main>

    </div>


    <?php 
        include "script.php";
    ?>


</body>

</html>