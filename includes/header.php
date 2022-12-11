<?php
if(!isset($_SESSION)) session_start();
$uri = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Tech Blog - All Technology News</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Froala Editor Start -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.14/js/froala_editor.min.js" integrity="sha512-S8KBWiPEJnWrSuxolmWWNhRVX1juJA7T8TrGMKO5Pz44jjtubdS13M6jtTSYZFeoc0y2kImYEV+ofCl3G09fWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.14/css/froala_editor.min.css" integrity="sha512-X5etY6JrAxOdXx/oyB9sqZ4IYEx8539ccjcxxOn0NtMZ7Tgl8WzMOjDe5Hw0//gEsiZpt7tQFfAawQA4cId0rw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Plugins -->
    <script src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/plugins/image.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/plugins/image.min.css">

    <script src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/plugins/align.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/plugins/font_family.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/plugins/link.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/plugins/lists.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/plugins/table.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/plugins/table.min.css">
    <!-- Froala Editor End -->

    <style>
        .container{
            min-height: 80vh;
        }

        /* Carousel styling */
        #introCarousel,
            .carousel-inner,
            .carousel-item,
            .carousel-item.active {
                height: 100vh;
            }

            .carousel-item:nth-child(1) {
                background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }

            .carousel-item:nth-child(2) {
                background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }

            .carousel-item:nth-child(3) {
                background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }

            /* Height for devices larger than 576px */
            @media (min-width: 992px) {
                #introCarousel {
                    margin-top: -58.59px;
                }

                #introCarousel,
                .carousel-inner,
                .carousel-item,
                .carousel-item.active {
                    height: 50vh;
                }
            }

            .navbar .nav-link {
                color: #fff !important;
            }
    </style>
</head>

<body>
    <!--Main Navigation-->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000; <?php echo(($uri != '/tech-blog/index.php' && $uri != '/tech-blog/')? 'background-color:black !important': '') ?>">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand nav-link" target="_blank" href="https://mdbootstrap.com/docs/standard/">
                    <strong>TECH BLOG</strong>
                </a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="/tech-blog">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tech-blog/blogs.php" rel="nofollow">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tech-blog/writers.php">Writers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Admins</a>
                        </li>
                        
                        <?php if(isset($_SESSION['username'])){ ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/tech-blog/dashboard.php">Dashboard</a>
                            </li>
                        <?php }else{ ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/tech-blog/signup.php">Singup</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/tech-blog/login.php">Login</a>
                            </li>
                        <?php } ?>
                    </ul>

                    <!-- <ul class="navbar-nav d-flex flex-row">
                        
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA"
                                rel="nofollow" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow"
                                target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow"
                                target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul> -->

                    <form class="d-flex input-group w-auto">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </span>
                    </form>

                    <!-- Profile -->
                    <div class="dropdown">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                            id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown"
                            aria-expanded="false">
                            <img src="./img/avatar.png" class="rounded-circle"
                                height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            <li>
                                <a class="dropdown-item" href="/tech-blog/dashboard.php">My profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/tech-blog/dashboard.php?section=profile">Settings</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/tech-blog/logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>
        <!-- Navbar -->

    </header>
    <!--Main Navigation-->