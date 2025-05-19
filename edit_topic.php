<?php
require_once 'includes/header.php';

if (!$logged_in) {
    header("location: login.php");
    exit();
}

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("location: index.php");
    exit();
}

$topic_id = $_GET['id'];
$error = '';
$success = '';

// Get topic details
$topic_sql = "SELECT t.*, c.category_id, c.name as category_name 
              FROM topics t 
              JOIN categories c ON t.category_id = c.category_id 
              WHERE t.topic_id = ?";
$stmt = $conn->prepare($topic_sql);
$stmt->execute([$topic_id]);
$topic = $stmt->fetch();

if (!$topic) {
    header("location: index.php");
    exit();
}

// Check if user has permission to edit
if (!$is_admin && $_SESSION['user_id'] != $topic['user_id']) {
    header("location: topic.php?id=" . $topic_id);
    exit();
}

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
        // Update topic
        $update_sql = "UPDATE topics SET title = ?, content = ?, category_id = ? WHERE topic_id = ?";
        $stmt = $conn->prepare($update_sql);
        
        if ($stmt->execute([$title, $content, $category_id, $topic_id])) {
            $success = "Topic updated successfully.";
            // Refresh topic data
            $stmt = $conn->prepare($topic_sql);
            $stmt->execute([$topic_id]);
            $topic = $stmt->fetch();
        } else {
            $error = "Something went wrong. Please try again later.";
        }
    }
}
?>