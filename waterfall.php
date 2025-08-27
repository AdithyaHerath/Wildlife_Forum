<?php
require_once 'includes/header.php';
?>

<!-- Hero Section -->
<div class="hero-section my-5">
    <div class="welcome-message bg-light p-4 mb-4 rounded-3 shadow-sm text-center">
        <h1 class="display-5 fw-bold">Waterfalls</h1>
        <p class="fs-5 text-muted">Discover the majestic beauty of the world's most stunning waterfalls</p>
    </div>
</div>

<!-- Carousel Section -->
<div class="container mb-5">
    <div id="waterfallCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#waterfallCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#waterfallCarousel" data-bs-slide-to="1"></button>
        </div>
        <div class="carousel-inner rounded-3">
            <div class="carousel-item active">
                <img src="images\Waterfalls\5.jpg" class="d-block w-100" alt="Gullfoss">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h2 class="display-6 fw-bold">Gullfoss (Golden Falls)</h2>
                    <p class="fs-5">One of Iceland's most famous and powerful waterfalls, located in the southwest part of the country. It's part of the Golden Circle, a popular tourist route.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images\Waterfalls\6.jpg" class="d-block w-100" alt="Kaieteur Falls">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h2 class="display-6 fw-bold">Kaieteur Falls</h2>
                    <p class="fs-5">Kaieteur Falls remains largely untouched and remote, making it one of the few major waterfalls where you can experience true wilderness without large crowds.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#waterfallCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#waterfallCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>

<!-- Articles Section -->
<div class="container">
    <h2 class="display-6 fw-bold text-center mb-4">Famous Waterfalls</h2>
    <p class="fs-5 text-center mb-5">Waterfalls are powerful forces of nature that shape landscapes, create rich habitats, and contribute to the health of surrounding ecosystems.</p>

    <div class="row mb-5">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="images\Waterfalls\1.jpg" class="card-img-top" alt="Niagara Falls">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Niagara Falls</h4>
                    <p class="card-text">
                        <span class="short-text">Niagara Falls is one of the most iconic and powerful waterfalls in the world, located on the border between the United States and Canada. It consists of three separate waterfalls: the Horseshoe Falls, American Falls, and Bridal Veil Falls. The Horseshoe Falls is the largest and most impressive, located mostly on the Canadian side. Niagara Falls is famous for its breathtaking beauty, powerful flow of water, and stunning mist.</span>
                        <span class="full-text" style="display: none;">Millions of tourists from around the world visit each year to witness its natural beauty and take part in exciting activities like boat rides on the "Maid of the Mist," which brings people close to the thunderous base of the falls. There are also observation decks and tunnels that offer amazing views. At night, the falls are illuminated with colorful lights, making it even more spectacular. In winter, parts of the falls may freeze, creating a magical ice landscape. Niagara Falls is not only a tourist destination but also a source of hydroelectric power for both Canada and the United States. It stands as a symbol of nature's strength and scenic beauty.</span>
                    </p>
                    <a href="#" class="read-more btn btn-outline-primary">Read more...</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="images\Waterfalls\2.jpg" class="card-img-top" alt="Victoria Falls">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Victoria Falls</h4>
                    <p class="card-text">
                        <span class="short-text">Victoria Falls is one of the largest and most magnificent waterfalls in the world, located on the border between Zambia and Zimbabwe in southern Africa. It is known locally as "Mosi-oa-Tunya," which means "The Smoke That Thunders" because of the powerful sound and mist it creates.</span>
                        <span class="full-text" style="display: none;">The falls are about 1.7 kilometers wide and drop around 108 meters into a deep gorge, making it one of the largest waterfalls based on width and height combined. The mighty Zambezi River feeds Victoria Falls, and during the rainy season, the flow becomes incredibly strong, producing a massive spray that can be seen from kilometers away. Visitors can enjoy various viewpoints, such as Knife-Edge Bridge, which offers close-up views of the falls and rainbows formed by the mist. Activities like white-water rafting, bungee jumping, and helicopter rides are also popular here. Victoria Falls is a UNESCO World Heritage Site and attracts travelers from all over the world. Its raw power, natural beauty, and surrounding wildlife make it one of the most unforgettable destinations on Earth.</span>
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
                        <a href="https://www.britannica.com/science/waterfall-geology" target="_blank" class="list-group-item list-group-item-action">Britannica</a>
                        <a href="https://www.nytimes.com/2019/03/13/science/waterfalls-self-forming.html" target="_blank" class="list-group-item list-group-item-action">The New York Times</a>
                        <a href="https://www.bbc.com/news/science-environment-56902340" target="_blank" class="list-group-item list-group-item-action">BBC</a>
                        <a href="https://www.world-of-waterfalls.com/what-types-of-waterfalls-are-there/" target="_blank" class="list-group-item list-group-item-action">World of Waterfalls</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="images\Waterfalls\3.jpg" class="card-img-top" alt="Angel Falls">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Angel Falls</h4>
                    <p class="card-text">
                        <span class="short-text">Angel Falls is the tallest waterfall in the world, located in the heart of Venezuela's Canaima National Park. It drops from a height of 979 meters (3,212 feet), with a continuous plunge of 807 meters (2,648 feet), making it nearly 20 times taller than Niagara Falls. The waterfall flows from the Auyán-Tepuí mountain, one of the flat-topped table mountains known as tepuis, which are unique to this region. Angel Falls is named after Jimmy Angel, an American aviator who was the first to fly over the falls in 1933.</span>
                        <span class="full-text" style="display: none;">Due to its remote location deep in the jungle, reaching Angel Falls requires a combination of plane travel, riverboat rides, and hiking, which adds to its adventurous charm. The waterfall is surrounded by lush rainforest and incredible biodiversity, offering breathtaking scenery and a sense of untouched wilderness. During the rainy season, the falls are at their most powerful, creating a mist that can be seen from miles away. Angel Falls is a true natural wonder and a symbol of Venezuela's wild and majestic landscape.</span>
                    </p>
                    <a href="#" class="read-more btn btn-outline-primary">Read more...</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="images\Waterfalls\4.jpg" class="card-img-top" alt="Iguazu Falls">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Iguazu Falls</h4>
                    <p class="card-text">
                        <span class="short-text">Iguazu Falls is a massive and breathtaking waterfall system located on the border between Argentina and Brazil. It consists of around 275 individual falls spread out over nearly 2.7 kilometers. The most famous and dramatic section is called the “Devil’s Throat,” a U-shaped cliff where the water roars down with incredible power. The falls are surrounded by lush subtropical rainforest filled with exotic wildlife, making it a UNESCO World Heritage Site.</span>
                        <span class="full-text" style="display: none;">Visitors can explore the falls from both the Argentine and Brazilian sides, each offering different perspectives through walkways, viewing platforms, and boat tours. Helicopter rides are also available for a panoramic view. The mist and thunder of the falls create a magical atmosphere, especially during the rainy season when the water volume is at its peak. Iguazu Falls is considered one of the most beautiful and awe-inspiring natural wonders in the world, drawing millions of tourists who come to experience its power and beauty up close.</span>
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