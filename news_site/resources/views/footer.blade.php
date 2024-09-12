<div id="footer" class="bg-gray-800 text-white py-4">
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="text-center">
                <span>© Copyright 2024 | Powered by
                    <a href="#" class="text-blue-500 hover:text-blue-300">Chaman Sarkar</a>
                </span>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var descriptions = document.querySelectorAll('.description');
        descriptions.forEach(function(description) {
            var content = description.textContent;
            if (content.length > 500) {
                description.textContent = content.substring(0, 500) + '...';
            }
        });
    });
</script>

</html>
