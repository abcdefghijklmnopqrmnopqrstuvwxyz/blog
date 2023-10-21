<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
        <?php
            $site = $_SESSION['site'];
            
            switch ($site) {
                case '/pages/home.php':
                    echo "Blog - Home";
                    break;
                case '/pages/blog.php':
                    echo "Blog - Create";
                    break;
                case '/pages/login.php':
                    if (isset($_SESSION['logged'])) {
                        if ($_SESSION['logged'] == 'false') {
                            echo "Blog - Login";
                            break;
                        }
                    }
                    break;
                case '/pages/logout.php':
                    if (isset($_SESSION['logged'])) {
                        if ($_SESSION['logged'] == 'true') {
                            echo "Blog - Logout";
                            break;
                        }
                    }
                    break;
                case '/pages/register.php':
                    echo "Blog - Register";
                    break;
                default:
                    echo "Error - Page not found";
                    break;
            }
        ?>
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Inter&family=Noto+Sans+Display:wght@300&family=Open+Sans:ital,wght@1,300&family=PT+Sans&family=Poppins:wght@300&family=Rubik&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>
    <body>
        <header class="head z-2">
            <div class="d-flex bg-dark justify-content-center">
                <a class="d-xl-none d-flex text-decoration-none">
                    <button class="bar-toggler collapsed bg-dark btn" data-bs-toggle="collapse" data-bs-target="#navbar">
                        <div class="d-flex text-center py-3 px-4 fs-3 text-primary align-items-center">
                            <span class="material-symbols-outlined d-block fs-1 p-1">Menu</span>
                            <span class="px-2 fs-1">Menu</span>
                        </div>
                    </button>
                </a>
            </div>
            <nav class="bg-dark d-xl-flex nav navbar-collapse collapse" id="navbar">
                <div class="d-xl-flex d-block pb-2 container">
                    <hr class="line">
                    <a href="/home" class="d-block text-decoration-none p-xl-0 p-1 hover<?= $_SESSION['site'] === '/pages/home.php' ? 'active' : '' ?>">
                        <div class="d-flex text-center py-3 px-4 text-<?= $_SESSION['site'] === '/pages/home.php' ? 'primary' : 'light' ?> justify-content-center align-items-center">
                            <span class="material-symbols-outlined d-block fs-1 p-1">Home</span>
                            <span class="px-2 fs-3">Home</span>
                        </div>
                        <div class="navdes<?= $_SESSION['site'] === '/pages/home.php' ? 'active' : '' ?>"></div>
                    </a>
                    <a href="/pages/blog" class="d-<?= $_SESSION['logged'] === 'false' ? 'none' : 'block' ?> text-decoration-none p-xl-0 p-1 hover<?= $_SESSION['site'] === '/pages/gallery.php' ? 'active' : '' ?>">
                        <div class="d-flex text-center py-3 px-4 text-<?= $_SESSION['site'] === '/pages/blog.php' ? 'primary' : 'light' ?> justify-content-center align-items-center">
                            <span class="material-symbols-outlined d-block fs-1 p-1">Edit_note</span>
                            <span class="px-2 fs-3">Create blog</span>
                        </div>
                        <div class="navdes<?= $_SESSION['site'] === '/pages/blog.php' ? 'active' : '' ?>"></div>
                    </a>
                    <a href="/pages/login" class="d-<?= $_SESSION['logged'] === 'false' ? 'block' : 'none' ?> text-decoration-none ms-xl-auto p-xl-0 p-1 hover<?= $_SESSION['site'] === '/pages/login.php' ? 'active' : '' ?>">
                        <div class="d-flex text-center py-3 px-4 text-<?= $_SESSION['site'] === '/pages/login.php' ? 'primary' : 'light' ?> justify-content-center align-items-center">
                            <span class="material-symbols-outlined d-block fs-1 p-1">Login</span>
                            <span class="px-2 fs-3">Log in</span>
                        </div>
                        <div class="navdes<?= $_SESSION['site'] === '/pages/login.php' ? 'active' : '' ?>"></div>
                    </a>
                    <a href="/pages/login" class="d-<?= $_SESSION['logged'] === 'true' ? 'block' : 'none' ?> text-decoration-none ms-xl-auto p-xl-0 p-1 hover<?= $_SESSION['site'] === '/pages/logout.php' ? 'active' : '' ?>">
                        <div class="d-flex text-center py-3 px-4 text-<?= $_SESSION['site'] === '/pages/logout.php' ? 'primary' : 'light' ?> justify-content-center align-items-center">
                            <span class="material-symbols-outlined d-block fs-1 p-1">Login</span>
                            <span class="px-2 fs-3">Log out</span>
                        </div>
                        <div class="navdes<?= $_SESSION['site'] === '/pages/logout.php' ? 'active' : '' ?>"></div>
                    </a>
                    <a href="/pages/register" class="d-<?= $_SESSION['logged'] === 'false' ? 'block' : 'none' ?> text-decoration-none p-xl-0 p-1 hover<?= $_SESSION['site'] === '/pages/register.php' ? 'active' : '' ?>">
                        <div class="d-flex text-center py-3 px-4 text-<?= $_SESSION['site'] === '/pages/register.php' ? 'primary' : 'light' ?> justify-content-center align-items-center">
                            <span class="material-symbols-outlined d-block fs-1 p-1">How_to_reg</span>
                            <span class="px-2 fs-3">Sign up</span>
                        </div>
                        <div class="navdes<?= $_SESSION['site'] === '/pages/register.php' ? 'active' : '' ?>"></div>
                    </a>
                </div>
            </nav>
        </header>
