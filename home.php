<?php 
	session_start();
	if (isset($_SESSION['username1']))
	 {
		header('Location: /hrs/client_page.php');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to INNOSPHERE SOFTWARE SOLUTIONS INC.</title>
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<script src = "js/jquery.min.js"></script>
	<script src = "js/bootstrap.min.js"></script>
</head>
<body style="overflow-x: hidden;">
<style type="text/css">
	#logo
	{
			height:53px;
	width:200px;
	left: 7px;
	top: 3px;
	position: absolute;
	
	}
	
</style>
	<nav class=" navbar-default navbar-inverse navbar-fixed-top" style="background-color: blue;" >
	<img src="images/resh.jpg" id="logo">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-target="#mainNavbar" data-toggle="collapse">
				<span class=icon-bar></span>
				<span class=icon-bar></span>
				<span class=icon-bar></span>
			</button>
		</div>
			<div class="navbar-collapse collapse" id="mainNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php" class="nav-text"></span> HOME</li></a>
					<li><a href="#facilities" class="nav-text"></span> INDUSTRIES</li></a>
					<li><a href="#bedrooms" class="nav-text"></span> SERVICES</li></a>
					<li><a href="#gallery" class="nav-text"></span> RESOURCES</a></li>
					<li><a href="#about.us" class="nav-text"></span> ABOUT US</a></li>
					<li><a href="#contact.us" class="nav-text"></span> CONTACT US</a></li> 
					            
					         	 </ul>
				
					         						    
					         	 </ul>        	 

					         	  </font>
          </div>
	</div>
	</nav>	
<div class="container">
				<div class="row">
					<img src="images/bannerflat.jpg" id="bann" style="position: absolute;">
				</div>
			</div>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/house.jpg" id="caro">
    </div>
    <div class="item">
      <img src="images/house2.jpg" id="caro">
    </div>

  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

			
<div class="bg-1 jumbotron">
<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<font face="lato"><h2 class="header1"><b> INNOSPHERE SOFTWARE SOLUTIONS INC.</b></h2><br>
				<p class="subheader2">Experience our Services</p></font>
			</div>

			


		<div class="container jumbotron">
		<div class="row">
				
			

			

		</div>
	</div>	
			<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center header22"><b>What did they just said?</b></h2><hr><br>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<img src="images/user.png" class="img-circle img-responsive center-block quote1">
					 <font face="lato"><br><p class="text-center quote">"We highly recommend INNOSPHERE SOFTWARE SOLUTIONS to any business looking for reliable, cost-effective, and scalable outsourcing solutions."><i><br><br><span class="fa fa-star "></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span><br><br><b>-Patchotz</b></i></p></font>
				</div>	
				<div class="col-md-6 col-sm-6 col-xs-6">
					<img src="images/user.png" class="img-circle img-responsive center-block quote1">
					<font face="lato"><br><p class="text-center quote">"We've been working with your BPO team for over a year now, and we’ve consistently received high-quality service. The customer support agents are professional, empathetic, and always go above and beyond to meet our needs. We’ve seen an increase in customer satisfaction because of your team."<<i><br><br><span class="fa fa-star "></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><br><br><b>-Bogart</i></b></p></font>
				</div>
				</div>
			</div>
		</div>
	</div>	
<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center"><br><br><br>
				<a name="gallery"></a><span class="glyphicon glyphicon-sunglasses center-block text-center"></span>
				<h2 class="header31"><br>RESOURCES</h2><p class="information">Welcome to our Resources hub! Here, you’ll find valuable tools, industry insights, case studies, whitepapers, and other essential materials designed to help you better understand our services and the BPO industry. Whether you're looking for helpful guides on optimizing business operations, exploring best practices, or discovering the latest trends, we’ve got you covered. Our resources are carefully curated to empower your business with the knowledge and expertise needed to make informed decisions and achieve success.
Explore our collection today to learn how outsourcing solutions can elevate your business to new heights</p>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/pool.jpg" class="img-responsive margin thumbnail">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/pool1.jpg" class="img-responsive margin thumbnail">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/pool3.jpg" class="img-responsive margin thumbnail">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/pool4.jpg" class="img-responsive margin thumbnail">
			</div>
			<div class="col-md-12 text-center"><a name="bedrooms"></a><hr>
			<h2 class="header31"><br> OUR SERVICES</h2><p class="information">we offer a wide range of high-quality Business Process Outsourcing (BPO) services designed to streamline your operations, enhance efficiency, and drive business growth. Our team of dedicated professionals utilizes cutting-edge technology and industry expertise to deliver customized solutions that cater to your unique needs. Whether you're looking to outsource customer support, back-office operations, or IT services, we have the skills and resources to help your business succeed. <br></p>	
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/ser1.jpg" class="img-responsive margin thumbnail">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/ser2.jpg" class="img-responsive margin thumbnail">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/ser3.jpg" class="img-responsive margin thumbnail">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/ser4.jpg" class="img-responsive margin thumbnail">
			</div>

			<div class="col-md-12 text-center"><a name="facilities"></a><hr><br>
			<br><h2 class="header31">INDUSTRIES</h2></br><p class="information">we understand that each industry has unique challenges and requirements. Our BPO solutions are tailored to meet the specific needs of a variety of industries, ensuring your business operations run smoothly and efficiently. With years of experience across diverse sectors, we are committed to delivering customized solutions that help your business thrive, no matter the industry. <br></p></font>
			</div>
			 <img src="images/indu.jpg" id="caro">
			
				
			</div>
		</div>
	</div><a name="about.us"></a>
</div><br><br><br>
	<div class="jumbotron">
		<div class="container">
			<div class="col-md-12 col-sm-12"><br>
			<span class="glyphicon glyphicon-user center-block text-center" id="user"></span>
				<h2 class="section text-center main"><b><br>ABOUT US </b></h2>
				<a href="home.php"><br><img src="images/user.png" class="img-circle img-responsive center-block  myicon"></a>
			<br><font face="lato" color="black"><p class="text-center myinfo">At INNOSPHERE SOFTWARE SOLUTIONS INC. we specialize in providing high-quality BPO services designed to help businesses streamline their operations, reduce costs, and enhance customer satisfaction. With years of industry expertise, we offer a wide range of tailored outsourcing solutions, including customer support, technical assistance, back-office operations, and more.

Our team of dedicated professionals is committed to delivering exceptional service and support, ensuring that your business can focus on growth and innovation while we handle the day-to-day tasks. Leveraging cutting-edge technology and best practices, we ensure efficiency, accuracy, and scalability in every project we undertake.

We believe in building strong, long-term relationships with our clients by offering customized solutions that align with their specific needs. Whether you're a small business looking for efficient support or a large enterprise in need of comprehensive outsourcing services, Innosphere Software Solutions INC. is your trusted partner in driving success.</p></font><br><br><br>
		</div>
	</div>
		<br><br><br><br><br><a name="contact.us"></a><span class="glyphicon glyphicon-phone center-block text-center"></span>
			<h2 class="section text-center main"><b><br>CONTACT US</b></h2><br>
			<div class="container">
				<div class="row">
					<font face="century gothic"><h3 class="text-center">Message us now!</h3></font>
					<div class="col-md-6">
						
						<form class="form-horizontal" action="message_db.php" method="post"><br><br>
							<div class="form-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
								<input type="email" class="form-control" name="email_msg" placeholder="Email Address" required="">	
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-comment"></span>
								</span>
								<input type="textbox" class="form-control" name="msg" placeholder="Message" required="">	

							</div>
							<div class="form-group">
								<button class="btn btn-success" id="create">Send Now</button>
							</div>

				</div>		
				
					

			
			
								<div class="col-md-6 contact_info center-block"><br><br>
					<font face="century gothic"><font face="century gothic" color="#ff6f00"><p>Phone:</font> 09473606476 <br><font face="century gothic" color="#ff6f00">Landline:</font> (046) 414 3201  <br><font face="century gothic" color="#ff6f00">Address:</font> 6797 KEYLAND AYALA CORNER V.A. RUFINO, MAKATI CITY <br><font face="century gothic" color="#ff6f00">Email:</font> innospheresoftwaresolutions@gmail.com</p> </font><br>
					 <a href="https://www.facebook.com/profile.php?id=100064110729255" title="Facebook"><span class="fa fa-facebook fa-2x icons "></span></a>
					 <a href="https://www.instagram.com/Villa-Jocelinda" title="Instagram"><span class="fa fa-instagram fa-2x icons"></span></a>
					 <a href="https://plus.google.com/Villa-jocelinda" title="Google+"><span class="fa fa-google-plus fa-2x icons"></span></a>
						</div>
							</div>
							</form>	
						
					</div>
				</div>
			</div>		
			</div>	
		
	</div>

<footer class="container-fluid text-center">
<div class="col-md-12">
  <font face="century gothic" size="2"><p><br>© All Right Reserved 2025</a></p> </font>

  <div class="social">
 
  </div>
</div>
</footer>
</body>
</html>  