<?php include("includes/header.php"); 

// Check if user is admin
if (!$logged_in || !$is_admin) {
    header("location: index.php");
    exit();
}

$error = '';
$success = '';

// Handle new category creation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    if ($_POST['action'] == 'create_category') {
        $name = trim($_POST['name']);
        $description = trim($_POST['description']);

        if (empty($name)) {
            $error = "Category name is required.";
        } else {
            $sql = "INSERT INTO categories (name, description) VALUES (?, ?)";
            $stmt = $pdo->prepare($sql);

            try {
                $stmt->execute([$name, $description]);
                $success = "Category created successfully.";
                $_POST = array();
            } catch (\PDOException $e) {
                $error = "Something went wrong. Please try again later.";
                // Log the error
                error_log("Error creating category: " . $e->getMessage());
            }
        }
    }
}

// Handle event deletion
if (isset($_GET['delete_event'])) {
    $delete_id = intval($_GET['delete_event']);
    $stmt = $pdo->prepare("DELETE FROM events WHERE event_id = ?");
    try {
        $stmt->execute([$delete_id]);
    } catch (\PDOException $e) {
        // Log the error
        error_log("Error deleting event: " . $e->getMessage());
    }
}
?>
<?php include("includes/footer.php"); ?>
