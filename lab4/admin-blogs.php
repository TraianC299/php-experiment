<!DOCTYPE html>
<html>

<head>
    <title>Blogs Page</title>
    <link rel="stylesheet" href="/styles/blogs.css">
</head>

<body>
    <div class='blog-container min-h-screen'>
        <a href="add-post" class='card new-blog p-4'>
            <h5>Create a new post</h5>
            <!-- </form> -->
        </a>
        <?php
        require 'functions.php';
        $posts = getPosts($pdo);
        ?>
        <?php foreach ($posts as $post): ?>
            <div class='card p-4'>
                <h5 class='card-title
            '><?= htmlspecialchars($post['title']) ?></h5>
                <span class='blog-date'><?= htmlspecialchars($post['created_at']) ?></span>
                <p class='card-text'><?= nl2br(htmlspecialchars($post['content'])) ?></p>

                <div class='card-footer flex gap-2'>
                    <form action="edit-post" method="GET" class="d-inline">
                        <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                        <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                    </form>
                    <form action="" method="POST" class="d-inline">
                        <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                        <button type="submit" name="delete_post" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
                <!-- </form> -->
            </div>
        <?php endforeach;
        // Handle delete action
        if (isset($_POST['delete_post'])) {
            $post_id = $_POST['post_id'];
            $stmt = $pdo->prepare('DELETE FROM posts WHERE id = ?');
            $stmt->execute([$post_id]);
            // After deleting, you can redirect to the same page or any other page
            header('Location: blogs.php');
            exit;
        }
        ?>
    </div>

</body>

</html>