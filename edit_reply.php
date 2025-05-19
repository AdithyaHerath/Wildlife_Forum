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
$error = '';
$success = '';

// Get reply details
$reply_sql = "SELECT r.*, t.topic_id, t.title as topic_title 
              FROM replies r 
              JOIN topics t ON r.topic_id = t.topic_id 
              WHERE r.reply_id = ?";
$stmt = $pdo->prepare($reply_sql);
$stmt->execute([$reply_id]);
$reply = $stmt->fetch();

if (!$reply) {
    header("location: index.php");
    exit();
}


// Check if user has permission to edit
if (!$is_admin && $_SESSION['user_id'] != $reply['user_id']) {
    header("location: topic.php?id=" . $reply['topic_id']);
    exit();

?>

<?php require_once 'includes/footer.php'; ?>