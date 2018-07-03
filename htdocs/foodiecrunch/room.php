
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>rooms</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Spicy Bite Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	<!--about-bottom -->
	<link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
	<!--about-bottom -->
	<link href="//fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
	<div class="agile-banner-main" id="home">
		<div class="banner-layer">
			<div class="header-main">
				<div class="container">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

						</div>
						<!-- navbar-header -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li class="scroll hvr-underline-from-center">
									<a href="index.html">ROOM BOOKINGS</a>
								</li>
								
							</ul>
							<ul class="list-right">
								<li>
									<span class="fa fa-envelope-o list-icon" aria-hidden="true"></span>
									<a href="mailto:info@example.com">thefoodiecrunch@gmail.com</a>
								</li>
								<li>
									<span class="fa fa-phone list-icon" aria-hidden="true"></span>
									<p>9876543210</p>
								</li>
							</ul>
						</div>


						<div class="clearfix"> </div>
					</nav>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //menu -->
			<!-- banner -->
			<div class="container">
				<div class="banner-top">
					<div class="banner-info">
						<h1>
							<a href="index.html">
								<img src="images/logo.png" class="img-responsive" alt="" /></a>
						</h1>
						
	<!-- //about -->
	
	<!--reservation-->
	<div class="reservation book-right">
		<div class="container">
			<h3 class="w3layouts-title title-reserve">BOOK ROOMS</h3>
			<!--<div class="book-info">
				-->
			<div class="book-left1"></div>
			<div class="book-right1">
				<form action="roominvoice.php" method="post">
					<div class="date-field"><div class="form-left">
						<label>check in date :</label>
						<input type="text" id="datepicker" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"
						required="" name="checkin">
					</div>
					</div>	
					<div class="form-right">
						<label>check out within(days):</label>
						<input type="text" name="day" >
				
					</div>
					<div class="form-left">
						<label>No.of People :</label>
						<select required="" name="npeople">
							<option value="1 Adult">1 Adult</option>
							<option value="2 adults">2 adults </option>
							<option value="2 adults and a child">2 adults and a child</option>
							<option value="2 adults and 2 children">2 adults and 2 children</option>
						</select>
					</div>
					<div class="form-right">
						<label>Time :</label>
						<select required="" name="times">
							<option value="">Select Time</option>
							<option value="10:00">10:00</option>
							<option value="11:00">11:00</option>
							<option value="12:00">12:00</option>
							<option value="13:00">13:00</option>
							<option value="14:00">14:00</option>
							<option value="15:00">15:00</option>
							<option value="16:00">16:00</option>
							<option value="17:00">17:00</option>
							<option value="18:00">18:00</option>
							<option value="19:00">19:00</option>
							<option value="20:00">20:00</option>
							<option value="21:00">21:00</option>
							<option value="22:00">22:00</option>


						</select>

					</div>
					<div class="clearfix"> </div>
					<div class="phone-info">
						<label>Contact Info :</label>
						<input type="text" placeholder="Phone Number" name="contacts">
					</div>	
					<div class="clearfix"> </div>
					<div class="phone-info">
						<label>Email:</label>
						<input type="text" placeholder="Email" name="es">
					</div>
					<div class="clearfix">
						<label>type of rooms: :</label>
						<select required="" name="rooms">
							<option value="deluxe rooms|6500">deluxe rooms                                   र6500</option>
							<option value="fully furnished|8000">fully furnished                                र8000 </option>
							<option value="spcl.longue|10000">spcl.longue                                    र10000    </option>
							<option value="independent villa|15000">independent villa                              र15000</option>
						</select>
					</div>
					<input type="submit" value="Book now">
				</form>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//reservation-->
	
	<!--footer-->
	<div class="footer-grid">
		<div class="container">
				<div class="footer_grid_bottom contact">
					<ul>

						<li>
							<span class="fa fa-envelope-o" aria-hidden="true"></span>
							<a href="mailto:info@example.com">thefoodiecrunch@gmail.com</a>
						</li>
						<li>
							<span class="fa fa-phone" aria-hidden="true"></span>
							<p>9876543210</p>
						</li>
						<li>
							<span class="fa fa-map-marker" aria-hidden="true"></span>
							<p>The Foodie Crunch,149k Avenue C sector,foodie park,chennai-17</p>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		 
	<div class="footer-cpy text-center">
		<div class="social_banner">
			<ul class="social_list">
				<li>
					<a href="#" class="facebook">
						<span class="fa fa-facebook" aria-hidden="true"></span>
					</a>
				</li>
				<li>
					<a href="#" class="twitter">
						<span class="fa fa-twitter" aria-hidden="true"></span>
					</a>
				</li>
				<li>
					<a href="#" class="dribble">
						<span class="fa fa-dribbble" aria-hidden="true"></span>
					</a>
				</li>
				<li>
					<a href="#" class="vimeo">
						<span class="fa fa-vimeo" aria-hidden="true"></span>
					</a>
				</li>
			</ul>
		</div>
		<div class="footer-copy">
			<p>© 2017 The Foodie Crunch. All rights reserved
				
			</p>
		</div>
	</div>
	<!--//footer-->




	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!--/js-->
	<!-- //gallery -->
	<script src="js/jquery.tools.min.js"></script>
	<script src="js/jquery.mobile.custom.min.js"></script>
	<script src="js/jquery.cm-overlay.js"></script>

	<script>
		$(document).ready(function () {
			$('.cm-overlay').cmOverlay();
		});
	</script>
	<!-- //gallery -->
	<!--start-date-piker-->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1").datepicker();
		});
	</script>
	<!-- /End-date-piker -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!--//end-smooth-scrolling-->
	<!-- smooth-scrolling-of-move-up  -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>


	<script src="js/SmoothScroll.min.js"></script>

	<script>
		$(document).ready(function () {
			size_li = $("#myList li").size();
			x = 1;
			$('#myList li:lt(' + x + ')').show();
			$('#loadMore').click(function () {
				x = (x + 1 <= size_li) ? x + 1 : size_li;
				$('#myList li:lt(' + x + ')').show();
			});
			$('#showLess').click(function () {
				x = (x - 1 < 0) ? 1 : x - 1;
				$('#myList li').not(':lt(' + x + ')').hide();
			});
		});
	</script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>


</body>

</html>