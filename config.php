<?php
if (isset($_POST["form_contact_submit_btn"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process form data
        // Insert data into the database

        // Redirect to another page to prevent form resubmission
       

        $server_name = "localhost";
        $server_username = "root";
        $server_password = "";
        $server_database = "studyverse";

        $con = mysqli_connect($server_name, $server_username, $server_password, $server_database);

        // if(!$con) {
        //     echo("Connection Error". mysqli_connect_error());
        // }



        $contact_name = $_POST["contact_name"];
        $contact_email = $_POST["contact_email"];
        $contact_company = $_POST["contact_company"];
        $contact_message = $_POST["contact_message"];

        $sql = "INSERT INTO `contact_form`(`contact_name`, `contact_email`, `contact_company`, `contact_message`) VALUES ('$contact_name','$contact_email','$contact_company','$contact_message')";

        mysqli_query($con, $sql);
        
        header("Location: index.php");
        exit();
    }
}
