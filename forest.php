<?php
require_once 'includes/header.php';
?>

<div class="hero-section my-5">
    <div class="welcome-message bg-light p-4 mb-4 rounded-3 shadow-sm text-center">
        <h1 class="display-5 fw-bold">Forests</h1>
        <p class="fs-5 text-muted">Explore the diverse and vital ecosystems of our planet's forests</p>
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
                <img src="images/Forests/5.jpeg" class="d-block w-100" alt="Redwood National and State Parks">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h2 class="display-6 fw-bold">Redwood National and State Parks</h2>
                    <p class="fs-5">Located in California, USA, the Redwood National and State Parks protect the tallest trees on Earth — the coast redwoods, some towering over 380 feet and living for more than 2,000 years.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Forests/6.jpeg" class="d-block w-100" alt="The Black Forest">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h2 class="display-6 fw-bold">The Black Forest</h2>
                    <p class="fs-5">The Black Forest in Germany is famous for its dense evergreen woods, fairy tale inspiration, and rich traditions like Black Forest cake and cuckoo clocks.</p>
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
    <h2 class="display-6 fw-bold text-center mb-4">Forest Ecosystems</h2>
    <p class="fs-5 text-center mb-5">Forests play a vital role in maintaining the balance of nature, protecting the environment, and supporting healthy ecosystems.</p>

    <div class="row mb-5">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="images/Forests/1.jpeg" class="card-img-top" alt="The Amazon Rainforest">
                <div class="card-body">
                    <h4 class="card-title fw-bold">The Amazon Rainforest</h4>
                    <p class="card-text">
                        <span class="short-text">The Amazon Rainforest, often called the "lungs of the Earth," is the largest tropical rainforest, covering about 5.5 million square kilometers across nine countries. It is home to one-tenth of all known species, including the jaguar, sloth, and poison dart frog.</span>
                        <span class="full-text" style="display: none;">The Amazon River, the world's second-longest river, winds through this dense forest. Beyond its rich biodiversity, the Amazon plays a crucial role in regulating the global climate by absorbing vast amounts of carbon dioxide. The forest is also home to many indigenous communities who rely on it for their livelihood.</span>
                    </p>
                    <a href="#" class="read-more btn btn-outline-primary">Read more...</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="images/Forests/2.jpg" class="card-img-top" alt="The Congo Rainforest">
                <div class="card-body">
                    <h4 class="card-title fw-bold">The Congo Rainforest</h4>
                    <p class="card-text">
                        <span class="short-text">The Congo Rainforest, second in size only to the Amazon, spans across six countries in Central Africa. It holds the world's largest tropical peatland, a massive carbon store vital for the global climate. Unique species such as forest elephants, okapis, and bonobos inhabit this forest. </span>
                        <span class="full-text" style="display: none;">It is also a cultural treasure, housing numerous indigenous tribes who have lived sustainably within the forest for thousands of years. The Congo Basin's rivers and swamps create a complex and rich ecosystem that supports incredible biodiversity.</span>
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
                        <a href="https://www.nature.com/subjects/forestry" target="_blank" class="list-group-item list-group-item-action">Nature</a>
                        <a href="https://wwf.panda.org/discover/our_focus/forests_practice/importance_forests/" target="_blank" class="list-group-item list-group-item-action">World Wide Fund of Nature</a>
                        <a href="https://academic.oup.com/forestry/" target="_blank" class="list-group-item list-group-item-action">Oxford Academic</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="images/Forests/3.jpg" class="card-img-top" alt="The Boreal Forest">
                <div class="card-body">
                    <h4 class="card-title fw-bold">The Boreal Forest</h4>
                    <p class="card-text">
                        <span class="short-text">The Boreal Forest, also known as the Taiga, is the largest land biome, stretching across Canada, Russia, Alaska, and Scandinavia. Unlike tropical forests, it consists mainly of coniferous trees like spruce, fir, and pine. This forest acts as a massive carbon sink, storing more carbon than any other terrestrial ecosystem. It is home to animals adapted to harsh winters, such as moose, bears, and lynxes. The Taiga plays a crucial role in Earth's oxygen production and climate stability.</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="images/Forests/4.jpg" class="card-img-top" alt="Daintree Rainforest">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Daintree Rainforest</h4>
                    <p class="card-text">
                        <span class="short-text">Located in Queensland, Australia, the Daintree Rainforest is one of the world's oldest tropical rainforests, estimated to be over 180 million years old. It is incredibly rich in biodiversity, containing ancient plant species like the idiospermum, one of the earliest flowering plants. The Daintree is where the rainforest meets the reef, as it lies adjacent to the Great Barrier Reef. Unique creatures such as the cassowary and tree kangaroo call this rainforest home, making it a living museum of evolutionary history.</span>
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