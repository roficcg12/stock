<?php
//error_reporting(1);
/**
 * Database Connection
 * config
 */
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'stock';

$conn = new mysqli('$host','$user','$password', '$dbname');

if($conn->connect_error)
{
    //if connection error occurs show the error and error code and die
    die('Connection ERROR [' . $conn->connect_errno . ']:' . $conn->connect_error );
}else{
    echo 'connection established';
}
