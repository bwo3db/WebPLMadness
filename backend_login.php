<?php
header('Access-Control-Allow-Origin: http://localhost:4200');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding');

require('connect.php');
session_start();


function login($email, $password) {
    global $db;

    $query = "SELECT * FROM maintable WHERE email = :email";
    $statement = $db -> prepare($query);
    $statement -> bindValue(':email', $email);
    $statement -> execute();

    $result = $statement -> fetch();
    $statement -> closeCursor();


    return $result;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $result = login($_POST['email'], $_POST['pwd']);
    $input_pwd = htmlspecialchars($_POST['pwd']);
    if(empty($result)) {
        echo '<br/><p style="color: red; text-align: center; font-size: large;">Incorrect email or password</p>';
    }
    else if(password_verify($input_pwd, $result[2])){
        echo "password matches <br>";
        // Change this to where ever you want to person to go to
        $_SESSION["username"] = $result["username"];
        $_SESSION["email"] = $result["email"];
        $_SESSION["bracket"] = $result["bracket"];
        $_SESSION["winner"] = $result["winner"];
        header("Location: index.php");
      }
    else{
        echo '<br/><p style="color: red; text-align: center; font-size: large;">Password does not match</p>';
    }
}

?>