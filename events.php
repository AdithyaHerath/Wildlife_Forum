<?php
require_once 'includes/header.php';


if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $event_date = $_POST['event_date'];

    // Assuming the current user is the admin and is logged in, use their user_id
    $user_id = $_SESSION['user_id']; 

    if (!empty($title) && !empty($description) && !empty($event_date)) {
       
        $stmt = $conn->prepare("INSERT INTO events (title, description, event_date, user_id) VALUES (?, ?, ?, ?)");
        $stmt->execute([$title, $description, $event_date, $user_id]);
    }
}

// Handle event deletion 
if (isset($_GET['delete']) && isset($_SESSION['is_admin']) && $_SESSION['is_admin']) {
    $event_id = $_GET['delete'];

    
    $delete_stmt = $conn->prepare("DELETE FROM events WHERE event_id = ?");
    $delete_stmt->execute([$event_id]);
}

// Get upcoming events
$result = $conn->query("SELECT * FROM events ORDER BY event_date ASC");

// Check if there are any events
$events_exist = $result->rowCount() > 0;
?>

<div class="container my-5">
    <h2 class="mb-4">Events & Meetups</h2>

    <?php if (!$events_exist): ?>
        <div class="alert alert-info">
            We are organizing an event soon! Stay tuned for updates.
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']): ?>
        <!-- Event Creation Form -->
        <div class="card mb-4">
            <div class="card-header">Create New Event</div>
            <div class="card-body">
                <form method="POST" action="events.php">
                    <div class="mb-3">
                        <label for="title" class="form-label">Event Title</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Event Description</label>
                        <textarea class="form-control" name="description" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="event_date" class="form-label">Event Date</label>
                        <input type="date" class="form-control" name="event_date" required>
                    </div>
                    <button type="submit" class="btn btn-success">Create Event</button>
                </form>
            </div>
        </div>
    <?php endif; ?>

    <!-- Event List -->
    <h4>Upcoming Events</h4>
    <?php if ($events_exist): ?>
        <ul class="list-group">
            <?php while ($row = $result->fetch()): ?>
                <li class="list-group-item">
                    <h5><?php echo htmlspecialchars($row['title']); ?></h5>
                    <p><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
                    <small class="text-muted">Date: <?php echo htmlspecialchars($row['event_date']); ?></small>

                    <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']): ?>
                        <!--Delete Button -->
                        <a href="events.php?delete=<?php echo $row['event_id']; ?>" 
                           class="btn btn-danger btn-sm float-end" 
                           onclick="return confirm('Are you sure you want to delete this event?');">
                            Delete
                        </a>
                    <?php endif; ?>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>No events posted yet.</p>
    <?php endif; ?>
</div>

<?php require_once 'includes/footer.php'; ?>