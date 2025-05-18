<?php
// aboutus.php
?>
<?php
require_once 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .about-section {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            padding: 80px 40px;
            background: #ffffff;
        }
        .about-text {
            flex: 1;
            min-width: 300px;
            max-width: 600px;
            padding: 20px;
            transition: transform 0.3s ease;
        }
        .about-text:hover {
            transform: scale(1.02);
        }
        .about-text h1 {
            font-size: 2.8rem;
            color: #2575fc;
            margin-bottom: 20px;
        }
        .about-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
        }
        .about-image {
            flex: 1;
            min-width: 300px;
            text-align: center;
        }
        .about-image img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        @media (max-width: 768px) {
            .about-section {
                flex-direction: column;
                padding: 40px 20px;
            }
            .about-text, .about-image {
                max-width: 90%;
            }
        }
    </style>
</head>
<body>
    
    <section class="about-section">
        <div class="about-text">
            <h1>Our Story</h1>
            <p>
                We are a group of university students united by our passion for nature and technology. Our mission is to create a vibrant, engaging, and informative platform for wildlife enthusiasts, researchers, and conservationists to connect and share ideas. <br><br>
                This nature-based forum is more than just a discussion board — it's a digital sanctuary where curiosity meets conservation. Whether you're here to share breathtaking wildlife encounters, publish research, or organize eco-events, you're part of a growing movement to protect what we love. <br><br>
                Together, we aim to build a community that reflects the beauty, diversity, and urgency of the natural world.
            </p>
        </div>
        <div class="about-image">
            <img src="images/aboutUS.jpg" alt="Nature landscape">
        </div>
    </section>

</body>
</html>


<?php require_once 'includes/footer.php'; ?>
