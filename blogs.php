<!DOCTYPE html>
<html>

<head>
    <title>Blogs Page</title>
    <link rel="stylesheet" href="styles/blogs.css">
</head>

<body>
    <?php
    require 'functions.php';
    $posts = getPosts($pdo);

    include 'views/header.php';
    echo "<div class='blog-container'>";

    foreach ($posts as $post) {
        // create a container
        echo "<div class='card p-4'>";
        echo "<h5 class='card-title'>" . htmlspecialchars($post['title']) . "</h5>";
        echo "<span class='blog-date'>" . htmlspecialchars($post['created_at']) . "</span>";
        echo "<p class='card-text'>" . nl2br(htmlspecialchars($post['content'])) . "</p>";
        echo "<button type='button' class='btn btn-primary btn-sm'>Read More</button>";
        echo "</div>";
    }

    echo "</div>";
    include 'views/footer.php';
    ?>
</body>

</html>