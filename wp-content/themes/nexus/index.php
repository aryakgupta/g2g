<?php get_header(); ?>
<div id="nexus-slideshow" class="nexus-slideshow">
    <div class="container">
      <div id='nexus_slider_wrapper' class='nexus_slider_wrapper fullwidthbanner-container' >
        <div id='nexus-rev-slider' class='rev_slider fullwidthabanner'>
          <ul>
            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='<?php echo get_template_directory_uri(); ?>/images/slide-img1.jpg'><img src="<?php echo get_template_directory_uri(); ?>/images/slide-img2.jpg"  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="slider-image1" />
              <div class="info">
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='100'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Web Design - Web Development - UX Design</span></div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='195'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>Welcome Nexus</span></div>
                <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="buy-btn">Shop Now</a></div>
                <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='320'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
              </div>
            </li>
            <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='<?php echo get_template_directory_uri(); ?>/images/slide-img2.jpg'><img src='<?php echo get_template_directory_uri(); ?>/images/slide-img1.jpg'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="slider-image2"  />
              <div class="info">
                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='100'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Photography - Portfolio - Advertismnet</span></div>
                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='195'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>Creative Design</span></div>
                <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='400'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="buy-btn">Shop Now</a></div>
                <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='320'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Farm Fresh Produce Right to Your Door</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
			


		

		<section class="about" id="about">
			<?php $about = get_post(27);
					//echo "<pre>"; 
     				//print_r($about);
			    $aboutTitle = $about->post_title;
			    $abountContent = $about->post_content; 

			?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3><?php echo $aboutTitle; ?></h3>
							<!--p>About Nexus </p-->
						</div>
						<div class="block">
							<div class="col-md-12 padd25 no-padding-top no-padding-bottom padding-left-15">
								<?php echo $abountContent; ?>			
							</div>
							<div class="padd25 no-padding-top no-padding-bottom padding-left-15"><img src="<?php echo get_template_directory_uri(); ?>/images/about.jpg" alt="" class="img-responsive"></div>
						</div>
</div>
</div>
</div>
						<!--div class="team-info">
							<div class="container">
				<div class="row">
						<div class="block1">
							<div class="col-md-3">
								<div class="st-member">
									<div class="st-member-img">
										<img src="<?php echo get_template_directory_uri(); ?>/images/member1.png" alt="" class="img-responsive">
									</div>
									<div class="st-member-info">
										<strong class="st-member-name">John Deo</strong>
										<p class="st-member-pos">CEO</p>
										
										<div class="st-member-social">
											<ul>
												<li><a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#" class="dribbble" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="st-member">
									<div class="st-member-img">
										<img src="<?php echo get_template_directory_uri(); ?>/images/member2.png" alt="" class="img-responsive">
									</div>
									<div class="st-member-info">
										<strong class="st-member-name">Sarah Smith</strong>
										<p class="st-member-pos">Designer</p>
										
										<div class="st-member-social">
											<ul>
												<li><a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#" class="dribbble" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="st-member">
									<div class="st-member-img">
										<img src="<?php echo get_template_directory_uri(); ?>/images/member3.png" alt="" class="img-responsive">
									</div>
									<div class="st-member-info">
										<strong class="st-member-name">Stephen Doe</strong>
										<p class="st-member-pos">Developer</p>
										
										<div class="st-member-social">
											<ul>
												<li><a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#" class="dribbble" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="st-member">
									<div class="st-member-img">
										<img src="<?php echo get_template_directory_uri(); ?>/images/member4.png" alt="" class="img-responsive">
									</div>
									<div class="st-member-info">
										<strong class="st-member-name">Mark Deo</strong>
										<p class="st-member-pos">Developer</p>
										
										<div class="st-member-social">
											<ul>
												<li><a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#" class="dribbble" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							</div>
							
							
						</div>

					</div>
				</div-->
			</div>
		</section>

		<!--section class="funfacts" data-stellar-background-ratio="0.4">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="funfact">
							<div class="st-funfact-icon"><i class="fa fa-briefcase"></i></div>
							<div class="st-funfact-counter" ><span class="st-ff-count" data-from="0" data-to="25964" data-runit="1">0</span>+</div>
							<strong class="funfact-title">Projects</strong>
						</div>
					</div>
					<div class="col-md-3">
						<div class="funfact">
							<div class="st-funfact-icon"><i class="fa fa-clock-o"></i></div>
							<div class="st-funfact-counter" ><span class="st-ff-count" data-from="0" data-to="35469" data-runit="1">0</span>+</div>
							<strong class="funfact-title">Hours Work</strong>
						</div>
					</div>
					<div class="col-md-3">
						<div class="funfact">
							<div class="st-funfact-icon"><i class="fa fa-send"></i></div>
							<div class="st-funfact-counter" ><span class="st-ff-count" data-from="0" data-to="86214" data-runit="1">0</span>+</div>
							<strong class="funfact-title">E-mail</strong>
						</div>
					</div>
					<div class="col-md-3">
						<div class="funfact">
							<div class="st-funfact-icon"><i class="fa fa-star"></i></div>
							<div class="st-funfact-counter" ><span class="st-ff-count" data-from="0" data-to="3647" data-runit="1">0</span>+</div>
							<strong class="funfact-title">Completed</strong>
						</div>
					</div>
				</div>
			</div>
		</section-->

		
		<section class="features-desc" id="vision">
			<?php $vision = get_post(105);
					//echo "<pre>"; 
     				//print_r($about);
			    $visionTitle = $vision->post_title;
			    $visionContent = $vision->post_content; 

			?>
			<div class="container">
				<div class="block">
					
					<div class="col-md-12">
						<h3><?php echo $visionTitle; ?></h3>
						<?php echo $visionContent; ?>
					</div>
					<div class="col-md-12 mb55">
						<img src="<?php echo get_template_directory_uri(); ?>/images/feature.png" alt="" class="img-responsive">
					</div>
								</div>
			</div>
		</section>

		<section class="service" id="service">
			<?php $service = get_post(100);
					//echo "<pre>"; 
     				//print_r($about);
			    $serviceTitle = $service->post_title;
			    $serviceContent = $service->post_content; 

			?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>What we do</h3>
							<p>Our Awesome Services</p>
						</div>
						<div class="block">
							<?php echo $serviceContent ; ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--section class="call-2-acction" data-stellar-background-ratio="0.4">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="c2a">
							<h2>Like Our Design?</h2>
							<p>Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero.</p>
							<a href="#" class="btn btn-main btn-lg">Purchase Now</a>
						</div>
					</div>
				</div>
			</div>
		</section-->


		<!--section class="portfolio" id="portfolio">
			<div class="container-fluid ">
				<div class="row">
					<div class="col-md-12 no-padding ">
						<div class="section-title st-center">
							<h3>What we have done</h3>
							<p>Avocent deditum long</p>
						</div>
						<div class="filter mb40">
							<form id="filter">
							<fieldset class="group">
								<label class="btn btn-default btn-main"><input type="radio" name="filter" value="all" checked="checked">All</label>
								<label class="btn btn-default"><input type="radio" name="filter" value="photography">Photography</label>
								<label class="btn btn-default"><input type="radio" name="filter" value="design">Design</label>
								<label class="btn btn-default"><input type="radio" name="filter" value="codding">Codding</label>
							</fieldset>
							</form><!-- #filter -->
						<!--/div><!-- .filter .mb40 -->

						<!--div class="grid">
							<figure class="portfolio-item" data-groups='["photography"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"> View more</a>								</figcaption>
						  </figure>
							<figure class="portfolio-item" data-groups='["design"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio2.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"> View more</a>								</figcaption>
						  </figure>
							<figure class="portfolio-item" data-groups='["photography"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio3.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"> View more</a>								</figcaption>
						  </figure>
							<figure class="portfolio-item" data-groups='["design"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio4.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"> View more</a>								</figcaption>
						  </figure>
							<figure class="portfolio-item" data-groups='["design"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio5.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"> View more</a>								</figcaption>
						  </figure>
							<figure class="portfolio-item" data-groups='["photography"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio6.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"> View more</a>								</figcaption>
						  </figure>
							<figure class="portfolio-item" data-groups='["codding"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio7.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"> View more</a>								</figcaption>
						  </figure>
							<figure class="portfolio-item" data-groups='["photography"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio8.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"> View more</a>								</figcaption>
						  </figure>
							<figure class="portfolio-item" data-groups='["codding"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio9.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"> View more</a>								</figcaption>
						  </figure>
							<figure class="portfolio-item" data-groups='["codding"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio10.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"> View more</a>								</figcaption>
						  </figure>
							<figure class="portfolio-item" data-groups='["design"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio11.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"> View more</a>								</figcaption>
						  </figure>
							<figure class="portfolio-item" data-groups='["design"]'>
								<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio12.jpg" alt=""/>
								<figcaption>
									<h2>Nice <span>Lily</span></h2>
									<p>Lily likes to play with crayons and pencils</p>
									<a href="#" class="btn btn-main"> View more</a>								</figcaption>
						  </figure>
						</div>

					</div>
				</div>
			</div>
		</section-->

		<!--section class="clients">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<ul class="clients-carousel">
							<li><img src="<?php echo get_template_directory_uri(); ?>/images/client.png" class="img-responsive" alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/images/client2.png" class="img-responsive" alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/images/client3.png" class="img-responsive" alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/images/client4.png" class="img-responsive" alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/images/client5.png" class="img-responsive" alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/images/client6.png" class="img-responsive" alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/images/client7.png" class="img-responsive" alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/images/client8.png" class="img-responsive" alt=""></li>
							<li><img src="<?php echo get_template_directory_uri(); ?>/images/client9.png" class="img-responsive" alt=""></li>
						</ul>
					</div>
				</div>
			</div>
		</section-->

		<section id="testimonials" class="testimonials">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3 style="color:#ffffff">Testimonies</h3>
						</div>
						<div class="testimonials-carousel">
							<ul>
								<li>
									<div class="testimonial">
										<div class="testimonial-img">
											<img src="<?php echo get_template_directory_uri(); ?>/images/client.jpg" alt="">
										</div>
										<blockquote>
											<p>Tueri tantis inter variis deterritum facta caret pleniorem, efficiat affert quiete, commodis comparat facio ponti, adolescens recta iucundius mundi nostrum viris quae utilitatibus.</p>
											<footer>Joseph Thompson, <cite title="Source Title">Example Inc.</cite></footer>
										</blockquote>
									</div>
								</li>
								<li>
									<div class="testimonial">
										<div class="testimonial-img">
											<img src="<?php echo get_template_directory_uri(); ?>/images/client2.jpg" alt="">
										</div>
										<blockquote>
											<p>Contrariis labore vetuit scaevola, contra percurri adamare efficeret quibus. Nostram consulatu mediocritatem maiorem, cyrenaicisque, quandam accedit veniat cognitioque, animadvertat accusantibus temporibus maximeque litterae.</p>
											<footer>Nancy Ford, <cite title="Source Title">Example Inc.</cite></footer>
										</blockquote>
									</div>
								</li>
								<li>
									<div class="testimonial">
										<div class="testimonial-img">
											<img src="<?php echo get_template_directory_uri(); ?>/images/client3.jpg" alt="">
										</div>
										<blockquote>
											<p>Illas, volumus prosperum. Nostras eoque statua cuius corrumpit praetor aliter quaeso propter ei, quam inducitur ruant doctiores sanguinem atomum molestiae, antiqua inculta dicent.</p>
											<footer>Arthur Fernandez, <cite title="Source Title">Example Inc.</cite></footer>
										</blockquote>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--section class="pricing" id="pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>Our Packages</h3>
							<p>Choose download package</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="pricing-table">
							<div class="pricing-header">
								<div class="pt-price">$9.99<small>/m</small></div>
								<div class="pt-name">Standard</div>
							</div>
							<div class="pricing-body">
								<ul>
									<li><i class="fa fa-check"></i> 2GB Space</li>
									<li><i class="fa fa-check"></i> 10GB Bandwidth</li>
									<li><i class="fa fa-check"></i> Free Domain</li>
									<li><i class="fa fa-times"></i> Free Email</li>
									<li><i class="fa fa-times"></i> Free cPanel</li>
									<li><i class="fa fa-times"></i> Free FTP</li>
									<li><i class="fa fa-times"></i> Free Support</li>
								</ul>
							</div>
							<div class="pricing-footer">
								<a href="#" class="btn btn-default">Purchase</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="pricing-table">
							<div class="pricing-header">
								<div class="pt-price">$19.99<small>/m</small></div>
								<div class="pt-name">Premium</div>
							</div>
							<div class="pricing-body">
								<ul>
									<li><i class="fa fa-check"></i> 5GB Space</li>
									<li><i class="fa fa-check"></i> 50GB Bandwidth</li>
									<li><i class="fa fa-check"></i> Free Domain</li>
									<li><i class="fa fa-check"></i> Free Email</li>
									<li><i class="fa fa-times"></i> Free cPanel</li>
									<li><i class="fa fa-times"></i> Free FTP</li>
									<li><i class="fa fa-times"></i> Free Support</li>
								</ul>
							</div>
							<div class="pricing-footer">
								<a href="#" class="btn btn-default">Purchase</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="pricing-table featured">
							<div class="pricing-header">
								<div class="pt-price">$49.99<small>/m</small></div>
								<div class="pt-name">Developer</div>
								<div class="featured-text">Best Value</div>
							</div>
							<div class="pricing-body">
								<ul>
									<li><i class="fa fa-check"></i> 20GB Space</li>
									<li><i class="fa fa-check"></i> 1TB Bandwidth</li>
									<li><i class="fa fa-check"></i> Free Domain</li>
									<li><i class="fa fa-check"></i> Free Email</li>
									<li><i class="fa fa-check"></i> Free cPanel</li>
									<li><i class="fa fa-check"></i> Free FTP</li>
									<li><i class="fa fa-times"></i> Free Support</li>
								</ul>
							</div>
							<div class="pricing-footer">
								<a href="#" class="btn btn-main">Purchase</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="pricing-table">
							<div class="pricing-header">
								<div class="pt-price">$99.99<small>/m</small></div>
								<div class="pt-name">Enterprise</div>
							</div>
							<div class="pricing-body">
								<ul>
									<li><i class="fa fa-check"></i> Unlimited Space</li>
									<li><i class="fa fa-check"></i> Unlimited Bandwidth</li>
									<li><i class="fa fa-check"></i> Free Domain</li>
									<li><i class="fa fa-check"></i> Free Email</li>
									<li><i class="fa fa-check"></i> Free cPanel</li>
									<li><i class="fa fa-check"></i> Free FTP</li>
									<li><i class="fa fa-check"></i> Free Support</li>
								</ul>
							</div>
							<div class="pricing-footer">
								<a href="#" class="btn btn-default">Purchase</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section-->
		<!--section class="faq-sec">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<div class="section-title st-center">
							<h3>Some questions</h3>
							<p>Frequently asked questions</p>
						</div>
					</div>
				</div>
				<div class="block">
					<div class="col-md-6">
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> Minime paulo beatus stare?</h3>
							<p>Praesidium quaerat doloribus turpis fruuntur vocant postremo optimus utraque, veserim vitae appellant fructuosam, mediocris consistat impetu illae coniunctione modi consequentis nosque, vis qui deorum, poenis fuisse timorem ferae fastidium.</p>
						</div>
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> Ferentur interrogari diceret?</h3>
							<p>Pertinerent non importari, populo faciendi civium vetuit. Gravitate numquam praesentium fabulas. Abest ponatur ineruditus restat consoletur causam, ordiamur temperantiam repellat desistemus conquirendae molestia aiunt discenda monet.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> Dicent erigimur secutus fortunae?</h3>
							<p>Quarum difficilius aegritudo epularum municipem alias. Vidisse litteris, rationibus eadem, mandaremus maluisset, delectus terrore angusta deduceret numquam fidelissimae mens gravissimo propter, tradit, fastidium facta facerem qua quippiam vacuitate cupiditatum admirer navigandi.</p>
						</div>
						<div class="faq">
							<h3><i class="fa fa-question-circle"></i> Molestiae dedocere effluere?</h3>
							<p>Habeo mala nocet perpetiuntur legendos dicemus levitatibus abducat futura, occultarum probant vitae evertunt laudantium docendi difficilem, offendit concederetur tuo hortensio deserere, molita gaudemus titillaret difficilius, parum timeret unum molestiam omnis vitae.</p>
						</div>
					</div>
				</div>
			</div>
		</section-->
		<!--section class="call-us">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3>If you like to work with us</h3>
						<a href="#" class="btn btn-default-o btn-lg">Call Us Now</a>
					</div>
				</div>
			</div>
		</section-->
		<section class="career" id="career">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>Career</h3>
							<p>WE BELIEVE in C2C : Connect to construct</p>
						</div>
					</div>
				</div>
				<form class="career-form" >
					<div class="col-md-6">
						<input type="text" class="form-control" id="fname" name="fname" placeholder="Full Name">
						<input type="text" class="form-control" id="dob" name="dob" placeholder="Date of Birth">
						<select class="form-control" id="gender" placeholder="Gender" name="gender">
						 <option value="">Gender</option>	
						  <option value="male">Male</option>
						  <option value="female">Female</option>
						  <option value="other">Other</option>
						</select>
						<input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
						<input type="text" class="form-control" id="number" name="number" placeholder="Contact Number">
						<select class="form-control" id="qualification"  name="qualification">
						  <option value="">Academic Qualification</option>
						  <option value="intermediate">Intermediate</option>
						  <option value="graduate">Graduate</option>
						  <option value="pg">PG</option>
						  <option value="phd">PhD</option>
						  <option value="other">Other</option>
						</select>
						<input type="text" class="form-control" id="exp" name="exp" placeholder="Professional Experience">
						
					</div>
					<div class="col-md-6">
						
						<input type="text" class="form-control" id="job" name="job" placeholder="Current Job/Position">
						<input type="text" class="form-control" id="org" name="org" placeholder="Current Organization">
						<textarea id="g2g" name="g2g" placeholder="Why G2G" class="form-control" rows="3"></textarea>
						<input type="text" class="form-control" id="address" name="address" placeholder="Residential Address">
						<input  type="file" name="cf-file" size="40" accept=".doc,.docx,.pdf"/>
						<button class="btn btn-main btn-lg" type="submit" id="sends" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Sending..."> Send</button>
					</div>
				</form>
				<div id="result-message1" role="alert"></div>
			</div>
		</section>

		<!--section class="subscribe">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="subscribe-title">Subscribe Newsletter</h3>
						<form class="subscribe-form">
							<div class="input-group">
								<input type="email" class="form-control" id="mc-email" placeholder="Enter E-mail...">
								<span class="input-group-btn">
									<button class="btn btn-main btn-lg" type="submit">Subscribe!</button>
								</span>
							</div>
						</form>
						<div class="subscribe-result"></div>
						<p class="subscribe-or">or</p>
						<ul class="subscribe-social">
							<li><a href="#" class="social twitter"><i class="fa fa-twitter"></i> Follow</a></li>
							<li><a href="#" class="social facebook"><i class="fa fa-facebook"></i> Like</a></li>
							<li><a href="#" class="social rss"><i class="fa fa-rss"></i> RSS</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section-->

		<section class="contact" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title st-center">
							<h3>Get in Touch with Us</h3>
							<!--p>Get in Touch with Us</p-->
						</div>
					</div>
				</div>
				<div class="block">
					<div class="col-md-6">
						<form class="contact-form" >
							<input type="text" class="form-control" id="fname" name="fname" placeholder="Full Name">
							<input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
							<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Contact Number">
							<input type="text" class="form-control" id="subj" name="subj" placeholder="Subject">
							<textarea id="mssg" name="mssg" placeholder="Message" class="form-control" rows="10"></textarea>
							<button class="btn btn-main btn-lg" type="submit" id="send" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Sending..."> Send</button>
						</form>
						<div id="result-message" role="alert"></div>
					</div>
					<div class="col-md-6">
					<div class="mb20">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.6183662982435!2d77.1220866501933!3d28.701060587641514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03e0b79e971d%3A0x517d622193665a1f!2sB4-62%2C+Rohini+Sector+8+Rd%2C+Pocket+7%2C+Sector+8B%2C+Sector+8%2C+Rohini%2C+Delhi%2C+110085!5e0!3m2!1sen!2sin!4v1490941067904" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
						<!--p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor.
</p-->
						<address>
							<strong>Office: Pocket B-4/62, First Floor, Sector – 8, Rohini, Delhi – 110085.</strong><br>
										<br> Email: infogtog@gmail.com<br>
							<abbr title="Contact">Contact:</abbr> +91-9205293043<br>
							Website: www.guidetoglory.co.in
						</address>
					</div>
				</div>
			</div>
		</section>
		
<?php get_sidebar(); ?>
<?php get_footer(); ?>
