<?php
$con = mysqli_connect('localhost', 'root', '', 'realstatephp');

if (!$con) {
    die("Connection failed: ". mysqli_connect_error());
}
?>