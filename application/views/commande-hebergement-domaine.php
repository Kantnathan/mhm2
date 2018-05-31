<!-- Breadcrumps -->
    <section class="breadcrumbs">
        <div class="row">
            <div class="col-sm-6">
                <h1>Multi Year Domain Price</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li>You are here: </li>
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Multi Year Domain Price</li>
                </ol>
            </div>
        </div>
    </section>
<!-- End of Breadcrumps -->
<div class="domains bg_dark">
    	<div>
			<div class="row">
				<div class="col-sm-12">
					<h2 class="title">Find a personal domain that stands out</h2>
					 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
				</div>
			</div>

			<div class="row ">
				<div class="col-sm-10 com-md-8 center-block ">
					<form class="form-inline domainsearch clearfix"  method="post" action="#">
						<div class="col-sm-10">
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
						<div class="col-sm-2">
							<button type="submit" class="btn waves-effect waves-light btn-info">Search</button>
						</div>
					</form>
				</div>
				<div class="center-block text-center">
				 <a href="<?php echo base_url(); ?>nom_de_domaine" type="submit" class="btn waves-effect waves-light btn-success margin-top-20">Prix des Extensions</a>
				</div>
			</div>
		</div>
    </div>

<div class="blog section_space">
        <div class="row">
        <div class="col-sm-4">
                <div class="sidebar">

                    <div id="cart" class="widget bg_dark">
                        <?php if(isset($panier['html'])) {echo $panier['html'];} else{ ?>
                        
                        <h3 class="badge"><span style="font-size: 26px; color:#fff;">Ton Panier <small class="text-white">(0 Produits)</small></span></h3>
                        <table class="responsive tablesaw-stack text-white" data-tablesaw-mode="stack">
                            <tbody>
                                
                            </tbody>
                        </table>
                        <h3 class="margin-top-30 text-white"><small class="text-white">TOTAL:</small><span id="total-panier" style="font-size: 26px;" class="pull-right">0 <sup>FCFA</sup></span></h3>
                        <a href="<?php echo base_url(); ?>nom_de_domaine/commande_domaine" class="btn btn-success margin-top-20 minwi">Je confirme la commande</a>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <article>
                    <div class="margin-top-40">
							<div class="domain-result margin-top-40">
							<div id="example-tabs">
								<ul>
									<li><a href="#tab1"> Je n'ai pas de domaine</a></li>
                                    <li><a href="#tab2"> J'ai un domaine</a></li>
                                    <li><a href="#tab3"> Je transfere</a></li>
								</ul>

								<!-- 1st tab  -->
								<div class="margin-top-20" id="tab1">
                                    
                                    <div class=""><h2>Enregistrez votre nom de domaine</h2>
                                        <form method="post" action="<?= base_url()?>hebergement_web/add_domaine/new" class="margin-top-10 form-inline domainsearch clearfix">
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="domaine" placeholder="Recherche ton nom de domaine">
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
                                            <div class="col-sm-2">
                                                <button type="submit" class="btn waves-effect waves-light btn-info">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

								<!-- 2nd tab  -->
								<div class="margin-top-20" id="tab2">
                                    <div class="">
                                        <form method="post" action="<?= base_url()?>hebergement_web/add_domaine" class="margin-top-10 form-inline domainsearch clearfix">
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="domaine" placeholder="Saisis ton nom de domaine (EX: nomdomaine.com)">
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="submit" class="btn waves-effect waves-light btn-info">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                                <!-- 3rd tab  -->
                                <div class="margin-top-20" id="tab3">
                                    
                                    <div class=""><h2>Tranferez votre nom de domaine</h2>
                                        <form method="post" action="<?= base_url()?>hebergement_web/add_domaine/transfert" class="margin-top-10 form-inline domainsearch clearfix">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="domaine" placeholder="Saisis ton nom de domaine">
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
                                            <div class="col-sm-12 margin-top-10">
                                                <input type="text" class="form-control" name="authcode" placeholder="Entre ton code d'autorisation">
                                            </div>
                                            <div class="col-sm-12 margin-top-10">
                                                <button type="submit" class="btn waves-effect waves-light btn-info">Envoyer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
							</div>
							</div>
                    </div>
                </article>
            </div>

        </div>
    </div>

<!-- Hosting Services -->
  <section class="features section_space">

     <div class="row">
        <div class="col-sm-12">
           <h2 class="title">Offert avec chaque nom de domaine enregistre</h2>
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

    <!-- FAQ -->
    <div class="faq bg_gray section_space">
          <div class="row">
             <div class="col-sm-12  text-center">
                <h2 class="title">Some of the frequently asked questions  <b>(FAQ's)</b></h2>
                <p>Find answers to some of the frequently asked questions about Our Service.</p>
             </div>
          </div>
          <div class="row margin-top-40">
             <div class="col-sm-12">
                <div class="faq-questions">
                   <div id="accordion">
                      <div class="panel panel-default">
                         <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Differences between various options? Which one should I subscribe to?</a></h4>
                         </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                         <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Can I switch between plans? If so, how often? Are there any charges involved?</a></h4>
                         </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                         </div>
                      </div>
                      <div class="panel panel-default">
                         <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse3">How to add more administrators to my account?</a></h4>
                         </div>
                         <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                         </div>
                      </div>
                      <div class="panel panel-default">
                         <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Can I transfer my accounts outside of IconSite to IconSite?</a></h4>
                         </div>
                         <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                         </div>
                      </div>
                      <div class="panel panel-default">
                         <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse5">What are the backup options available? How to enable them?</a></h4>
                         </div>
                         <div id="collapse5" class="panel-collapse collapse">
                            <div class="panel-body">
                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                         </div>
                      </div>
                      <div class="panel panel-default">
                         <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse7">What are the SLA's? </a></h4>
                         </div>
                         <div id="collapse7" class="panel-collapse collapse">
                            <div class="panel-body">
                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                         </div>
                      </div>
                      <div class="panel panel-default">
                         <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Is there a dedicated Account Manager for my account?</a></h4>
                         </div>
                         <div id="collapse8" class="panel-collapse collapse">
                            <div class="panel-body">
                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                         </div>
                      </div>
                      <div class="panel panel-default">
                         <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse9">Can I change my credit card information on file?</a></h4>
                         </div>
                         <div id="collapse9" class="panel-collapse collapse">
                            <div class="panel-body">
                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
     </div>
     <!-- End of FAQ -->

     <!-- Contact -->
	<div class="row section_space coloumgrid">
            <div class="col-sm-12 text-center multipannels">

                   <div>
                        <h3 class="title">Contact Us</h3>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                   </div>


				   <div class="col-sm-4 margin-top-40">
                       <div class="feature">
                          <div class="fa-stack fa-lg fa-5x">
                            <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                            <i class="fa icon-earphones fa-stack-1x fa-inverse text-green"></i>
                          </div>
                          <h3>24X7 Call Center</h3>
                          <p>+1-845-180-1530</p>
                       </div>
           		   </div>


                   <div class="col-sm-4 margin-top-40">
                       <div class="feature">
                          <div class="fa-stack fa-lg fa-5x">
                            <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                            <i class="fa icon-envelope fa-stack-1x fa-inverse text-green"></i>
                          </div>
                          <h3>24X7 Support</h3>
                          <p><a href="#">sales@trewsoft.com</a></p>
                       </div>
           		   </div>


                    <div class="col-sm-4 margin-top-40">
                       <div class="feature">
                          <div class="fa-stack fa-lg fa-5x">
                            <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                            <i class="fa fa-map-marker fa-stack-1x fa-inverse text-green"></i>
                          </div>
                          <h3>Locations</h3>
                          <p>USA, UK, Germany, India</p>
                       </div>
            		</div>

            </div>
        </div>
        <!-- End of Contact -->