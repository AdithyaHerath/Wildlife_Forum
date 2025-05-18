<?php
require_once 'includes/header.php';

if (!$logged_in || !$is_admin) {
    header("location: index.php");
    exit();
}

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("location: admin.php");
    exit();
}

$category_id = $_GET['id'];
$error = '';
$success = '';