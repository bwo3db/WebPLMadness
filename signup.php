<!--Authors: Benjamin Ormond, and Nathan Park-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <div class="form-container">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post" onsubmit="return submit_app()">
            <h1 style="text-align: center;">Sign Up</h1>
            <div class="form-input-container">
                <label>Name <span class="required">*</span></label>
                <input class="form-control my-input" name="username" id="my_name" type="text" placeholder="John Doe" required>
            </div>
            <div class="form-input-container">
                <label>Email <span class="required">*</span></label>
                <input class="form-control my-input" name="email" id="my_email" type="text" placeholder="john-doe@gmail.com"
                    required>
            </div>
            <div class="form-input-container">
                <label style="text-align: left;">Password <span class="required">*</span></label>
                <input class="form-control my-input" name="password" id="my_password" type="password" required>
            </div>

            <div class="form-input-container">
                <label style="text-align: left;">Re-Enter Password <span class="required">*</span></label>
                <input class="form-control my-input" name="password2" id="my_password2" type="password" required>
                <label style="text-align: left; margin-top: 1%; margin-bottom: 1%;"><span
                        class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                    Password must be at least 6 characters long</label>
                </br>
                <label style="text-align: left;"><span class="required">* </span>Required fields</label>
            </div>
            <div class="button-div">
                <button class="btn btn-success btn-lg" type="submit" onclick="submit_app()">Sign Up</button>
            </div>
        </form>
        <div class="form-input-container" id="invalid-text">
    </div>

    <script>
        function submit_app() {
            var name = document.getElementById("my_name").value;
            var email = document.getElementById("my_email").value;
            var password = document.getElementById("my_password").value;
            var password2 = document.getElementById("my_password2").value;
            var good_password = verify_password(password, password2);
            if (name === "" || email === "" || password === "" || password2 === "") {
                document.getElementById('invalid-text').innerHTML = '<div style="color: red; text-align: center; font-size: large;">Fill in all inputs!</div>';
                return false;
            }
            else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))) {
                document.getElementById('invalid-text').innerHTML = '<div style="color: red; text-align: center; font-size: large;">Invalid Email!</div>';
                return false;
            }
            else if (typeof good_password === "string") {
                document.getElementById('invalid-text').innerHTML = '<div style="color: red; text-align: center; font-size: large;">' + good_password + '</div>';
                return false;
            }
            else {
                document.getElementById('invalid-text').innerHTML = '<div style="color: green; text-align: center; font-size: large;">Successfully submitted!</div>';
                return true;
            }
        }
        function verify_password(p1, p2) {
            if (p1 !== p2) {
                return "Passwords do not match";
            }
            else if (p1.length < 6) {
                return "Password is too short"
            }
            else {
                return true;
            }
        }

    </script>

    <?php
    require('connect.php');

    if ($_POST) {
        global $db;

        $check = True;

        if(strlen($_POST['password']) < 6){
            $check = False;
        }
        if($_POST['password'] != $_POST['password2']){
            $check = False;
        }
        if (!(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) {
            $check = False;
        }
        if($check){
            $hash = password_hash(htmlspecialchars($_POST['password']), PASSWORD_BCRYPT);
            $query = "INSERT INTO maintable (email, username, password, bracket, winner) VALUES ('$_POST[email]', '$_POST[username]', '$hash', '', '')";
            $statement = $db -> prepare($query);
            $suc = $statement -> execute();
            $statement -> closeCursor();
        }
    }
    ?>
</body>

</html>