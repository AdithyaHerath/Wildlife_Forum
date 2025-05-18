<?php
require_once 'includes/header.php';

if (!$logged_in) {
    header("location: login.php");
    exit();
}

$error = '';
$success = '';
$category_id = isset($_GET['category_id']) ? $_GET['category_id'] : '';

?>