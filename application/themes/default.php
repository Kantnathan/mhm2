<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" > 
	<head>
		<title><?php echo $titre; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset; ?>" />
		<link rel="shortcut icon" href="<?= base_url()?>assets/images/icons/favicon.png" />
		<meta name="keywords" content="<?php echo $content_seo; ?>" />
		<link href="<?= base_url()?>assets/css/bootstrap.css" rel="stylesheet">
		  <link href="<?= base_url()?>assets/css/bootstrap-theme.css" rel="stylesheet">
		  <link href="<?= base_url()?>assets/css/block_grid_bootstrap.css" rel="stylesheet">
		  <link href="<?= base_url()?>assets/css/owl.carousel.css" rel="stylesheet">
		  <link href="<?= base_url()?>assets/css/owl.theme.css" rel="stylesheet">
		  <link href="<?= base_url()?>assets/css/animate.min.css" rel="stylesheet" />
		  <link href="<?= base_url()?>assets/css/jquery.circliful.css" rel="stylesheet" />
		  <link href="<?= base_url()?>assets/css/select2.css" rel="stylesheet"/>
		  <link href="<?= base_url()?>assets/css/slicknav.css" rel="stylesheet" />
	  <link href="<?= base_url()?>assets/style.css" rel="stylesheet">
	  <link href="<?= base_url()?>assets/css/checkboxradio.css" rel="stylesheet">
      <link href="<?= base_url()?>assets/css/bootstrap-formhelpers.css" rel="stylesheet">
		  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/img/bootstrap-formhelpers-countries.flags.png" rel="stylesheet">
	<?php foreach($css as $url): ?>
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $url; ?>" />
<?php endforeach; ?>
	</head>

	<body>
		
<!-- Global Fullpage Loader-->
<div id="global-loader"></div>

  <!-- Top MiniBar-->
  <section class="topminibar">
     <div class="row">
        <div class="col-sm-12 col-md-6 col-xs-12">
           <ul class="list-inline">
              <li><a href="#"><i class="fa fa-phone-square"></i><span>+237 695 15 25 68</span></a></li>
              <li><a href="#"><i class="fa fa-commenting"></i><span> Live Chat</span></a></li>
              <li><a href="#"><i class="fa fa-headphones"></i><span> Support</span></a></li>
              <li><div class="select-language">
				  <ul class="nav navbar-nav">
						   <li class="dropdown">
								 <a href="<?php echo base_url(); ?>LanguageSwitcher/switchLang/english" class="dropdown-toggle" data-toggle="dropdown">
								   <img src="<?= base_url()?>assets/images/flags/US.png"/>English(US)<b class="caret"></b>
								 </a>
								 <ul class="dropdown-menu">
								   <li><a href="<?php echo base_url(); ?>LanguageSwitcher/switchLang/french"><img src="<?= base_url()?>assets/images/flags/FR.png"/> French</a></li>
								 </ul>
						   </li>
					 </ul>
			 	</div>
			 	</li>
           </ul>
        </div>
        <div class="col-sm-12 col-md-6 col-xs-12">
           <div class="text-right loginbuttons">
		   	  <?php if(isset($logged_user)){?>
				<span style="font-size: 20px;"> <a href="<?= base_url()?>hebergement_web_pour_developpeur/admin" title="Connection a l'espace Admin"><i class="fa fa-tachometer text-blue"></i></a> <a href="<?= base_url()?>auth/logout" title="DECONNECTION"><i class="fa fa-power-off text-red"></i></a> Bienvenue, <?php echo $this->ion_auth->user()->row()->first_name.' '.$this->ion_auth->user()->row()->last_name;?></span>
				<?php }else{?>
              <a class="btn waves-effect waves-light btn-sm btn-success" href="<?= base_url()?>auth/create_user" title=""><i class="fa fa-pencil"></i>  Cree ton compte </a>
              <a class="btn waves-effect waves-light btn-sm btn-warning" href="<?php echo base_url(); ?>auth/login" title=""><i class="fa fa-user"></i> Connection</a>
				 <?php } ?>
			  <?php if($panier != 0) { ?>
              <div class="pull-right bg_dark" style="margin-left: 3px"><a class="btn waves-effect waves-light btn-block dropdown-toggle btn-sm btn-danger" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i> Ton Panier (<span id="nbprod"><?= $panier['numb'] ?></span>) <span class="caret"></span></a>
                <div id="upCart" class="dropdown-menu btn-block" role="menu">
                    <?php echo $panier['html']; ?>
                </div>
                </div>
              <?php } ?>
           </div>
        </div>
     </div>
  </section>
  <!-- End of Top MiniBar-->

  <!-- Header-->
  <section class="menu-header top">
     <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-3">
           <div class="logo">
              <a href="<?php echo base_url(); ?>"><img src="<?= base_url()?>assets/images/logo.png" alt="" />
              </a>
           </div>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-9">
           <nav id="desktop-menu">
              <ul class="sf-menu" id="navigation">
                 <li class="current">
                    <a href="#"><i class="fa fa-home"></i>Home</a>
                    <ul>
                       <li><a href="index-with-tabs.html">Tab Slider</a></li>
                       <li><a href="index-without-tabs.html">Plain Banner</a></li>
                       <li><a href="index-video.html">Video Banner</a></li>
                       <li><a href="index-image-slider.html">Multiple Image Slider Banner</a></li>
                       <li><a href="index-domains.html">Domain Search</a></li>
                       <li><a href="index-sticky.html">Sticky Header</a></li>
                       <li><a href="index-templates.html">Sample Template Gallery</a></li>
                    </ul>
                 </li>
                 <li>
                    <a href="#"><i class="fa fa-server"></i>Hosting</a>
                    <ul>
                       <li><a href="<?php echo base_url(); ?>hebergement_web">Hebergement Web</a></li>
                       <li><a href="<?php echo base_url(); ?>vps">Cloud VPS</a></li>
                       <li><a href="servers.html">Dedicated Servers</a></li>
                    </ul>
                 </li>
                 <li>
                    <a href="#"><i class="fa fa-globe"></i>Nom de Domaine</a>
                    <ul>
                       <li><a href="<?php echo base_url(); ?>nom_de_domaine">Prix</a></li>
                       <li><a href="<?php echo base_url(); ?>nom_de_domaine/recherche">Recherche</a></li>
                       <li><a href="<?php echo base_url(); ?>nom_de_domaine/enregistrement">Enregistrement</a></li>
                       <li><a href="<?php echo base_url(); ?>nom_de_domaine/transfert">Transfert</a></li>
                    </ul>
                 </li>
                 </li>
                 <li>
                    <a href="#"><i class="fa fa-list"></i>Pages</a>
                    <ul>
                       <li><a href="about.html">About</a></li>
                       <li><a href="affiliate.html">Affiliate</a></li>
                       <li><a href="choose-language.html">Choose Language</a></li>
                       <li><a href="testimonials.html">Testimonials</a></li>
                       <li><a href="faq.html">FAQ</a></li>
                       <li><a href="login.html">Login</a></li>
                       <li><a href="login2.html">Login2</a></li>
                       <li><a href="datacenter.html">Datacenter</a></li>
                       <li><a href="elements.html">Elements</a></li>
                       <li><a href="pages-404.html">404 Page Classic</a></li>
                       <li><a href="pages-404-dark.html">404 Page Dark</a></li>
                       <li><a href="under-maintenance.html">Under Maintenance</a></li>
                       <li><a href="template-gallery.html">Gallery</a></li>
                       <li><a href="domain-for-sale.html">Domains For Sale</a></li>
                       <li>
                          <a href="#">Blog</a>
                          <ul>
                             <li><a href="blog1-category.html">Category 1</a></li>
                             <li><a href="blog2-category.html">Category 2</a></li>
                             <li><a href="blog1-single.html">Single 1</a></li>
                             <li><a href="blog2-single.html">Single 2</a></li>
                          </ul>
                       </li>
                    </ul>
                 </li>
                 <li>
                    <a href="#"><i class="fa fa-cog fa-fw"></i>Icons</a>
                    <ul>
                       <li><a href="icons-fontawesome.html">FontAwesome Icons</a></li>
                       <li><a href="icons-ionicons.html">Ionicons Icons</a></li>
                       <li><a href="icons-materialdesign.html">MaterialDesign Icons</a></li>
                       <li><a href="icons-pe7.html">pe7 Icons</a></li>
                       <li><a href="icons-simple-line.html">Simple Line Icons</a></li>
                       <li><a href="icons-themify.html">Themify Icons</a></li>
                       <li><a href="icons-typicons.html">Typicons Icons</a></li>
                       <li><a href="icons-weather.html">Weather Icons</a></li>
                    </ul>
                 </li>
                 <li>
                    <a href="#"><i class="fa fa-envelope fa-fw"></i>Contact</a>
                    <ul>
                       <li><a href="contact1.html">Contact 1</a></li>
                       <li><a href="contact2.html">Contact 2</a></li>
                    </ul>
                 </li>
                 <li>
                    <a href="#"><i class="fa fa-tags fa-fw"></i>Offers</a>
                    <ul>
                       <li><a href="index-offer.html">Coupon Offer</a></li>
                       <li><a href="combo-offers.html">Combo Offers</a></li>
                       <li><a href="limited-offers.html">Limited Offers Classic</a></li>
                       <li><a href="limited-offers2.html">Limited Offers New</a></li>
                       <li><a href="index-pop-offer.html">Offer Popup</a></li>
                       <li><a href="index-pop-subscribe.html">Subscribe To Offer</a></li>
                    </ul>
                 </li>
              </ul>
           </nav>
        </div>
     </div>
  </section>
  <!-- End of Header-->
		<div id="contenu">
			<?php echo $output; ?>
		</div>
		<section class="bg_dark">
     <div class="page-help section_space">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                <h2>Need help? Call our award-winning support team </h2>
                <p class="font-bold">24/7 US based call support, <b>Email</b> any time or call <span class="deskop-help">+1-845-180-1530</span> <span class="mobile-help"><a href="tel:+1-845-180-1530">+1-845-180-1530</a></span></p>
                </div>
                <div class="col-md-3"> <a href="#" class="btn waves-effect waves-light btn-secondary btn-lg">Contact IconHost</a> </div>
            </div>
        </div>
    </div>
  </section>
  <!-- End of Help -->


    <!--  Footer -->
    <section>
        <div class="footer section_space">
            <div class="row">
                <div class="col-sm-3">
                    <h4><b>Choose Hosting Type:</b></h4>
                    <ul>
                        <li><a href="#">Shared Hosting</a></li>
                        <li><a href="#">VPS Hosting</a></li>
                        <li><a href="#">Dedicated Hosting</a></li>
                        <li><a href="#">Windows Hosting</a></li>
                        <li><a href="#">Cloud Hosting</a></li>
                        <li><a href="#">Reseller Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h4><b>Contact Support:</b></h4>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Submit a Ticket</a></li>
                        <li><a href="#">Visit Knowledge Base</a></li>
                        <li><a href="#">Cloud Hosting</a></li>
                        <li><a href="#">Managed Hosting Services</a></li>
                        <li><a href="#">Professional Services</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h4><b>Hosting Integrations:</b></h4>
                    <ul>
                        <li><a href="#">Web Portal</a></li>
                        <li><a href="#">HR Portal</a></li>
                        <li><a href="#">Support Portal</a></li>
                        <li><a href="#">Billing Portal</a></li>
                        <li><a href="#">Database Administration</a></li>
                        <li><a href="#">Disaster Recovery Planning</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h4><b>Additional Resources:</b></h4>
                    <ul>
                        <li><a href="#">Knowledge Base</a></li>
                        <li><a href="#">Support System</a></li>
                        <li><a href="#">Downloads</a></li>
                        <li><a href="#">Announcements</a></li>
                        <li><a href="#">Acceptable Use Policy</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-sm-6 col-xs-6">
                <div class="footer_logo">
                    <a href="index.html"><img src="<?= base_url()?>assets/images/logo.png" alt="">
                    </a>
                </div>
        </div>
            <div class="col-sm-6 text-right">
                <div class="footer-social-icons">
                <ul class="social-icons">
                    <li><a href="#" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="social-icon"> <i class="fa fa-rss"></i></a></li>
                    <li><a href="#" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
                    <li><a href="#" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
                </ul>
               <h6 class="follow">Follow Us</h6>
            </div>
            </div>
        </div>

      <div class="payments">
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-inline">
                        <li><a href="#"><img src=" <?= base_url()?>assets/images/award1.png" data-pin-nopin="true" alt="award-img1"></a></li>
                        <li><a href="#"><img src=" <?= base_url()?>assets/images/award2.png" data-pin-nopin="true" alt="award-img2"></a></li>
                        <li><a href="#"><img src=" <?= base_url()?>assets/images/award3.png" data-pin-nopin="true" alt="award-img3"></a></li>
                        <li><a href="#"><img src=" <?= base_url()?>assets/images/award4.png" data-pin-nopin="true" alt="award-img4"></a></li>
                    </ul>
                </div>

                <div class="col-md-6  text-right">
                    <ul class="list-inline">
                        <li><i class="fa fa-cc-mastercard fa-3x"></i></li>
                        <li><i class="fa fa-cc-visa fa-3x"></i></li>
                        <li><i class="fa fa-cc-amex fa-3x"></i></li>
                        <li><i class="fa fa-cc-discover fa-3x"></i></li>
                        <li><i class="fa fa-cc-paypal fa-3x"></i></li>
                        <li><i class="fa fa-google-wallet fa-3x"></i></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <ul class="list-inline sitemap">
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Legal</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                        <p class="copyright"><a href="#">IconHost</a> - Theme by TrewSoft.</p>
                    </div>
                </div>
            </div>
    </div>
    <!-- End of Copyright -->
    </section>
    <!--  End of Footer -->

    <!--  Go to Top-->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
    <!--  End of Go to Top -->

	

		<script src="<?= base_url()?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url()?>assets/js/hoverIntent.js"></script>
	<script src="<?= base_url()?>assets/js/superfish.min.js"></script>
	<script src="<?= base_url()?>assets/js/owl.carousel.js"></script>
    <script src="<?= base_url()?>assets/js/wow.min.js"></script>
    <script src="<?= base_url()?>assets/js/jquery.circliful.min.js"></script>
    <script src="<?= base_url()?>assets/js/waypoints.min.js"></script>
    <script src="<?= base_url()?>assets/js/jquery.responsiveTabs.js"></script>
	<script src="<?= base_url()?>assets/js/jquery-ui.js"></script>
	<script src="<?= base_url()?>assets/js/checkboxradio.js"></script>
	<script src="<?= base_url()?>assets/js/jquery.slicknav.min.js"></script>
	<script src="<?= base_url()?>assets/js/retina.min.js"></script>
	<script src="<?= base_url()?>assets/js/select2.js"></script>
	<script src="<?= base_url()?>assets/js/counterup.min.js"></script>
	<script src="<?= base_url()?>assets/js/waves.js"></script>
	<script src="<?= base_url()?>assets/js/jquery.countdown.js"></script>
  <script src="<?= base_url()?>assets/js/custom.js"></script>
	<script src="<?= base_url()?>assets/js/bootstrap-formhelpers.js"></script>
  <script src="<?= base_url();?>assets/js/countrypicker.js"></script>

	<script>
    
    // ______________  TOOLTIPS
		$(document).on("ready", function(e) {
			$('[data-toggle="tooltip"]').tooltip();
		});

		// ______________ TABS
		$('#shared-hosting-tabs').responsiveTabs({
			startCollapsed: 'accordion'
		});
    
    // ______________ TABS
		$('#example-tabs').responsiveTabs({
			startCollapsed: 'accordion'
		});

		// ______________ COUNTERUP
		$('.counter').counterUp({
			delay: 1,
			time: 1000
		});
    
    $(document).on("ready", function(e) {
			// ______________ SLIDERS
			var sync1 = $("#mainslider");
			var sync2 = $("#mainslider-nav");

			sync1.owlCarousel({
				singleItem : true,
				slideSpeed : 1000,
				paginationSpeed: 800,
				navigation: false,
				pagination:false,
				autoPlay:7500,
				afterAction : syncPosition,
				responsiveRefreshRate : 200,
			});

			sync2.owlCarousel({
				items : 5,
				itemsDesktop : [1199,5],
				itemsDesktopSmall : [979,3],
				itemsTablet : [768,3],
				itemsMobile : [479,2],
				pagination:false,
				responsiveRefreshRate : 100,
				afterInit : function(el){
					el.find(".owl-item").eq(0).addClass("synced");
				}
			});

			function syncPosition(el){
				var current = this.currentItem;
				$("#mainslider-nav")
				.find(".owl-item")
				.removeClass("synced")
				.eq(current)
				.addClass("synced");
				if($("#mainslider-nav").data("owlCarousel") !== undefined){
					center(current);
				}
			}

			$("#mainslider-nav").on("click",".owl-item", function(e){
				e.preventDefault();
				var number = $(this).data("owlItem");
				sync1.trigger("owl.goTo",number);
			});

			function center(number){
				var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
				var num = number;
				var found = false;
				for(var i in sync2visible){
					if(num === sync2visible[i]){
						var found = true;
					}
				}

				if(found===false){
					if(num>sync2visible[sync2visible.length-1]){
						sync2.trigger("owl.goTo", num - sync2visible.length+2)
					}else{
						if(num - 1 === -1){
							num = 0;
						}
						sync2.trigger("owl.goTo", num);
					}
				} else if(num === sync2visible[sync2visible.length-1]){
					sync2.trigger("owl.goTo", sync2visible[1])
				} else if(num === sync2visible[0]){
					sync2.trigger("owl.goTo", num-1)
				}
			}


			// ______________ SELECT2
			$(".e1").select2();

			// ______________ HOSTED CLIENTS
			$("#clients").owlCarousel({
				autoPlay: 3000, //Set AutoPlay to 3 seconds
				items: 4,
				itemsDesktop: [1199, 4],
				itemsDesktopSmall: [979, 3],
				pagination: false
			});

			// ______________ TESTIMONIALS
			$("#testimonials-carousel").owlCarousel({
				items: 1,
				autoPlay: 5000,
				itemsDesktop: [1199, 1],
				itemsDesktopSmall: [979, 1],
				itemsTablet: [768, 1],
				pagination:true
			});

			// ______________ COUNTERUP
			$('.counter').counterUp({
				delay: 10,
				time: 1000
			});
		});
    </script>
    <script>
		(
			function($, undefined) {
				$.ui.slider.prototype.options =
					$.extend({},
						$.ui.slider.prototype.options, {
							paddingMin: 0,
							paddingMax: 0
						}
					);

				$.ui.slider.prototype._refreshValue =
					function() {
						var
							oRange = this.options.range,
							o = this.options,
							self = this,
							animate = (!this._animateOff) ? o.animate : false,
							valPercent,
							_set = {},
							elementWidth,
							elementHeight,
							paddingMinPercent,
							paddingMaxPercent,
							paddedBarPercent,
							lastValPercent,
							value,
							valueMin,
							valueMax;

						if (self.orientation ==="horizontal") {
							elementWidth = this.element.outerWidth();
							paddingMinPercent = o.paddingMin * 100 / elementWidth;
							paddedBarPercent = (elementWidth - (o.paddingMin + o.paddingMax)) * 100 / elementWidth;
						} else {
							elementHeight = this.element.outerHeight();
							paddingMinPercent = o.paddingMin * 100 / elementHeight;
							paddedBarPercent = (elementHeight - (o.paddingMin + o.paddingMax)) * 100 / elementHeight;
						}

						if (this.options.values && this.options.values.length) {
							this.handles.each(function(i, j) {
								valPercent =
									((self.values(i) - self._valueMin()) / (self._valueMax() - self._valueMin()) * 100) * paddedBarPercent / 100 + paddingMinPercent;
								_set[self.orientation ==="horizontal" ?"left" :"bottom"] = valPercent +"%";
								$(this).stop(1, 1)[animate ?"animate" :"css"](_set, o.animate);
								if (self.options.range === true) {
									if (self.orientation ==="horizontal") {
										if (i === 0) {
											self.range.stop(1, 1)[animate ?"animate" :"css"]({
												left: valPercent +"%"
											}, o.animate);
										}
										if (i === 1) {
											self.range[animate ?"animate" :"css"]({
												width: (valPercent - lastValPercent) +"%"
											}, {
												queue: false,
												duration: o.animate
											});
										}
									} else {
										if (i === 0) {
											self.range.stop(1, 1)[animate ?"animate" :"css"]({
												bottom: (valPercent) +"%"
											}, o.animate);
										}
										if (i === 1) {
											self.range[animate ?"animate" :"css"]({
												height: (valPercent - lastValPercent) +"%"
											}, {
												queue: false,
												duration: o.animate
											});
										}
									}
								}
								lastValPercent = valPercent;
							});
						} else {
							value = this.value();
							valueMin = this._valueMin();
							valueMax = this._valueMax();
							valPercent =
								((valueMax !== valueMin) ? (value - valueMin) / (valueMax - valueMin) * 100 : 0) * paddedBarPercent / 100 + paddingMinPercent;

							_set[self.orientation ==="horizontal" ?"left" :"bottom"] = valPercent +"%";

							this.handle.stop(1, 1)[animate ?"animate" :"css"](_set, o.animate);

							if (oRange ==="min" && this.orientation ==="horizontal") {
								this.range.stop(1, 1)[animate ?"animate" :"css"]({
									width: valPercent +"%"
								}, o.animate);
							}
							if (oRange ==="max" && this.orientation ==="horizontal") {
								this.range[animate ?"animate" :"css"]({
									width: (100 - valPercent) +"%"
								}, {
									queue: false,
									duration: o.animate
								});
							}
							if (oRange ==="min" && this.orientation ==="vertical") {
								this.range.stop(1, 1)[animate ?"animate" :"css"]({
									height: valPercent +"%"
								}, o.animate);
							}
							if (oRange ==="max" && this.orientation ==="vertical") {
								this.range[animate ?"animate" :"css"]({
									height: (100 - valPercent) +"%"
								}, {
									queue: false,
									duration: o.animate
								});
							}
						}
					};

				$.ui.slider.prototype._normValueFromMouse =
					function(position) {
						var
							o = this.options,
							pixelTotal,
							pixelMouse,
							percentMouse,
							valueTotal,
							valueMouse;

						if (this.orientation ==="horizontal") {
							pixelTotal = this.elementSize.width - (o.paddingMin + o.paddingMax);
							pixelMouse = position.x - this.elementOffset.left - o.paddingMin - (this._clickOffset ? this._clickOffset.left : 0);
						} else {
							pixelTotal = this.elementSize.height - (o.paddingMin + o.paddingMax);
							pixelMouse = position.y - this.elementOffset.top - o.paddingMin - (this._clickOffset ? this._clickOffset.top : 0);
						}

						percentMouse = (pixelMouse / pixelTotal);
						if (percentMouse > 1) {
							percentMouse = 1;
						}
						if (percentMouse < 0) {
							percentMouse = 0;
						}
						if (this.orientation ==="vertical") {
							percentMouse = 1 - percentMouse;
						}

						valueTotal = this._valueMax() - this._valueMin();
						valueMouse = this._valueMin() + percentMouse * valueTotal;

						return this._trimAlignValue(valueMouse);
					};
			}
        )(jQuery);
        <?php
			$plans='';$memory='';$cpu='';$disk='';$bandw='';$price='';$pid='';$count = 0;
			if(isset($vpss)){
                foreach($vpss as $vps){
                    if($count==0){$plans = "'".$vps->nom."'";}else{$plans .= ", '".$vps->nom."'";}
                    if($count==0){$memory = "'".$vps->ram."'";}else{$memory .= ", '".$vps->ram."'";}
                    if($count==0){$cpu = "'".$vps->processeur." X ".$vps->cores."'";}else{$cpu .= ", '".$vps->processeur." X ".$vps->cores."'";}
                    if($count==0){$disk = "'".$vps->disque."'";}else{$disk .= ", '".$vps->disque."'";}
                    if($count==0){$bandw = "'".$vps->bande."'";}else{$bandw .= ", '".$vps->bande."'";}
                    if($count==0){$price = "'".$vps->prix."'";}else{$price .= ", '".$vps->prix."'";}
                    if($count==0){$pid = "'".$vps->id."'";}else{$pid .= ", '".$vps->id."'";}
                    $count++;
                }
            }
        ?>
		var planval = new Array(<?= $plans ?>); //Wide range of Hosting Plans. Displayed only to small screens
		var memoryval = new Array(<?= $memory ?>); //Memory array per plan
		var cpuval = new Array(<?= $cpu ?>); //CPU array per plan
		var diskspaceval = new Array(<?= $disk ?>); //Disk Space array per plan
		var bandwidthval = new Array(<?= $bandw ?>); //Bandwidth array per plan
		var decimalval = new Array('.00', '.00', '.00', '.00', '.00',  '.00'); //Decimal array per plan

		var priceval = new Array(<?= $price ?>); //Price array per plan
		var urlval = new Array(<?= $pid ?>); //WHMCS pid array per plan

		var finalurl = 'http://localhost/mboahost/vps/ajouter_panier/'; //Update"domain.com" with your WHMCS installation URL

		var starting_point = 1; //Where the slider stops on first page load. Ideal to sign a plan as popular.

		$(document).on("ready", function(e) {
			$("#vps-slider").slider({
				range: 'min',
				animate: true,
				min: 1,
				max: <?= $count ?>, //Update this if you less or more plans
				paddingMin: 0,
				paddingMax: 0,
				slide: function(event, ui) {
					$('.vps-prices-container #plan_space_option span.how_much').html(planval[ui.value - 1]);
					$('.vps-prices-container #cpu_space_option span.how_much').html(cpuval[ui.value - 1]);
					$('.vps-prices-container #disk_space_option span.how_much').html(diskspaceval[ui.value - 1]);
					$('.vps-prices-container #plan_option span.how_much').html(planval[ui.value - 1]);
					$('.vps-prices-container #memory_option span.how_much').html(memoryval[ui.value - 1]);
					$('.vps-prices-container #bandwidth_option span.how_much').html(bandwidthval[ui.value - 1]);
					$('.vps-prices-container #price_amount').html(priceval[ui.value - 1]);
					$('.vps-prices-container a.order-vps').attr('href', finalurl + urlval[ui.value - 1]);
					$('.vps-prices-container #decimal').html(decimalval[ui.value - 1]);

				},
				change: function(event, ui) {
				$('.vps-prices-container #plan_space_option span.how_much').html(planval[ui.value - 1]);
					$('.vps-prices-container #cpu_space_option span.how_much').html(cpuval[ui.value - 1]);
					$('.vps-prices-container #disk_space_option span.how_much').html(diskspaceval[ui.value - 1]);
					$('.vps-prices-container #plan_option span.how_much').html(planval[ui.value - 1]);
					$('.vps-prices-container #memory_option span.how_much').html(memoryval[ui.value - 1]);
					$('.vps-prices-container #bandwidth_option span.how_much').html(bandwidthval[ui.value - 1]);
					$('.vps-prices-container #price_amount').html(priceval[ui.value - 1]);
					$('.vps-prices-container a.order-vps').attr('href', finalurl + urlval[ui.value - 1]);
					$('.vps-prices-container #decimal').html(decimalval[ui.value - 1]);
				}
			});

			$("#amount").val("$" + $("#vps-slider").slider("value"));
			$('#vps-slider').slider('value', starting_point);

		});
    </script>
	</body>

</html>