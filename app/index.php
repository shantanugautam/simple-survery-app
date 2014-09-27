<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Customer Review</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->


        <link rel="stylesheet" href="styles/main.css">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>

        <script src="scripts/vendor/modernizr.js"></script>
    </head>
    <body style="background:url('images/work-desk2.jpg');margin:0;padding:0;">
        <!--[if lt IE 10]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="inner">
            <h1>That Web Consultant Review</h1>
            <h2>At That Web Consultant, we value your opinion. Please let us know about your experience with us.</h2>
        </div>

        <div class="container">
            <div id="splitlayout" class="splitlayout">
                <div class="intro">
                    <div class="side side-left">
                        <div class="intro-content">
                            <div class="profile"><img src="images/dislike.png" alt="profile1"></div>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="side side-right">
                        <div class="intro-content">
                            <div class="profile"><img src="images/like.png" alt="profile2"></div>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div><!-- /intro -->
                <div class="page page-right">
                    <div class="page-inner">
                        <section>
                            <p>We are delighted we made your day! We would appreciate if you could review us online.</p>
                            <p>Reviewing us is fun an easy! Pick an option to begin</p>
                            <a class="click-icon" href=""><img src="http://placehold.it/80x80"><span>Hungrygowhere</span></a>
                            <a class="click-icon" href=""><img src="images/google-places.jpg"><span>Google Places</span></a>
                        </section>
                    </div><!-- /page-inner -->
                </div><!-- /page-right -->
                <div class="page page-left">
                    <div class="page-inner">
                        <section>
                            <p>We take negative feedback seriously. Tell us more so we can improve our service. Your feedback will be sent straight to top management.</p>
                            <form name="contactform" method="post" action="send_form_email.php">
                                <div class="field col sm-6">
                                    <label>
                                        Message*
                                        <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                                    </label>
                                </div>
                                <div class="field col sm-6">
                                    <label>
                                        Name*
                                        <input type="text" name="full_name" class="validate" data-validate-error="" data-validate-type="">
                                    </label>
                                </div>
                                <div class="field col sm-6">
                                    <label>
                                        Email*
                                        <input type="email" name="email" class="validate" maxlength="80" size="30" data-validate-error="" data-validate-type="">
                                    </label>
                                </div>
                                <div>
                                    <input type="submit" class="button primary" value="Submit">
                                </div>
                            </form>
                        </section>
                    </div><!-- /page-inner -->
                </div><!-- /page-left -->
                <a href="#" class="back back-right" title="back to intro">&rarr;</a>
                <a href="#" class="back back-left" title="back to intro">&larr;</a>
            </div><!-- /splitlayout -->
        </div><!-- /container -->




        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>

        <script src="scripts/vendor.js"></script>

        <script src="scripts/main.js"></script>
</body>
</html>
