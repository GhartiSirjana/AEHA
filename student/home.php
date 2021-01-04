<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page of student interface</title>
    <?php include 'link.php';?>
</head>
<body>
<section>
        <div class="container-fluid m-0 p-0">
            <div class="head-section">
                <div class="main-top">
                    <div class="phone-number">
                        <span class="phone pl-4"><i class="fas fa-phone-alt"></i>&nbsp; 9845678534</span>
                    </div>
                    <div class="email-address">
                        <span class="pl-5 email"><i class="fas fa-envelope-open"></i>&nbsp;info@gmail.com</span>
                    </div>
                </div>
                <div class="social-media pr-4">
                    <i class="pl-1 fab fa-facebook-f"></i>
                    <i class="pl-2 fab fa-twitter"></i>
                    <i class="pr-4 fas fa-wifi"></i>
                    <a href="logout.php" class="login">Logout</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 pr-5 text-white">
                        <li class="nav-item ">
                            <a class="nav-link nav1 text-white active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link nav1 text-white " href="#" tabindex="-1" aria-disabled="true">About Us</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link nav1 text-white " href="#" tabindex="-1" aria-disabled="true">Contact Us</a>
                        </li>
                    </ul>

                </div>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto p-0 mb-lg-0 ml-auto text-white">
                        <li class="nav-item ">
                            <a class="nav-link nav1 text-white active" aria-current="page" href="registration.php">Student registration</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link nav1 text-white " href="register.php" tabindex="-1" aria-disabled="true">Administration</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
</body>
</html>