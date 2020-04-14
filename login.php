<!--Authors: Benjamin Ormond, and Nathan Park-->
<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <div class="form-container">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <h1 style="text-align: center;">Sign In</h1>
            <div class="form-input-container">
                <label>Email <span class="required">*</span></label>
                <input class="form-control my-input" name="email" id="my_email" type="text" placeholder="john-doe@gmail.com"
                    required>
            </div>
            <div class="form-input-container">
                <label style="text-align: left;">Password <span class="required">*</span></label>
                <input class="form-control my-input" name="pwd" id="my_password" type="password" required>
            </div>
            <div class="button-div">
                <button class="btn btn-success btn-lg" style="margin-right: 10px" type="submit">Sign In</button>
                <button class="btn btn-success btn-lg" style="margin-left: 10px" onclick="location.href = 'signup.php';">Sign Up</button>
            </div>
        </form>
    </div>

<?php

require('connect.php');

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
</body>

</html>