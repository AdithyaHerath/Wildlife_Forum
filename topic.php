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

// Handle new reply submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && $logged_in) {
    $reply_content = trim($_POST['content']);
    
    if (empty($reply_content)) {
        $error = "Reply content cannot be empty.";
    } else {
        $sql = "INSERT INTO replies (topic_id, user_id, content) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        
        if ($stmt->execute([$topic_id, $_SESSION['user_id'], $reply_content])) {
            $success = "Reply posted successfully.";
            // Clear the form
            $_POST['content'] = '';
        } else {
            $error = "Something went wrong. Please try again later.";
        }
    }
}

// Get replies
$replies_sql = "SELECT r.*, u.username 
                FROM replies r 
                JOIN users u ON r.user_id = u.user_id 
                WHERE r.topic_id = ? 
                ORDER BY r.created_at ASC";

$stmt = $conn->prepare($replies_sql);
$stmt->execute([$topic_id]);
$replies_result = $stmt;

?>