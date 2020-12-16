
<?php
//PHPMailer classes
require './includes/phpmailer/PHPMailer.php';
require './includes/phpmailer/SMTP.php';
require './includes/phpmailer/Exception.php';
//Mail Script
require './mail/sendmail.php';
define ('PAGE_TITLE','Contacto');
require('header.php');
//Title Name
?>
<body>
    <?php require 'nav.php'; ?>
    <main>
        <div class="pt-3 container" id="contactomain">
            <div class="row">
                <div class="col-12 pb-5">    
                        <img src="./images/factorydirect.svg" alt="">
                </div>          
                <div class="offset-2 col-8 pb-3">
                    <h1>Contact Us</h1>
                   <p>HappyJapan USA values your time and preference, as such, we take pride in offering a great customer service experience. From Q&A, quotes, to setting up and operating your embroidery machine, we're with you every step of the way.</p>
                   <p>The quickest way to get in touch with a representative is by phone or Live Chat during working hours. You can also reach us by email at <strong>info@happyjapanusa.com</strong> or by using the form below. We usually answer emails within 24 hours.</p>
                </div>
                <div class="offset-2 col-4">
                    <h2><strong>By Phone</strong></h2>
                    <p class="contact-info phone-text"><strong>(714) 512-9338</strong></p>
                </div>
                <div class="col-4">
                    <h2>Our Hours (PST)</h2>
                    <p class="contact-info">8AM-5PM, Mon-Fri</p>
                    <p class="contact-info">9AM-2PM, Sat</p>
                </div>
                <div class="offset-2 col-8">
                    <h2><strong>By Email</strong></h2>
                    <form method="POST">
                    <label for="fname"><strong>First Name<span class="fail">&nbsp;&#42;</span></strong></label>
                    <div class="form-inline pb-2">
                    <input class="form-control col-4 mr-2" type="text" name="fname" id="fname")>
                    <small id="smlnme"></small></div>
                    <label for="lname"><strong>Last Name<span class="fail">&nbsp;&#42;</span></strong></label>
                    <div class="form-inline">
                    <input class="form-control col-4 mr-2" type="text" name="lname" id="lname">
                    <small id="smllnm"></small></div>
                    <label class="mr-2 pt-2" for="phone"><strong>Phone<span class="fail">&nbsp;&#42;</span></strong></label>
                    <div class="form-inline pb-2">
                    <input class="form-control col-4 mr-2" type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" maxlength="10" name="phone" id="phone">
                    <small id="smlphn"></small></div>
                    <label for="email"><strong>Email<span class="fail">&nbsp;&#42;</span></strong></label>
                    <div class="form-inline pb-2">
                    <input class="form-control col-6 mr-2" type="email" name="email" id="eml">
                    <small id="smleml"></small></div>
                    <div class="form-group"><label for="body"><strong>Your Message</strong></label><textarea class="form-control" id="body" name="body" cols="30" rows="5"></textarea></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="form-group"><input class="btn btn-primary" type="submit" name="submit" id="submit" value="Send" disabled></div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include 'footer.php'; ?>
    <script src="./vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="./js/jquery.validation.js"></script>
</body>
</html>