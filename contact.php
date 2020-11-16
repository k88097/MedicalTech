<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>聯絡我們</title>

    <!--  import css, js-->
    <?php include_once("head.html") ?>

</head>

<body>

<!-- Navigation -->
<?php include_once("nav.html") ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/contact-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>聯絡我們</h1>
                    <span class="subheading">Have questions? I have answers.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p class="contact">填寫以下表單之後，系統會自動將訊息寄到相關單位，我們會盡快與您聯繫！</p>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>姓名</label>
                        <label for="name"></label><input type="text" class="form-control" placeholder="姓名" id="name"
                                                         required
                                                         data-validation-required-message="請輸入您的姓名。">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>聯絡信箱</label>
                        <label for="email"></label><input type="email" class="form-control" placeholder="聯絡信箱"
                                                          id="email" required
                                                          data-validation-required-message="請輸入您的電子郵件。">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>連絡電話</label>
                        <label for="phone"></label><input type="tel" class="form-control" placeholder="連絡電話" id="phone"
                                                          required
                                                          data-validation-required-message="請輸入您的連絡電話。">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>訊息內容</label>
                        <label for="message"></label><textarea rows="5" class="form-control" placeholder="訊息內容"
                                                               id="message" required
                                                               data-validation-required-message="請輸入您的訊息內容。"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <button type="submit" class="btn btn-primary" id="sendMessageButton">傳送</button>
            </form>
        </div>
    </div>
</div>

<hr>

<!-- Footer -->
<?php include_once("footer.html") ?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="js/clean-blog.min.js"></script>

</body>

</html>
