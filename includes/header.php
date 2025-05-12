<?php
session_start();
require_once 'config.php';

$logged_in = isset($_SESSION['user_id']);
$is_admin = isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true;
?>