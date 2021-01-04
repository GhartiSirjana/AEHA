<?php
include 'connection.php';
include 'link.php';

$firstname = '';
$lastname = '';
$email = '';
$password = '';
$cpassword = '';
$role = '';
$error = array();
if (isset($_POST['studentRegister'])) {
    if(strlen($firstname)<=2)
    {
        array_push($error, "First name must be greater than two");
    }
    else {
        $firstname = mysqli_real_escape_string($conn, $_POST['fname']);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) 
        {
          array_push($error, "Only letters and white space allowed");
        }
      }
   
 
    $lastname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);
    $regisno = mysqli_real_escape_string($conn, $_POST['regisno']);
    $examroll = mysqli_real_escape_string($conn, $_POST['rollno']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailCheck = "SELECT * FROM studentregis WHERE email = '$email'";
    $emailCheckQuery = mysqli_query($conn, $emailCheck);
    $emailcount = mysqli_num_rows($emailCheckQuery);
    if ($emailcount > 0) {
?>
        <script>
            alert('Email already Exist');
        </script>
        <?php
    } else {
        if ($password === $cpassword) {
            $insertQuery = "INSERT INTO studentregis(firstname, lastname, email, password, registrationno, examroll) VALUES('$firstname', '$lastname', '$email', '$pass', '$regisno', '$examroll')";
            $iquery = mysqli_query($conn, $insertQuery);
            if ($iquery) {
                header('location:index.php');
            } else {
        ?>
                <script>
                    alert('Data Insertion failed');
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                alert('Password doesnot matched!');
            </script>
<?php
        }
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
        <?php
        if(count($error)>0)
        {
            foreach($error as $err)
            {
                echo '<div class = "alert atert-danger" role = "alert">' .$err. '</div>';
            }

        }
        ?>

<body>
    <div class="main-div">
        <div class="register-heading text-center">
            <h1>Student Registration</h1>
        </div>
        <form action="" method="post" class="w-50 m-auto">
            <div class="form-group">
                <input type="text" class="form-control form-control-sm" name="fname" required>
                <label for="">Firstname</label>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-sm" name="lname" required>
                <label for="">Lastname</label>
            </div>
            <div class="form-group">
                <input type="email" class="form-control form-control-sm" name="email" required>
                <label for="">Email Id</label>
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-sm" name="password" autocomplete="off" required>
                <label for="">Password</label>
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-sm" name="cpass" autocomplete="off" required>
                <label for="">Repeat Password</label>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-sm" name="regisno" required>
                <label for="">Registration Number</label>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-sm" name="rollno" required>
                <label for="">Exam Roll Number</label>
            </div>
            <div class="form-group check m-0">
                <button class="btn btn-primary btn-sm btn-block" name="studentRegister">Register</button>
            </div>
            <p class="small">If You Have An Account Already?&nbsp;<a href="login.php" class="small">Login here</a></p>
        </form>
    </div>

    <script src="bootstrap/js/jquery-3.5.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="">
    </script>
</body>

</html>