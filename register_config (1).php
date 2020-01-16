<?php
	include('db.php');
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	function check_input($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}

	$email=check_input($_POST['email']);
	$password=md5(check_input($_POST['password']));

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		$_SESSION['sign_msg'] = "Invalid email format";
  		header('location:signup.php');
	}

	else{

		$query=mysqli_query($conn,"select * from movieuser where email='$email'");
		if(mysqli_num_rows($query)>0){
			$_SESSION['sign_msg'] = "Email already taken";
  			header('location:signup.php');
		}
		else{

		mysqli_query($conn,"insert into movieuser (email) values ('$email')");
		$uid=mysqli_insert_id($conn);
		//default value for our verify is 0, means it is unverified

		//sending email verification
		$to = $email;
			$subject = "Subscribe MovieBox";
			$message = "
				<html>
				<head>
				<title>Verification Code</title>
				</head>
				<body>
				<div class='section-top-border'>
						<div class='row height align-items-center justify-content-center'>
							<div class='col-lg-4 col-md-4'>
                    <p align='center'><img src='https://airhco.org/moviebox/images/logo2.jpg' alt='' width='94' height='103' /><span style='font-size: 24pt; font-family: impact, sans-serif;'><strong>MovieBox</strong></span></p>
<p align='center'>&nbsp;</p>
<p align='center'><span style='font-size: 14pt; font-family: impact, sans-serif;'>Kindly Select plan</span></p>
<hr />
<p align='center'>&nbsp;</p>
<p align='center'><span style='font-size: 14pt; font-family: impact, sans-serif;'><strong><span style='color: #000000;'><a class='fl' style='color: #000000;' href='https://en.wikipedia.org/wiki/Pound_sign'>&pound;</a>&nbsp;2.15&nbsp; <span style='font-size: 12pt;'>Subscribe weekly plan</span></span>&nbsp;&nbsp;<a href=''><img src='https://airhco.org/moviebox/images/subscribe-video.jpg' alt='' width='84' height='31' /></a></strong></span></p>
<p align='center'><span style='font-size: 14pt; font-family: impact, sans-serif;'><strong><span style='color: #000000;'><a class='fl' style='color: #000000;' href='https://en.wikipedia.org/wiki/Pound_sign'>&pound;</a>&nbsp;4.30 <span style='font-size: 12pt;'>Subscribe Monthly plan</span></span>&nbsp;<a href=''><img src='https://airhco.org/moviebox/images/subscribe-video.jpg' alt='' width='84' height='31' /></a></strong></span></p>
<p>&nbsp;</p>
					<p style='font-family:OCR A; font-size:13px; color:black'>Your login email: ".$email."</p>
					<p style='font-family:OCR A; font-size:13px; color:black'>Login key will be sent to your after payment is successful</p>
					<hr>
					<br>
                    <p style='font-family:tahoma; font-size:13px; text-align:left;' >Kind regards<br><b> MovieBox Team</b></p>
							</div>
						</div>
				</div>
				<br>
				<br>
				<footer>
				<hr>
				<div class='col-lg-3  col-md-12'>
                        
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					<p class='col-lg-8 col-sm-12 footer-text m-0 text-white' style='font-family:OCR A; font-size:13px; color:black'>&copy; <script>document.write(new Date().getFullYear());</script> All rights reserved |MovieBox</p>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						   
                        </div>
                    </div>
				</footer>
				</body>
				</html>
				";
			//dont forget to include content-type on header if your sending html
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: Subscribe@moviebox.airhco.org". "\r\n" .
						"CC: morchlong88@gmail.com";

		mail($to,$subject,$message,$headers);

		$_SESSION['sign_msg'] = "Verification code sent to your email.";
  		header('location:movies.php');

  		}
	}
	}
?>