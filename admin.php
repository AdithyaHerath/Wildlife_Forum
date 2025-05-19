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

// Get statistics
$stats = array();
$stats['users'] = $pdo->query("SELECT COUNT(*) as count FROM users")->fetchColumn();
$stats['topics'] = $pdo->query("SELECT COUNT(*) as count FROM topics")->fetchColumn();
$stats['replies'] = $pdo->query("SELECT COUNT(*) as count FROM replies")->fetchColumn();

// Get categories
$categories_sql = "
    SELECT c.*, 
           (SELECT COUNT(*) FROM topics WHERE category_id = c.category_id) as topic_count 
    FROM categories c 
    ORDER BY c.name
";
$categories_stmt = $pdo->query($categories_sql);
$categories = $categories_stmt->fetchAll();

// Get recent topics
$recent_topics_sql = "
    SELECT t.*, c.name as category_name, u.username 
    FROM topics t 
    JOIN categories c ON t.category_id = c.category_id 
    JOIN users u ON t.user_id = u.user_id 
    ORDER BY t.created_at DESC 
    LIMIT 5
";
$recent_topics_stmt = $pdo->query($recent_topics_sql);
$recent_topics = $recent_topics_stmt->fetchAll();

?>
<?php include("includes/footer.php"); ?>
