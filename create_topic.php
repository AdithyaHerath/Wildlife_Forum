<?php
require_once 'includes/header.php';

if (!$logged_in) {
    header("location: login.php");
    exit();
}

$error = '';
$success = '';
$category_id = isset($_GET['category_id']) ? $_GET['category_id'] : '';

// Get categories for dropdown
$categories_sql = "SELECT * FROM categories ORDER BY name";
$categories_result = $conn->query($categories_sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $category_id = $_POST['category_id'];
    
    if (empty($title) || empty($content) || empty($category_id)) {
        $error = "Please fill in all fields.";
    } else {
        // Verify category exists
        $category_check = $conn->prepare("SELECT category_id FROM categories WHERE category_id = ?");
        $category_check->execute([$category_id]);
        
        if ($category_check->rowCount() == 0) {
            $error = "Invalid category selected.";
        } else {
            // Create new topic
            $sql = "INSERT INTO topics (category_id, user_id, title, content) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            
            if ($stmt->execute([$category_id, $_SESSION['user_id'], $title, $content])) {
                $topic_id = $conn->lastInsertId();
                header("location: topic.php?id=" . $topic_id);
                exit();
            } else {
                $error = "Something went wrong. Please try again later.";
            }
        }
    }
}
?>