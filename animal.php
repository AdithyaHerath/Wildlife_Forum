<?php
require_once 'includes/header.php';
?>

<!-- Hero Section -->
<div class="hero-section my-5">
    <div class="welcome-message bg-light p-4 mb-4 rounded-3 shadow-sm text-center">
        <h1 class="display-5 fw-bold">Animals</h1>
        <p class="fs-5 text-muted">Discover the fascinating world of animals and their unique characteristics</p>
    </div>
</div>

<!-- Carousel Section -->
<div class="container mb-5">
    <div id="animalCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#animalCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#animalCarousel" data-bs-slide-to="1"></button>
        </div>
        <div class="carousel-inner rounded-3">
            <div class="carousel-item active">
                <img src="images/Animals/giant_panda.jpg" class="d-block w-100" alt="Giant Panda">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h2 class="display-6 fw-bold">The Giant Panda</h2>
                    <p class="fs-5">The giant panda is a unique and iconic species, known for its gentle nature and near-exclusive bamboo diet. It holds special cultural significance in China and serves as a global symbol for wildlife conservation.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Animals/orangutan.jpg" class="d-block w-100" alt="Orangutan">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h2 class="display-6 fw-bold">Orangutan</h2>
                    <p class="fs-5">Orangutans are intelligent, tree-dwelling great apes found in Borneo and Sumatra. Critically endangered, fewer than 135,000 remain in the wild, making their conservation urgent.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#animalCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#animalCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>

<!-- Articles Section -->
<div class="container">
    <h2 class="display-6 fw-bold text-center mb-4">This Week's Animals Articles</h2>
    <p class="fs-5 text-center mb-5">Animals are multicellular, eukaryotic organisms that play essential roles in ecological processes such as nutrient cycling, pollination, and food web dynamics.</p>

    <div class="row mb-5">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="images\Animals\rhinoceros.jpg" class="card-img-top" alt="Rhinoceros">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Rhinoceros</h4>
                    <p class="card-text">
                        <span class="short-text">Rhinos, surviving for over 50 million years, once roamed widely but now exist in fragmented populations. Their horns, made of keratin like our nails, continuously grow and can reach impressive lengths of 1.5 meters. Despite their bulk, rhinos can charge at speeds of 30-40 mph.</span>
                        <span class="full-text" style="display: none;">They communicate through a range of sounds and even use their dung as a smelly message board. Sadly, three of the five rhino species are critically endangered, with some populations numbering fewer than 50 individuals, making them truly on the brink</span>
                    </p>
                    <a href="#" class="read-more btn btn-outline-primary">Read more...</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="images\Animals\snow_leopard.jpg" class="card-img-top" alt="Snow Leopard">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Snow Leopard</h4>
                    <p class="card-text">
                        <span class="short-text">"Ghost of the mountains" isn't just a cool nickname; it reflects their incredible elusiveness, with over 70% of their potential habitat unexplored by humans. Their fur isn't uniformly patterned; the unique rosette patterns act like fingerprints, allowing researchers to identify individuals.</span>
                        <span class="full-text" style="display: none;">Unlike other big cats, snow leopards can't roar, communicating instead with hisses, growls, and a unique "chuffing" sound. Their powerful legs allow them to leap up to 50 feet, and their long tails, almost as long as their bodies, aid in balance and provide warmth. They're solitary creatures, with mothers raising cubs alone for nearly two years, teaching them survival skills in their harsh, high-altitude homes.</span>
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
                        <a href="https://www.wwf.org.uk/learn/wildlife" target="_blank" class="list-group-item list-group-item-action">World Wide Fund of Nature</a>
                        <a href="https://www.nationalgeographic.com/animals" target="_blank" class="list-group-item list-group-item-action">National Geographic</a>
                        <a href="https://www.ifaw.org/journal/world-most-endangered-animals" target="_blank" class="list-group-item list-group-item-action">International Fund for Animal Welfare</a>
                        <a href="https://www.sciencenews.org/topic/animals" target="_blank" class="list-group-item list-group-item-action">Science News</a>
                        <a href="https://www.bbcearth.com/nature" target="_blank" class="list-group-item list-group-item-action">BBC Earth</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="images\Animals\hyena.jpg" class="card-img-top" alt="Hyena">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Hyena</h4>
                    <p class="card-text">
                        <span class="short-text">Hyenas possess a social structure unlike most carnivores: a matriarchal society where females, even the lowest ranking, dominate all males. Their "laugh" isn't amusement but a vocalization indicating excitement, frustration, or submission, with a complex repertoire of over 11 distinct sounds for communication over long distances.</span>
                        <span class="full-text" style="display: none;">Remarkably, female spotted hyenas have a pseudo-penis and false scrotum, a unique biological feature that has historically led to myths of hermaphroditism. Their bite force is immense, allowing them to crush bones and extract nutrients that other predators leave behind.</span>
                    </p>
                    <a href="#" class="read-more btn btn-outline-primary">Read more...</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="images\Animals\sloth.jpeg" class="card-img-top" alt="Sloths">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Sloths</h4>
                    <p class="card-text">
                        <span class="short-text">Sloths, the world's slowest mammals, have a metabolic rate so low that they can sometimes take up to a month to digest a single meal! Their fur hosts a unique ecosystem of algae, which provides camouflage and even nutrients they lick off. Their three-chambered heart beats so slowly (around 6 times a minute) that they can hold their breath underwater for up to 40 minutes by slowing their heart rate even further. Sloths are surprisingly strong swimmers and can move three times faster in water than on land.</span>
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
