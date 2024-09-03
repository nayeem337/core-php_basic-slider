<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/all.css"/>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">PHP Project</a>
            <ul class="navbar-nav">
                <li><a href="" class="nav-link">About</a></li>
                <li><a href="" class="nav-link">Home</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog Category</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <?php foreach ($categories as $category) { ?>
                        <li><a href="" class="dropdown-item"><?php echo $category['name']?></a></li>
                        <?php } ?>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800">
        <div class="carousel-inner">
            <?php foreach ($blogs as $key => $blog) { ?>
            <div class="carousel-item  <?php echo $key == 0 ? 'active' : ' ' ?> ">
                <img src="assets/img/<?php echo $blog['slider_image']; ?>" class="w-100" alt=""/>
                <div class="carousel-caption">
                    <h1><?php echo $blog['title']; ?></h1>
                    <p><?php echo substr($blog['description'], 0, 80).' ...'; ?></p>
                    <a href="" class="btn btn-success px-5">Read More</a>
                </div>
            </div>
            <?php } ?>
        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>