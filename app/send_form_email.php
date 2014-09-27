<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>survey</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="styles/main.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
        <script src="scripts/vendor/modernizr.js"></script>
        <style>
        .button {
          display: inline-block;
          padding: 9px 18px;
          border: 1px solid #339AF2;
          border-radius: 3px;
          font-size: 14px;
          color: #339AF2;
          cursor: pointer;
          transition: all .25s;
          text-decoration:none;
        }
        .inner {
            color:#fff;
        }
        </style>
    </head>
    <body style="background:url('images/coffee.jpg');margin:0;padding:0;">
        <!--[if lt IE 10]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="inner">
            <h1>Customer Feedback Survery</h1>
            <h2>At Jack's Place, we value your opinion. Please let us know about your experience with us.</h2>
            <?php

            echo '<link rel="stylesheet" href="styles/main.css">';

            if(isset($_POST['email'])) {

                // EDIT THE 2 LINES BELOW AS REQUIRED

                $email_to = "fypchau@gmail.com";

                $email_subject = "feedback";

                function died($error) {

                    // your error code can go here

                    echo "We are very sorry, but there were error(s) found with the form you submitted. ";

                    echo "These errors appear below.<br /><br />";

                    echo $error."<br /><br />";

                    echo "Please go back and fix these errors.<br /><br />";

                    echo "<a href='index.php' class='button primary'>Back</a>";

                    die();

                }



                // validation expected data exists

                if(!isset($_POST['full_name']) ||

                    !isset($_POST['email']) ||

                    !isset($_POST['comments'])) {

                    died('We are sorry, but there appears to be a problem with the form you submitted.');

                }



                $full_name = $_POST['full_name']; // required

                $email_from = $_POST['email']; // required

                $comments = $_POST['comments']; // required



                $error_message = "";

                $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

                if(!preg_match($email_exp,$email_from)) {

                    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

                }

                $string_exp = "/^[A-Za-z .'-]+$/";

                if(!preg_match($string_exp,$full_name)) {

                    $error_message .= 'The First Name you entered does not appear to be valid.<br />';

                }


                if(strlen($comments) < 2) {

                    $error_message .= 'The Comments you entered do not appear to be valid.<br />';

                }

                if(strlen($error_message) > 0) {

                    died($error_message);

                }

                $email_message = "Form details below.\n\n";

                function clean_string($string) {

                    $bad = array("content-type","bcc:","to:","cc:","href");

                    return str_replace($bad,"",$string);

                }

                $email_message .= "Full Name: ".clean_string($full_name)."\n";

                $email_message .= "Email: ".clean_string($email_from)."\n";

                $email_message .= "Comments: ".clean_string($comments)."\n";

                // create email headers

                $headers = 'From: '.$email_from."\r\n".

                'Reply-To: '.$email_from."\r\n" .

                'X-Mailer: PHP/' . phpversion();

                @mail($email_to, $email_subject, $email_message, $headers);

            ?>
            <!-- include your own success html here -->

            <br/>
            <br/>
            <br/>
            <h2>Thank you for contacting us. We will be in touch with you very soon.</h2>
            <br/>
            <br/>

            <a href='index.php' class='button primary'>Back</a>

            <?php

            }

            ?>
        </div>
    </body>
</html>
