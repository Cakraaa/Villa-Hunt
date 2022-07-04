<?php
$SERVER = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "contact" ;

$connect = mysqli_connect($server, $username, $passwordm $dbname) ;

if(isset($_POST['submit'])){

    if(!empty($_POST['name'] $$ !empty($_POST['email']) $$ !empty($_POST['message'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $query = "insert into kontak(nama,email,message) values('$name', '$email', '$message')";

        $run = mysqli_query($connect, $query) or die(mysqli_error());

        if($run){
            echo "Thank you, i will contact you on email ASAP, go back to previous page please";
        }else{
            echo "Form not submitted. Please try again later.";
        }
    }
}
?>