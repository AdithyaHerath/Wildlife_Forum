<?php
require_once 'includes/header.php';

if (!$logged_in) {
    header("location: login.php");
    exit();
}

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("location: index.php");
    exit();
}

$topic_id = $_GET['id'];
$error = '';
$success = '';

// Get topic details
$topic_sql = "SELECT t.*, c.category_id, c.name as category_name 
              FROM topics t 
              JOIN categories c ON t.category_id = c.category_id 
              WHERE t.topic_id = ?";
$stmt = $pdo->prepare($topic_sql);
$stmt->execute([$topic_id]);
$topic = $stmt->fetch();

if (!$topic) {
    header("location: index.php");
    exit();
}

// Check if user has permission to edit
if (!$is_admin && $_SESSION['user_id'] != $topic['user_id']) {
    header("location: topic.php?id=" . $topic_id);
    exit();
}

// Get categories for dropdown
$categories_sql = "SELECT * FROM categories ORDER BY name";
$categories_stmt = $pdo->query($categories_sql);
$categories = $categories_stmt->fetchAll();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $category_id = $_POST['category_id'];
    
    if (empty($title) || empty($content) || empty($category_id)) {
        $error = "Please fill in all fields.";
    } else {
        // Update topic
        $update_sql = "UPDATE topics SET title = ?, content = ?, category_id = ? WHERE topic_id = ?";
        $stmt = $pdo->prepare($update_sql);
        
        try {
            $stmt->execute([$title, $content, $category_id, $topic_id]);
            $success = "Topic updated successfully.";
            // Refresh topic data
            $stmt = $pdo->prepare($topic_sql);
            $stmt->execute([$topic_id]);
            $topic = $stmt->fetch();
        } catch (\PDOException $e) {
            $error = "Something went wrong. Please try again later.";
            // Log the error
            error_log("Error updating topic: " . $e->getMessage());
        }
    }
}
?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <h2 class="mb-4">Edit Topic</h2>
        
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <?php if (!empty($success)): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php endif; ?>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id=" . $topic_id); ?>" method="post">
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" id="category_id" name="category_id" required>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo $category['category_id']; ?>" 
                                <?php echo ($topic['category_id'] == $category['category_id']) ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($category['name']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" 
                       value="<?php echo htmlspecialchars($topic['title']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="6" required><?php echo htmlspecialchars($topic['content']); ?></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Update Topic</button>
            <a href="topic.php?id=<?php echo $topic_id; ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
