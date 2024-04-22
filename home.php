<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="styles/globals.css">
</head>

<body>
    <!-- <?php
    require 'functions.php';
    $posts = getPosts($pdo);

    include 'views/header.php';
    echo "<div class='blog-container'>";

    foreach ($posts as $post) {
        // create a container
        echo "<div class='blog-card'>";
        echo "<h2 class='blog-title'>" . htmlspecialchars($post['title']) . "</h2>";
        echo "<h2 class='blog-date'>" . htmlspecialchars($post['created_at']) . "</h2>";
        echo "<p class='blog-content'>" . nl2br(htmlspecialchars($post['content'])) . "</p>";
        echo "</div>";
    }

    echo "</div>";
    include 'views/footer.php';
    ?> -->
    <main class='h-screen w-full flex justify-center align-center'>
        <h1 class='text-4xl font-bold'>Welcome to the Home Page</h1>
    </main>
</body>


</html>