<?php

if (isset($_POST['logout'])){
    session_start();
    session_unset();
    session_destroy();
    header('Location: ../pro/customersignin.php?login=empty');
    exit();
}