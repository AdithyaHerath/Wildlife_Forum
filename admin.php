<?php include("includes/header.php"); 

// Check if user is admin
if (!$logged_in || !$is_admin) {
    header("location: index.php");
    exit();
}

$error = '';
$success = '';

?>
<?php include("includes/footer.php"); ?>
