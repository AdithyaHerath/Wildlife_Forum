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

$reply_id = $_GET['id'];

// Check if reply exists and get topic_id
$reply_sql = "SELECT r.*, t.topic_id FROM replies r 
              JOIN topics t ON r.topic_id = t.topic_id 
              WHERE r.reply_id = ?";
$stmt = $pdo->prepare($reply_sql);
$stmt->execute([$reply_id]);
$reply = $stmt->fetch();

if (!$reply) {
    header("location: index.php");
    exit();
}

// Check if user has permission to delete
if (!$is_admin && $_SESSION['user_id'] != $reply['user_id']) {
    header("location: topic.php?id=" . $reply['topic_id']);
    exit();
}

// Delete reply
$delete_sql = "DELETE FROM replies WHERE reply_id = ?";
$stmt = $pdo->prepare($delete_sql);

try {
    $stmt->execute([$reply_id]);
    header("location: topic.php?id=" . $reply['topic_id']);
    exit();
} catch (\PDOException $e) {
    echo "Error deleting reply.";
    // Log the error
    error_log("Error deleting reply: " . $e->getMessage());
}

?>