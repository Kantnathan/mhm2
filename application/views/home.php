

  <!-- Slider -->
  <div class="slidercontainer">
     <div id="mainslider" class="owl-carousel">
        <div class="item">
           <div class="slidecaption">
              <div class="row">
                 <div class="col-sm-8 col-xs-12">
                    <h2><span>Book </span> your Domain Name Here!</h2>
                    <h4>Create your Online Identity in Minutes</h4>
                    <form class="form-inline domainsearch clearfix " method="post" action="#">
                       <div class="col-sm-9">
                          <input type="text" class="form-control" name="sld" placeholder="Search your domain name"/>
                          <span class="selection">
                             <select name="tld" class="e1">
                                <?php if ($domaines != NULL): $i = 0?>
                                  <?php  foreach ($domaines as $key => $value ): ?>
                                    <option value="<?php echo $value->extension ;?>"><?php echo $value->extension ;?></option>
                                    <?php $i = $i +1 ;?>
                                  <?php endforeach ;?>
                                <?php endif ;?>
                             </select>
                          </span>
                       </div>
                       <div class="col-sm-3">
                          <button type="submit" class="btn waves-effect waves-light btn-info" style="width:100%">Search</button>
                       </div>
                    </form>
                 </div>
                 <div class="col-sm-4 col-xs-4 text-right">
                    <i class="infoicon pe-7s-global">
                       <div class="main-banner-offer bg_green wow zoomInDown">
                          <h4>Starting<br> At Only</h4>
                          <h2><b>$10</b></h2>
                          <p>/mo</p>
                       </div>
                    </i>
                 </div>
              </div>
           </div>
        </div>
        <div class="item">
           <div class="slidecaption">
              <div class="row">
                 <div class="col-sm-8 col-xs-12">
                    <h2><span>Linux Shared</span> Hosting</h2>
                    <h4>Linux Shared Servers are fully customizable to suit your needs.</h4>
                    <div class="section-list clearfix">
                       <ul class="list-checked">
                          <li>FULL ROOT ACCESS</li>
                          <li>INSTANT PROVISIONING</li>
                       </ul>
                    </div>
                    <p><a class="btn waves-effect waves-light btn-info btn-lg" href="#">See the Features</a></p>
                 </div>
                 <div class="col-sm-4 col-xs-4 text-right">
                    <i class="infoicon fa fa-linux">
                       <div class="main-banner-offer bg_green">
                          <h4>Starting<br> At Only</h4>
                          <h2><b>$2</b></h2>
                          <p>/mo</p>
                       </div>
                    </i>
                 </div>
              </div>
           </div>
        </div>
        <div class="item">
           <div class="slidecaption">
              <div class="row">
                 <div class="col-sm-8 col-xs-12">
                    <h2><span>Cloud</span> Hosting</h2>
                    <h4>Ultimate in high-performance, speed, stability and isolation.</h4>
                    <div class="section-domian clearfix">
                       <ul class="list-checked">
                          <li>FULL ROOT ACCESS</li>
                          <li>INSTANT PROVISIONING</li>
                       </ul>
                    </div>
                    <div>
                       <a class="btn waves-effect waves-light btn-success btn-lg" href="#">Starting at Only $2 /mo</a>
                    </div>
                 </div>
                 <div class="col-sm-4 col-xs-12 text-center">
                    <i class="infoicon wi wi-cloud"></i>
                 </div>
              </div>
           </div>
        </div>
        <div class="item">
           <div class="slidecaption">
              <div class="row">
                 <div class="col-sm-8 col-xs-12">
                    <h2><span>Windows</span> Hosting</h2>
                    <h4>Shared Windows Hosting With ASP, PHP & .NET</h4>
                    <div class="section-domian clearfix">
                       <ul class="list-checked">
                          <li>FULL ROOT ACCESS</li>
                          <li>INSTANT PROVISIONING</li>
                       </ul>
                    </div>
                    <p class="align-left"><a class="btn waves-effect waves-light btn-info btn-lg" href="#">Learn More</a></p>
                 </div>
                 <div class="col-sm-4 col-xs-4 text-right">
                    <p class="banner-price btn btn-success btn-lg">Starting at Only <span class="start-price">$2</span> <span class="start-month">/mo</span> </p>
                    <i class="infoicon fa fa-windows"></i>
                 </div>
              </div>
           </div>
        </div>
        <div class="item">
           <div class="slidecaption">
              <div class="row">
                 <div class="col-sm-8 col-xs-12">
                    <h2><span>VPS </span>Servers  </h2>
                    <h4>Virtual Private Server Hosting is an innovative approach</h4>
                    <div class="section-domian clearfix">
                       <ul class="list-checked">
                          <li>DEDICATED RAM & CPU</li>
                          <li>INSTANT PROVISIONING</li>
                       </ul>
                    </div>
                    <p class="align-left"><a class="btn waves-effect waves-light btn-info btn-lg" href="#">Purchase Now</a></p>
                 </div>
                 <div class="col-sm-4 col-xs-4 text-right">
                    <i class="infoicon fa fa-server">
                       <div class="main-banner-offer bg_green">
                          <h4>Starting<br> At Only</h4>
                          <h2><b>$10</b></h2>
                          <p>/mo</p>
                       </div>
                    </i>
                 </div>

              </div>
           </div>
        </div>
     </div>
     <section class="bg_dark banner-pagenate">
        <div class="row">
           <div id="mainslider-nav" class="owl-carousel btn-group">
              <div class="item"><i class="fa fa-globe"></i> REGISTER A DOMAIN</div>
              <div class="item"><i class="fa fa-th-large"></i> SHARED HOSTING</div>
              <div class="item"><i class="fa fa-cloud"></i> CLOUD HOSTING</div>
              <div class="item"><i class="fa fa-windows"></i> WINDOWS HOSTING</div>
              <div class="item"><i class="fa fa-tasks"></i> VPS SERVERS</div>
           </div>
        </div>
     </section>
  </div>
  </div>
  <!-- End of Slider -->
  <!--  Features -->
  <section class="features section_space">
     <div class="row">
        <div class="col-sm-12">
           <h2 class="title">Choose from various options at affordable cost</h2>
           <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
        </div>
     </div>
     <div class="row">
        <div class="col-sm-3 margin-top-40">
           <div class="feature">
              <div class="fa-stack fa-lg fa-5x">
                <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                <i class="fa fa-globe fa-stack-1x fa-inverse text-green"></i>
              </div>
              <h3>Domain Services</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
           </div>
        </div>
        <div class="col-sm-3 margin-top-40">
           <div class="feature">
              <div class="fa-stack fa-lg fa-5x">
                <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                <i class="fa thumbs-up fa-stack-1x  text-green"></i>
              </div>
              <h3>99.9% Uptime</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
           </div>
        </div>
        <div class="col-sm-3 margin-top-40">
           <div class="feature">
              <div class="fa-stack fa-lg fa-5x">
                <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                <i class="fa earphones-alt fa-stack-1x fa-inverse text-green"></i>
              </div>
              <h3>24/7/365 Support Team</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
           </div>
        </div>
        <div class="col-sm-3 margin-top-40">
           <div class="feature">
              <div class="fa-stack fa-lg fa-5x">
                <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                <i class="fa emotsmile  fa-stack-1x fa-inverse text-green"></i>
              </div>
              <h3>Great Apps on Web</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
           </div>
        </div>
     </div>
  </section>
  <!-- End of Features -->
  <!--  Call to Action -->
  <section class="calltoaction bg_dark section_space section_space">
     <div class="row">
        <div class="col-sm-10 com-md-8 center-block">
           <div class="row no-gutter cta-content wow bounce">
              <div class="col-md-3 col-sm-4 center-block  margin-bottom-40">
                 <div class="offer">
                    <span>GET</span>
                    <h2>45%</h2>
                    <span>OFF</span>
                 </div>
              </div>
           </div>
           <div class=" section-domian clearfix">
              <h2>Register Domain Name here!</h2>
              <p>Engage customers / users with the best domain..</p>
              <form class="form-inline domainsearch clearfix" method="post" action="#">
                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="sld" placeholder="Search your domain name"/>
                    <span class="selection">
                       <select name="tld" class="e1">
                          <option>.com</option>
                          <option>.net</option>
                          <option>.org</option>
                          <option>.eu</option>
                       </select>
                    </span>
                 </div>
                 <div class="col-sm-2">
                    <button type="submit" class="btn waves-effect waves-light btn-info" style="width:100%">Search</button>
                 </div>
              </form>
              <ul class="list-checked">
                 <li>Easy Setup With Instant Activation</li>
                 <li>Complete DNS Control</li>
                 <li>No Hidden Cost</li>
              </ul>
           </div>
        </div>
     </div>
  </section>
  <!-- End of Call to Action -->
  <!--  Pricing Tables -->
  <section class="pricingtables bg_gray section_space">
     <div class="row">
        <div class="col-sm-12">
           <h2 class="title">Wide range of Hosting Plans</h2>
           <p>Whether you are a professional developer or have never run a website before we have a web hosting solution to meet your own unique needs!</p>
        </div>
     </div>
     <div class="row no-gutter">
        <div class="col-sm-3 margin-top-40">
           <div class="panel panel-info">
              <div class="panel-heading">
                 <h3 class="text-center">Shared Hosting</h3>
              </div>
<div class="panel-body text-center">
                 <span>STARTING FROM</span>
                 <h4>$12</h4>
                 <span class="per">PER MONTH</span>
              </div>
              <ul class="text-center">
                 <li><b>Unlimited</b> domains</li>
                  <li><b>100MB</b> Disk Space</li>
                 <li><b>Limited</b> Bandwidth</li>
                 <li><b>100 email</b> accounts</li>
                 <li><b>Apache,Mysql,drupal</b> more</li>
                 <li><b>24 x 7</b>Customer Support</li>
                 <li>Virus <b>Protection</b></li>
              </ul>
              <div class="panel-footer">
                 <a class="btn waves-effect waves-light btn-primary" href="#">Buy Now</a>
              </div>
           </div>
        </div>
        <div class="col-sm-3 margin-top-40">
           <div class="panel panel-info">
              <div class="panel-heading">
                 <h3 class="text-center"><?php echo $this->lang->line('login_heading');?></h3>
              </div>
<div class="panel-body text-center">
                 <span>STARTING FROM</span>
                 <h4>$16</h4>
                 <span class="per">PER MONTH</span>
              </div>
              <ul class="text-center">
                 <li><b>Unlimited</b> domains</li>
                 <li><b>Unlimited</b> Disk Space</li>
                 <li><b>Limited</b> Bandwidth</li>
                 <li><b>100 email</b> accounts</li>
                 <li><b>Apache,Mysql,drupal</b> more</li>
                 <li><b>24 x 7</b> Customer Support</li>
                 <li>Virus <b>Protection</b></li>
              </ul>
              <div class="panel-footer">
                 <a class="btn waves-effect waves-light btn-primary" href="#">Buy Now</a>
              </div>
           </div>
        </div>
        <div class="col-sm-3 margin-top-40 most-popular ">
           <div class="panel panel-info">
              <div class="panel-heading">
                 <div class="sticker-wrapper">
                    <div class="sticker bg-danger wow fadeIn">Most Popular</div>
                 </div>
                 <h3 class="text-center"><p><?php echo $this->lang->line('welcome_message'); ?></p></h3>
              </div>
<div class="panel-body text-center">
                 <span>STARTING FROM</span>
                 <h4>$28</h4>
                 <span class="per">PER MONTH</span>
              </div>
              <ul class="text-center">
                 <li><b>Unlimited</b> domains</li>
                 <li><b>Unlimited</b> Disk Spaces</li>
                 <li><b>Unlimited</b> Bandwidth</li>
                 <li><b>300</b> email accounts</li>
                 <li><b>Database</b> Engine Available</li>
                 <li><b>24 x 7</b> Customer Support</li>
                 <li>Virus <b>Protection</b></li>
              </ul>
              <div class="panel-footer">
                 <a class="btn waves-effect waves-light btn-success" href="#">Buy Now</a>
              </div>
           </div>
        </div>
        <div class="col-sm-3 margin-top-40">
           <div class="panel panel-info">
              <div class="panel-heading">
                 <h3 class="text-center">Dedicated Servers</h3>
              </div>
<div class="panel-body text-center">
                 <span>STARTING FROM</span>
                 <h4>$108</h4>
                 <span class="per">PER MONTH</span>
              </div>
              <ul class="text-center">
                 <li><b>Unlimited</b> domains</li>
                 <li><b>Unlimited</b> Disk Spaces</li>
                 <li><b>Unlimited</b> Bandwidth</li>
                 <li><b>500 email</b> accounts</li>
                 <li><b>Unlimited</b> Bandwidth</li>
                 <li><b>24 x 7</b> Customer Support</li>
                 <li>Virus Protection</li>
              </ul>
              <div class="panel-footer">
                 <a class="btn waves-effect waves-light btn-primary" href="#">Buy Now</a>
              </div>
           </div>
        </div>
     </div>
  </section>
  <!-- End of Pricing Tables -->

  <!--  Counters -->
  <section class="counters feature section_space">
     <div class="row">
        <div class="col-sm-12">
           <h2 class="title">Why Get Online With Us?</h2>
           <p>IconHost is a company founded as the provider of reliable and budget-friendly hosting services.Our 24/7/365 Guaranteed Support and experienced technicians are. At IconHost,the availability of your website is our top priority.</p>
        </div>
     </div>
     <div class="row">
        <div class="col-sm-3 margin-top-40">
                <div>
                	<div class="fa-stack fa-lg fa-5x">
                        <i class="fa fa-circle-thin fa-stack-2x text-dark "></i>
                        <i class="fa icon-emotsmile fa-stack-1x fa-inverse text-green"></i>
                     </div>
                    <div class="counter text-green">10,020</div>
                    <span><b>Happy</b> Customers</span>
                </div>
        </div>
        <div class="col-sm-3 margin-top-40">
           <div>
                <div class="fa-stack fa-lg fa-5x">
                    <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                    <i class="fa icon-people fa-stack-1x fa-inverse text-primary"></i>
                </div>
              <div class="counter text-primary">12,452</div>
              <span><b>Total</b> Clients</span>
           </div>
        </div>
        <div class="col-sm-3 margin-top-40">
           <div>
                 <div class="fa-stack fa-lg fa-5x">
                    <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                    <i class="fa icon-location-pin fa-stack-1x fa-inverse text-orange"></i>
                 </div>
              <div class="counter text-orange">25</div>
              <span><b>Business</b> Locations</span>
           </div>
        </div>
        <div class="col-sm-3 margin-top-40">
           <div>
                <div class="fa-stack fa-lg fa-5x">
                    <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                    <i class="fa icon-trophy fa-stack-1x fa-inverse text-secondary"></i>
                 </div>
              <div class="counter text-secondary">18</div>
              <span><b>Award</b> Winnings</span>
           </div>
        </div>
     </div>
  </section>
  <!-- End of Counters -->

  <!-- Testimonials -->
    <div class="testimonials bg_gray section_space">
       <div class="row">
          <div class="col-sm-8 center-block">
             <div class="margin-bottom-40">
             	<h2 class="title">Customers Feedback</h2>
             	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
             </div>
             <div id="testimonials-carousel" class="owl-carousel">
                <div class="item">
                   <div class="testimonial-content">
                      <div class="col-sm-12">
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                         <div class="col-sm-6 center-block">
                            <div class="whoclient clearfix">
                               <div class="testimonialimg"><img src="<?= base_url()?>assets/images/testimonial1.jpg" alt="" /> </div>
                               <b>Jacob Jones</b> Sr. Director<a href="#"> JJ Enterprises</a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="item">
                   <div class="testimonial-content">
                      <div class="col-sm-12">
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                         <div class="col-sm-6 center-block">
                            <div class="whoclient clearfix">
                               <div class="testimonialimg"><img src="<?= base_url()?>assets/images/testimonial2.jpg" alt="" /> </div>
                               <b>Jane Smith</b> Sr. Vice President <a href="#">Acme Inc.</a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="item">
                   <div class="testimonial-content">
                      <div class="col-sm-12">
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                         <div class="col-sm-6 center-block">
                            <div class="whoclient clearfix">
                               <div class="testimonialimg"><img src="<?= base_url()?>assets/images/testimonial3.jpg" alt="" /> </div>
                                <b>Olivia Williams</b> Sr. Manager  <a href="#">Tech Corp</a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="text-center">
                <a href="#" class="btn waves-effect waves-light btn-success btn-lg">See All Testimonials</a>
             </div>
          </div>
       </div>
    </div>
  <!-- End of Testimonials -->

  <!--  Newsletter -->
  <section class="newsletter section_space text-center">
     <div class="row">
        <div class="col-sm-8 center-block">
		    <div class="margin-bottom-40">
			   <h2 class="title">Join Our Newsletter</h2>
			   <p>Sign up to get better offers, email marketing as well as anytime updates about IconHost.</p>
		   </div>
           <div id="mc_embed_signup">
              <div class="subscribe_form">
                 <form class="form-inline validate" action="http://trewsoft.us15.list-manage.com/subscribe/post?u=9b4867af12330694edde907d6&amp;id=59d1dbd9d5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                    <div class="row no-gutter">
                       <input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Subscribe to our newsletter" required>
                       <div style="position: absolute; left: -5000px;">
                          <input type="text" name="" tabindex="-1" value="">
                       </div>
                       <div class="col-sm-3 col-xs-3 subscribe_button">
                          <input class="btn btn-primary" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
                       </div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
     </div>
  </section>
  <!--  End of Newsletter -->

  <!--  Blog Posts -->
  <section class="blogpost-home bg_gray section_space">
	 <div class="row">
		<div class="col-sm-12">
		   <div class="text-center">
			  <h2 class="title">IconHost Blog Posts</h2>
			  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		   </div>
		   <div class="col-sm-4 margin-top-40">
			  <div class="home-blog-posts">
				 <div class="home-blog-image">
					<a href="#">
					<img src="<?= base_url()?>assets/images/blog/blog1.jpg" alt="">
					</a>
				 </div>
				 <div class="post-info">
				 	 <h3><a href="#">Avoid hacking of servers with Theft Protection</a></h3>
					 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				 </div>
			  </div>
		   </div>
		   <div class="col-sm-4 margin-top-40">
			  <div class="home-blog-posts">
				 <div class="home-blog-image">
					<a href="#">
					<img src="<?= base_url()?>assets/images/blog/blog2.jpg" alt="">
					</a>
				 </div>
				 <div class="post-info">
				 	<h3><a href="#">Customize templates using wide array of options from Server Settings</a></h3>
				 	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				 </div>
			  </div>
		   </div>
		   <div class="col-sm-4 margin-top-40">
			  <div class="home-blog-posts">
				 <div class="home-blog-image">
					<a href="#">
					<img src="<?= base_url()?>assets/images/blog/blog3.jpg" alt="">
					</a>
				 </div>
				 <div class="post-info">
					 <h3><a href="#">Secure your applications with robust infrastructure.</a></h3>
				 	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				 </div>
			  </div>
		   </div>
		   <div class="text-center ">
			  <a href="#" class="btn waves-effect waves-light btn-success btn-lg margin-top-40 ">Visit Our Blog</a>
		   </div>
		</div>
	 </div>
  </section>
  <!--  End of Blog Posts -->

  <!-- Hosted Clients -->
  <section class="section_space">
     <div class="row">
        <div class="text-center margin-bottom-40">
           <h2 class="title"><b>IconHost</b> Hosted Clients</h2>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="col-sm-12">
           <div id="clients">
              <div class="item"><img src="<?= base_url()?>assets/images/logos/1.png" alt=""></div>
              <div class="item"><img src="<?= base_url()?>assets/images/logos/2.png" alt=""></div>
              <div class="item"><img src="<?= base_url()?>assets/images/logos/3.png" alt=""></div>
              <div class="item"><img src="<?= base_url()?>assets/images/logos/4.png" alt=""></div>
              <div class="item"><img src="<?= base_url()?>assets/images/logos/5.png" alt=""></div>
              <div class="item"><img src="<?= base_url()?>assets/images/logos/6.png" alt=""></div>
              <div class="item"><img src="<?= base_url()?>assets/images/logos/7.png" alt=""></div>
              <div class="item"><img src="<?= base_url()?>assets/images/logos/8.png" alt=""></div>
              <div class="item"><img src="<?= base_url()?>assets/images/logos/9.png" alt=""></div>
              <div class="item"><img src="<?= base_url()?>assets/images/logos/1.png" alt=""></div>
              <div class="item"><img src="<?= base_url()?>assets/images/logos/2.png" alt=""></div>
              <div class="item"><img src="<?= base_url()?>assets/images/logos/3.png" alt=""></div>
              <div class="item"><img src="<?= base_url()?>assets/images/logos/4.png" alt=""></div>
              <div class="item"><img src="<?= base_url()?>assets/images/logos/5.png" alt=""></div>
              <div class="item"><img src="<?= base_url()?>assets/images/logos/6.png" alt=""></div>
              <div class="item"><img src="<?= base_url()?>assets/images/logos/7.png" alt=""></div>
              <div class="item"><img src="<?= base_url()?>assets/images/logos/8.png" alt=""></div>
              <div class="item"><img src="<?= base_url()?>assets/images/logos/9.png" alt=""></div>
           </div>
        </div>
     </div>
  </section>
  <!-- End of Hosted Clients -->

  <!-- Hosting Services -->
  <section class="features bg_gray section_space">

     <div class="row">
        <div class="col-sm-12">
           <h2 class="title">IconHost Web Hosting Services</h2>
           <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</span>
        </div>
     </div>

     <div class="row">

        <div class="col-sm-2 margin-top-40">
           <div class="feature">
              <div class="fa-stack fa-lg fa-5x">
                <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                <i class="fa fa-sitemap fa-stack-1x fa-inverse text-blue"></i>
              </div>
              <h3><b>Shared</b> Hosting</h3>
           </div>
        </div>

        <div class="col-sm-2 margin-top-40">
           <div class="feature">
              <div class="fa-stack fa-lg fa-5x">
                <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                <i class="fa fa-server fa-stack-1x fa-inverse text-blue"></i>
              </div>
              <h3><b>VPS</b> Hosting</h3>
           </div>
        </div>

        <div class="col-sm-2 margin-top-40">
           <div class="feature">
              <div class="fa-stack fa-lg fa-5x">
                <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                <i class="fa fa-desktop fa-stack-1x fa-inverse text-blue"></i>
              </div>
              <h3><b>Dedicated</b> Hosting</h3>
           </div>
        </div>

        <div class="col-sm-2 margin-top-40">
           <div class="feature">
              <div class="fa-stack fa-lg fa-5x">
                <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                <i class="fa fa-windows fa-stack-1x fa-inverse text-blue"></i>
              </div>
              <h3><b>Windows</b> Hosting</h3>
           </div>
        </div>

        <div class="col-sm-2 margin-top-40">
           <div class="feature">
              <div class="fa-stack fa-lg fa-5x">
                <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                <i class="fa fa-cloud fa-stack-1x fa-inverse text-blue"></i>
              </div>
              <h3><b>Cloud</b> Hosting</h3>
           </div>
        </div>

        <div class="col-sm-2 margin-top-40">
           <div class="feature">
              <div class="fa-stack fa-lg fa-5x">
                <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                <i class="fa fa-align-justify fa-stack-1x fa-inverse text-blue"></i>
              </div>
              <h3><b>Reseller</b> Hosting</h3>
           </div>
        </div>

     </div>
  </section>
  <!-- End of Hosting Services -->

  <!-- Help -->
 