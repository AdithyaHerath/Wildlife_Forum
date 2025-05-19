<?php 
require_once 'includes/header.php'; 
?>

<!-- Hero Section -->
<div div class="hero-section my-5">
    <!-- Welcome Message -->
    <div class="welcome-message bg-light p-4 mb-4 rounded-3 shadow-sm text-center">
        <h1 class="display-5 fw-bold">Welcome to WildConnect</h1>
        <p class="fs-5 text-muted">Where wildlife enthusiasts meet to share knowledge, spark discussions, and connect with nature.</p>
    </div>

    <!-- Image Carousel -->
 <div id="heroCarousel" class="carousel slide shadow-sm mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner rounded-3">

            <!-- Slide 1: Wildfires -->
            <div class="carousel-item active">
                <img src="images/wildfire.jpeg" class="d-block w-100" alt="Wildfire Image">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h5 class="fw-bold text-warning">Wildfires Surge Across the Globe</h5>
                         <p class="text-light">Increasing temperatures and deforestation are fueling more intense wildfires — a call to global action.</p>
                </div>
            </div>

            <!-- Slide 2: Turtle Conservation -->
            <div class="carousel-item">
                <img src="images/turtal_release.jpg" class="d-block w-100" alt="Turtle Release Image">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h5 class="fw-bold text-warning">Sea Turtle Hatchlings Released Safely</h5>
                         <p class="text-light">A community-led initiative helps over 2,000 Olive Ridley hatchlings reach the ocean safely.</p>
                </div>
            </div>

            <!-- Slide 3: Snow Leopard -->
            <div class="carousel-item">
                <img src="images/snow_leopards.jpg" class="d-block w-100" alt="Snow Leopard Image">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h5 class="fw-bold text-warning">Snow Leopard Captured on Camera</h5>
                         <p class="text-light">A rare sighting in the Himalayas renews hope for one of the world's most elusive big cats.</p>
                </div>
            </div>            
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
 </div>

</div>

<!-- End Hero Section -->

<?php
// Get all categories
$categories_sql = "SELECT * FROM categories ORDER BY name";
$categories_stmt = $pdo->query($categories_sql);
$categories = $categories_stmt->fetchAll();
?>

<h2 class="mb-4">Forum Categories</h2>

<?php if ($logged_in): ?>
    <div class="mb-4">
        <a href="create_topic.php" class="btn btn-primary">Create New Topic</a>
    </div>
<?php endif; ?>

<?php foreach ($categories as $category): ?>
    <div class="category-box">
        <h3>
            <a href="category.php?id=<?php echo $category['category_id']; ?>">
                <?php echo htmlspecialchars($category['name']); ?>
            </a>
        </h3>
        <p><?php echo htmlspecialchars($category['description']); ?></p>

        <?php
        // Get latest topics for this category
        $topics_sql = "SELECT t.*, u.username, 
                      (SELECT COUNT(*) FROM replies WHERE topic_id = t.topic_id) as reply_count 
                      FROM topics t 
                      JOIN users u ON t.user_id = u.user_id 
                      WHERE t.category_id = ? 
                      ORDER BY t.created_at DESC 
                      LIMIT 3";

        $topics_stmt = $pdo->prepare($topics_sql);
        $topics_stmt->execute([$category['category_id']]);
        $topics = $topics_stmt->fetchAll();
        ?>

    </div>
<?php endforeach; ?>


<?php require_once 'includes/footer.php'; ?>
