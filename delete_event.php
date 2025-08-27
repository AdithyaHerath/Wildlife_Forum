<?php
require_once 'includes/db.php';
session_start();

// Only admins can delete
if (!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
    header("Location: index.php");
    exit();
}

if (isset($_GET['id'])) {
    $event_id = (int)$_GET['id']; 

    try {
        $stmt = $conn->prepare("DELETE FROM events WHERE event_id = ?");
        $stmt->execute([$event_id]);
    } catch (PDOException $e) {
        error_log("Event deletion failed: " . $e->getMessage());
       
    }
}

header("Location: admin.php");
exit();
