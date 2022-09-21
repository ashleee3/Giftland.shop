<?php
session_start();
if (isset($_SESSION["SESSION_EMAIL"])) {
    header("Location: dashboard.php");
}

if (isset($_POST["submit"])) {
    include 'connect.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "giftdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['submit'])) {


    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) &&!empty($_POST['email']) && !empty($_POST['phonenumber'])&& !empty($_POST['password'])&& !empty($_POST['confirmpassword']) ) {

        $firstname =mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname =mysqli_real_escape_string($conn, $_POST['lastname']);
        $email =mysqli_real_escape_string($conn, $_POST['email']);
        $phonenumber =mysqli_real_escape_string($conn, $_POST['phonenumber']);
        $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
        $confirmpassword = mysqli_real_escape_string($conn, md5($_POST['confirmpassword']));


        //var_dump($firstname,lastname,$email,$phonenumber,$password,confirmpassword);

        //Insert Data to database 
        $query = "insert into signup (firstname,lastname,email,phonenumber,password,confirmpassword) values('$firstname' ,'$lastname' , '$email', '$phonenumber','$password', '$confirmpassword' )";
     
       //run query
       $run = mysqli_query($conn, $query) or die('Error: ' . mysqli_error($conn));;

       //check if our query runs
       if ($run) {
        echo 'Registration made successfully';
       }
       else {
        echo 'Data not  submitted';
       }


    }

    else {
        echo 'All fields are required';
       

    }

}

}

     











?>