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
                max-width: 850px;
                background-color:#ffffff;
                padding:20px;
            }
            .alert{
                margin: auto;
                max-width: 850px;
                margin-bottom: 20px;
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
                                <h1>Register</h1>
                                <ul class="breadcrumb-menu">
                                    <li><a href="./">home</a></li>
                                    <li><span>Register</span></li>
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
                                <span>Register</span>
                                <span class="border-right-1"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                    <div class="alert alert-danger" role="alert">
                        <strong>Note:</strong> Provide all required information and make sure all the information filled in the form are accurate. Multiple entries is not allowed. Falsification of information would lead to disqualification.
                    </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="appointment-wrapper  myLogin border shadow">
                            <form class="appointment-for" action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">First Name:
                                            <input type="text" class="form-control" name="name" placeholder="Name" required />
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">Last Name:
                                            <input type="text" class="form-control" name="name" placeholder="Name" required />
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">Sex:
                                            <select class="form-control" name="name"  required >
                                                <option value="">Select -</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">Date of Birth:
                                            <input type="text" class="form-control" name="name" placeholder="DOB" required />
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">State:
                                            <select class="form-control" name="name"  required >
                                            <option value="">Select State--</option>
                                            <option value="Abuja FCT">Abuja FCT</option>
                                            <option value="Abia">Abia</option>
                                            <option value="Adamawa">Adamawa</option>
                                            <option value="Akwa Ibom">Akwa Ibom</option>
                                            <option value="Anambra">Anambra</option>
                                            <option value="Bauchi">Bauchi</option>
                                            <option value="Bayelsa">Bayelsa</option>
                                            <option value="Benue">Benue</option>
                                            <option value="Borno">Borno</option>
                                            <option value="Cross River">Cross River</option>
                                            <option value="Delta">Delta</option>
                                            <option value="Ebonyi">Ebonyi</option>
                                            <option value="Edo">Edo</option>
                                            <option value="Ekiti">Ekiti</option>
                                            <option value="Enugu">Enugu</option>
                                            <option value="Gombe">Gombe</option>
                                            <option value="Imo">Imo</option>
                                            <option value="Jigawa">Jigawa</option>
                                            <option value="Kaduna">Kaduna</option>
                                            <option value="Kano">Kano</option>
                                            <option value="Katsina">Katsina</option>
                                            <option value="Kebbi">Kebbi</option>
                                            <option value="Kogi">Kogi</option>
                                            <option value="Kwara">Kwara</option>
                                            <option value="Lagos">Lagos</option>
                                            <option value="Nassarawa">Nassarawa</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Ogun">Ogun</option>
                                            <option value="Ondo">Ondo</option>
                                            <option value="Osun">Osun</option>
                                            <option value="Oyo">Oyo</option>
                                            <option value="Plateau">Plateau</option>
                                            <option value="Rivers">Rivers</option>
                                            <option value="Sokoto">Sokoto</option>
                                            <option value="Taraba">Taraba</option>
                                            <option value="Yobe">Yobe</option>
                                            <option value="Zamfara">Zamfara</option>
                                            </select>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">LGA:
                                            <input type="text" class="form-control" name="name" placeholder="LGA" required />
                                            </div>
                                    </div>
                                    <div class="col-md-12">
                                            <div class="form-group">City:
                                            <input type="text" class="form-control" name="name" placeholder="Name" required />
                                            </div>
                                    </div>
                                    <div class="col-md-12">
                                            <div class="form-group">Address:
                                            <textarea rows="3" class="form-control" name="name" placeholder="Name" required ></textarea>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">Phone Number:
                                            <input type="text" class="form-control" name="name" placeholder="Name" required />
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">Email:
                                            <input type="text" class="form-control" name="name" placeholder="Name" required />
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">Password:
                                            <input type="text" class="form-control" name="name" placeholder="Name" required />
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">Retype-Password:
                                            <input type="text" class="form-control" name="name" placeholder="Name" required />
                                            </div>
                                    </div>
                                    <div class="col-md-12">
                                            <div class="form-group">Talent:
                                            <select class="form-control" name="name"  required >
                                                <option value="">Select -</option>
                                                <option value="Artist">Artist</option>
                                                <option value="Artistes">Artistes</option>
                                                <option value="Architects">Architects</option>
                                                <option value="Designers">Designers</option>
                                                <option value="Technologist">Technologist</option>
                                                <option value="Engineers">Engineers</option>
                                                <option value="Freelance">Freelance</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            </div>
                                    </div>
                                    
                                    <div class="col-12">
                                       <div class="contact-btn contact-2-btn text-center">
                                            <button class="btn btn-block" type="submit"><span class="btn-text">Register <i
                                                        class="far fa-long-arrow-right"></i></span> <span
                                                    class="btn-border"></span></button>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-5">
                                        <p class="text-center"><b>Already Have An Account? <a href="register" class="text-primary">Login Now</a></b></p>
                                        <p class="text-center"><b>Forget Password? <a href="forget-password" class="text-primary">Recover Now</a></b></p>
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