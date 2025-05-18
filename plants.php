<?php
require_once 'includes/header.php';
?>

<!-- Hero Section -->
<div class="hero-section my-5">
    <div class="welcome-message bg-light p-4 mb-4 rounded-3 shadow-sm text-center">
        <h1 class="display-5 fw-bold">Plants</h1>
        <p class="fs-5 text-muted">Discover the fascinating world of plants and their vital role in our ecosystem</p>
    </div>
</div>

<!-- Carousel Section -->
<div class="container mb-5">
    <div id="plantsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#plantsCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#plantsCarousel" data-bs-slide-to="1"></button>
        </div>
        <div class="carousel-inner rounded-3">
            <div class="carousel-item active">
                <img src="images/Plants/p1.jpg" class="d-block w-100" alt="Venus Flytrap">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h2 class="display-6 fw-bold">Venus Flytrap</h2>
                    <p class="fs-5">The Venus Flytrap, native to the Carolinas, is a vulnerable carnivorous plant threatened by habitat loss, poaching, and climate change.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Plants/p2.jpg" class="d-block w-100" alt="Sweetbay Magnolia">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h2 class="display-6 fw-bold">Sweetbay Magnolia</h2>
                    <p class="fs-5">The Sweetbay Magnolia, native to the southeastern U.S., thrives in wetlands and supports local wildlife.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#plantsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#plantsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>

<!-- Articles Section -->
<div class="container">
    <h2 class="display-6 fw-bold text-center mb-4">Plant Species</h2>
    <p class="fs-5 text-center mb-5">Explore the diverse world of plants, from carnivorous species to medicinal herbs and towering trees.</p>

    <div class="row mb-5">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="images/Plants/neem_plant.jpeg" class="card-img-top" alt="Neem">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Neem</h4>
                    <p class="card-text">
                        <span class="short-text">Neem is a highly valued plant known for its strong antibacterial, antifungal, and antiviral properties. It has been used in natural medicine for centuries, especially in Ayurvedic treatments. Neem leaves, bark, and oil are used to treat skin diseases, wounds, and infections. It acts as a natural pesticide, keeping harmful insects away from crops without chemicals.</span>
                        <span class="full-text" style="display: none;"> Neem purifies the air by absorbing pollutants and releasing oxygen. Its roots improve soil health by preventing erosion and promoting fertility. The tree's shade also provides a cooling effect in hot climates, making it an essential part of sustainable, environment-friendly living.</span>
                    </p>
                    <a href="#" class="read-more btn btn-outline-primary">Read more...</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="images/Plants/tulsi_plant.jpg" class="card-img-top" alt="Tulsi">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Tulsi (Holy Basil)</h4>
                    <p class="card-text">
                        <span class="short-text">Tulsi is a sacred herb found in many homes and temples, known for its incredible medicinal properties and ability to release oxygen throughout the day, even at night, which is rare among plants.</span>
                        <span class="full-text" style="display: none;">Tulsi absorbs harmful toxins from the air, such as carbon dioxide and sulfur dioxide, improving air quality. It boosts the immune system, helping the body resist infections and illnesses. Tulsi leaves are used to treat colds, fever, and respiratory problems. Its strong aroma naturally repels mosquitoes and insects, reducing the need for chemical sprays. Tulsi plays a vital role in protecting both health and environment.</span>
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
                        <a href="https://en.wikipedia.org/wiki/List_of_endangered_plants" target="_blank" class="list-group-item list-group-item-action">Wikipedia</a>
                        <a href="https://www.iucnredlist.org/search?query=plants&searchType=species" target="_blank" class="list-group-item list-group-item-action">IUCN Red List</a>
                        <a href="https://www.worldfloraonline.org/" target="_blank" class="list-group-item list-group-item-action">World Flora Online</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="images/Plants/banyan_tree.jpg" class="card-img-top" alt="Banyan">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Banyan</h4>
                    <p class="card-text">
                        <span class="short-text">The banyan tree is a large, long-living tree considered sacred in many cultures. Its wide branches and aerial roots provide shelter for birds, animals, and insects, making it a hub for biodiversity. The tree prevents soil erosion by holding the soil firmly with its extensive root system. It also offers a natural habitat for various small ecosystems to thrive.</span>
                        <span class="full-text" style="display: none;"> The banyan tree is known to purify the air by absorbing carbon dioxide and releasing oxygen. Its dense shade cools the environment, reducing heat in surrounding areas. The banyan is an excellent example of nature's ability to balance and protect ecosystems.</span>
                    </p>
                    <a href="#" class="read-more btn btn-outline-primary">Read more...</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="images/Plants/marigold.jpg" class="card-img-top" alt="Marigold">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Marigold</h4>
                    <p class="card-text">
                        <span class="short-text">Marigold is a bright, colorful flower often grown in home gardens and farms for its eco-friendly qualities. It acts as a natural insect repellent, keeping harmful pests away from nearby crops without using chemical pesticides. The strong aroma of marigold deters insects like mosquitoes and aphids. It's also used in organic farming to maintain soil health and balance pest populations naturally</span>
                        <span class="full-text" style="display: none;">Marigold flowers attract beneficial insects like bees and butterflies, which help in pollination. As it decomposes, marigold enriches the soil with organic matter. This hardy, easy-to-grow plant is not only decorative but also helps support sustainable and healthy ecosystems.</span>
                    </p>
                    <a href="#" class="read-more btn btn-outline-primary">Read more...</a>
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