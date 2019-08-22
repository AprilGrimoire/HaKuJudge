@extends('layouts.default')

@section('head')
	<title>进阶之旅</title>
@endsection

@section('content')
	<div class="content">
	<div class="services-section">
		<div class="container">
			<h3>Our Services</h3>
			<div class="services-section-grids">
				<div class="col-md-4 services-section-grid1">
					<div class="services-section-grid1-top">
						<h4>Lines & Calls</h4>
						<p>We can offer you great low cost calls with a care level to suit your business</p>
						<div class="icons">
							<div class="icon-left">
								<i class="call"></i>
							</div>
							<div class="icon-right">
								<a href="#"><i class="arrow arrow1"></i></a>
							</div>
							<div class="clearfix"></div>
						</div>
						</div>
					<div class="services-section-grid1-bottom">
						<h4>Phone Systems</h4>
						<p>Offering both hosted and traditional, we know we have the system for you</p>
						<div class="icons">
							<div class="icon-left">
								<i class="callmsg"></i>
							</div>
							<div class="icon-right">
								<a href="#"><i class="arrow arrow2"></i></a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-4 services-section-grid2">
					<h4>Broadband</h4>
					<p>ADSL, fiber, satellite and leased lines, we’ve got you covered whatever the location</p>
					<p>Internet is a staple for any company, but getting the right connection for your business is a decision that shouldn’t be decided on the basis of a ‘good deal’</p>
					<div class="icons icons2">
							<div class="icon-left">
								<i class="interact"></i>
							</div>
							<div class="icon-right">
								<a href="#"><i class="arrow arrow3"></i></a>
							</div>
							<div class="clearfix"></div>
						</div>
				</div>
				<div class="col-md-4 services-section-grid3">
					<div class="services-section-grid3-top">
						<h4>Mobile & Tablet</h4>
						<p>We work with all the major networks to make sure you get a solution tailored you</p>
						<div class="icons">
							<div class="icon-left">
								<i class="dt"></i>
							</div>
							<div class="icon-right">
								<a href="#"><i class="arrow arrow4"></i></a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="services-section-grid3-bottom">
						<h4>More Services</h4>
						<p>Click here to find out about more services we provide at effective price range</p>
						<div class="icons">
							<div class="icon-left">
								<i class="zoom"></i>
							</div>
							<div class="icon-right">
								<a href="#"><i class="arrow arrow5"></i></a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="services_overview">
        <div class="container">
       		<h3>Services Overview</h3>
       		<div class="col-md-4 service_grid">
       			<img src="images/p2.jpg" class="img-responsive" alt=""/>
       			<h4>On the other hand, we denounce</h4>
       			<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
       		  
       		</div>
       		<div class="col-md-4 service_grid">
       			<img src="images/p1.jpg" class="img-responsive" alt=""/>
       			<h4>On the other hand, we denounce</h4>
       			<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
       		    
       		</div>
       		<div class="col-md-4 service_grid span_55">
       			<img src="images/p3.jpg" class="img-responsive" alt=""/>
       			<h4>On the other hand, we denounce</h4>
       			<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
     
       		</div>
			<div class="clearfix"></div>
       	</div>
       </div> 	
	<div class="our-clients">
		<div class="container">
			<div class="our-clients-head text-center">
				<h3>Our Clients</h3>
			</div>
			<!---strat-image-cursuals---->
                  <div class="scroll-slider">											 
							<div class="nbs-flexisel-container">
							<div class="nbs-flexisel-inner">
							<ul class="flexiselDemo3 nbs-flexisel-ul" style="left: -253.6px; display: block;">					    					    					       
							<li><img src="images/c1.jpg"></li>
							<li><img src="images/c2.jpg"></li>
							<li><img src="images/c3.jpg"></li>
							<li><img src="images/c4.jpg"></li>
							<li><img src="images/c1.jpg"></li>
							<li><img src="images/c2.jpg"></li>
							<li><img src="images/c3.jpg"></li>
							<li><img src="images/c4.jpg"></li>
							</ul>
							<div class="nbs-flexisel-nav-left" style="display:none"></div>
							<div class="nbs-flexisel-nav-right" style="display:none"></div></div></div> 
							<div class="clear"> </div>      
						  <!---strat-image-cursuals---->
								<script type="text/javascript" src="js-temp/jquery.flexisel.js"></script>
								<!---End-image-cursuals---->
								<script type="text/javascript">
								$(window).load(function() {
								    $(".flexiselDemo3").flexisel({
								        visibleItems: 4,
								        animationSpeed: 1000,
								        autoPlay: true,
								        autoPlaySpeed: 3000,            
								        pauseOnHover: true,
								        enableResponsiveBreakpoints: true,
								        responsiveBreakpoints: { 
								            portrait: { 
								                changePoint:480,
								                visibleItems: 1
								            }, 
								            landscape: { 
								                changePoint:640,
								                visibleItems: 2
								            },
								            tablet: { 
								                changePoint:768,
								                visibleItems: 3
								            }
								        }
								    });
								});
								</script>
						<!---->
				  <!---->
				  </div>				
			</div>

				<!---//End-signin---->
		</div>
		</div>
@endsection