<?php
require_once 'includes/header.php';

if (!$logged_in) {
    header("location: login.php");
    exit();
}
?>

<?php require_once 'includes/footer.php'; ?>