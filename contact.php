<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                <title>:: Hyper rich enterprise Co.,tld. ::</title>
                <link rel="stylesheet" href="css/foundation.css" />
                <link href="style.css" rel="stylesheet" type="text/css" />
                <link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
                <!--Animate CSS-->
                <link rel="stylesheet" href="css/animate.min.css" />
                <link rel="stylesheet" href="css/animate.css" />
                <!--/Animate CSS-->
                <script src="js/vendor/modernizr.js"></script>
                <script type="text/javascript" src="js/jquery.js"></script>
                <script type="text/javascript" src="js/easySlider1.7.js"></script>
                <script type="text/javascript" src="js/foundation.min.js"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $("#slider").easySlider({
                            auto: true,
                            continuous: true
                        });
                    });

                </script>
                <style type="text/css">

                    body{
                        background: url(images/bg_contact3.jpg);
                    }
                    #content{
                        width: 100%;
                    }
                    .contactcontactbox{
                        position: absolute;
                        top: 330px;
                    }

                    .boxcontent{
                        position: relative;
                        top: 195px;
                    }
                    .font-contact, label{
                        font-family: RSURegular,Verdana, Geneva, sans-serif;
                        font-size: 24px;
                        line-height: 20px;
                        color: #FFF;
                    }
                    .google-maps {
                        position: relative;
                        padding-bottom: 60%; // This is the aspect ratio
                        height: 0;
                        overflow: hidden;
                    }
                    .google-maps iframe {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100% !important;
                        max-height: 300px !important;
                        -webkit-box-shadow: 0px 0px 63px -11px rgba(0,0,0,0.75);
                        -moz-box-shadow: 0px 0px 63px -11px rgba(0,0,0,0.75);
                        box-shadow: 0px 0px 63px -11px rgba(0,0,0,0.75);
                    }
                    .fontbox{
                        color: white;
                        margin-left: 5%;
                        padding-top: 10px;
                        padding-left: 20px;
                        float: left;
                        border-top: solid white 1px;

                    }
                    @media screen and (min-width: 981px) {
                        .fontbox{
                            font-size: 28px;
                        } 
                        #MapButton{
                            display: none;
                        }
                    }
                    @media screen and (min-width: 0px) and (max-width: 640px) {
                        .fontbox{
                            font-size: 24px;
                        }
                        #Map{
                            display: none;
                        }
                        #Reset{
                            display: none;
                        }
                        .boxcontent{
                            position: relative;
                            top: 185px;
                        }
                        button, .button{
                            margin: 0 0 0.75rem;
                            padding: 0.5rem 1rem 0.5rem 1rem;
                        }
                        input[type="text"], 
                        input[type="password"],
                        input[type="date"], 
                        input[type="datetime"], 
                        input[type="datetime-local"], 
                        input[type="month"],input[type="week"], 
                        input[type="email"], input[type="number"], 
                        input[type="search"], input[type="tel"], 
                        input[type="time"], input[type="url"], 
                        input[type="color"], textarea {
                            margin: 0 0 0.5rem 0;
                            font-size: 1.2rem;

                        }

                    }
                    @media screen and (min-width: 641px) and (max-width: 980px) {
                        .fontbox{
                            font-size: 26px;
                        } 
                        #MapButton{
                            display: none;
                        }
                    }
                    


                </style>
                </head>

                <body >

                    <div id="container">

                        <div id="content">
                            <div class="boxcontent">
                                <div class="row">
                                    <!--Form-->
                                    <div class="large-6 end medium-6 columns">
                                        <form method="post" >
                                            <div class="row">
                                                <div class="large-6 medium-6 small-6 columns">
                                                    <div class="name-field">
                                                        <label>Name <small style="color:#FE2E2E">Required</small>
                                                            <input type="text" placeholder="Name" required name="name"  />
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="large-6 medium-6 small-6 columns">
                                                    <div class="email-field">
                                                        <label>E-mail <small style="color:#FE2E2E">Required</small>
                                                            <input type="email" placeholder="E-mail" required name="email"  />
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="large-12 columns">
                                                    <div class="name-field">
                                                        <label>Subject <small style="color:#FE2E2E">Required</small>
                                                            <input type="text" placeholder="Subject" name="subject"  required  />
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                            
                                                <div class="large-12 columns">
                                                    <label>
                                                        Message <small style="color:#FE2E2E">Required</small>
                                                        <textarea placeholder="Message" name="message" required ></textarea>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="large-6 medium-6 small-6 columns">
                                                    <input type="submit" class="button expand" value="Submit"  />
                                                </div>
                                                <div  class="large-6 medium-6 small-6 columns">
                                                    <input id="Reset" type="reset" class="button expand" value="Reset" />
                                                    <a id="MapButton" class="button expand success" href="https://www.google.com/maps/d/embed?mid=zkdru9Viyqt4.kfFRWlvDuyso" target="_blank">
                                                        Google map
                                                    </a>
                                                </div>
                                            </div>

                                        </form>
                                        <?php
                                        if (isset($_POST['email'])) {

                                            // EDIT THE 2 LINES BELOW AS REQUIRED

                                            $email_to = "sale@hyperrichenterprise.com";

                                            $email_subject = "Message from website by customer";

                                            
                                            $email_message = "Form details below. \n\n ";
                                            
                                            $first_name = $_POST['first_name']; // required

                                            $name = $_POST['name']; // required

                                            $email_from = $_POST['email']; // required

                                            $subject = $_POST['subject']; // required

                                            $message = $_POST['message']; // not required

                                            function clean_string($string) {

                                                $bad = array("content-type", "bcc:", "to:", "cc:", "href");

                                                return str_replace($bad, "", $string);
                                            }

                                            $email_message .= "Name: " . clean_string($name) . "\n";

                                            $email_message .= "Email: " . clean_string($email_from) . "\n";

                                            $email_message .= "Subject: " . clean_string($subject) . "\n";

                                            $email_message .= "Message: " . clean_string($message) . "\n";

                                            // create email headers
                                            
                                            $headers = 'From: ' . $email_from . "\r\n" .
                                                        'Reply-To: ' . $email_from . "\r\n" .
                                                        'X-Mailer: PHP/' . phpversion();
                                            
                                            @mail($email_to, $email_subject, $email_message, $headers);
                                            ?>

                                            <!-- include your own success html here -->
                                            <div class="row">
                                                <div class="large-12 columns">
                                                    <div data-alert class="alert-box info animated infinite pulse">
                                                        Thank you for your details.
                                                        <a href="contact.php" class="close">&times;</a>
                                                    </div>
                                                </div>
                                            </div>



                                            <?php
                                        }
                                        ?>
                                    </div>

                                    <!--/Form-->

                                    <!--Google Map-->
                                    <div class=" large-6 medium-6 small-6 columns" style="padding-right:5%;">
                                        
                                        <div id="Map" class="google-maps">
                                            <iframe src="https://www.google.com/maps/d/embed?mid=zkdru9Viyqt4.kfFRWlvDuyso" width="600" height="450" frameborder="0" style="border:0"></iframe>
                                        </div>
                                    </div>
                                    <!--/Google Map-->
                                    <!--Footer-->
                                    <div class="font-contact fontbox large-12 columns">
                                        e-mail :
                                        <span>sale@hyperrichenterprise.com</span>

                                        <span>612 ซอยพระรามที่ 2 ซอย 60 แขวง แสมดำ, เขต บางขุนเทียน กรุงเทพฯ 10150
                                        </span>
                                    </div>
                                    <!--/Footer--> 
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="wrapper2" >
                        <? include("inc_head.php"); ?></div>

                </body>
                </html>