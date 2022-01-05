<?php

session_start();

if(!isset($_SESSION['role'])) {
    header('location:../index.php');
}

if($_SESSION['role'] == 0) {
    $_SESSION['error'] = "không đủ quyền";
    header('location:../root/index.php');
    exit;
}

if(empty($_SESSION['role'])) {
    header('location:../index.php');
}