<!-- task process page is made to get field names from form and store it in the mysql database with the help of conn and sql query function and by running data will be saved to database 

<?php
require_once('config.php');


// get fields 
if (isset($_POST['submit'])) {
    $patientName = $_POST['patientName'];
    $dob         = $_POST['dob'];
    $gender      = $_POST['gender'];
    $address     = $_POST['address'];
    $contact     = $_POST['contact'];

    // get files 
    $folder     = 'uploads/';
    $fileName   = $_FILES['photo']['name'];
    $file       = $_FILES['photo']['tmp_name'];
    $move       = move_uploaded_file($file, $folder.$fileName);
    if($move){
        $sql = "INSERT INTO medical (patientName,dob,gender,address,contact,photo) 
                        VALUES ('$patientName','$dob','$gender','$address','$contact','$fileName')";

        $run = mysqli_query($conn, $sql);
         if ($run) {
        echo 'Entry successful';
         header('location:patients_display.php');
    } else {
        echo 'Error occurred: ' . mysqli_error($conn);
    }
    }
}
