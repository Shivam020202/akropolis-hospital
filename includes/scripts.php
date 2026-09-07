  </div>

  <!-- JavaScript for interactivity -->
  <script src="/js/app.js"></script>
  <script>
    // Initialize current page for JavaScript
    window.currentPage = <?php echo json_encode($current_page ?? 'home'); ?>;

    // Initialize Lucide icons
    document.addEventListener('DOMContentLoaded', function() {
      if (typeof lucide !== 'undefined') {
        lucide.createIcons();
      }
    });
  </script>

  <!-- Glassmorphism & Animation Effects -->
  <script src="/js/effects.js"></script>
</body>
</html>
