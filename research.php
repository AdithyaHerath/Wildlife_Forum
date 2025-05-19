<?php
require_once 'includes/header.php';
?>

<!-- Hero Section -->
<div class="hero-section my-5">
    <div class="welcome-message bg-light p-4 mb-4 rounded-3 shadow-sm text-center">
        <h1 class="display-5 fw-bold">Research Papers</h1>
        <p class="fs-5 text-muted">Explore the latest research and scientific studies in wildlife conservation and environmental science</p>
    </div>
</div>

<!-- Featured Research Section -->
<div class="container mb-5">
    <h2 class="display-6 fw-bold text-center mb-4">Featured Research</h2>
    <p class="fs-5 text-center mb-5">Discover groundbreaking studies and important findings in wildlife conservation and environmental research.</p>

    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Illegal Wildlife Trade Detection Using AI</h4>
                    <p class="card-text">
                        <span class="short-text">Exploring how artificial intelligence is being used to detect and disrupt illegal wildlife trade networks.</span>
                        <span class="full-text" style="display: none;">
                            This study highlights the use of image recognition, machine learning, and predictive analytics to identify patterns in illegal wildlife trafficking. The paper includes case studies where AI systems helped identify trafficked species via customs x-rays and online marketplaces, contributing to faster law enforcement intervention.
                            <br><br>
                            🔗 <a href="https://doi.org/10.1016/j.ecoinf.2020.101049" target="_blank">Deep Learning for Wildlife Trade Detection (Ecological Informatics)</a><br>
                            🔗 <a href="https://www.unodc.org/unodc/en/wildlife-and-forest-crime/report.html" target="_blank">UNODC Wildlife Crime Report</a><br>
                            🔗 <a href="https://ai.google/social-good/" target="_blank">Google AI for Social Good - Wildlife Projects</a>
                        </span>
                    </p>
                    <a href="#" class="read-more btn btn-outline-primary">Read more...</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h4 class="card-title fw-bold">Satellite Monitoring for Forest Degradation</h4>
                    <p class="card-text">
                        <span class="short-text">A data-driven study on using satellite imagery to detect and monitor forest loss and degradation in protected areas.</span>
                        <span class="full-text" style="display: none;">
                            This research utilizes remote sensing data and deep learning to identify illegal logging and land conversion in biodiversity hotspots. Results show the method's effectiveness in real-time monitoring and triggering alerts to authorities. The paper also evaluates accuracy compared to ground truth data.
                            <br><br>
                            🔗 <a href="https://doi.org/10.1016/j.rse.2017.03.033" target="_blank">Forest Degradation Monitoring via Landsat (Remote Sensing of Environment)</a><br>
                            🔗 <a href="https://www.globalforestwatch.org/" target="_blank">Global Forest Watch - Real-Time Forest Monitoring</a><br>
                            🔗 <a href="https://gedi.umd.edu/" target="_blank">NASA GEDI Lidar Forest Data</a>
                        </span>
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