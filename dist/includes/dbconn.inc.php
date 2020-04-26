<?php
    require("configuration.inc.php");
    $DB_SERVER = 'localhost';
    //$DB_USER = 'emb2065';
    //$DB_PASSWORD = 'designbase';
    $DB_NAME = 'emb2065';

    $DB_USER = 'root';
    $DB_PASSWORD = 'root';

    function connectDB() {
        global $DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_NAME;
        
        $DB_CONN = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_NAME);
    
        if (!$DB_CONN) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $DB_CONN;
    }

    function retrieveConnectionToDB() {
        global $DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_NAME;

        $mysqli = new mysqli($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_NAME);

        if(!$mysqli) {
          exit("ERROR {$mysqli->connect_error}");
        }
    
        return $mysqli;
      }
    
?>