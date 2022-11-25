<!doctype html>
<html class="no-js" lang="zxx">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Katsina National Talent Hunt Challenge</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.html">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicion.png">
        <!-- Place favicon.ico in the root directory -->
		<?php include("templates/cssFiles.php"); ?>
        <style>
            .myLogin{
                margin: auto;
                max-width: 550px;
                background-color:#ffffff;
                padding:20px;
            }
        </style>
    </head>
    <body>

        <?php include("templates/header.php"); ?>
    
        <main>
            
        <!-- breadcrumb-area-start -->
        <div class="breadcrumb-area pt-70 pb-70" style="background-image:url(assets/img/bg/header-bg.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-text text-center">
                                <h1>Forget Password</h1>
                                <ul class="breadcrumb-menu">
                                    <li><a href="./">home</a></li>
                                    <li><span>Forget Password</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-start -->           
            <!-- contact-us-area-start -->
            <div class="contact-2-area pt-80 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 offset-lg-2 offset-xl-3">
                            <div class="section-title text-center ml-50 mr-50 mb-5">
                                <span class="border-left-1"></span>
                                <span>Forget Password</span>
                                <span class="border-right-1"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="appointment-wrapper contact-form-page myLogin border shadow">
                            <form class="appointment-form" action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-box email-icon mb-30">
                                            <input type="text" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="contact-btn contact-2-btn text-center">
                                            <button class="btn btn-block" type="submit"><span class="btn-text">Recover <i
                                                        class="far fa-long-arrow-right"></i></span> <span
                                                    class="btn-border"></span></button>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-5">
                                        <p class="text-center"><b>Already Have An Account? <a href="login" class="text-primary">Login Now</a></b></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact-us-area-end -->
        </main>
		<?php include("templates/footer.php"); ?>
		<?php include("templates/jsFiles.php"); ?>

    </body>
</html>