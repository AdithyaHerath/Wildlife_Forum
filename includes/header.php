<?php
session_start();
require_once 'config.php';

$logged_in = isset($_SESSION['user_id']);
$is_admin = isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main_Header | Wildconnect</title>
    <!-- boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-secondary d-flex align-items-center" href="index.php">
                <img src="images/logo.png" alt="Logo" class="rounded" style="height: 40px; width: auto;">
                <span class="ms-2">Forum</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">    
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="category.php">Forums</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="research.php">Research Papers</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="wildlifeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Wildlife
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="wildlifeDropdown">
                            <li><a class="dropdown-item" href="wildlife.php">Wildlife</a></li>
                            <li><a class="dropdown-item" href="animal.php">Animals</a></li>
                            <li><a class="dropdown-item" href="forest.php">Forests</a></li>
                            <li><a class="dropdown-item" href="plants.php">Plants</a></li>
                            <li><a class="dropdown-item" href="seas.php">Seas</a></li>
                            <li><a class="dropdown-item" href="waterfall.php">Waterfalls</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="events.php">Events & Meetups</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutUs.php">About Us</a></li>

                    <?php if ($is_admin): ?>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="admin.php">Admin Panel</a>
                        </li>
                    <?php endif; ?>
                </ul>

                <ul class="navbar-nav">
                    <?php if ($logged_in): ?>
                        <li class="nav-item">
                            <span class="nav-link text-secondary">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Container -->
    <div class="container flex-grow-1 mt-4">