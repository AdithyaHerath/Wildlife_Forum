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

<div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="mb-4">Login</h2>
        <?php if (!empty($error)) { ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php } ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <p class="mt-3">Don't have an account? <a href="register.php">Register here</a></p>
        </form>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>