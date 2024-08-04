<?php

$host = 'localhost';
$host_user = 'root';
$host_pass = '';
$my_db = 'event_management_db';

$con = mysqli_connect($host, $host_user, $host_pass, $my_db);


if ($con === false) {
    die("ERROR: could not connect." . mysqli_connect_error());
}
