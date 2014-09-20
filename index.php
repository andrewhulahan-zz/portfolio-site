<?php
	header("Cache-Control: max-age=2592000");
	$bgImage = array('001.png', '002.png', '003.png', '004.png', '005.png', '006.png', '007.png', '008.png', '009.png', '010.png', '011.png', '012.png', '013.png', '014.png', '015.png', '016.png', '017.png');
	$i = rand(0, count($bgImage)-1);
	$selectBg = "$bgImage[$i]";
?>

<!DOCTYPE html>
<head>
	<title>Andrew Hulahan | Web Design &amp; Development</title>
	<meta name="description" content="I'm a web designer and developer in San Diego, CA.">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" href="css/stylesheet-min.css" />
	<link rel="shortcut icon" href="img/favicon.ico" />
	<link rel="apple-touch-icon" href="touch-icon-iphone.png">
	<link rel="apple-touch-icon" sizes="76x76" href="touch-icon-ipad.png">
	<link rel="apple-touch-icon" sizes="120x120" href="touch-icon-iphone-retina.png">
	<link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad-retina.png">
	<link type="text/plain" rel="author" href="humans.txt" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript"
      src="http://maps.google.com/maps/api/js?v=3.14&amp;sensor=false"></script>
    <script src="script/mapBackground-min.js" type="text/javascript"></script>
    <style type="text/css">
		<!--
		.cta{
			background: url('img/bgs/<?php echo $selectBg; ?>') center top;
		}
		-->
    </style>
</head>
<html lang='en'>
<body>
	<?php include_once("php/analyticstracking.php") ?>
	<a id="top" class="offset"></a>
	<div class="outer-container">
		<div class="page-container">
			<div class="header-container">
				<div class="span-12">
					<a class="logo smoothScroll" href="#top">
						<div id="logo-tri-1"></div>
						<div id="logo-tri-2"></div>
						<svg version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="39px" height="42px" viewBox="0 0 341.507 368.484" enable-background="new 0 0 341.507 368.484" xml:space="preserve">
							<path d="M201.776,368.484h-158c0,0-35.028-7.075-41.48-33.695s-8.408-173.187,124.516-174.242
		c89.964-0.714,121.714-4.23,121.714-4.23s13.062,1.609,29.365-7.869c13.885-8.073,16.885-39.93,16.885-78.651s0-65.163,0-65.163
		s1.713-3.203,20.423-3.203s25.161,0,25.161,6.655c0,6.655,2.58,93.172,0,105.271s3.227,82.886-68.387,85.306
		c-71.613,2.419-130.968,2.419-130.968,2.419s-88.387-0.605-88.387,87.121c0,0-4.516,32.066,23.226,35.091
		c27.742,3.025,79.355,1.21,79.355,1.21s4.516-0.604,4.516-7.864c0-7.261,3.226-93.776,3.226-93.776s-0.646-3.025,21.936-3.025
		s21.937,0.604,22.581,6.05s0.645,103.456,0.645,103.456s-2.326,16.807,19.355,32.065c12.513,8.806-15.182,7.075-15.182,7.075
		C201.776,368.484,201.776,368.484,201.776,368.484z"/>
							<path d="M208.306,138.796c0,0,2.291,4.379-21.532,2.965c-23.824-1.413-23.343,1.041-24.827-5.715
								c-1.483-6.757,1.878-133.256,1.878-133.256s-0.358-4.265,23.424-2.248c23.782,2.016,24.712-2.172,24.54,9.942
								C211.618,22.598,208.306,138.796,208.306,138.796z"/>
							<path d="M337.776,221.151v143.333c0,0-4.5,4-13.5,4s-9.5,0-9.5,0s-22.5,0.5-23-4s-0.075-126.666-0.075-126.666
								s0.178-17.008,9.409-21c13.886-6.005,17.996-5.571,25-13c3.127-3.316,11.666-15.667,11.666-8.576
								C337.776,206.242,337.776,221.151,337.776,221.151z"/>
							<path d="M379.276,215.484"/>
						</svg>
					</a>
					<div class="nav">
						<ul>
							<li>
								<a class="smoothScroll" href="#about">About</a>
							</li>
							<li>
								<a class="smoothScroll" href="#portfolio">Projects</a>
							</li>
							<li>
								<a class="smoothScroll" href="#contact">Contact</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="content-container">
				<div class="section group">
					<div class="cta">
						<div class="span-12">
							<p class="cta-2">Heya! I'm</p> 
							<p class="cta-1">Andrew Hulahan</p>
							<p class="cta-2">Web Developer &amp; Designer</p>
							<p class="cta-3">in San Diego, CA</p>
							<div class="span-4 push-4 map-container">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1024 1024" enable-background="new 0 0 1024 1024" xml:space="preserve">
									<g id="ca-layer-2">
										<path fill="#B44949" d="M707.546,1000.406l224.472-22.342l5.866-6.064l11.783-5.003L954,959l1-24l-12.833-0.5l-2.868-2.94L931,926
											l1.069-17H939l5.86-11l6.14-8.336L954,855v-12l25-17.814V815l1-13.814c0,0-36.303-24.837-47.931-31.813l-1.29-10.465L426,370.535
											V71c0,0-350-2.697-360-10.302V88l7.93,10.442l2.326,34.884L66,140.302V150v8l5.512,5.558c0,0-20.512,43.023-24.512,41.86V230v9
											l11.651,7.116c0,0,29.232,10.465,33.883,40.698c4.651,30.233-3.651,15.535-3.651,15.535l-1,24l2.326,8.141l6.977,9.302
											l2.326,13.954l-3.488,6.977l2.325,9.304c0,0,61.465,52.744,60.303,59.721c-1.162,6.979-1,24-1,24l13.953,8.14l12.791,11.628
											L200.918,481L200,492.628V507l9.977,19l-2.325,17.791l17.441,16.278l22.093,3.487l11.628,4.65l3.488,15.116l-2.326,19.768
											l-9.465-20.512l3.651,47.256l27.907,32.56l8.14,2.324l2.325,9.305l12.791,13.952l8.139,15.115l24.419,16.279
											c0,0,11.628-5.814,11.628,18.604l9.303,9.305l12.791-2.326l-3.488,12.791l0.941,13.953L370,782.163l-3.209-0.744l-1,24l6.977,4.65
											l19.768,8.14l33.721,2.326l33.722,2.325l20.932,2.325l15.116,8.14l10.465,16.279l11.628,5.813l54.65,4.65l11.629,13.954
											l1.162,13.951l24.418,2.326c0,0,41.859,15.115,54.65,39.534l15.116,23.256l13.953,13.954l6.977,18.604L707.546,1000.406z"/>
									</g>
									<g id="ca-layer-1">
										<path fill="#FB6349" d="M707.546,976.406l224.472-22.342l5.866-6.064l11.783-5.003L954,935l-3.667-8.669L940,923l-0.701-15.44
											L931,902l1.069-17H939l5.86-11l6.14-8.336L954,831v-12l25-17.814V791h-11c0,0-24.303-38.651-35.931-45.628l-1.29-10.465
											L426,346.535V47c0,0-350-2.697-360-10.302V64l7.93,10.442l2.326,34.884L66,116.302V126v8l5.512,5.558
											c0,0-20.512,43.023-24.512,41.86V206v9l10.651,7.116c0,0,30.232,10.465,34.883,40.698c4.651,30.233,0,25.582,0,25.582
											l-4.651,13.953l2.326,8.141l6.977,9.302l2.326,13.954l-3.488,6.977l2.325,9.304c0,0,65.116,59.302,63.954,66.278
											c-1.162,6.979-4.651,17.442-4.651,17.442l13.953,8.14l12.791,11.628L200.918,457L200,468.628V483l9.977,19l-2.325,17.791
											l17.441,16.278l22.093,3.487l11.628,4.65l3.488,15.116l-2.326,19.768l-10.465,3.488l4.651,23.256l27.907,32.56l8.14,2.324
											l2.325,9.305l12.791,13.952l8.139,15.115l24.419,16.279c0,0,11.628-5.814,11.628,18.604l9.303,9.305l12.791-2.326l-3.488,12.791
											l0.941,13.953L370,758.163V769l-4.209,12.419l6.977,4.65l19.768,8.14l33.721,2.326l33.722,2.325l20.932,2.325l15.116,8.14
											l10.465,16.279l11.628,5.813l54.65,4.65l11.629,13.954l1.162,13.951l24.418,2.326c0,0,41.859,15.115,54.65,39.534l15.116,23.256
											l13.953,13.954l6.977,18.604L707.546,976.406z"/>
									</g>
									<g id="ca-layer-3">
										<g>
											<path fill="#E9DA84" d="M771.746,877.06c0-21.269-17.241-38.51-38.51-38.51c-21.268,0-38.509,17.241-38.509,38.51
												c0,6.289,1.508,12.226,4.182,17.468l0,0v0.002c0.051,0.098,0.103,0.193,0.152,0.291l30.747,59.003h0.02
												c0.619,1.26,1.911,2.129,3.408,2.129c1.499,0,2.791-0.869,3.409-2.129h0.015l30.908-59.296h-0.004
												C770.237,889.285,771.746,883.349,771.746,877.06z M709.814,877.236c0-13.034,10.566-23.6,23.599-23.6
												c13.034,0,23.602,10.565,23.602,23.6c0,6.832-2.906,12.982-7.547,17.291h-0.079c-4.203,3.897-9.828,6.283-16.012,6.283
												c-6.185,0-11.81-2.386-16.013-6.283h-0.003C712.721,890.219,709.814,884.068,709.814,877.236z"/>
										</g>
									</g>
								</svg>
							</div>
						</div>
					</div>
				</div>
				<div class="section group">
						<div class="about">
							<a id="about" class="offset"></a>
							<div class="span-12">
								<h2>About Me</h2>
								<a href="https://plus.google.com/u/1/106469742601988159179?rel=author"><img width="170" height="170" alt="self-photo placeholder" src="img/me.png"></a>
								<p>Hey there, I'm Andrew Hulahan. I'm a <?php echo date('Y')-1991; ?> year old web designer & developer living in San Diego, CA. At some point in my life, I decided I wanted to make stuff for the internet, and here I am now.</p>
								<p>When I'm not learning about new technologies to help me on my web development quest, I like to engage myself in other tasks such as gaming, drawing, and writing.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="portfolio-container">
						<div class="portfolio">
							<a id="portfolio" class="offset"></a>
							<div class="section group span-12">
								<h2>Projects</h2>
								<div class="span-12">
									<div class="col span-6">
										<div class="portfolio-img">
											<header>Portfolio Site | <span class="tile html5">HTML</span> <span class="tile scss">SCSS</span> <span class="tile js">JS</span> <span class="tile php">PHP</span> <span class="tile ps">PS</span> <span class="tile ai">AI</span> <a class="portfolio-link" href="https://github.com/andrewhulahan/portfolio-site">View Source</a></header>
											<img alt="portfolio logo tile" src="img/portfolio-img/ahp_logo.png">
											<div class="portfolio-desc">
												<section>
													<dl>
														<dt>Role: </dt>
														<dd>Design and Development</dd>
														<dt>Date: </dt>
														<dd>December 17, 2013</dd>
													</dl>
													<p>The goal was to make a functional portfolio site to showcase my work.</p>
												</section>
											</div>
										</div>
									</div>
									<div class="col span-6">
										<div class="portfolio-img">
											<header>Fan Group Logos | <span class="tile ps">PS</span> <a class="portfolio-link" href="projects/everton-logos/">See More</a></header>
											<img alt="portfolio placeholder" src="img/portfolio-img/efc_logo.png">
											<div class="portfolio-desc">
												<section>
													<dl>
														<dt>Role: </dt>
														<dd>Graphic Design</dd>
														<dt>Date: </dt>
														<dd>August 5, 2014</dd>
													</dl>
													<p>I was asked to design a logo for a pair of Everton Football Club fan groups.</p>
												</section>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="section group span-12">
								<div class="span-12">
									<div class="col span-6">
										<div class="portfolio-img">
											<header>Lemon Lightbox | <span class="tile js">JS</span></header>
											<img alt="portfolio placeholder" src="img/portfolio-img/ph.png">
											<div class="portfolio-desc">
												<section>
													<dl>
														<dt>Role: </dt>
														<dd>Javascript Development</dd>
														<dt>Date: </dt>
														<dd>October 3, 2013</dd>
													</dl>
													<p>I wanted to create a javascript lightbox that could easily display images as well as flash files.</p>
												</section>
											</div>
										</div>
									</div>
									<div class="col span-6">
										<div class="portfolio-img">
											<header>SAI Logo | <span class="tile ps">PS</span> <span class="tile ai">AI</span></header>
											<img alt="sai logo tile" src="img/portfolio-img/sai_logo.png">
											<div class="portfolio-desc">
												<section>
													<dl>
														<dt>Role: </dt>
														<dd>Logo Design</dd>
														<dt>Date: </dt>
														<dd>September 5, 2013</dd>
													</dl>
													<p>The goal of this project was to design a logo for a fictional Japan-based airline.</p>
												</section>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section group">
						<div class="contact">
							<div id="map-canvas"></div>
							<a id="contact" class="offset"></a>
							<div class="span-12">
								<h2>Contact</h2>
								<div class="section group span-6 social-container">
									<a class="span-4 email social" href="mailto:andrew.hulahan@gmail.com">andrew.hulahan@gmail.com</a>
									<a class="span-4 twitter social" href="https://www.twitter.com/andrewhulahan">@andrewhulahan</a>
									<a class="span-4 github social" href="https://github.com/andrewhulahan">andrewhulahan</a>
								</div>
								<div class="push-7 span-5 email-form">
									<h3>Send A Message</h3>
									<form id="emailform" name="emailform" method="post" action="php/send_email.php">
										<input placeholder="Subject (optional)" type="text" name="subject"><br/>
										<textarea id="message" placeholder="Type your message here..." name="message"></textarea><br/>
										<input id="name" autocorrect="off" autocapitalize="words" placeholder="Name" type="text" name="name"><br/>
										<input id="email" placeholder="Email" type="email" name="email"><br/>
										<button class="submit" name="submit" type="submit">Send Message</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
		<footer class="section group">
			<div class="span-12">
				<p>Andrew Hulahan &copy; <?php echo date('Y'); ?> | <a href="credits.php">Credits</a></p>
			</div>
		</footer>
<script src="script/portfolio-min.js"></script>
<script src="script/smoothscroll-min.js"></script>
</body>
</html>