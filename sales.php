<?php
	$con=mysqli_connect("localhost","root","","shop");
	$sql="select * from shipping";
	$res=$con->query($sql);
	$currentsales=0;
	while ($row = $res->fetch_assoc()) {
     $currentsales=$currentsales+1;
	}
	$sql2="SELECT * FROM shipping ORDER BY sid DESC LIMIT 1";
	$res=$con->query($sql2);
	while ($row = $res->fetch_assoc()) {
    	$totalsales=$row['sid']."<br>";
    }
    $sqluser="select * from user";
    $customercount=0;
    $res=$con->query($sqluser);
    while ($row = $res->fetch_assoc()) {
     $customercount=$customercount+1;
	}

	$sqlcat="SELECT * FROM sub_cat ORDER BY subcat_id DESC LIMIT 1";
	$res=$con->query($sqlcat);
	while ($row = $res->fetch_assoc()) {
    	$totalsubcat=$row['subcat_id']."<br>";
    }

    $queriescount=0;
    $sqlq="SELECT * FROM contact";
	$res=$con->query($sqlq);
	while ($row = $res->fetch_assoc()) {
    	$queriescount=$queriescount+1;
    }

    $stockcount=0;

    $sqlbook="select * from book";

    $res=$con->query($sqlbook);

    while($row= $res->fetch_assoc())
    {
    	$stockcount=$stockcount+$row['book_count'];
    }
    $sale=0;
    $book1=0;
    $book2=0;
    $book3=0;
    $book4=0;
    $book5=0;
    $book6=0;
    $book7=0;
    $book8=0;
    $book9=0;
    $sqlsale="select * from shipping";
    $res=$con->query($sqlsale);
    while($row= $res->fetch_assoc())
    {
    	if($row['b_id']==1)
    		$book1=$book1+1;
    	if($row['b_id']==2)
    		$book2=$book2+1;
    	if($row['b_id']==3)
    		$book3=$book3+1;
    	if($row['b_id']==4)
    		$book4=$book4+1;
    	if($row['b_id']==5)
    		$book5=$book5+1;
    	if($row['b_id']==6)
    		$book6=$book6+1;
    	if($row['b_id']==7)
    		$book7=$book7+1;
    	if($row['b_id']==8)
    		$book8=$book8+1;
    	if($row['b_id']==9)
    		$book9=$book9+1;
    }

    $sale=($book1*161)+($book2*249)+($book3*200)+($book4*299)+($book5*500)+($book6*449)+($book7*90)+($book8*699)+($book9*199);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>The WishList | Online Book Store</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>

	<style>

	h2 {
    border: 1px solid powderblue;
    padding: 30px;








    margin: 50px;
}
	.round-img
	{

		border-radius: 50%;

		height: 100;

		width: 100;
	}

</style>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

</head>

<body>
	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<!--<p class="text-white text-lg-left text-center">Offer Zone Top Deals & Discounts
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>-->
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						<!--<li class="text-center border-right text-white">
							<a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
								<i class="fas fa-map-marker mr-2"></i>Select Location</a>
						</li>-->
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<!--<i class="fas fa-truck mr-2"></i>Track Order</a>-->
						</li>
						<!--<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i>
						</li>-->

						<li class="text-center text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
								<!--<i class="fas fa-sign-out-alt mr-2"></i>Register </a>-->
						</li>


						<li class="text-center border-right text-white">
							<!--<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">-->
								<i class="fas fa-sign-in-alt mr-2"></i>Welcome, admin1
						</li>
						
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Log In</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="checkout.php" method="post">
						<div class="form-group">
							<label class="col-form-label">E-mail</label>
							<input type="text" class="form-control" placeholder=" " name="email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="pw" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Log in">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Don't have an account?
							<a href="#" data-toggle="modal" data-target="#exampleModal2">
								Register Now</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- register -->
	<!--<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Register</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="checkout.php" method="post">
						<div class="form-group">
							<label class="col-form-label">Your Name</label>
							<input type="text" class="form-control" placeholder=" " name="Name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="Email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="Password" id="password1" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Confirm Password</label>
							<input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Register">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms & Conditions</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>



	-->




	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="index.html" class="font-weight-bold font-italic">
							<img src="images/logo2.png" alt=" " class="img-fluid">The WishList
						</a>
					</h1>
				</div>	
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- cart details -->
						<!--<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="checkout.php" method="post" class="last">
									<input type="hidden" name="cmd" value="checkout.php">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-cart-arrow-down"></i>
									</button>
								</form>
							</div>
						</div>

					-->
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->


	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				

				<!--<div class="agileits-navi_search">
					<form action="checkout.php" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">All Categories</option>
							<option value="Televisions">Televisions</option>
							<option value="Headphones">Headphones</option>
							<option value="Computers">Computers</option>
							<option value="Appliances">Appliances</option>
							<option value="Mobiles">Mobiles</option>
							<option value="Fruits &amp; Vegetables">Tv &amp; Video</option>
							<option value="iPad & Tablets">iPad & Tablets</option>
							<option value="Cameras & Camcorders">Cameras & Camcorders</option>
							<option value="Home Audio & Theater">Home Audio & Theater</option>
						</select>
					</form>
				</div>-->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							</a>
						</li>
						<!--<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Genres
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="productsf.html">Science-Fiction</a>
												</li>
												<li>
													<a href="product.html">Mystery</a>
												</li>
												<li>
													<a href="product.html">Romantic</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>-->
						<!--<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Appliances
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3">TV, Appliances, Electronics</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="product2.html">Televisions</a>
												</li>
												<li>
													<a href="product2.html">Home Entertainment Systems</a>
												</li>
												<li>
													<a href="product2.html">Headphones</a>
												</li>
												<li>
													<a href="product2.html">Speakers</a>
												</li>
												<li>
													<a href="product2.html">MP3, Media Players & Accessories</a>
												</li>
												<li>
													<a href="product2.html">Audio & Video Accessories</a>
												</li>
												<li>
													<a href="product2.html">Cameras</a>
												</li>
												<li>
													<a href="product2.html">DSLR Cameras</a>
												</li>
												<li>
													<a href="product2.html">Camera Accessories</a>
												</li>
											</ul>
										</div>
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="product2.html">Musical Instruments</a>
												</li>
												<li>
													<a href="product2.html">Gaming Consoles</a>
												</li>
												<li>
													<a href="product2.html">All Electronics</a>
												</li>
												<li>
													<a href="product2.html">Air Conditioners</a>
												</li>
												<li>
													<a href="product2.html">Refrigerators</a>
												</li>
												<li>
													<a href="product2.html">Washing Machines</a>
												</li>
												<li>
													<a href="product2.html">Kitchen & Home Appliances</a>
												</li>
												<li>
													<a href="product2.html">Heating & Cooling Appliances</a>
												</li>
												<li>
													<a href="product2.html">All Appliances</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>-->
						<!--<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="about.php">About Us</a>
						</li>-->
						<li class="nav-item">

							<a href='index.php'>Log out </a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->

	<!-- banner -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item item1 active">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>A great
								<span>place</span></p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">to be 
								<span>Stranded.</span>
							</h3>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="carousel-item item2">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>
								<span>Discover</span> something</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">
								<span>New.</span>
							</h3>
							<a class="button2" href="product.html">Shop Now </a>
						</div>
					</div>-->
				
				
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						
						<!--<div class="col-10 agileits_search">
							<form class="form-inline" action="checkout.php" method="post">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" type="submit">Search</button>
							</form>
						</div>-->
				<!-- //logo -->
				<!-- header-bot -->
				<!--<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						
						<div class="col-10 agileits_search">
							<form class="form-inline" action="checkout.php" method="post">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" type="submit">Search</button>
							</form>
						</div>
				</div>-->
			<!--</div>-->
			<!--<div class="carousel-item item3">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Read,
								<span> Lead,</span></p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">
								<span> Succeed.</span>
							</h3>
							<a class="button2" href="product.html">Shop Now </a>
						</div>
					</div>
				</div>
			</div>-->
			<!--<div class="carousel-item item4">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>More than a 
								<span>book </span></p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">
								<span>store.</span>
							</h3>
							<a class="button2" href="product.html">Shop Now </a>
						</div>
					</div>
				</div>
			</div>-->
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<br>
	<center><u><h1 style="color:#87CEFA;"> Total sales and performance record of The WishList </h1></u><br>

		<h2> Total sales made this order cycle: <i>₹<?php echo $sale ?>.00</i></h2>
		<h2> Total number of books sold: <i><?php echo $totalsales ?></i></h2>
		<h2> Current active orders: <i><?php echo $currentsales ?></i></h2>
		<h2> Total number of customers: <i><?php echo $customercount ?></i></h2>
		<h2> Total categories of books available on the website: <i><?php echo $totalsubcat ?></i></h2>
		<h2> Unsolved queries from customers: <i><?php echo $queriescount ?></i></h2>
		<h2> Total count of books in stock: <i><?php echo $stockcount ?></i></h2>
		<h2> No. of books: <i>9</i></h2><br><br><br><br><br><br><br><br><br>
	</center>

</body>

</html>