<?php
require_once 'includes/header.php';

// Check if user is admin first
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

// Get recent users
$recent_users_sql = "SELECT * FROM users ORDER BY created_at DESC LIMIT 5";
$recent_users_stmt = $pdo->query($recent_users_sql);
$recent_users = $recent_users_stmt->fetchAll();

// Get all events with creator info
$events_sql = "
    SELECT e.event_id, e.title, e.description, e.event_date, u.username 
    FROM events e 
    JOIN users u ON e.user_id = u.user_id 
    ORDER BY e.event_date ASC
";
$events_stmt = $pdo->query($events_sql);
$events = $events_stmt->fetchAll();
?>

<h2 class="mb-4">Admin Panel</h2>

<div class="row mb-4">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Users</h5>
                <p class="card-text display-4"><?php echo $stats['users']; ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Topics</h5>
                <p class="card-text display-4"><?php echo $stats['topics']; ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Replies</h5>
                <p class="card-text display-4"><?php echo $stats['replies']; ?></p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Left Column -->
    <div class="col-md-6">
        <!-- Create Category -->
        <div class="card mb-4">
            <div class="card-header"><h3 class="card-title h5 mb-0">Create New Category</h3></div>
            <div class="card-body">
                <?php if (!empty($error)): ?><div class="alert alert-danger"><?php echo $error; ?></div><?php endif; ?>
                <?php if (!empty($success)): ?><div class="alert alert-success"><?php echo $success; ?></div><?php endif; ?>
                <form action="" method="post">
                    <input type="hidden" name="action" value="create_category">
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Category</button>
                </form>
            </div>
        </div>

        <!-- Recent Users -->
        <div class="card mb-4">
            <div class="card-header"><h3 class="card-title h5 mb-0">Recent Users</h3></div>
            <div class="card-body">
                <div class="list-group">
                    <?php foreach ($recent_users as $user): ?>
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-0"><?php echo htmlspecialchars($user['username']); ?></h6>
                                <small class="text-muted">Joined <?php echo date('M j, Y', strtotime($user['created_at'])); ?></small>
                            </div>
                            <?php if ($user['is_admin']): ?>
                                <span class="badge bg-primary">Admin</span>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Column -->
    <div class="col-md-6">
        <!-- Categories -->
        <div class="card mb-4">
            <div class="card-header"><h3 class="card-title h5 mb-0">Categories</h3></div>
            <div class="card-body">
                <div class="list-group">
                    <?php foreach ($categories as $category): ?>
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-0"><?php echo htmlspecialchars($category['name']); ?></h6>
                                <small class="text-muted"><?php echo $category['topic_count']; ?> topics</small>
                            </div>
                            <div>
                                <a href="edit_category.php?id=<?php echo $category['category_id']; ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="delete_category.php?id=<?php echo $category['category_id']; ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Recent Topics -->
        <div class="card mb-4">
            <div class="card-header"><h3 class="card-title h5 mb-0">Recent Topics</h3></div>
            <div class="card-body">
                <div class="list-group">
                    <?php foreach ($recent_topics as $topic): ?>
                        <div class="list-group-item">
                            <h6 class="mb-1">
                                <a href="topic.php?id=<?php echo $topic['topic_id']; ?>">
                                    <?php echo htmlspecialchars($topic['title']); ?>
                                </a>
                            </h6>
                            <small class="text-muted">
                                in <?php echo htmlspecialchars($topic['category_name']); ?> | 
                                by <?php echo htmlspecialchars($topic['username']); ?> | 
                                <?php echo date('M j, Y', strtotime($topic['created_at'])); ?>
                            </small>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Events Table -->
        <div class="card mb-4">
            <div class="card-header"><h3 class="card-title h5 mb-0">Scheduled Events</h3></div>
            <div class="card-body">
                <?php if (count($events) > 0): ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Created By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($events as $event): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($event['title']); ?></td>
                                        <td><?php echo htmlspecialchars($event['event_date']); ?></td>
                                        <td><?php echo htmlspecialchars($event['username']); ?></td>
                                        <td>
                                            <a href="admin.php?delete_event=<?php echo $event['event_id']; ?>" 
                                               class="btn btn-sm btn-danger"
                                               onclick="return confirm('Are you sure you want to delete this event?');">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <p>No events scheduled yet.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
