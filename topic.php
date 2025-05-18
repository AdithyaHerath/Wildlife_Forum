<?php
require_once 'includes/header.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("location: index.php");
    exit();
}

$topic_id = $_GET['id'];
$error = '';
$success = '';

// Get topic details
$topic_sql = "SELECT t.*, c.name as category_name, c.category_id, u.username 
              FROM topics t 
              JOIN categories c ON t.category_id = c.category_id 
              JOIN users u ON t.user_id = u.user_id 
              WHERE t.topic_id = ?";

$stmt = $conn->prepare($topic_sql);
$stmt->execute([$topic_id]);
$topic = $stmt->fetch();

if (!$topic) {
    header("location: index.php");
    exit();
}

?>