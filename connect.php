<!--Authors: Benjamin Ormond, and Nathan Park-->
<?php
    $dbname = 'webplmadness';
    $hostname = '127.0.0.1';

    $username = 'root';
    $password = '';

    $dsn = "mysql:host=$hostname;dbname=$dbname";

    try {
        $db = new PDO($dsn, $username, $password);
        //echo  "<p>It worked!<p>";
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>An error occurred while connecting to the database: $error_message </p>";
    } catch (Exception $e) {
        $error_message = $e->getMessage();
        echo "<p>Error message: $error_message </p>";
    }
?>