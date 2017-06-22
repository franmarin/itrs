<?php require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>ITRS Training</title>
    <meta name="description" content="ITRS Training">
    <meta name="author" content="Francisco Marin"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="./js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="./js/itrs.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <header>
        <div id="logo"></div>
        <?php require_once(__DIR__ . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'menu.php'); ?>
    </header>
    <div id="content">
        <div id="slider"></div>
        <div id="main">
            <div id="home">
                <p>Available courses</p>
                <?php require_once(__DIR__ . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'courses.php'); ?>
            </div>
            <div id="contact">
                <p>Contact us</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" id="name" name="name" required="true" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" id="email" name="email" required="true" placeholder="Email address">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" id="subject" name="subject" required="true" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control input-lg" id="comment" rows="3" name="comment" required="true" placeholder="More details"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default input-lg">Submit</button>
                </form>
            </div>
        </div>
        <div id="learn-more"></div>
    </div>
    <footer>
        <div id="footer-container">
            <div id="footer-image"></div>
        </div>
    </footer>
</body>
</html>