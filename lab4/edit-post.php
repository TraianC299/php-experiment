<!DOCTYPE html>
<html>
<head>
    <title>Blogs Page</title>
    <link rel="stylesheet" href="/styles/admin-blogs.css">
</head>
<body>
    <?php
    // get id from the URL query parameter id
    $post_id = $_GET['post_id'] ?? '';
    require 'functions.php';
    
    // Fetch the post from the database
    $stmt = $pdo->prepare('SELECT * FROM posts WHERE id = ?');
    $stmt->execute([$post_id]);
    $post = $stmt->fetch();
    
    // Handling the post request to update a post
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $stmt = $pdo->prepare('UPDATE posts SET title = ?, content = ? WHERE id = ?');
        $stmt->execute([$title, $content, $post_id]);
        header('Location: /lab4/edit-post.php?post_id=' . $post_id);
        exit;
    }
    ?>
    <div class='bg-blue h-screen w-screen flex align-center justify-center'>
        <form action="/lab4/edit-post.php?post_id=<?= $post_id ?>" method="POST"
            class='bg-white p-4 flex flex-col max-w-sm m-auto w-full rounded-md'>
            <div class="input-container">
                <label for="title" class="input-label">Title:</label>
                <input type="text" name="title" placeholder="Title" required class="input"
                    value="<?= htmlspecialchars($post['title'] ?? '') ?>">
            </div>
            <br>
            <div class="input-container">
                <label for="content" class="input-label">Content:</label>
                <textarea name="content" placeholder="Content" required class="input"><?= htmlspecialchars($post['content'] ?? '') ?></textarea>
            </div><br>
            <button class="button" type="submit">Update Post</button>
        </form>
    </div>
</body>
</html>
