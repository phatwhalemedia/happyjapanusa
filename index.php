<?php define ('TITLE', 'Happy Japan USA'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fortawesome/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <title><?php TITLE ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-custom">
        <div class="container main-content">
            <img src="./images/happylogoround.svg" class="navlogo" alt="">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="text-white fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link align-self-center" href="index.php">Home</a>
                    <a class="nav-item nav-link align-self-center" href="features.php">Products</a>
                    <a class="nav-item nav-link align-self-center" href="contact.php">Financing</a>
                    <a class="nav-item nav-link align-self-center" href="financing.php">Contact</a>
                </div>
            </div>
        </div>
    </nav>
<!-- Main Content Starts Here -->
    <div class="container main-content">
        <div class="row">
            <div class="main-banner mb-3">
                <img class="img-fluid rounded" src="./images/bannerweb.png" alt="">
            </div>
            <div class="col-12">
                <h1>Embroidery Machines</h1>
                <p class="promotext">HappyJapan offers the most feature packed embroidery machines in their class. Engineered with top quality components and paired with the most powerful and refined software. HappyJapan outpaces the competition in quality, reliability and value.</p>
                <h2>In Action</h2>
                <p class="promotext">Matched against the competition, HappyJapan models are 50% more productive. Keep your production high all year long with 24/7 countiuous operation for all models.</p>
             <!--   <h2>Modern</h2>
                <p>Our Japanese designed embroidery machines are the most technologicaly advanced in the market. The combination of software and hardware design make it the world’s leading brand for high quality embroidery businesses and projects. </p> -->
            </div>
            <div class="col-7">
                <h2>Feature Rich</h2>
                <p class="promotext">All HappyJapan Embroidery models feature:</p>
                <ul>
                    <li class="promotext">Full color LCD touchpad control monitor</li>
                    <li class="promotext">Multitask capable user interface</li>
                    <li class="promotext"><strong><i>Vari-Speed</i></strong> needle technology</li>
                    <li class="promotext"><strong><i>Save-Stich</i></strong> and <strong><i>Auto-Smart</i></strong> task resume</li>
                </ul>
            </div>
            <div class="col-5">
                <img class="text-center" src="./images/warranty.svg" alt="">
            </div>
            <div class="col-12">
                <h2>You're covered</h2>
                <p class="promotext">Japanese design ensures that every machine is manufactured to the highest quality standads with Heavy-Duty components.</p>
                <p class="promotext">That is why we offer a robust 7 year warranty on motors on all our machines bought in the U.S.A.</p>
            </div>
            <div class="col-12">
                <h2>Get yours today</h2>
                <p class="promotext">You can adquire your HappyJapan embroidery machine with a low interest plan. Chat with a representative to start or grow your business today.</p>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container rounded">
        <div class="mt-3 pt-4 pb-2 col-12 text-right footerheader">
            <img class="footerlogo" src="./images/happylogo.svg" alt="">
        </div>
        <div class="flex row">
            <div class="col-3">
                <img src="./images/resources.png" alt="">
                <h3 class="footer-txt-color">Tech Support</h3>
                <ul class="list-group">
                    <li class="list-item footer-txt-color">Parts Catalog</li>
                    <li class="list-item footer-txt-color">Order Parts</li>
                    <li class="list-item footer-txt-color">Where's my order</li>
                    <li class="list-item footer-txt-color">Schedule Maintenance</li>
                </ul>
            </div>
            <div class="col-3">
                <img src="" alt="">
                <h3 class="footer-txt-color">Resources</h3>
                <ul class="list-group">
                    <li class="list-item footer-txt-color"><a href="">FAQ</a></li>
                    <li class="list-item footer-txt-color"><a href="">Troubleshooting</a></li>
                    <li class="list-item list-item-footer footer-txt-color"><a href="">iCliqq</a></li>
                </ul>
            </div>
            <div class="col-6">
                <img src="" alt="">
                <h3 class="footer-txt-color text-right">Contact Sales</h3>
                <ul class="list-group list-style-footer">
                    <li class="list-item footer-txt-color text-right"><span><i class="fas fa-comments"></i></span> Live Chat</li>
                    <li class="list-item footer-txt-color text-right"><span><i class="fas fa-phone-volume"></i> (619)-123-5566</span></li>
                    <li class="list-item footer-txt-color text-right"><a href="contact.php"><span><i class="far fa-envelope"></i></span> sales@happyjapanusa.com</a></li>
                </ul>
            </div>
        </div>
    <div class="row webmaster-info mt-2">
        <div class="col-12">
        <h4 class="text-center">Caralbo Industries 2021&#169; webmaster web@caralbo.com</h4>
        </div>
    </div>
    </div>
</footer>

    <script src="./vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery.animations.js"/</script>
</body>
</html>
