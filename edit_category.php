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

// Get category details
$category_sql = "SELECT * FROM categories WHERE category_id = ?";
$stmt = $conn->prepare($category_sql);
$stmt->execute([$category_id]);
$category = $stmt->fetch();

if (!$category) {
    header("location: admin.php");
    exit();
}
?>