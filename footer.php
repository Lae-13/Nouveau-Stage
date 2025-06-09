<?php wp_footer(); ?>

<footer></footer>


</body>

</html>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('button[data-url]').forEach(function(btn) {
        btn.addEventListener('click', function() {
            const url = btn.getAttribute('data-url');
            if (url) {
                window.location.href = url;
            }
        });
    });
});
</script>