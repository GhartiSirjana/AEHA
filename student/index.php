<?php include 'home.php';?>
    
    <section>
        <div class="container-fluid m-0 p-0">
            <div class="main-body">
                <div class="body-heading">
                    <h1 class="text-white">Automatic Exam Hall Arrangement</h1>
                    <div class="para text-white text-center">
                        <p class="">We are here to minimizing the manual work of Administration through our website</p>
                    </div>
                    <div class="getstart text-center">
                        <button class="start font-weight-bold">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid m-0 p-0">
            <div class="about py-5">
                <div class="about-heading text-center py-2">
                    <h1>About Us</h1>
                </div>
                <div class="paragraph">
                    <p class="pt-2 px-5 detail">
                        Examination is one of the major concerns in quality education. Due to increasing number of students, subjects, exam, department, staff, rooms it create a problem in improper seating arrangement. This system provides a better seating plan than a manual system which helps to handle examination process easily and in a proper manner without any delay. Main objective here is to feed the number of students and faculty list which will generate hall plan and allocation of duty immediately according to day of examination, which will be SQL database. The web server will be PHP
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- starting of contact section -->
    <section class="contact" id="contact">
        <div class="container-fluid">
            <div class="section-heading">
                <h1 class="text-center text-white pb-4">Contact Us</h1>
            </div>
            <form action="" class="w-50 m-auto" data-aos="fade-up" data-aos-delay="300">
                <div class="form-group">
                    <input type="text" id="name" name="name"  autocomplete="off" required>
                    <label for="name">Name</label>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email"  autocomplete="off" required>
                    <label for="email">Email</label>
                </div>
                <div class="form-group">
                    <input type="password" name="password" required>
                    <label for="">Password</label>
                </div>
                <div class="form-group">
                    <input type="password" name="cpassword" required>
                    <label for="">Confirm Password</label>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </section>
    <!-- Ending Contact section -->
<?php include 'footer.php';?>

</body>

</html>