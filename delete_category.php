<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'config.php'; 
echo "Script started.";

// Check if the PDO connection object exists
if (!isset($pdo) || !$pdo instanceof PDO) {
    die("Database connection not available.");
} else {
    echo "Database connection available (PDO).";
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    echo "ID parameter is set.";
    $category_id = $_GET['id'];

    // Prepare a delete statement 
    $sql = "DELETE FROM categories WHERE category_id = :id";
    echo "SQL query prepared.";

    try {
        if ($stmt = $pdo->prepare($sql)) {
            echo "Statement prepared successfully.";
            
            $stmt->bindParam(':id', $category_id, PDO::PARAM_INT);
            echo "Parameters bound.";

            if ($stmt->execute()) {
                echo "Statement executed successfully.";
                // Redirect to admin page after deletion
                header("location: admin.php");
                exit();
            } else {
                echo "Error executing statement.";
                
                print_r($stmt->errorInfo());
            }
        } else {
            echo "Error preparing statement.";
            
            print_r($pdo->errorInfo());
        }
    } catch (PDOException $e) {
        echo "PDO Exception: " . $e->getMessage();
    }

    
    echo "Script finished.";

} else {
    echo "ID parameter is not set.";
    // Check existence of id parameter before processing
    header("location: error.log");
    exit();
}
?>