<?php
require_once 'includes/header.php';
?>

<!-- Hero Section -->
<div class="hero-section my-5">
    <div class="welcome-message bg-light p-4 mb-4 rounded-3 shadow-sm text-center">
        <h1 class="display-5 fw-bold">Seas</h1>
        <p class="fs-5 text-muted">Discover the wonders of our planet's vast oceans and seas</p>
    </div>
</div>

<!-- Carousel Section -->
<div class="container mb-5">
    <div id="seasCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#seasCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#seasCarousel" data-bs-slide-to="1"></button>
        </div>
        <div class="carousel-inner rounded-3">
            <div class="carousel-item active">
                <img src="images\Seas\caribbean_sea.jpg" class="d-block w-100" alt="Caribbean Sea">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h2 class="display-6 fw-bold">Caribbean Sea</h2>
                    <p class="fs-5">A warm, tropical sea known for its crystal-clear waters and rich biodiversity. Home to coral reefs, marine life, and vital to tourism and trade in the region.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images\Seas\sea_of_Japan.jpg" class="d-block w-100" alt="Sea of Japan">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h2 class="display-6 fw-bold">Sea of Japan</h2>
                    <p class="fs-5">Located between Japan, Korea, and Russia, this sea is rich in marine resources. It plays a key role in regional climate, fishing, and cultural exchange.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#seasCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#seasCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>

<!-- Articles Section -->
<div class="container">
    <h2 class="display-6 fw-bold text-center mb-4">Marine Ecosystems</h2>
    <p class="fs-5 text-center mb-5">Seas are smaller, partially enclosed bodies of saltwater that connect to oceans and support rich marine life.</p>

    <div class="row mb-5">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="images\Seas\red_sea.jpg" class="card-img-top" alt="Red Sea">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Red Sea</h4>
                    <p class="card-text">
                        <span class="short-text"> The Red Sea is a seawater inlet of the Indian Ocean, lying between Africa and Asia. It's one of the world's saltiest bodies of water and is renowned for its vibrant coral reefs, which host over 1,000 species of invertebrates and 200 types of hard and soft coral. The sea gets its name either from periodic blooms of red-colored algae or the surrounding red-colored mountains.</span>
                        <span class="full-text" style="display: none;">The Red Sea plays a vital role in marine biodiversity and global shipping, with the Suez Canal connecting it to the Mediterranean. Its warm, clear waters make it a prime destination for divers and marine researchers. Despite its beauty, the Red Sea faces environmental threats from coastal development and shipping pollution.</span> 
                    </p>
                    <a href="#" class="read-more btn btn-outline-primary">Read more...</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="images\Seas\sargasso _sea.jpeg" class="card-img-top" alt="Sargasso Sea">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Sargasso Sea</h4>
                    <p class="card-text">
                        <span class="short-text">The Sargasso Sea is a unique region of the Atlantic Ocean, defined not by coastlines but by ocean currents. It's located entirely within the North Atlantic Subtropical Gyre and is bounded by currents rather than land. The sea is named after the floating Sargassum seaweed that carpets its surface, providing a vital habitat for many marine species including eels, turtles, and juvenile fish. Unlike other seas, its water is notably clear and deep blue.</span>
                        <span class="full-text" style="display: none;">The Sargasso Sea is critical for the lifecycle of the American and European eels, which spawn in its waters. It faces ecological threats from pollution and climate change, making international conservation efforts essential to preserve its unique biodiversity and ecological role.</span>
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
                        <a href="https://www.scienceandthesea.org/articles" target="_blank" class="list-group-item list-group-item-action">Science and the Sea</a>
                        <a href="https://www.sciencenews.org/topic/oceans" target="_blank" class="list-group-item list-group-item-action">Science News</a>
                        <a href="https://www.nationalgeographic.com/environment/topic/oceans/" target="_blank" class="list-group-item list-group-item-action">National Geographic</a>
                        <a href="https://www.noaa.gov/education/resource-collections/marine-life" target="_blank" class="list-group-item list-group-item-action">National Oceanic and Atmospheric Administration</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="images\Seas\deadsea.jpg" class="card-img-top" alt="Dead Sea">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Dead Sea</h4>
                    <p class="card-text">
                        <span class="short-text">The Dead Sea, located between Jordan and Israel, is one of the saltiest bodies of water on Earth, with a salinity over ten times that of oceans. This extreme salt concentration makes it impossible for most life forms to survive, hence the name "Dead" Sea. Its high mineral content also gives it therapeutic properties, attracting tourists seeking health benefits.</span>
                        <span class="full-text" style="display: none;">The Dead Sea lies at the Earth's lowest land elevation, around 430 meters below sea level. However, the sea is shrinking rapidly due to water diversion and mineral extraction, raising environmental concerns. Efforts are underway to address the ecological decline, including proposed projects like the Red Sea-Dead Sea Water Conveyance. The Dead Sea remains a natural wonder and a symbol of geological and environmental significance.</span>
                    </p>
                    <a href="#" class="read-more btn btn-outline-primary">Read more...</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="images\Seas\balticsea.jpg" class="card-img-top" alt="Baltic Sea">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Baltic Sea</h4>
                    <p class="card-text">
                        <span class="short-text">The Baltic Sea is a brackish inland sea in Northern Europe, bordered by countries including Sweden, Finland, and Poland. It's one of the largest bodies of brackish water in the world, where freshwater from rivers mixes with saltwater from the North Sea. This unique composition supports a mix of marine and freshwater species.</span>
                        <span class="full-text" style="display: none;">The sea is shallow and sensitive to environmental changes, facing serious challenges from pollution, overfishing, and eutrophication due to agricultural runoff. Despite this, the Baltic Sea has rich historical and cultural significance, serving as a major trade route for centuries. Efforts by regional countries and international organizations aim to protect and restore its ecological balance while promoting sustainable use.</span>
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