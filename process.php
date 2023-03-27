<?php 
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    if ( empty( $_POST['fname'] ) || empty($_POST['lname']) || empty( $_POST['email'] ) || empty( $_POST['password'] )  ) {
        die( 'All fields are required.' );
    }

    $name = $_POST['fname'];
    $name = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($password == $confirm_password){
        header('location:index.php');

    }

}
?>