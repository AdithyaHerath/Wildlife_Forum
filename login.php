<?php
require_once 'includes/header.php';

$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        $error = "Please fill in all fields.";} 
        else {
            $sql = "SELECT user_id, username, password, is_admin FROM users WHERE username = ?";
        
        $stmt = $conn->prepare($sql);
        
        if ($stmt->execute([$username])) {
            if ($stmt->rowCount() == 1) {
                $user = $stmt->fetch();
                if (password_verify($password, $user['password'])) {
                    session_start();
                    $_SESSION["user_id"] = $user['user_id'];
                    $_SESSION["username"] = $user['username'];
                    $_SESSION["is_admin"] = $user['is_admin'];
                    
                    header("location: index.php");
                    exit();
                } else {
                    $error = "Invalid username or password.";
                }
            } else {
                $error = "Invalid username or password.";
            }
        } else {
            $error = "Oops! Something went wrong. Please try again later.";
        }
        $stmt = null; // Close statement
    }
}
?>

<?php require_once 'includes/footer.php'; ?>