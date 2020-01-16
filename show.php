<?php
  session_start();
  if(!isset($_SESSION["id"])){
    header("Location:login.php");
  }
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>My MovieBox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Subscribe to MyMovieBox and get access to Unlimited Movie Download." />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
    <!-- //bootstrap -->
    <link href="css/dashboard.css" rel="stylesheet">
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
    <script src="js/jquery-1.11.1.min.js"></script>
    <!--start-smoth-scrolling-->
    <!-- fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <!-- //fonts -->
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <a class="navbar-brand" href="index.html">
                    <h1><img src="images/logo2.jpg" alt="" /></h1>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">

                <div class="header-top-right">
                    <div class="signin">
                        <!-- pop-up-box -->
                        <script type="text/javascript" src="js/modernizr.custom.min.js"></script>
                        <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
                        <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
                        <div id="small-dialog2" class="mfp-hide">
                            <h3>Create Account</h3>
                            <div class="social-sits">
                                <h1><img src="images/logo2.jpg" alt="" /></h1>
                                <div class="button-bottom">
                                    <br>
                                    <br>
                                    <p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></p>
                                </div>
                            </div>
                            <div class="signup">
                                <form>
                                    <input type="text" class="email" placeholder="First name" />
                                    <input type="text" class="email" placeholder="Last name" />
                                    <input type="text" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email" />
                                    <input type="text" class="email" placeholder="Mobile Number" maxlength="10" pattern="[1-9]{1}\d{9}" title="Enter a valid mobile number" />
                                    <input type="password" class="email" placeholder="Password" />
                                </form>
                                <div class="continue-button">
                                    <a href="#small-dialog3" class="hvr-shutter-out-horizontal play-icon popup-with-zoom-anim">CONTINUE</a>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <!--//pop-up-box -->

                        
                        <script>
                            $(document).ready(function() {
                                $('.popup-with-zoom-anim').magnificPopup({
                                    type: 'inline',
                                    fixedContentPos: false,
                                    fixedBgPos: true,
                                    overflowY: 'auto',
                                    closeBtnInside: true,
                                    preloader: false,
                                    midClick: true,
                                    removalDelay: 300,
                                    mainClass: 'my-mfp-zoom-in'
                                });

                            });
                        </script>
                    </div>
                    <div class="signin">
                        <a href="logout.php" class="play-icon popup-with-zoom-anim">log out</a>
                       
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </nav>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="show-top-grids">
            <div class="col-sm-10 show-grid-left main-grids">
                <div class="recommended">
                    <div class="recommended-grids english-grid">
                        <div class="recommended-info">
                            <div class="heading">
                                <h3>Movies</h3>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div id="cat">
                        <div class="col-sm-8 single-left">
					<div class="song">
						<div class="song-info">
							<h3>Etiam molestie nisl eget consequat pharetra</h3>	
					</div>
						<div class="video-grid">
							<iframe src="https://www.youtube.com/embed/oYiT-vLjhC4" allowfullscreen></iframe>
						</div>
					</div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- footer -->
        <div class="footer">
            <div class="footer-grids">
                <div class="footer-top">
                    <div class="footer-bottom-nav">
                        <ul>
                            <li><a href="terms.html">Terms</a></li>
                            <li><a href="privacy.html">Privacy</a></li>
                            <li><a href="#small-dialog4" class="play-icon popup-with-zoom-anim">Send feedback</a></li>
                            <li><a href="privacy.html">Policy & Safety </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //footer -->
    </div>
    <div class="clearfix"> </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
</body>

</html>