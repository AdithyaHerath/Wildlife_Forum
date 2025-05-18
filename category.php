<?php
require_once 'includes/header.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("location: index.php");
    exit();
}

$category_id = $_GET['id'];

// Get category details
$category_sql = "SELECT * FROM categories WHERE category_id = ?";
$stmt = $conn->prepare($category_sql);
$stmt->execute([$category_id]);
$category = $stmt->fetch();

if (!$category) {
    header("location: index.php");
    exit();
}

// Get all topics in this category
$topics_sql = "SELECT t.*, u.username, 
              (SELECT COUNT(*) FROM replies WHERE topic_id = t.topic_id) as reply_count 
              FROM topics t 
              JOIN users u ON t.user_id = u.user_id 
              WHERE t.category_id = ? 
              ORDER BY t.created_at DESC";

$stmt = $conn->prepare($topics_sql);
$stmt->execute([$category_id]);
$topics_result = $stmt;
?>
<div class="mb-4">
    <h2><?php echo htmlspecialchars($category['name']); ?></h2>
    <p class="text-muted"><?php echo htmlspecialchars($category['description']); ?></p>
</div>

<?php if ($logged_in): ?>
    <div class="mb-4">
        <a href="create_topic.php?category_id=<?php echo $category_id; ?>" class="btn btn-primary">
            Create New Topic
        </a>
    </div>
<?php endif; ?>