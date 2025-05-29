<?php

// Database configuration
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'forum_db');

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 0);  // Don't display errors to users
ini_set('log_errors', 1);      // Log errors to file
ini_set('error_log', __DIR__ . '/error.log');

// Attempt to connect to MySQL database
$dsn = "mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD, $options);
} catch (\PDOException $e) {
    
    error_log("Database connection failed: " . $e->getMessage());
    // Show a generic error message to users
    die("Sorry, we are experiencing technical difficulties. Please try again later.");
}

$conn = $pdo;

?>