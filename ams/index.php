
<?php


session_start();

require_once("session.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = isset($_POST['name']) ? $_POST['name'] : ''; // Check if 'name' key exists
    $email = isset($_POST['email']) ? $_POST['email'] : ''; // Check if 'email' key exists
    $password = isset($_POST['password']) ? $_POST['password'] : ''; // Check if 'password' key exists
}

// echo $_GET['name'];
// echo $_GET['email'];
// echo $_GET['password'];

$name =  $_GET['$name'];
$email = $_GET['email'];
$password = $_GET['password'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<style>
    .flex-container {
        background-color: #DCD8D6;
        display: flex;
        justify-content: center;
        width: 50%;
        transform: translate(50%, 70px);
        height: 60vh;
        border-radius: 4px;
    }
    h2 {
        display: flex;
        transform: translate(120px, 2px);
        justify-content: center;
    }
    .card-header {
        background-color: #DCC6C1;
        height: 35vh;
        transform: translate(-50px, 60px);
        border-radius: 4px;
    }
    input {
        padding: 10px;
        border: hidden;
        border-radius: 5px;
        margin: 10px;
    }
    input:focus {
        outline: blue;
        border-color: blue;
    }
    .button {
        width: 90%;
    }
    :root {
        background-color: #C9C5C2;
    }
</style>
<body>
    <div class="flex-container">
    <h2>Form Login</h2>

        <div class="card-header">

        <!--- form field-->
            
    <form action="" method="POST">
        <div class="form-control">        
        <input type="text" class="name" placeholder="First name">
        </div>

        <div class="form-control">
        <input type="text" class="email" placeholder="Email">
        </div>

        <div class="form-control">
        <input type="text" class="password" placeholder="Password">
        </div>

        <div class="form-control">
        <input type="submit" value="login" class="button">
        </div>
    </form>
        </div>
    </div>



</body>
</html>
