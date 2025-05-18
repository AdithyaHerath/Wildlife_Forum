<?php
require_once 'includes/header.php';

$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        $error = "Please fill in all fields.";} 
        else {}
}

<?php require_once 'includes/footer.php'; ?>