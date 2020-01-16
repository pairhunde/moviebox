
<?php
	session_start();
	include('conn.php');

	if(isset($_SESSION['id'])){
		header('location:index1.php');
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
    <!-- //fonts --><style>
	#login_form{
		width:350px;
		position:relative;
		top:50px;
		margin: auto;
		padding: auto;
		color: red;
	}
</style>
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
                <a class="navbar-brand" href="movies.php.html">
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
                        
                        <!--//pop-up-box -->

                        <div id="small-dialog8" class="mfp-hide">
                                <h1><img src="images/logo2.jpg" alt="" /></h1>
                                <br>
                            <h3>Subscribe to MovieBox Plan</h3>
                            <div class="signup subscribe-grid">
                                <form method="POST" action="register_config.php">
										<input type="text" name="email"  class="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
                                    <input type="submit" value="Subscribe" />
                                </form>
                            </div>
                        </div>
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
                        <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign In</a>
                        <div id="small-dialog" class="mfp-hide">
                            <h3>Login</h3>
                            <div class="social-sits">
                                <div class="button-bottom">
                                    <p>No Access? <a href="#small-dialog8" class="play-icon popup-with-zoom-anim">Subscribe Now</a></p>
                                </div>
                            </div>
                            <div class="signup">
                                <form method="POST" action="login_config.php">
                                    <span class='emailerr' style="color: red;font-size: smaller;"></span>
                                    <input type="text" class="email" name="email" placeholder="Enter email / mobile" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" />
                                    <span class='pass' style="color: red;font-size: smaller;"></span>
                                    <input type="password" placeholder="Password" name="password" required="required" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />
                                    <input type="submit" value="submit" />
                                </form>
                                <div class="forgot">
                                    <a href="#">Forgot password ?</a>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
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
                            <div class="heading-right">
                                <a href="#small-dialog8" class="play-icon popup-with-zoom-anim">Subscribe</a>
		<?php
			if(isset($_SESSION['log_msg'])){
				?>
				<div style="height: 30px;"></div>
				<div class="alert alert-danger">
					<span><center>
					<?php echo $_SESSION['log_msg'];
						unset($_SESSION['log_msg']); 
					?>
					</center></span>
				</div>
				<?php
			}
		?>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-md-3 resent-grid recommended-grid movie-video-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/c11.jpg" alt="" /></a>
                                <div class="time small-time show-time movie-time">
                                    <p>9:34</p>
                                </div>
                                <div class="clck movie-clock">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
                                <h2> Frozen II (2019) [DVDScr]</h2>
                                <h5>Elsa the Snow Queen has an extraordinary gift -- the power to create ice and snow. But no matter how happy she is to be surrounded by the people of Arendelle, Elsa finds herself strangely unsettled. After hearing a mysterious voice call out to her, Elsa travels to the enchanted forests and dark seas beyond her kingdom -- an adventure that soon turns into a journey of self-discovery.</h5>
                                <ul>
                                    <li>
                                        <p class="author author-info"><a href="#small-dialog8" class="popup-with-zoom-anim author">Download Now</a></p>
                                    </li>
                                    <li class="right-list">
                                        <p class="views views-info">1 hour 43 minutes</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 resent-grid recommended-grid movie-video-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/PP2.jpg" alt="" /></a>
                                <div class="time small-time show-time movie-time">
                                    <p>3:04</p>
                                </div>
                                <div class="clck movie-clock">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
                                <h2>The Angry Birds Movie 2 (2019)</h2>
                                <h5>Red, Chuck, Bomb and the rest of their feathered friends are surprised when a green pig suggests that they put aside their differences and unite to fight a common threat. Aggressive birds from an island covered in ice are planning to use an elaborate weapon to destroy the fowl and swine way of life. After picking their best and brightest, the birds and pigs come up with a scheme to infiltrate the island, deactivate the device and return to their respective paradises intact.</h5>
                                <ul>
                                    <li>
                                        <p class="author author-info"><a href="#small-dialog8" class="popup-with-zoom-anim author">Download Now</a></p>
                                    </li>
                                    <li class="right-list">
                                        <p class="views views-info">1 hour 37 minutes</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 resent-grid recommended-grid movie-video-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/malificent.jpg" alt="" /></a>
                                <div class="time small-time show-time movie-time">
                                    <p>2:06</p>
                                </div>
                                <div class="clck movie-clock">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
                                <h2>Maleficent: Mistress of Evil (2019)</h2>
                                <h5>Maleficent and her goddaughter Aurora begin to question the complex family ties that bind them as they are pulled in different directions by impending nuptials, unexpected allies, and dark new forces at play.</h5>
                                <ul>
                                    <li>
                                        <p class="author author-info"><a href="#small-dialog8" class="popup-with-zoom-anim author">Download Now</a></p>
                                    </li>
                                    <li class="right-list">
                                        <p class="views views-info"> 1 hour 59 minutes</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 resent-grid recommended-grid movie-video-grid">
                            <div class="resent-grid-img recommended-grid-img">
                                <a href="single.html"><img src="images/spd11.jpg" alt="" /></a>
                                <div class="time small-time show-time movie-time">
                                    <p>2:06</p>
                                </div>
                                <div class="clck movie-clock">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="resent-grid-info recommended-grid-info recommended-grid-movie-info">
                                <h2>Spider-Man: Into the Spider-Verse (2018)</h2>
                                <h5>Bitten by a radioactive spider in the subway, Brooklyn teenager Miles Morales suddenly develops mysterious powers that transform him into the one and only Spider-Man. When he meets Peter Parker, he soon realizes that there are many others who share his special, high-flying talents. Miles must now use his newfound skills to battle the evil Kingpin, a hulking madman who can open portals to other universes and pull different versions of Spider-Man into our world.</h5>
                                <ul>
                                    <li>
                                        <p class="author author-info"><a href="#small-dialog8" class="popup-with-zoom-anim author">Download Now</a></p>
                                    </li>
                                    <li class="right-list">
                                        <p class="views views-info"> 1 hour 44 minutes</p>
                                    </li>
                                </ul>
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