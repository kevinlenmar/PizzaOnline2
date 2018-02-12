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
							<li><a href="<?php echo base_url();?>login">Login</a></li>
							<li><a href="<?php echo base_url();?>signup">Sign Up</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>