<?php
require_once 'includes/header.php';
?>

<!-- Hero Section -->
<div class="hero-section my-5">
    <div class="welcome-message bg-light p-4 mb-4 rounded-3 shadow-sm text-center">
        <h1 class="display-5 fw-bold">heading</h1>
        <p class="fs-5 text-muted">description</p>
    </div>
</div>

<!-- Carousel Section -->
<div class="container mb-5">
    <div id="forestCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#forestCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#forestCarousel" data-bs-slide-to="1"></button>
        </div>
        <div class="carousel-inner rounded-3">
            <div class="carousel-item active">
                <img src="sample.jpeg" class="d-block w-100" alt="pic">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h2 class="display-6 fw-bold">txt</h2>
                    <p class="fs-5">description</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="sample.jpeg" class="d-block w-100" alt="pic">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h2 class="display-6 fw-bold">txt</h2>
                    <p class="fs-5">description</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#forestCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#forestCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>

<!-- Articles Section -->
<div class="container">
    <h2 class="display-6 fw-bold text-center mb-4">text</h2>
    <p class="fs-5 text-center mb-5">description</p>

    <div class="row mb-5">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="sample.jpeg" class="card-img-top" alt="pic">
                <div class="card-body">
                    <h4 class="card-title fw-bold">text</h4>
                    <p class="card-text">
                        <span class="short-text">description</span>
                        <span class="full-text" style="display: none;">description</span>
                    </p>
                    <a href="#" class="read-more btn btn-outline-primary">Read more...</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="sample.jpg" class="card-img-top" alt="pic">
                <div class="card-body">
                    <h4 class="card-title fw-bold">text</h4>
                    <p class="card-text">
                        <span class="short-text">description</span>
                        <span class="full-text" style="display: none;">description</span>
                    </p>
                    <a href="#" class="read-more btn btn-outline-primary">Read more...</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h4 class="card-title fw-bold">More Resources</h4>
                    <div class="list-group list-group-flush">
                        <a href="https://www.sample" target="_blank" class="list-group-item list-group-item-action">text</a>
                        <a href="https://www.sample" target="_blank" class="list-group-item list-group-item-action">text</a>
                        <a href="https://www.sample" target="_blank" class="list-group-item list-group-item-action">text</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="sample.jpg" class="card-img-top" alt="pic">
                <div class="card-body">
                    <h4 class="card-title fw-bold">text</h4>
                    <p class="card-text">
                        <span class="short-text">description</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="sample.jpg" class="card-img-top" alt="pic">
                <div class="card-body">
                    <h4 class="card-title fw-bold">text</h4>
                    <p class="card-text">
                        <span class="short-text">description</span>
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.read-more').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const cardBody = this.closest('.card-body');
            const fullText = cardBody.querySelector('.full-text');
            const shortText = cardBody.querySelector('.short-text');

            if (fullText.style.display === 'none') {
                fullText.style.display = 'block';
                shortText.style.display = 'none';
                this.textContent = 'Read less...';
            } else {
                fullText.style.display = 'none';
                shortText.style.display = 'block';
                this.textContent = 'Read more...';
            }
        });
    });
});
</script>

<?php require_once 'includes/footer.php'; ?>