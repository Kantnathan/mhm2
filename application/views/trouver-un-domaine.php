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
					<form class="form-inline domainsearch clearfix"  method="post" action="<?php echo base_url(); ?>nom_de_domaine/recherche">
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
                        <?php if(isset($panier['html'])) {echo $panier['html'];} else { ?>
                        
                        <h3 class="badge"><span style="font-size: 26px; color:#fff;">Ton Panier <small class="text-white">(0 Produits)</small></span></h3>
                        <table class="responsive tablesaw-stack text-white" data-tablesaw-mode="stack">
                            <tbody>
                                
                            </tbody>
                        </table>
                        <h3 class="margin-top-30 text-white"><small class="text-white">TOTAL:</small><span id="total-panier" style="font-size: 26px;" class="pull-right">0 <sup>FCFA</sup></span></h3>
                        <a href="<?php echo base_url(); ?>nom_de_domaine/commande_domaine" class="btn btn-success margin-top-20 minwi">Je confirme la commande</a>
                        <?php } ?>
                    </div>
                    
                    <div class="widget">
                        <h3 class="badge">Liste des Extensions</h3>
                        <table id="tld-table" class="tablesorter responsive tablesaw-stack" data-tablesaw-mode="stack">
                            
                        <tbody>
                            <?php if($domaines != null){ 
                                foreach($domaines as $domaine) {?>
                                    <tr>
                                        <td><?php echo $domaine->extension; ?></td>
                                        <td><?php echo number_format($domaine->prix,0,0,','); ?> FCFA</td>
                                    </tr>
                                <?php }} ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <!-- Blog Post-->
                <?php $i=0;
                foreach($recher as $resDomain) {?>
                <article>
                    <div class="domain-result icon-list-demo">
                    <?php if($resDomain['statut']=='free'){?>
                        <h2><i class="ti-face-smile bg_green" style="color: #fff;"></i> <b><?= $resDomain['domaine']; ?></b> est disponible 
                        <div class="pull-right ">
                                <div class="btn-group btn-block">
                                         <button type="button" class="btn btn-block btn-secondary dropdown-toggle text-right btn-sm" data-toggle="dropdown">1 An <b class="text-green">@ 7500F</b> <span class="caret"></span>
                                         </button>
                                         <ul class="dropdown-menu btn-block" role="menu">
                                            <li><a href="#">2 Ans @ $15000 <b class="text-green"></b></a></li>
                                            <li><a href="#">3 Ans @ $22500 <b class="text-green"></b></a></li>
                                         </ul>
                                      </div><br>
                                      <button data-id="<?= $i; ?>" class="pull-right btn waves-effect waves-light btn-success panier-domaine">ACHETER</button>
                            </div>
                        </h2>
                        <span>Reserve le maintenant avant qu'on ne te devance!</span>
                    <?php } else if($resDomain['statut']=='busy'){ ?>
                        <h2><i class="ti-face-sad bg_red" style="color: #fff;"></i> <b><?= $resDomain['domaine']; ?></b> n'est pas disponible</h2>
                        <span><a href="#"><u><?= $resDomain['domaine']; ?></u></a></span><span class="pull-right">Ce domaine t'appartiens? <button  data-id="<?= $i; ?>" class="btn waves-effect waves-light btn-success btn-sm panier-domaine">Transfere-le</button></span>
                    <?php } ?>
                                      <input id="domaine-voulu-<?= $i; ?>" value="<?= $resDomain['domaine']; ?>" hidden>
                                      <input id="type-voulu-<?= $i; ?>" value="<?= $resDomain['statut']; ?>" hidden>
                                      <input id="duree-voulu-<?= $i; ?>" value="1" hidden>
                                      <input id="prix-<?= $i; ?>" value="<?= $resDomain['prix']; ?>" hidden>
                                
                    </div>
                </article>
                <?php $i++; } ?>
                <h1>Autres Options</h1>
                <article>
                    <?php $j=1;
                    foreach($options as $option){ ?>
                    <div class="domain-result icon-list-demo">
                        <?php if($option['statut']=='busy'){?>
                            <h2><i class="ti-face-sad bg_red" style="color: #fff;"></i> <b><?= $option['domaine']; ?></b> n'est pas disponible</h2>
                            <span><a href="#"><u><?= $option['domaine']; ?></u></a></span><span class="pull-right">Ce domaine t'appartiens? <button  data-id="<?= $j; ?>" class="btn waves-effect waves-light btn-success btn-sm panier-domaine">Transfere-le</button></span>
                        <?php } else{ ?>
                            <h2><i class="ti-face-smile bg_green" style="color: #fff;"></i> <b><?= $option['domaine']; ?></b> est disponible
                            <div class="pull-right ">
                                <div class="btn-group btn-block">
                                         <button type="button" class="btn btn-block btn-secondary dropdown-toggle text-right btn-sm" data-toggle="dropdown">1 An <b class="text-green">@ 7500F</b> <span class="caret"></span>
                                         </button>
                                         <ul class="dropdown-menu btn-block" role="menu">
                                            <li><a href="#">2 Ans @ $15000 <b class="text-green"></b></a></li>
                                            <li><a href="#">3 Ans @ $22500 <b class="text-green"></b></a></li>
                                         </ul>
                                      </div><br>
                                      <button data-id="<?= $j; ?>" class="pull-right btn waves-effect waves-light btn-success panier-domaine">ACHETER</button>
                            </div>
                            </h2>
                            <span>Reserve le maintenant avant qu'on ne te devance!</span>
                        <?php } ?>
                            <input id="domaine-voulu-<?= $j; ?>" value="<?= $option['domaine']; ?>" hidden>
                            <input id="type-voulu-<?= $j; ?>" value="<?= $option['statut']; ?>" hidden>
                            <input id="duree-voulu-<?= $j; ?>" value="1" hidden>
                            <input id="prix-<?= $j; ?>" value="<?= $option['prix']; ?>" hidden>
                    </div>
                    <hr>
                    <?php $j++; } ?>
                </article>
                <!-- End of Blog Post-->
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