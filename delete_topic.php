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

// Check if topic exists and get category_id
$topic_sql = "SELECT t.*, c.category_id FROM topics t 
              JOIN categories c ON t.category_id = c.category_id 
              WHERE t.topic_id = ?";
$stmt = $conn->prepare($topic_sql);
$stmt->execute([$topic_id]);
$topic = $stmt->fetch();

if (!$topic) {
    header("location: index.php");
    exit();
}

// Check if user has permission to delete
if (!$is_admin && $_SESSION['user_id'] != $topic['user_id']) {
    header("location: topic.php?id=" . $topic_id);
    exit();
}


// Delete topic (replies will be deleted automatically due to CASCADE)
$delete_sql = "DELETE FROM topics WHERE topic_id = ?";
$stmt = $conn->prepare($delete_sql);

if ($stmt->execute([$topic_id])) {
    header("location: category.php?id=" . $topic['category_id']);
    exit();
} else {
    echo "Error deleting topic.";
}
?>