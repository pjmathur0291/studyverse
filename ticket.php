<?php
include("header/header.php");
error_reporting(1);
if (isset($_POST["signup"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process form data
        // Insert data into the database

        // Redirect to another page to prevent form resubmission

        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $phoneno = $_POST["phoneno"];
        $password = $_POST["password"];

        $sql = "INSERT INTO `signup`(`firstname`, `lastname`, `email`, `phoneno` , `password`) VALUES ('$firstname','$lastname','$email','$phoneno','$password')";

        mysqli_query($con, $sql);

        header("Location: login.php");
        exit();
    }
}
?>


<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-10 mx-auto">
                <form class="custom-form ticket-form mb-5 mb-lg-0" action="login.php" method="post" role="form" name ="signupform">
                    <h2 class="text-center mb-4">Sign Up</h2>

                    <div class="ticket-form-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="firstname" id="ticket-form-name" class="form-control"
                                    placeholder="First name" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="lastname" id="ticket-form-name" class="form-control"
                                    placeholder="Last name" required>
                            </div>
                        </div>
                        <input type="email" name="email" id="ticket-form-email" pattern="[^ @]*@[^ @]*"
                            class="form-control" placeholder="Email address" required>

                        <input type="tel" class="form-control" name="phoneno" placeholder="Ph 085-456-7890"
                            pattern="^[789]\d{9}$" required="">

                        <input type="password" class="form-control" name="password" placeholder="Password" id="password"
                            required>
                        <input type="repassword" class="form-control" name="repassword" placeholder="Retype Password"
                            id="repassword" required>

                        <div class="row">
                           
                            <br>
                            <div class="col-lg-4 col-md-10 col-8 mx-auto my-4">
                                <button type="submit" name="signup" class="form-control">Signup</button>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12" >
                                <h7> Already a member? </h7><a href="login.php">Login </a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
</section>
</main>


<?php
include("footer/footer.php");
?>