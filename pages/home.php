<main class="text-center fw-bold">
    <h1 class="text-container pb-2">New blogs</h1>
    <div class="container">
        <?php
            if (isset($_SESSION['articles'])) {
                foreach ($_SESSION['articles'] as $article) {
                    echo "<hr class='line'>";
                    echo "<div class='text-container-6 mb-5'>";
                    echo "<div class='row'>";
                    echo "<a class='fs-1 mb-3'>" . $article['title'] . "</a>";
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "<div class='col-md-6'>";
                    echo "<img src='" . $article['image'] . "' class='img-fluid'>";
                    echo "</div>";
                    echo "<div class='col-md-6'>";
                    echo "<p class='fs-4 textjustify'>" . $article['text'] . "</p>";
                    echo "</div>";
                    echo "</div>";
                }
            }
        ?>
    </div>
</main>