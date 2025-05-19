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
            </div>

            <!-- Slide 2: Turtle Conservation -->
            <div class="carousel-item">
                <img src="images/turtal_release.jpg" class="d-block w-100" alt="Turtle Release Image">
            </div>

            <!-- Slide 3: Snow Leopard -->
            <div class="carousel-item">
                <img src="images/snow_leopards.jpg" class="d-block w-100" alt="Snow Leopard Image">
            </div>

            
        </div>
 </div>

</div>

<?php require_once 'includes/footer.php'; ?>
