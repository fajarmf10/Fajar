<!DOCTYPE HTML>
<html>
	<head>
		<title>Fajar Maulana Firdaus</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

			<section id="header">
				<header class="major">
					<h1>Fajar Maulana Firdaus</h1>
					<p>Android and Web Developers | Drummers</p>
				</header>
				<div class="container">
					<ul class="actions">
						<li><a href="#one" class="button special scrolly">Start now!</a></li>
					</ul>
				</div>
			</section>

			<section id="one" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="images/pic01.jpg" alt="" /></span>
					<div class="content">
						<header class="major">
							<div class="12u"><span class="image fit"><img src="images/me.jpg" alt="" /></span></div>
							<h2>Who am i</h2>
						</header>
						<p>Hello! My name is Fajar Maulana Firdaus. I'm a Web Developer with over 4 years of experience in front end and back end development. Having a knowledge on HTML5, CSS, CSS3, JSON, XML, Java, JavaScript, C, C++, PHP, Python. Have a huge background in management and organizations.</p>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</div>
			</section>

			<section id="two" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="images/pic02.jpg" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2>Stuff i do</h2>
						</header>
						<p>I'm passionated android and web developers. I currently take on the subject of Computer Science / Informatics at Institut Teknologi Sepuluh Nopember. Sometimes i take a part-time job as web developers.</p>
						<ul class="icons-grid">
							<li>
								<span class="icon major fa-wordpress"></span>
								<h3>Wordpress Veteran</h3>
							</li>
							<li>
								<span class="icon major fa-music"></span>
								<h3>Musician</h3>
							</li>
							<li>
								<span class="icon major fa-code"></span>
								<h3>Experienced Programmer</h3>
							</li>
							<li>
								<span class="icon major fa-book"></span>
								<h3>Book Lover</h3>
							</li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</div>
			</section>

			<section id="three" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="images/pic03.jpg" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2>Experience</h2>
						</header>
						<p>I'm a freelancer on AngkaKosong.com (as well as AngkaKosong.net) and lab assistant on Mobile Innovation Studio (Informatics @ Institut Teknologi Sepuluh Nopember). My past was working on Geffco Web Lab as Web and Software Developers, taking approximately 9 projects finished. If you are interested on my service, or just wanna have a nice conversations, just hit me on the e-mail ;)<br><br>I got a lot of social and management experiences too, such as running events, and i'm currently a staff on Python ID Surabaya [surabaya.py], which is a community to connect all the Python Programmers on Surabaya.</p>
					</div>
					<a href="#footer" class="goto-next scrolly">Next</a>
				</div>
			</section>

			<section id="footer">
				<div class="container">
					<header class="major">
						<h2>Get in touch with me</h2>
					</header>
					<?php
$action=$_REQUEST['action'];
if ($action==""){
    ?>
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Your name:<br>
    <input name="name" type="text" value="" size="30"/><br>
    Your email:<br>
    <input name="email" type="text" value="" size="30"/><br>
    Your message:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="  Send  "/>
    </form>
    <?php
    } 
else{
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if(($name=="")||($email=="")||($message=="")){
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
		}
    else{
		$from="From: $name<$email>\r\nReturn-path: $email";
		$subject="New message from your visitor!";
		mail("fajarmf78@gmail.com", $subject, $message, $from);
		echo "Email sent! Thank you for sending me an email, see you soon!";
	    }
    }
?>

				</div>
				<footer>
					<ul class="icons">
						<li><a href="https://twitter.com/fajarmf28" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://id.linkedin.com/in/fajar-maulana-firdaus-99bb50111" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="https://facebook.com/fajarmf28" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://instagram.com/fajarmf_" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://gtihub.com/harkadious/" class="icon alt fa-github"><span class="label">Dribbble</span></a></li>
						<li><a href="mailto:fajar@angkakosong.net" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; <?php echo date("Y"); ?> by Fajar Maulana Firdaus</li><li>Inspired by: <a href="https://www.facebook.com/vina.phina.7">Zakhruvia Nisa' Akromah</a></li>

					</ul>
				</footer>
			</section>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>