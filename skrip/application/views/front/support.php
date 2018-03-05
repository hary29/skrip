<!--script-nav -->	
			        <script>
					$("span.menu-info").click(function(){
						$("ul.cl-effect-21").slideToggle("slow" , function(){
						});
					});
					</script>
					<!-- /script-nav -->
                    <div class="clearfix"> </div>	
		   </div>
  </div>
<!--/header-->
<div class="portfolio_top">
<div class="container">
	<h4>Support</h4>
<ul id="filters">
						<li><span class="filter active" data-filter="app card icon web">ALL</span><label>/</label></li>
						<li><span class="filter"data-filter="app">CARE</span><label>/</label></li>
						<li><span class="filter"data-filter="card">CARE+</span><label>/</label></li>
						<li><span class="filter"data-filter="icon">HOSPITAL</span></li>
					</ul>
					<div id="portfoliolist">
					<div class="portfolio app mix_all"data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper ">
							<div class="view effect">
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon">
						    <img class="img-responsive" src="<?php echo base_url() ?>asset/front/images/a1.jpg" alt=""  />
						    <div class="content-dot">
										<a href="#" class="info" title="Full Image">Full Image</a>
								   </div>
								   </div>
						    </a>
						     <div class="simple">
						    	<h5>sample</h5>
						    	<p>Lorem ipsum</p>
						    </div>		               
						</div>
					</div>				
					<div class="portfolio icon mix_all"data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">	
								<div class="view effect">
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon ">
						    <img class="img-responsive" src="<?php echo base_url() ?>asset/front/images/a2.jpg" alt=""  /></a>
						    <div class="content-dot">
										<a href="#" class="info" title="Full Image">Full Image</a>
								   </div>
								   </div>
						    <div class="simple">
						    	<h5>sample</h5>
						    	<p>Lorem ipsum</p>
						    </div>
		                </div>
					</div>		
					<div class="portfolio card mix_all"data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">	
							<div class="view effect">	
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon ">
						     <img class="img-responsive" src="<?php echo base_url() ?>asset/front/images/a3.jpg"  alt="" /></a>
						     <div class="content-dot">
										<a href="#" class="info" title="Full Image">Full Image</a>
								   </div>
								   </div>
						     <div class="simple">
						    	<h5>sample</h5>
						    	<p>Lorem ipsum</p>
						    </div>
		                </div>
					</div>				
					<div class="portfolio app mix_all"data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper ">	
							<div class="view effect">	
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon ">
						     <img class="img-responsive" src="<?php echo base_url() ?>asset/front/images/a4.jpg" alt=""  /></a>
						     <div class="content-dot">
										<a href="#" class="info" title="Full Image">Full Image</a>
								   </div>
								   </div>
						     <div class="simple">
						    	<h5>sample</h5>
						    	<p>Lorem ipsum</p>
						    </div>
		                </div>
					</div>	
					<div class="portfolio card mix_all"data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper ">	
							<div class="view effect">	
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon ">
						     <img class="img-responsive" src="<?php echo base_url() ?>asset/front/images/a5.jpg" alt=""  /></a>
						     <div class="content-dot">
										<a href="#" class="info" title="Full Image">Full Image</a>
								   </div>
								   </div>
						     <div class="simple">
						    	<h5>sample</h5>
						    	<p>Lorem ipsum</p>
						    </div>
		                </div>
					</div>			
					<div class="portfolio icon mix_all"data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<div class="view effect">
							<a href="#small-dialog5" class="b-link-stripe b-animate-go  thickbox play-icon ">
						     <img class="img-responsive" src="<?php echo base_url() ?>asset/front/images/a6.jpg" alt=""  />
						     <div class="content-dot">
										<a href="#" class="info" title="Full Image">Full Image</a>
								   </div>
								   </div>
						     </a>
						     <div class="simple">
						    	<h5>sample</h5>
						    	<p>Lorem ipsum</p>
						    </div>
		                </div>

					</div>
					<div class="clearfix"> </div>
					</div>	
			<!-- Script for gallery Here -->
				<script type="text/javascript" src="<?php echo base_url() ?>asset/front/js/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
					$(function () {
						
						var filterList = {
						
							init: function () {
							
								// MixItUp plugin
								// http://mixitup.io
								$('#portfoliolist').mixitup({
									targetSelector: '.portfolio',
									filterSelector: '.filter',
									effects: ['fade'],
									easing: 'snap',
									// call the hover effect
									onMixEnd: filterList.hoverEffect()
								});				
							
							},
							
							hoverEffect: function () {
							
								// Simple parallax effect
								$('#portfoliolist .portfolio').hover(
									function () {
										$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
										$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
									},
									function () {
										$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
										$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
									}		
								);				
							
							}
				
						};
						
						// Run the show!
						filterList.init();
						
						
					});	
					</script>
			<!-- Gallery Script Ends -->

</div>
</div>