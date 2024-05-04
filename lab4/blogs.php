<!DOCTYPE html>
<html>

<head>
    <title>Blogs Page</title>
    <link rel="stylesheet" href="/styles/blogs.css">
</head>

<body>
    <?php
    require 'functions.php';
    $posts = getPosts($pdo);

    echo "<div class='blog-container'>";

    foreach ($posts as $post) {
        // create a container
        echo "<div class='card p-4'>";
        echo "<h5 class='card-title'>" . htmlspecialchars($post['title']) . "</h5>";
        echo "<span class='blog-date'>" . htmlspecialchars($post['created_at']) . "</span>";
        echo "<p class='card-text'>" . nl2br(htmlspecialchars($post['content'])) . "</p>";
        echo "</div>";
    }

    echo "</div>";

    // Handle delete action
    if (isset($_POST['delete_post'])) {
        $post_id = $_POST['post_id'];
        $stmt = $pdo->prepare('DELETE FROM posts WHERE id = ?');
        $stmt->execute([$post_id]);
        // After deleting, you can redirect to the same page or any other page
        header('Location: blogs.php');
        exit;
    }
    // Handle edit action
    if (isset($_POST['edit_post'])) {
        // Redirect to an edit page with post_id in URL
        $post_id = $_POST['post_id'];
        header('Location: edit_post.php?post_id=' . $post_id);
        exit;
    }
    ?>
</body>

</html>