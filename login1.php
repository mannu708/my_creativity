<!---/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/index.htmlselect product_id,template_id,template_title,template_name,featured_image,featured_image_server_id,
full_image_server_id,full_image from template_down_details where starter_demo_url='/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/index.html' lat part:login.html--->
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
include("visitors.php");
?>

<?php
session_start();
//if(isset($_GET['x']))
//{


   //  $sno=$_GET['x'];


?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demosWTR/Freedom/30-03-2020/home-service-freedom-demo_Free/1435018137/web/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Apr 2021 09:51:09 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Service a Home Maintenance category Responsive Web Template | Login : W3layouts</title>
    <link rel="stylesheet" href="assets/css/style-freedom.css">
    <script src="sweetalert/cdnjs/sweetalert.min.js"></script>
</head>

<body>
    <script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
            }
        })();
    </script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
            }
        })();
    </script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
            }
        })();
    </script>
    <!--<script>(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "//a.vdo.ai/core/w3layouts_V2/vdo.ai.js?vdo=34");</script>-->
    <div id="codefund">
        <!-- fallback content -->
    </div>
    <script src="../../../../../../../codefund.io/properties/441/funder.js" async="async"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-149859901-1');
    </script>

    <script>
        window.ga = window.ga || function() {
            (ga.q = ga.q || []).push(arguments)
        };
        ga.l = +new Date;
        ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
        ga('require', 'eventTracker');
        ga('require', 'outboundLinkTracker');
        ga('require', 'urlChangeTracker');
        ga('send', 'pageview');
    </script>
    <script async src='../../../../../../js/autotrack.js'></script>

    <meta name="robots" content="noindex">

    <body>
        <!-- Demo bar start -->
        <link rel="stylesheet" href="../../../../../../assests/css/font-awesome.min.css">
        <!-- New toolbar-->
        <style>
            * {
                box-sizing: border-box;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            }
            
            #w3lDemoBar.w3l-demo-bar {
                top: 0;
                right: 0;
                bottom: 0;
                z-index: 9999;
                padding: 40px 5px;
                padding-top: 70px;
                margin-bottom: 70px;
                background: #0D1326;
                border-top-left-radius: 9px;
                border-bottom-left-radius: 9px;
            }
            
            #w3lDemoBar.w3l-demo-bar a {
                display: block;
                color: #e6ebff;
                text-decoration: none;
                line-height: 24px;
                opacity: .6;
                margin-bottom: 20px;
                text-align: center;
            }
            
            #w3lDemoBar.w3l-demo-bar span.w3l-icon {
                display: block;
            }
            
            #w3lDemoBar.w3l-demo-bar a:hover {
                opacity: 1;
            }
            
            #w3lDemoBar.w3l-demo-bar .w3l-icon svg {
                color: #e6ebff;
            }
            
            #w3lDemoBar.w3l-demo-bar .responsive-icons {
                margin-top: 30px;
                border-top: 1px solid #41414d;
                padding-top: 40px;
            }
            
            #w3lDemoBar.w3l-demo-bar .demo-btns {
                border-top: 1px solid #41414d;
                padding-top: 30px;
            }
            
            #w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
                font-size: 26px;
            }
            
            #w3lDemoBar.w3l-demo-bar .no-margin-bottom {
                margin-bottom: 0;
            }
            
            .toggle-right-sidebar span {
                background: #0D1326;
                width: 50px;
                height: 50px;
                line-height: 50px;
                text-align: center;
                color: #e6ebff;
                border-radius: 50px;
                font-size: 26px;
                cursor: pointer;
                opacity: .5;
            }
            
            .pull-right {
                float: right;
                position: fixed;
                right: 0px;
                top: 70px;
                width: 90px;
                z-index: 99999;
                text-align: center;
            }
            /* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */
            
            #right-sidebar {
                width: 90px;
                position: fixed;
                height: 100%;
                z-index: 1000;
                right: 0px;
                top: 0;
                margin-top: 60px;
                -webkit-transition: all .5s ease-in-out;
                -moz-transition: all .5s ease-in-out;
                -o-transition: all .5s ease-in-out;
                transition: all .5s ease-in-out;
                overflow-y: auto;
            }
            /* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */
            
            .hide-right-bar-notifications {
                margin-right: -300px !important;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }
            
            @media (max-width: 992px) {
                #w3lDemoBar.w3l-demo-bar a.desktop-mode {
                    display: none;
                }
            }
            
            @media (max-width: 767px) {
                #w3lDemoBar.w3l-demo-bar a.tablet-mode {
                    display: none;
                }
            }
            
            @media (max-width: 568px) {
                #w3lDemoBar.w3l-demo-bar a.mobile-mode {
                    display: none;
                }
                #w3lDemoBar.w3l-demo-bar .responsive-icons {
                    margin-top: 0px;
                    border-top: none;
                    padding-top: 0px;
                }
                #right-sidebar,
                .pull-right {
                    width: 90px;
                }
                #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile {
                    margin-bottom: 0;
                }
            }
        </style>
        

        <!---<div class="responsive-icons">
            <a href="#url" class="desktop-mode">
                <span class="w3l-icon -desktop">
                    <span class="fa fa-desktop"></span>
                </span>
            </a>
            <a href="#url" class="tablet-mode">
                <span class="w3l-icon -tablet">
                    <span class="fa fa-tablet"></span>
                </span>
            </a>
            <a href="#url" class="mobile-mode no-margin-bottom">
                <span class="w3l-icon -mobile">
                    <span class="fa fa-mobile"></span>
                </span>
            </a>
        </div>-->
        </div>
        <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003" style="overflow: hidden; outline: none;">
        </div>
        </div>
        </div>
        </div>



        <!-- forms-17 -->
        <section class="w3l-forms-17">
            <div id="forms-17_sur">
                <div class="wrapper">

                    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
                        <!---728x90--->

                    </div>
                    <div class="forms-17-top">
                        <div class="forms-17-text">
                            <div class="top">
                                <span class="fa fa-user"></span>
                                <h4>Hey, welcome back</h4>
                                <p>Login to your account now</p>
                            </div>
                                                    </div>
                        <div class="forms-17-form">
                            <div class="form-17-tp">
                                <h6>Login</h6>
                                <form method="post" >
                                    <div class="form-input">
                                        <input type="email" name="email" placeholder="Your email address" required />
                                    </div>
                                    <div class="form-input">
                                        <input type="password" name="pass" placeholder="Your password" required />
                                    </div>
                                    
                                    <div class="forget">
                                        <a href="#url" class="forget-pas">Forgot password?</a>
                                    </div>
                                    <div class="align-left-right">
                                    <button class="btn" name="sub" type="submit">Login</button>
                                        <ul class="login-social">
                                            <li><a href="#" class="facebook"><span class="fa fa-facebook-square"></span></a>
                                            </li>
                                            <li><a href="#" class="twitter"><span class="fa fa-twitter-square"></span></a>
                                            </li>
                                            <li><a href="#" class="instagram"><span class="fa fa-instagram"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="bottom-login">
                                        <p>Not a customer? <a href="signup.php">Sign Up</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="btn btn-home text-center">
                        <a href="index1.php" class="">Back to home <span class="fa fa-long-arrow-right"></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- forms-17 -->
        <?php
include("admin/tables/db_connect.php");
if(isset($_POST['sub']))
{

    $email=$_POST['email'];
    $pass=$_POST['pass']; 
	
	$x="select * from registration where email_id='$email' and password='$pass'";
	$y=mysqli_query($con,$x);
	$n=mysqli_num_rows($y);
if($n>0)
{
	while($c=mysqli_fetch_array($y))
	{
	
	
    if(isset($_POST['rme']))
    {

		$_COOKIE['sno']=$c['sno'];
   
    $_COOKIE['email']=$c['name'];
   
    setcookie("email",$email,time()+4*60*60);
echo $_COOKIE['email'];
   
    
	//header("location:show_data.php");
}
else
{
$_SESSION['sno']=$c['sno'];
$_SESSION['email']=$c['name'];
?>

<script>
alert("Login Sucessfully");
window.location='services.php';
</script>
<?php
//header("location:contact.php");
//echo"correct";
}
}
}
else{
     echo "<script> alert('Wrong username and password');</script>";
}
}



?>