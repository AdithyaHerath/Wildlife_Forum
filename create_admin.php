<?php
require_once 'config.php';

// Admin credentials
$username = 'admin';
$password = 'admin';
$email = 'admin@example.com';

// Generate password hash
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

try {
    // First, delete existing admin user if exists
    $delete_sql = "DELETE FROM users WHERE username = 'admin'";
    $pdo->exec($delete_sql);

    // Insert new admin user
    $sql = "INSERT INTO users (username, password, email, is_admin) VALUES (?, ?, ?, TRUE)";
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([$username, $hashed_password, $email])) {
        echo "Admin user created successfully!<br>";
        echo "Username: admin<br>";
        echo "Password: admin<br>";
    } else {
        echo "Error creating admin user.";
    }
} catch (\PDOException $e) {
    echo "Error creating admin user: " . $e->getMessage();
    // Log the error
    error_log("Error creating admin user: " . $e->getMessage());
}

// PDO connection is automatically closed when the script ends
?>
