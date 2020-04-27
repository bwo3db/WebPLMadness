<?php
header('Access-Control-Allow-Origin: http://localhost:4200');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding');

require('connect.php');
session_start();

// $postdata = file_get_contents("php://input");
// echo "this is the post data recieved by php: " . "'" . $postdata . "'";

// retrieve data from the request
$postdata = file_get_contents("php://input");

// Process data
// (this example simply extracts the data and restructures them back)

// Extract json format to PHP array
$request = json_decode($postdata);

$data = [];
$data[0]['length'] = $content_length;
foreach ($request as $k => $v)
{
  $data[0]['post_'.$k] = $v;
}

// Send response (in json format) back the front end
echo json_encode(['content'=>$data]);

// function login($email, $password) {
//     global $db;

//     $query = "SELECT * FROM maintable WHERE email = :email";
//     $statement = $db -> prepare($query);
//     $statement -> bindValue(':email', $email);
//     $statement -> execute();

//     $result = $statement -> fetch();
//     $statement -> closeCursor();


//     return $result;
// }

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     echo $postdata;
//     $result = login($_POST['email'], $_POST['pwd']);
//     $input_pwd = htmlspecialchars($_POST['pwd']);
//     if(empty($result)) {
//         echo '<br/><p style="color: red; text-align: center; font-size: large;">Incorrect email or password</p>';
//     }
//     else if(password_verify($input_pwd, $result[2])){
//         echo "password matches <br>";
//         // Change this to where ever you want to person to go to
//         $_SESSION["username"] = $result["username"];
//         $_SESSION["email"] = $result["email"];
//         $_SESSION["bracket"] = $result["bracket"];
//         $_SESSION["winner"] = $result["winner"];
//         header("Location: index.php");
//       }
//     else{
//         echo '<br/><p style="color: red; text-align: center; font-size: large;">Password does not match</p>';
//     }
// }

?>