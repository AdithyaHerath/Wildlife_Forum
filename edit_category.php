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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    
    if (empty($name)) {
        $error = "Category name is required.";
    } else {
        // Update category
        $update_sql = "UPDATE categories SET name = ?, description = ? WHERE category_id = ?";
        $stmt = $conn->prepare($update_sql);
        
        if ($stmt->execute([$name, $description, $category_id])) {
            $success = "Category updated successfully.";
            // Refresh category data
            $stmt = $conn->prepare($category_sql);
            $stmt->execute([$category_id]);
            $category = $stmt->fetch();
        } else {
            $error = "Something went wrong. Please try again later.";
        }
    }
}
// Get topic count
$topics_sql = "SELECT COUNT(*) as count FROM topics WHERE category_id = ?";
$stmt = $conn->prepare($topics_sql);
$stmt->execute([$category_id]);
$topic_count = $stmt->fetch()['count'];
?>