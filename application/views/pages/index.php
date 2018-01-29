<!DOCTYPE html>
<html>
<head>
	<title>Pizza Online</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/dist/css/style.css">
<script src="assets/dist/js/jquery-1.11.1.min.js"></script>
<script src="assets/dist/js/modernizr.custom.js"></script>
<script>
	$(document).ready(function () {
	    size_li = $("#myList li").size();
	    x=1;
        x= (x+1 <= size_li) ? x+1 : size_li;
        $('#myList li:lt('+x+')').show();
	});
</script>
<body>
	<div class="banner">
		<div class="container">
			<div class="top-nav">
				<nav class="navbar navbar-default">
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-center cl-effect-14">
							<li><a href="<?php echo base_url();?>home">Home</a></li>
							<li><a href="<?php echo base_url();?>about">About</a></li>
							<li><a href="<?php echo base_url();?>contact">Contact</a></li>
							<li><a href="">Login</a></li>
							<li><a href="">Sign Up</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<div class="banner-bottom">
		<div class="container">
			<div class="welcome">
				<h3 class="title">Welcome to Pizza Online</h3>
				<p>This is just a website project for our Web Application Development</p>
			</div>
			<div class="welcome-info">
				<div class="col-md-6 welcome-grids">
					<h3 class="hawaiian">Hawaiian</h3>
					<div class="welcome-img">
						<img src="assets/dist/images/hawaiian.jpg" class="img-responsive zoom-img" alt=""/>
					</div>
				</div>
				<div class="col-md-6 welcome-grids">
					<h3 class="bacon-mushroom">Bacon Mushroom</h3>
					<div class="welcome-img">
						<img src="assets/dist/images/bacon-mushroom.jpg" class="img-responsive zoom-img" alt=""/>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae </p>
		</div>
	</div>
	<div class="menu" id="menu">
		<div class="container">
			<div class="menu-tag">
				<h3 class="title">The Menu</h3>
			</div>
			<div class="load_more">	
				<ul id="myList">
					<li>
						<div class="l_g">
							<div class="l_g_r">
								<div class="col-md-6 menu-grids">
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Cheesy Krainer</h4>
											<h6>All cheese krainer</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>P95</h4>
										</div>
										<div class="clearfix"> </div>
									</div>	
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Pizza Supreme</h4>
											<h6>Pepperoni, Bacon, Mushroom, Onions, Pineapple tidbits,
											Black olives and Green bell</h61>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>P100</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Hawaiian</h4>
											<h6>Ham, Bacon, Pineapple, Mushroom, Onions and Green bell</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>P100</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Bacon Special</h4>
											<h6>Bacon, Mushroom, Ground meat, Tomatoes, Onions</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>P102</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="col-md-6 menu-grids">
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Spanish Sardines</h4>
											<h6>Spanish sardines, Carrot, Pickles, Tomatoes, Onions</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>P102</h4>
										</div>
										<div class="clearfix"> </div>
									</div>	
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Buffalo Chicken</h4>
											<h6>Chicken minced, Pineapple, Onios, Red Bells, Buffalo wings sauce</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>P105</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Sisig Twist</h4>
											<h6>Pork sisig, Onions, Red bell, Calamansi</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>P105</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Chogburizo</h4>
											<h6>Chorizo de Cebu, Ham sausage, Onions</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>P119</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div> 
						</div>	
					</li>
					<li><div class="l_g">
							<div class="l_g_r g_r">
								<div class="col-md-6 menu-grids">
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Sausage Mania</h4>
											<h6>Cheese krainer, Hungarian, Hamonado, Ham sausage</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>P120</h4>
										</div>
										<div class="clearfix"> </div>
									</div>	
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Beef Shawarma.</h4>
											<h6>Ground beef, Cucumber, Lettuce, Tomatoes, Onions</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>P120</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Taco D' Albertos</h4>
											<h6>Ground beef, Lettuce, Tomatoes, Black olives, Onions, Red and Green bell</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>P120</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Diavolos</h4>
											<h6>Hot and Spicy beef, Onions, Bacon, Peperoni, Red and Green bell</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>P120</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="col-md-6 menu-grids">
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Meatlovers</h4>
											<h6>Ham, Salami, Hungarian sausage, Ground meat, Onions and Green bell</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"></span>
										</div>
										<div class="menu-text-right">
											<h4>P125</h4>
										</div>
										<div class="clearfix"> </div>
									</div>	
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Deluxe</h4>
											<h6>Ham, Salami, Bacon, Hungarian sausage, Ground meat, Onions and Green bell</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>P125</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Meaty Royale</h4>
											<h6>Hungarian, Pepperoni, Salami, Ham, Bacon with Mozzarella cheese</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>P135</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Alberto's Full House</h4>
											<h6>Ham, Salami, Hungarian, Bacon, Pepperoni, Chicken hotdog, Beef minced,
											Chicken minced, Mushroom, Pineapple, Black olive, Onions, Red and Green bells</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>P135</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>