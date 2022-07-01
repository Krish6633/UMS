<!DOCTYPE html>
<html>

<head>
    <!-- -------------- Meta and Title -------------- -->
    <meta charset="utf-8">
    <title>Registration</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme" />
    <meta name="description" content="Alliance - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -------------- Fonts -------------- -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- -------------- CSS - theme -------------- -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- -------------- CSS - allcp forms -------------- -->
    <link rel="stylesheet" type="text/css" href="assets/allcp/forms/css/forms.css">

    <!-- -------------- Favicon -------------- -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- -------------- IE8 HTML5 support  -------------- -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="utility-page sb-l-c sb-r-c">

    <!-- -------------- Body Wrap  -------------- -->
    <div id="main" class="animated fadeIn">

        <!-- -------------- Main Wrapper -------------- -->
        <section id="content_wrapper">

            <div id="canvas-wrapper">
                <canvas id="demo-canvas"></canvas>
            </div>

            <!-- -------------- Content -------------- -->
            <section id="content">

                <!-- -------------- Login Form -------------- -->
                <div class="allcp-form theme-primary" id="login">
                    <div class="text-center mb20">
                        <img src="assets/img/logo_login_form.png" class="img-responsive" alt="Logo" />
                    </div>
                    <div class="panel mw1000">

                        <form method="post" action="/" id="allcp-form">

                            <div class="panel-heading">
                                <div class="panel-title">
                                    Validation
                                </div>
                            </div>
                            <div class="panel-body">

                                <h6 class="mb20" id="spy1">Basic inputs</h6>

                                <div class="section row">
                                    <div class="col-md-6 ph10 mb5">
                                        <label for="firstname" class="field prepend-icon">
                                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="First name...">
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                    <div class="col-md-6 ph10 mb5">
                                        <label for="lastname" class="field prepend-icon">
                                            <input type="text" name="lastname" id="lastname" class="gui-input" placeholder="Last name...">
                                            <label for="lastname" class="field-icon">
                                                <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- -------------- /section -------------- -->
                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="section row">
                                    <div class="col-md-6 ph10 mb5">
                                        <label for="useremail" class="field prepend-icon">
                                            <input type="email" name="useremail" id="useremail" class="gui-input" placeholder="Email address">
                                            <label for="useremail" class="field-icon">
                                                <i class="fa fa-envelope"></i>
                                            </label>
                                        </label>

                                    </div>
                                    <div class="col-md-6 ph10 mb5">
                                        <label for="website" class="field prepend-icon">
                                            <input type="url" name="website" id="website" class="gui-input" placeholder="Website url">
                                            <label for="website" class="field-icon">
                                                <i class="fa fa-link"></i>
                                            </label>
                                        </label>
                                    </div>

                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="section">
                                    <label class="field select">
                                        <select id="language" name="language">
                                            <option value="">Select language...</option>
                                            <option value="EN">English</option>
                                            <option value="FR">French</option>
                                            <option value="SP">Spanish</option>
                                            <option value="CH">Chinese</option>
                                            <option value="RU">Russian</option>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="section" id="spy2">
                                    <label for="file1" class="field file">
                                        <span class="button btn-primary"> Choose File </span>
                                        <input type="file" class="gui-file" name="upload1" id="file1" onChange="document.getElementById('uploader1').value = this.value;">
                                        <input type="text" class="gui-input" id="uploader1" placeholder="Select file" readonly>
                                    </label>
                                </div>
                                <!-- -------------- /Section -------------- -->

                                <div class="section">
                                    <label class="field select-multiple">
                                        <select name="inputname" id="inputname" multiple="multiple" size="4">
                                            <option value="0">iPhone 4</option>
                                            <option value="1">iPhone 4S</option>
                                            <option value="2">iPhone 5</option>
                                            <option value="3">iPhone 5C</option>
                                            <option value="5">iPhone 5S</option>
                                            <option value="6">iPhone 6</option>
                                            <option value="6">iPhone 6S</option>
                                        </select>
                                    </label>
                                </div>
                                <!-- -------------- /Section -------------- -->

                                <div class="section" id="spy3">
                                    <label for="comment" class="field prepend-icon">
                                        <textarea class="gui-textarea" id="comment" name="comment" placeholder="Your comment"></textarea>
                                        <label for="comment" class="field-icon">
                                            <i class="fa fa-comment"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="section row">
                                    <h6 class="mb20 mt40 ml10">One or Two required</h6>

                                    <div class="col-md-6 ph10 mb5">
                                        <label for="mobile_phone" class="field prepend-icon">
                                            <input type="tel" name="mobile_phone" id="mobile_phone" class="gui-input phone-group" placeholder="Mobile number">
                                            <label for="mobile_phone" class="field-icon">
                                                <i class="fa fa-mobile-phone"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                    <div class="col-md-6 ph10 mb5">
                                        <label for="home_phone" class="field prepend-icon">
                                            <input type="tel" name="home_phone" id="home_phone" class="gui-input phone-group" placeholder="Phone number">
                                            <label for="home_phone" class="field-icon">
                                                <i class="fa fa-phone"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="section">
                                    <h6 class="mb20 mt40" id="spy4">Matching elements </h6>
                                    <label for="password" class="field prepend-icon">
                                        <input type="password" name="password" id="password" class="gui-input" placeholder="Create password">
                                        <label for="password" class="field-icon">
                                            <i class="fa fa-lock"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="section">
                                    <label for="repeatPassword" class="field prepend-icon">
                                        <input type="password" name="repeatPassword" id="repeatPassword" class="gui-input" placeholder="Repeat password">
                                        <label for="repeatPassword" class="field-icon">
                                            <i class="fa fa-unlock"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="section row">
                                    <h6 class="mb20 mt40 ml10" id="spy5">Radios &amp; Checkboxes</h6>

                                    <div class="col-md-6 pad-r40 border-right">
                                        <div class="option-group field">
                                            <label for="iphone5" class="option option-primary block">
                                                <input type="radio" name="mobile1" id="iphone5" value="iphone5">
                                                <span class="radio"></span> iPhone 5
                                            </label>

                                            <label for="iphone5c" class="option block option-primary mt10">
                                                <input type="radio" name="mobile1" id="iphone5c" value="iphone5c">
                                                <span class="radio"></span> iPhone 5C
                                            </label>

                                            <label for="iphone5s" class="option block option-primary mt10">
                                                <input type="radio" name="mobile1" id="iphone5s" value="iphone5s">
                                                <span class="radio"></span> iPhone 5S
                                            </label>

                                        </div>

                                    </div>
                                    <!-- -------------- /Section -------------- -->

                                    <div class="col-md-6 pl40">
                                        <div class="option-group field">

                                            <label class="option block option-primary">
                                                <input type="checkbox" name="mobile" value="iphone5">
                                                <span class="checkbox"></span> iPhone 5
                                            </label>

                                            <label class="option block option-primary mt10">
                                                <input type="checkbox" name="mobile" value="iphone5c">
                                                <span class="checkbox"></span> iPhone 5C
                                            </label>

                                            <label class="option block option-primary mt10">
                                                <input type="checkbox" name="mobile" value="iphone5s">
                                                <span class="checkbox"></span> iPhone 5S
                                            </label>

                                        </div>
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="section">
                                    <h6 class="mb20 mt40" id="spy6">Custom Methods</h6>

                                    <div class="smart-widget sm-left sml-120">
                                        <label for="verification" class="field prepend-icon">
                                            <input type="text" name="verification" id="verification" class="gui-input" placeholder="Solve math captcha">
                                            <label for="verification" class="field-icon">
                                                <i class="fa fa-question"></i>
                                            </label>
                                        </label>
                                        <label for="verification" class="button">13 + 13 = </label>
                                    </div>
                                    <!-- -------------- /Block Widget -------------- -->
                                </div>
                                <!-- -------------- /section -------------- -->

                                <h6 class="mb20 mt40" id="spy7">Conditional validation</h6>

                                <div class="section">
                                    <p> 1 - Your age must be 16 years old or more</p>

                                    <p> 2 - A licence number will be required if you are more then 19 years old</p>
                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="section row">

                                    <div class="col-md-6 ph10 mb5">
                                        <label for="applicant_age" class="field prepend-icon">
                                            <input type="text" name="applicant_age" id="applicant_age" class="gui-input" placeholder="Applicant age">
                                            <label for="applicant_age" class="field-icon">
                                                <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                    <div class="col-md-6 ph10 mb5">
                                        <label for="licence_no" class="field prepend-icon">
                                            <input type="text" name="licence_no" id="licence_no" class="gui-input" placeholder="Licence number">
                                            <label for="licence_no" class="field-icon">
                                                <i class="fa fa-qrcode"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                </div>
                                <!-- -------------- /section -------------- -->

                                <hr class="alt short">

                                <div class="section">
                                    <div class="option-group field">

                                        <label class="option block">
                                            <input type="checkbox" name="parents" id="parents" value="parents">
                                            <span class="checkbox"></span> I have a child
                                        </label>

                                    </div>
                                    <!-- -------------- /section -------------- -->
                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="section">
                                    <label for="child_name" class="field prepend-icon">
                                        <input type="text" name="child_name" id="child_name" class="gui-input" placeholder="Offsping name">
                                        <label for="child_name" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- -------------- /section -------------- -->

                            </div>
                            <!-- -------------- /Form -------------- -->
                            <div class="panel-footer text-right">
                                <button type="submit" class="btn btn-bordered btn-primary mb5"> Validate Form</button>
                                <button type="reset" class="btn btn-bordered mb5"> Cancel</button>
                            </div>
                            <!-- -------------- /Panel Footer -------------- -->
                        </form>

                    </div>
                    <!-- -------------- /Panel -------------- -->
                </div>
                <!-- -------------- /Spec Form -------------- -->

            </section>
            <!-- -------------- /Content -------------- -->

        </section>
        <!-- -------------- /Main Wrapper -------------- -->

    </div>
    <!-- -------------- /Body Wrap  -------------- -->

    <!-- -------------- Scripts -------------- -->

    <!-- -------------- jQuery -------------- -->
    <script src="assets/js/jquery/jquery-1.11.3.min.js"></script>
    <script src="assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- -------------- CanvasBG JS -------------- -->
    <script src="assets/js/plugins/canvasbg/canvasbg.js"></script>

    <!-- -------------- Validate JS -------------- -->
    <script src="assets/allcp/forms/js/jquery.validate.min.js"></script>
    <script src="assets/allcp/forms/js/additional-methods.min.js"></script>
    <!-- -------------- Theme Scripts -------------- -->
    <script src="assets/js/utility/utility.js"></script>
    <script src="assets/js/demo/demo.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/pages/forms-validation.js"></script>

    <!-- -------------- Page JS -------------- -->
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core
            Core.init();

            // Init Demo JS
            Demo.init();

            // Init CanvasBG
            CanvasBG.init({
                Loc: {
                    x: window.innerWidth / 5,
                    y: window.innerHeight / 10
                }
            });

        });
    </script>

    <!-- -------------- /Scripts -------------- -->

</body>

</html>