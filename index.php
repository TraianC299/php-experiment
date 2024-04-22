<!DOCTYPE html>
<html>

<head>
    <title>My First PHP Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/globals.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky top-0">
        <a class="navbar-brand" href="/">My Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/responsive">Responsive</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blogs">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
    $path = $_GET['path'] ?? '';

    switch ($path) {
        case 'about':
            include 'about.php';
            break;
        case 'admin':
            include 'admin.php';
            break;
        case 'responsive':
            include 'responsive.php';
            break;
        case 'blogs':
            include 'blogs.php';
            break;
        case '':
            include 'home.php';
            break;
        default:
            http_response_code(404);
            include '404.php';
            break;
    }



    // require 'functions.php';
    
    // $posts = getPosts($pdo);
    
    // include 'views/header.php';
// foreach ($posts as $post) {
//     echo "<h2>" . htmlspecialchars($post['title']) . "</h2>";
//     echo "<p>" . nl2br(htmlspecialchars($post['content'])) . "</p>";
// }
// include 'views/footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>