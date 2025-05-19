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
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = trim($_POST['content']);
    
    if (empty($content)) {
        $error = "Reply content cannot be empty.";
    } else {
        // Update reply
        $update_sql = "UPDATE replies SET content = ? WHERE reply_id = ?";
        $stmt = $pdo->prepare($update_sql);
        
        try {
            $stmt->execute([$content, $reply_id]);
            $success = "Reply updated successfully.";
            // Refresh reply data
            $stmt = $pdo->prepare($reply_sql);
            $stmt->execute([$reply_id]);
            $reply = $stmt->fetch();
        } catch (\PDOException $e) {
            $error = "Something went wrong. Please try again later.";
            // Log the error
            error_log("Error updating reply: " . $e->getMessage());
        }
    }
}

?>

<?php require_once 'includes/footer.php'; ?>