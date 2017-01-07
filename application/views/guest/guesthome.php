<!DOCTYPE html>

<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

    <head>
    	<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <title>Order & Buy Customized T-shirts, Hoodies & Zippers Online</title>		
		
		<!-- Meta Description -->
        <meta name="description" content="Online Store for Customized T-shirts, Hoodies & Zippers">
        <meta name="keywords" content="Customized T-shirts, Hoodies, Zippers, Online Store, Bulk Order">
        <meta name="author" content="Yogesh Bairagi">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
	 	
		<!-- Google Font -->
		<link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
        
		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <?= link_tag('assets/css/font-awesome-4.7.0/css/font-awesome.min.css') ?>
		
		<!-- Twitter Bootstrap css -->
        <?= link_tag('assets/css/bootstrap.min.css') ?>

		<!-- jquery.fancybox  -->
        <?= link_tag('assets/css/jquery.fancybox.css') ?>
		
		<!-- animate -->
        <?= link_tag('assets/css/animate.css') ?>
		
		<!-- Main Stylesheet -->
        <?= link_tag('assets/css/main.css') ?>
		
		<!-- media-queries -->
        <?= link_tag('assets/css/media-queries.css') ?>

		<?= link_tag('assets/img/favicon.jpeg', 'icon', 'image/jpeg') ?>
 		
		<!-- Modernizer Script for old Browsers -->
        <script src="<?= base_url('assets/js/modernizr-2.6.2.min.js') ?>"></script>

		<script type="text/javascript">
		function getmyprice1()
		{
			u=document.getElementById("unisex");
			m=document.getElementById("male");
			f=document.getElementById("female");

			t=document.getElementById("total");
			
			x=u.value;
			y=m.value;
			z=f.value;
			
				if(x && y && z)
				{
					px=parseInt(x);
					py=parseInt(y);
					pz=parseInt(z);
					
						sum=px+py+pz;
						
						if(sum<1)
						 alert("Min order taken is 1");
						
						else					
							t.value=sum; 
				}
				//check for if not a no?
		}
		</script>	
    </head>
	
    <body id="body">
	
		<!-- preloader -->
		<div id="preloader">
			<img src="<?= base_url('assets/img/preloader.gif') ?>" alt="Preloader"> <!-- teemate animation here ??-->
		</div>
		<!-- end preloader -->

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    
					<!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span><!-- ?? -->
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="#body">
						<h1 id="logo">
							<img src="<?= base_url('assets/img/logo.png') ?>" alt="teemate" width="400px">
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                    
                        <li class="current"><a href="#body">Home</a></li>
						
						<li><a href="#works">Place Bulk Order</a></li>
						
						<li><a href="#features">Upcoming Features</a></li>
                        
						<li><a href="#team">Have We Met?</a></li>
                        
						<!--<li><a href="#contact1">Got Query?</a></li>-->
						
						<li><a href="#contact-us">Contact Us</a></li>
                       
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					
					<!-- single slide -->
					<div class="item active" style="background-image: url(<?= base_url('assets/img/banner.jpg') ?>);">
					
						<div class="carousel-caption">
					
							<h2 data-wow-duration="1000ms" data-wow-delay="500ms" class="wow bounceInDown animated">Meet teemate!!!</h2>
							
							<h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">#WearYourAttitude</span></h3>
							
							<a data-wow-duration="1000ms" class="btn btn-primary slideInRight animated" href="#works" style="background-color:#0eb493;">Place Bulk Order</a><!--autofocus? -->
							
							<p data-wow-duration="1000ms" class="slideInRight animated bounceInUp" style="padding-top: 25px;">For Bulk Orders queries, Call Us @ <i class="fa fa-phone" aria-hidden="true"></i> <u><a href="<? echo ($detect->isMobile()) ? 'tel' : 'callto'; ?> :9632125828;ext=+91">(+91) 9632125828</a></u></p>
							
							<ul class="social-links text-center">
								<li><a target="_blank" href="https://www.facebook.com/teemateStore/"><i class="fa fa-facebook fa-2x"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/Teemate6"><i class="fa fa-twitter fa-2x"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end single slide -->
				</div>
				<!-- End Wrapper for slides -->
			</div>
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
		
        
		<section id="works" class="works clearfix mb50">
			<div class="container">
				<div class="row">

				<div class="panel panel-default">
  
					<div class="sec-title text-center panel-heading">
						<h2>Bulk Order</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
	<div class="panel-body">
	<div class="container">
		<div class="row mb50">
		
			<div class="col-md-12">
			
				<div class="main box-border">
  
					<form autocomplete action="<?= base_url('GuestHome/bulkOrder') ?>" onsubmit="submit()" method="post" id="bulkorderform">
	
						<div class="row">
						
							<div class="col-md-1 col-sm-1">
							</div>
							
							<div class="col-md-5 col-sm-5">
								<div class="form-group">
									<label for="product">Product type</label>		
									<select id="product" class="form-control" onchange="getmyprice()">
										<option value="round" id="round" selected>Round Neck T-Shirts</option>
										<option value="v" id="v">V Neck T-Shirts</option>
										<option value="collar" id="collar">Collar T-Shirts</option>
										<option id="hoodies"  value="hoodies">Hoodies</option>
										<option id="zippers" value="zippers">Zippers</option>
									</select>
								</div>
							</div>
							
							<div class="col-md-5 col-sm-5">
								<div class="form-group">
									<label for="name">Full Name</label><span style="color:red;">*</span></label>
									<input id="name" type="text" class="form-control" required placeholder="Full Name" maxlength="25" minlength="3" pattern="[A-Z a-z]+">
								</div>
							</div>
							
							<div class="col-md-1 col-sm-1">   
							</div>
							
						</div>
						
						<div class="row">
						
							<div class="col-md-1 col-sm-1">
							</div>
							
							<div class="col-md-5 col-sm-5">
								<div class="form-group">
								
								<div class="col-md-2 col-sm-4" style="padding-left: 0px;padding-right: 0px;">
									<label for="unisex">Unisex<span style="color:red;">*</span></label>
									<input id="unisex" class="form-control text-center" type="number" min="0" value="1" onchange="getmyprice1()" required/>
								</div>
								
								<div class="col-md-1">
									
								</div>
								
								<div class="col-md-2 col-sm-4" style="padding-left: 0px;padding-right: 0px;">
									<label for="male">Male</label><span style="color:red;">*</span></label>
									<input class="form-control text-center" id="male"  type="number" min="0" value="0" onchange="getmyprice1()" required>
								</div>
								
								<div class="col-md-1">
								</div>
								
								<div class="col-md-2 col-sm-4" style="padding-left: 0px;padding-right: 0px;">
									<label for="female">Female<span style="color:red;">*</span></label>
									<input id="female" class="form-control text-center" min="0" type="number" value="0" onchange="getmyprice1()" required>
								</div>
								
								<div class="col-md-1">
								</div>
								
								<div class="col-md-3 col-sm-4" style="padding-left: 0px;padding-right: 0px;">
									<label for="total">Total T-shirts</label>
									<input id="total" class="form-control text-center" min="1" value="1" type ="text" onchange="getmyprice1()" readonly>
								</div>
									
								</div>
							</div>
							
							<div class="col-md-5 col-sm-5">
								<div class="form-group">
									<label for="email">E-mail ID<span style="color:red;">*</span></label>
									<input id="email" type="email" class="form-control" required placeholder="your@email.com">
								</div>
							</div>
							
							<div class="col-md-1 col-sm-1">   
							</div>
							
						</div>
						
						<div class="row">
						
							<div class="col-md-1 col-sm-1"> 
							</div>
							
							<div class="col-md-5 col-sm-5">
									
								<div class="form-group col-md-4" style="padding-left: 0px;padding-right: 3px;">
								
									<label for="front">Front Print Size</label>		
									<select id="front" class="form-control" onchange="getmyprice()">
										<option value="a4" id="a4" selected>A4</option>
										<option value="a3" id="a3">A3</option>
										<option value="blank" id="blank">Blank</option>
									</select>
									
								</div>
							
								<div class="form-group col-md-4" style="padding-left: 3px;padding-right: 3px;">
									<label for="rear">Rear Print Size</label>		
									<select id="rear" class="form-control" onchange="getmyprice()">
										<option value="a4" id="a4" selected>A4</option>
										<option value="a3" id="a3">A3</option>
										<option value="blank" id="blank">Blank</option>
									</select>
								</div>
								
								
								<div class="form-group col-md-4" style="padding-left: 3px;padding-right: 0px;">
									<label for="pocket">Pocket</label>		
									<select id="pocket" class="form-control" onchange="getmyprice()">
										<option value="print" id="print" selected>Print</option>
										<option value="emb" id="emb">Embroidery</option>
										<option value="blank" id="blank">Blank</option>
									</select>
								</div>
								
							</div>
							
							<div class="col-md-5 col-sm-5">
								<div class="form-group">
									<label for="contact">Mobile No.(+91)</label><span style="color:red;">*</span></label>
									<input id="contact" class="form-control" required size="10" placeholder="Mobile No." pattern="\d{10}">
								</div>
							</div>
							
							<div class="col-md-1 col-sm-1">   
							</div>
							
						</div>
						
						<div class="row">
						
							<div class="col-md-1 col-sm-1">
							</div>
							
							<div class="col-md-5 col-sm-5">
																
								<div class="form-group col-md-4" style="padding-left: 0px;padding-right: 3px;">
									<label for="left">Left Sleeve</label>		
									<select id="left" class="form-control" onchange="getmyprice()">
										<option value="print" id="print" selected>Print</option>
										<option value="emb" id="emb">Embroidery</option>
										<option value="blank" id="blank">Blank</option>
									</select>
								</div>
									
						
								<div class="form-group col-md-4" style="padding-left: 3px;padding-right: 3px;">
									<label for="right">Right Sleeve</label>		
									<select id="right" class="form-control" onchange="getmyprice()">
										<option value="print" id="print" selected>Print</option>
										<option value="emb" id="emb">Embroidery</option>
										<option value="blank" id="blank">Blank</option>
									</select>
								</div>
	
							</div>
		
							<div class="col-md-5 col-sm-5">
							
								<div class="form-group">
									<label for="msg">Message</label><em>(optional)</em>
									<textarea id="msg" class="form-control" rows="2" cols="34" name="msg" maxlength="100" placeholder="Max limit 100 characters"></textarea>
								</div>
								
							</div>
							
							<div class="col-md-1 col-sm-1"> 
							</div>
							
						</div>
	
						
						<div class="row">

							<br>
							<br>

							<div id="price">
								<center><input class="btn btn-primary" formenctype="multipart/form-data" name="submit" id="submit"  value="Place Order" style="background-color:#0eb493;" type="submit"></center>
							</div>
						
						</div>
						
						<div class="row">

						<center style="display:none;">
								<br>
								<div class="alert alert-success alert-dismissable fade in" id="success">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Success!</strong> Form successfully submitted.
								</div>
								
								<br>
								<div class="alert alert-danger alert-dismissable fade in" id="error">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Error!</strong> Error while submitting the form.
								</div>
								
						</center>
						</div>
				</form>
			
  </div>
</div>
		
			</div>
          </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

		</section>
	
		<!--
        Upcoming Features
        ==================================== -->
		
		<section id="features" class="features">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>Upcoming Features</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>

					<!-- service item -->
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
							<div class="service-icon">
								<!--<img src="img/logo2.png" width="30" height="30"/>-->
								<i class="fa fa-github fa-2x"></i>
							</div>
							
							<div class="service-desc" style="text-align:justify;">
								<h3>TeeStore</h3>
								<p>Believe us!! Cool designs up our sleeve, Like really Cool ones from the Homo sapiens who like themselves to be called as Designers, oops, TeeStore Designers!</p>
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-pencil fa-2x"></i>
							</div>
							
							<div class="service-desc" style="text-align:justify;">
								<h3>Go FicTEEtious!!</h3>
								<p>Get your favourite quote from some awesome creatures who never existed facbricated on your Tee.<br/> 
								We promise you'll like it, Valar Morghulis!!<br/><!--At least we'll try, if not, we have the next section anyway--></p>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-bullhorn fa-2x"></i>
							</div>
							
							<div class="service-desc" style="text-align:justify;">
								<h3>Get Featured</h3>
								<p>Shoot us with the arrows of the designs you have in your quiver.<br/>Get your minds working FOLKS!!</p>
							</div>
						</div>
					</div>
					<!-- end service item -->
						
				</div>
			</div>
		</section>
		
        <!--
        End Features
        ==================================== -->
		
		
        <!--
        Meet Our Team
        ==================================== -->		
		
		<section id="team" class="team">
			
			<div class="container mb50">
			
			<div class="panel panel-default">
				
				<div class="row mb50">
				
					<div class="sec-title text-center wow fadeInUp animated panel-heading" data-wow-duration="700ms">
						<h2>Have We Met?</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
	
				</div>

				<div class="panel-body">
				
				<div class="row col-md-4">
		
					<div class="col-md-2">
					</div>

					<!-- single member -->
					<figure class="team-member col-md-2 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
						<div class="member-thumb">
							<img src="<?= base_url('assets/img/team/atul_agarwal02.jpg') ?>" alt="Team Member" class="img-responsive img-rounded">
							<figcaption class="overlay">			
								<ul class="social-links text-center">
									<li><a target="_blank" href="https://www.facebook.com/atul.agarwal.7399?fref=ts"><i class="fa fa-facebook fa-lg"></i></a></li>
								</ul>
								<h5>Atul Agarwal</h5>
								
							</figcaption>
						</div>
						<h4 style="width:275px;">The go-to-guy of the team. Any issues, you know whom to catch!!</h4>
					</figure>
					<!-- end single member -->

				</div>
				
				<div class="row col-md-4">

					<div class="col-md-2">
					</div>
					
					<!-- single member -->
					<figure class="team-member col-md-2 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="member-thumb">
							<img src="<?= base_url('assets/img/team/adarsh_agarwal.jpg') ?>" alt="Team Member" class="img-responsive img-rounded">
							<figcaption class="overlay">
								
								<ul class="social-links text-center">
									<li><a target="_blank" href="https://www.facebook.com/adarshagarwal21"><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a target="_blank"  href="https://www.instagram.com/adarshagarwal21/"><i class="fa fa-instagram fa-lg"></i></a></li>
									<li><a target="_blank"  href="https://in.linkedin.com/in/adarshagarwal21"><i class="fa fa-linkedin fa-lg"></i></a></li>
									<li><a target="_blank"  href="https://twitter.com/agarwal0721"><i class="fa fa-twitter fa-lg"></i></a></li>
								</ul>
								<h5>Adarsh Agarwal</h5>
							</figcaption>
						</div>
						<h4 style="width:275px;">He is Just like Adidas, whatever he does he's All in!!</h4>
					</figure>
					<!-- end single member -->
				</div>

				<div class="row mb50 col-md-4">
				
					<div class="col-md-2">
					</div>

					<!-- single member -->
					<figure class="team-member col-md-2 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="member-thumb">
							<img src="<?= base_url('assets/img/team/yogesh_bairagi1.jpeg') ?>" alt="Team Member" class="img-responsive img-rounded" width="300px">
							<figcaption class="overlay">
								
								<ul class="social-links text-center">
									<li><a target="_blank"  href="https://www.facebook.com/yogeshinspires"><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a target="_blank"  href="https://twitter.com/yogeshinspires"><i class="fa fa-twitter fa-lg"></i></a></li>
									<li><a target="_blank"  href="https://www.instagram.com/yogeshinspires"><i class="fa fa-instagram fa-lg"></i></a></li>
									<li><a target="_blank"  href="https://in.linkedin.com/in/yogeshbairagi"><i class="fa fa-linkedin fa-lg"></i></a></li>
								</ul>
								<h5>Yogesh Bairagi</h5>
							</figcaption>
						</div>
						<h4 style="width:275px;">His talks are no less than Ted talks!! #yogeshinspires</h4>
					</figure>
					<!-- end single member -->
				
				</div>
				
				
				<div class="row mb50 col-md-4">
		
					<div class="col-md-2">
					</div>
					
					<!-- single member -->
					<figure class="team-member col-md-2 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
						<div class="member-thumb">
							<img src="<?= base_url('assets/img/team/namratha_lokesh.jpg') ?>" alt="Team Member" class="img-responsive img-rounded">
							<figcaption class="overlay">
								<ul class="social-links text-center">
									<li><a target="_blank"  href="https://www.facebook.com/namratha.lokesh.14"><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a target="_blank"  href="https://twitter.com/NamrathaLokesh"><i class="fa fa-twitter fa-lg"></i></a></li>
								</ul>
								
								<h5>Namratha Lokesh</h5>
							</figcaption>
						</div>
						<h4 style="width:275px;">Proud Kannadiga!!! From the likes of Snorlax & Munchlax!!</h4>
					</figure>
					<!-- end single member -->
					
				</div>
				
				<div class="row mb50 col-md-4">

					<div class="col-md-2">
					</div>
					
					<!-- single member -->
					<figure class="team-member col-md-2 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
						<div class="member-thumb">
							<img src="<?= base_url('assets/img/team/akash_agarwal.jpg') ?>" alt="Team Member" class="img-responsive img-rounded" >
							<figcaption class="overlay">
								<ul class="social-links text-center">
									<li ><a target="_blank" href="https://www.facebook.com/akash.agarwalgmail"><i class="fa fa-facebook fa-lg"></i></a></li>
									<!--<li><a href=""><i class="fa fa-instagram fa-lg"></i></a></li>-->
									<li ><a target="_blank" href="https://twitter.com/akash10agarwal"><i class="fa fa-twitter fa-lg"></i></a></li>
								</ul>
								
								<h5>Akash Agarwal</h5>
							</figcaption>
						</div>
						<h4 style="width:275px;">As busy as a bee, as lazy as a sloth ;) :P</h4>
					</figure>
					<!-- end single member -->
				</div>
				
				<div class="row mb50 col-md-4">
				
					<div class="col-md-2">
					</div>
					
					<!-- single member -->
					<figure class="team-member col-md-2 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="member-thumb">
							<img src="<?= base_url('assets/img/team/ankit_patidar.jpg') ?>" alt="Team Member" class="img-responsive img-rounded">
							<figcaption class="overlay">
								<ul class="social-links text-center">
									<li><a target="_blank"  href="https://www.facebook.com/cgankitpatidar"><i class="fa fa-facebook fa-lg"></i></a></li>
									<li><a target="_blank"  href="https://www.instagram.com/cgankit_"><i class="fa fa-instagram fa-lg"></i></a></li>
								</ul>
								
								<h5>Ankit Patidar</h5>
							</figcaption>
						</div>
						<h4 style="width:275px;">There are always 3 responses to a piece of design – yes, no & WOW!! Wow is the one he aims for</h4>
					</figure>
					<!-- end single member -->
				
				</div>
				
				</div>
				</div>
			</div>
		</section>	
		
		
		<footer id="footer" class="footer">
		
			<div class="container">
				<div class="row">
				
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
						<div class="footer-single" style="text-align:justify;">
							<img src="<?= base_url('assets/img/Teemate_01.png') ?>" alt="teemate" width="165">
							<!--<h1><strong>teemate<strong></h1>-->
							<br>
							<br>
							<i class="fa fa-quote-left fa-lg fa-pull-left fa-border" aria-hidden="true"></i>
							A platform for quirky t-shirts, hoodies, zippers and a lot more. Be enchanted by the best designs from Game of Thrones and the wittiest one liners from your favorite Harvey Specter, to name a few. Not to forget the classic moments from Friends, a chance to relive the best moments. All these just a click away, here at <a href="#body">teemate</a>. Getting the best designs to show off has never been this easy.
							<i class="fa fa-quote-right fa-lg  fa-border" aria-hidden="true"></i>
						</div>
					</div>
				
				<div class="col-md-3">
				</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" id="contact-us" data-wow-duration="500ms">
						
						<div class="contact_address footer-single">		

							<i class="fa fa-clock-o" aria-hidden="true"></i> <h4><strong>24/7 Support<strong></h4>

							<br/>

							<i class="fa fa-envelope-square" aria-hidden="true"></i> <u><a href="mailto:cs@teemate.in">cs@teemate.in</a></u></p>
							
							<i class="fa fa-phone" aria-hidden="true"></i> <u><a href="<? echo ($detect->isMobile()) ? 'tel' : 'callto'; ?> :9632125828;ext=+91">(+91) 9632125828</a></u><p>
							
							<i class="fa fa-whatsapp" aria-hidden="true"></i> <u><a href="whatsapp://send?abid=akku&text=akash%20%agarwal" data-action="share/whatsapp/share">(+91) 8867176761</a></u></p>

							<i class="fa fa-skype" aria-hidden="true"></i> <a href="skype:echo123[?[add|call|chat|sendfile|userinfo]]"><u>Call us using Skype!</a><u></p> <!-- adarsh0721?chat -->

<script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
<div id="SkypeButton_Call_adarsh0721_1">
	 <script type="text/javascript">
	 Skype.ui({
	 "name": "dropdown",
	 "element": "SkypeButton_Call_adarsh0721_1",
	 "participants": ["adarsh0721"],
	 "imageSize": 10
	 });
	 </script>
</div>
							<!-- <a href="sms:+919632125828">Hello, there!</a><p>

							cc=someoneelse@theirsite.com, another@thatsite.com, me@mysite.com&bcc=lastperson@theirsite.com&body=Body-goes-here&subject=Mail%20%from Our Site

							-->

								<i class="fa fa-map-marker" aria-hidden="true"></i><a target="_blank" title="Ground Floor, Row House No. 88, Sector 16, Koparkhairane, Navi Mumbai, Maharashtra - 400709" href="https://www.google.co.in/maps/place/Sector+16,+Kopar+Khairane,+Navi+Mumbai,+Maharashtra+400709/@19.0994168,72.9980559,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7c0d661dacf3d:0xe34a06f254cbf4d6!8m2!3d19.0998095!4d72.9993223">
									<u>Ground Floor, Row House No. 88,</p>	
									<p>Sector 16, Koparkhairane, Navi Mumbai,</p>
									<p>Maharashtra - 400709</u></p>
								</a>
		
						</div>
					</div>
					
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<p class="copyright text-center">
							Copyright © 2017 Silhouette Ventures. All rights reserved.
						</p>
					</div>
				</div>	
			</div>
		</footer>
		
		<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="<?= base_url('assets/js/jquery-1.11.1.min.js') ?>"></script>
		<!-- Single Page Nav -->
        <script src="<?= base_url('assets/js/jquery.singlePageNav.min.js') ?>"></script>
		<!-- Twitter Bootstrap -->
        <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
		<!-- jquery.fancybox.pack -->
        <script src="<?= base_url('assets/js/jquery.fancybox.pack.js') ?>"></script>
		<!-- jquery.mixitup.min -->
        <script src="<?= base_url('assets/js/jquery.mixitup.min.js') ?>"></script>
		<!-- jquery.parallax -->
        <script src="<?= base_url('assets/js/jquery.parallax-1.1.3.js') ?>"></script>
		<!-- jquery.countTo -->
        <script src="<?= base_url('assets/js/jquery-countTo.js') ?>"></script>
		<!-- jquery.appear -->
        <script src="<?= base_url('assets/js/jquery.appear.js') ?>"></script>
		<!-- Contact form validation -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- jquery easing -->
        <script src="<?= base_url('assets/js/jquery.easing.min.js') ?>"></script>
		<!-- jquery easing -->
        <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,        // distance to the element when triggering the animation (default is 0)
				mobile:       false,      // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script> 
		
		<!-- Custom Functions -->
        <script src="<?= base_url('assets/js/custom.js') ?>" ></script>
		
		<script type="text/javascript">
			$(function(){
				/* ========================================================================= */
				/*	Contact Form
				/* ========================================================================= */
				
				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
							minlength: 2
						},
						email: {
							required: true,
							email: true
						},
						message: {
							required: true
						}
					},
					messages: {
						name: {
							required: "come on, you have a name, don't you?",
							minlength: "your name must consist of at least 2 characters"//?
						},
						email: {
							required: "no email, no message"
						},
						message: {
							required: "um...yea, you have to write something to send this form.",
							minlength: "thats all? really?"
						}
					},
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							type:"POST",
							data: $(form).serialize(),//?
							url:"process.php",//
							success: function() {
								$('#contact-form :input').attr('disabled', 'disabled');
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$(this).find(':input').attr('disabled', 'disabled');
									$(this).find('label').css('cursor','default');
									$('#success').fadeIn();//?
								});
							},
							error: function() {
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$('#error').fadeIn();//?
								});
							}
						});
					}
				});
			});
			
					$("#bulkorderform").submit(function(e) {

					var url = "path/to/your/script.php"; // the script where you handle the form input.

					$.ajax({
						   type: "POST",
						   url: url,
						   data: $("#bulkorderform").serialize(), // serializes the form's elements.
						   //contentType: 'application/json; charset=utf-8',
						   success: function(response)
						   {
							   //alert(data.status); // show response from the php script.
							   $('#success').show();
								//$('#bulkorderform').trigger("reset");
						   }
						   error:function()
						   {
						      $('#error').show();
						   }
						 });

					//e.preventDefault(); // avoid to execute the actual submit of the form.
				});
		</script>
    
	</body>
</html>
