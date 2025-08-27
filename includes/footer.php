</div>
<footer class="bg-light text-secondary py-4 mt-5 border-top">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-md-2 mb-3 mb-md-0">
                <img src="images/logo.png" alt="Logo" class="img-fluid rounded" style="height: 60px;">
            </div>

            <!-- description -->
            <div class="col-md-6 text-center">
                <h5 class="text-dark">WildConnect - Connect with Nature</h5>
                <p>
                    <a href="aboutUs.php" style="color: #f39c12; text-decoration: none; margin: 0 10px;">About Us</a> | 
                    <a href="mailto:wildconnect@gmail.com" target="_blank" style="color: #f39c12; text-decoration: none; margin: 0 10px;">Contact</a>
                </p>
                
                <p class="text-muted mb-0">&copy; <?php echo date('Y'); ?> WildConnect. All Rights Reserved.</p>
            </div>

        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>
</body>
</html>