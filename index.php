<!DOCTYPE html>
<html>

<head>
    <title>My First PHP Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/styles/globals.css">
</head>

<body>
    <?php
    include 'views/header.php';
    $path = $_GET['path'] ?? '';

    switch ($path) {
        case '':
            include 'home.php';
            break;

        // laboratorul nr 2
        case 'lab2/responsive':
            include 'lab2/responsive.php';
            break;

        // laboratorul nr 4
        case 'lab4/admin':
            include 'lab4/admin-blogs.php';
            break;
        case 'lab4/blogs':
            include 'lab4/blogs.php';
            break;
        case 'lab4/edit-post':
            include 'lab4/edit-post.php';
            break;
        case 'lab4/add-post':
            include 'lab4/add-post.php';
            break;


        // laboratorul nr 3
        case 'lab3/timp-real':
            include 'lab3/timp-real.php';
            break;
        case 'lab3/carousel':
            include 'lab3/carousel.php';
            break;
        case 'lab3/verificare-validare-forme':
            include 'lab3/verificare-validare-forme.php';
            break;
        case 'lab3/mini-project':
            include 'lab3/mini-project.php';
            break;

        default:
            http_response_code(404);
            include '404.php';
            break;
    }

    include 'views/footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src=""></script>
</body>

</html>