<!DOCTYPE html>
<html>

<head>
    <title>Blogs Page</title>
    <link rel="stylesheet" href="styles/admin.css">
</head>

<body>
    <?php
    require 'functions.php';
    // Handling the post request to add a new post
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $stmt = $pdo->prepare('INSERT INTO posts (title, content, created_at) VALUES (?, ?, NOW())');
        $stmt->execute([$title, $content]);
        header('Location: admin.php');
        exit;
    }

    // Simple form for adding a post
    ?>
    <div class='bg-blue h-screen w-screen flex align-center justify-center'>
        <form action="admin.php" method="post" class='bg-white p-4 flex flex-col max-w-sm m-auto w-full rounded-md'>
            <div class="input-container">
                <label for="title" class="input-label">Title:</label>
                <input type="text" name="title" placeholder="Title" required class="input">
            </div>
            <br>
            <div class="input-container">
                <label for="title" class="input-label">Content:</label>
                <textarea name="content" placeholder="Content" required class="input"></textarea>
            </div><br>
            <button class="button" type="submit">Add Post</button>
        </form>
    </div>
</body>

</html>