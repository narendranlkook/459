<?php
session_start();

if(!isset($_SESSION['password'])) {
    header('Location: login.php');
    exit();
}
?>