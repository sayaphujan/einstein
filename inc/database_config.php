<?php
//$link = mysqli_connect('localhost', 'einsteinacademy_einsteinacademy', 'IV5GUU?UlP0?', 'einsteinacademy_main');
$link = mysqli_connect('localhost', 'root', '', 'einsteinacademy_main');
if (mysqli_connect_error()) {
    $emsg = 'MySQL Error: '.mysqli_connect_error();
    die($emsg);
}
?>