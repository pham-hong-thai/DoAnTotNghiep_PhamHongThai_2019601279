<?php
    // local
    $mysqli = new mysqli("localhost","root","","dbperfume1");

    //heroku
   //$mysqli = new mysqli("","","","");

    // Check connection
    if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
