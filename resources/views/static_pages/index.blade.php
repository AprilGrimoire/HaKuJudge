@extends('layouts.default')

@section('head')
	<title>首页</title>
@stop

@section('content')
	<div class="banner">
		<div class="container">
			<div class="banner-info">
				<h2>欢迎来到Basis OJ！</h2>
				<p>斩荆棘而成路 增阅历以为基</p>
				<a href="{{ route('problems.index') }}" class="btn btn-1 btn-1d" id="btn-1d">现在开始</a>
			</div>
		</div>
	</div>
	
	<div class="content">
	<div class="services-section">
		<div class="container">
			<h3>我们提供的功能</h3>
			<div class="services-section-grids">
				<div class="col-md-4 services-section-grid1">
					<div class="services-section-grid1-top" width="365" height="220">
						<h4>进阶之旅</h4>
						<p>•不同难度的专项训练•</p>
						<p>•多种知识点的选择•</p>
						<div class="icons">
							<div class="icon-left">
								<span class="glyphicon glyphicon-road glyphiconindex" />
							</div>
							<div class="icon-right">
								<a href="services.html"><i class="arrow arrow1"></i></a>
							</div>  <!--该处跳转需重做--->
							<div class="clearfix"></div>
						</div>
						</div>
					<div class="services-section-grid1-bottom" >
						<h4>模拟测试</h4>
						<p>•历年NOIP/NOI真题•</p>
						<p>•(也许能看到未来的真题)•</p>
						<div class="icons">
							<div class="icon-left">
								<span class="glyphicon glyphicon-send glyphiconindex" />
							</div>
							<div class="icon-right">
								<a href="test.html"><i class="arrow arrow2"></i></a>
							</div>  <!--该处跳转需重做--->
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-4 services-section-grid2" id="services-section-grid2">
					<h4>题库</h4>
					<p>•海量好题任你选择•</p>
					<br></br>
					<p>•一时刷一时爽，一直刷一直爽•</p>
					<div class="icons icons2">
							<div class="icon-left">
								<i class="interact"></i>
							</div>
							<div class="icon-right">
								<a href="{{ route('problems.index') }}"><i class="arrow arrow3"></i></a>
							</div> 
							<div class="clearfix"></div>
						</div>
				</div>
				<div class="col-md-4 services-section-grid3">
					<div class="services-section-grid3-top">
						<h4>个人中心</h4>
						<p>••安全选项••</p>
						<p>•布置属于你的界面•</p>
						<div class="icons">
							<div class="icon-left">
								<i class="dt"></i>
							</div>
							<div class="icon-right">
								<a href="personal.html"><i class="arrow arrow4"></i></a>
							</div>  <!--该处跳转需重做--->
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="services-section-grid3-bottom">
						<h4>更多功能</h4>
						<p>•方便快捷实用的投票器•</p>
						<div class="icons">
							<div class="icon-left">
								<i class="zoom"></i>
							</div>
							<div class="icon-right">
								<a href="voter/main/main.html"><i class="arrow arrow5"></i></a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="subscribe-section">
		<div class="container">
			<div class="subscribe-section-grids">
				<div class="col-md-8 subscribe">
					<h3>找寻指引你成功的大师之作</h3>
					
					<a href="{{ route('booklist') }}">看看我们给你的书单</a>
				</div>
				<div class="col-md-4 book">
					<img src="images/book.png" alt="" >
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="our-clients">
		<div class="container">
			<div class="our-clients-head text-center">
				<h3>我们的伙伴</h3>
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
		<div class="testimonials-section">
			<div class="container">
				<div class="testimonials-section-head text-center">
					<h3>励志•坚持•成长</h3>
				</div>
				<div class="members">
					<div class="col-md-4 member1">
						<img src="images/people.jpg" alt="" />
						<div class="text text-center">
							<h4>Insistence</h4>
							<p>Hardwork</p>
						</div>
					</div>
					<div class="col-md-8 description">
						<div class="course_demo">
				<ul id="flexiselDemo4">	
					<li>
						<div class="client-text">
							<p>明扬明扬，英国之王。勇夺金牌，为国争光。</p>
						</div>
					</li>
					<li>
						<div class="client-text">		
							<p>去年今日你的歌声，由我来传承。</p>
						</div>
					</li>	
					<li>
						<div class="client-text">
							<p>n方过百万，暴力碾标算。</p>
						</div>
					</li>									    	  	       	   	  									    	  	       	   	    	
				</ul>

	</div>
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo4").flexisel({
				visibleItems: 1,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 6000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 1
					},
					tablet: { 
						changePoint:768,
						visibleItems: 1
					}
				}
			});
			
		});
	</script>
	<script type="text/javascript" src="js-temp/jquery.flexisel.js"></script>	

				</div>
				<div class="clearfix"></div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="contact-section text-center">
		<div class="container">
			<h3>联系我们</h3>
			<div class="contact-top">
				<div class="col-md-4 contact-section-grid text-center">
					<i class="smartphone"></i>
					<p>暂不提供座机联系</p>
					<p>请谅解！</p>
				</div>
				<div class="col-md-4 contact-section-grid text-center">
					<i class="user"></i>
					<p>邮政编码：<p>
					<p>215000/215008</p>
				<!--	<p>Vicrtoria 8423 USA</p> -->
				</div>
				<div class="col-md-4 contact-section-grid text-center">
					<i class="global"></i>
					<p>官方邮箱：</p>
				<p><a href="mailto:basisoj@126.com">basisoj@126.com</a></p> 
				</div>
				<div class="clearfix"></div>
			</div>
			
@stop
				
<!-- 以下为contact表格提交区--				
				<div class="contact-section-bottom">
					<div class="contact-form">
						<form>
						<div class="col-md-6 contact-left">
							<input type="text" class="text" value="Name*" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name*';}">
							<input type="text" class="text" value="E-mail*" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'E-mail*';}">
						</div>
						<div class="col-md-6 contact-right">
							<textarea value="Message" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
						</div>
							<input type="submit" value="Submit " />
						</form>
					<div>
				</div>
			</div>
		</div>	
	</div>
	</div>    --->
<!-- 表末 -->
<!--	
	<div class="map">
		
	</div>
	</div>
	<div class="footer text-center">
		<div class="social-icons">
			<a href="#"><i class="facebook"></i></a>
			<a href="#"><i class="twitter"></i></a>
			<a href="#"><i class="googlepluse"></i></a>
			<a href="#"><i class="youtube"></i></a>
			<a href="#"><i class="linkedin"></i></a>
		</div>
		<div class="copyright">
			<p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
		</div>
	</div>

</body>
</html>   -->
