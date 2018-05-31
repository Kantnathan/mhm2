  <!-- Breadcrumps -->
  <section class="breadcrumbs">
     <div class="row">
        <div class="col-sm-6">
           <h1>Shared Hosting</h1>
        </div>
        <div class="col-sm-6">
           <ol class="breadcrumb">
              <li>You are here: </li>
              <li><a href="index.html">Home</a>
              </li>
              <li><a href="#">Hosting</a>
              </li>
              <li class="active">Shared Hosting</li>
           </ol>
        </div>
     </div>
  </section>
  <!-- End of Breadcrumps -->

  <!-- sub-banner -->
  <section id="sub-banner" class="bg_dark">
     <div class="row info-text wow fadeIn">
        <div class="col-sm-6">
           <div>
              <h2><b>Shared</b> Hosting</h2>
              <h3>
                 <p>Full Root Access with Robust & Scalable Shared Hosting. We provides every customer with the necessary tools to get a fully-functional Linux</p>
              </h3>
           </div>
        </div>
        <div class="col-sm-6 text-right">
           <i class="infoicon fa fa-server"></i>
        </div>
     </div>
     <div class="img-holder">
        <img src="<?= base_url()?>assets/images/sub-banner_bg.png" alt="image description">
     </div>
  </section>
  <!-- End of Sub-Banner -->

  <!-- Shared Hosting Tabs -->
  <div class="shared-features bg_gray section_space">
     <div class="row">
        <div class="col-sm-12">
           <div id="shared-hosting-tabs">
              <!-- Tab 1  -->
              <div id="feature1">
                 <div class="tabfeatures">
                    <div class="row">
                       <div class="text-center">
                          <h2 class="title"><i class="fa fa-linux"></i><b> Linux Hosting</b></h2>
                          <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                       </div>
                       <!--  Tab 1 Pricing Tables -->
                       <div class="pricingtables servers">
                          <div class="row">
                            <?php if(isset($packages)){ $i=0;
                                foreach($packages as $package){ ?>
                             <div class="col-sm-4 <?php if($i==1){echo 'most-popular';} ?> margin-top-40">
                                <div class="panel panel-info">
                                   <div class="panel-heading">
                                      <h3 class="text-center"><?= $package->nom; ?></h3>
                                   </div>
                                   <div class="panel-body text-center">
                                      <span>Seulement</span>
                                      <h4><?= $package->prix; ?> <sup>FCFA</sup></h4>
                                      <span class="per">PAR AN</span>
                                   </div>
                                   <ul class="text-center">
                                      <li>Noms de Domaine Offerts <b>01</b></li>
                                      <li>Espace Disque <b><?= $package->disque; ?> Go</b></li>
                                      <li>Bande Passante <b><?= $package->bande_passante; ?></b></li>
                                      <li>Adresses Email <b><?= $package->adresses_email; ?></b></li>
                                      <li>Sous-Domaines <b><?= $package->sous_domaines; ?></b></li>
                                      <li>Bases de Donnees <b><?= $package->bases_donnees; ?></b></li>
                                      <li>Comptes FTP <b><?= $package->comptes_ftp; ?></b></li>
                                      <li>Espace Admin <b> cPanel</b></li>
                                      <li>Certificat SSL <b>OFFERT</b></li>
                                      <li><b>Assistance Technique 24/7</b></li>
                                      <li>-</li>
                                   </ul>
                                   <div class="panel-footer">
                                      <button data-id="<?= $package->id; ?>" class="btn btn-lg waves-effect waves-light btn-warning btn-block panier-hebergement">JE COMMANDE</button>
                                   </div>
                                </div>
                             </div>
                             <?php $i++;} } ?>
                          </div>
                       </div>
                       <!-- End of Tab 1 Pricing Tables -->

                       <!-- Tab 1 Hosting Features -->
                       <div class="extra-features section_space">
                          <div class="row">
                             <div class="col-sm-12 text-center">
                                <h2 class="title"> Linux Hosting Technical Specifications</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                             </div>

                             <div class="col-sm-4 text-center margin-top-40">
                                <div class="facility">
                                    <div class="fa-stack fa-lg fa-5x spacing-20">
                                      <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                                      <i class="fa fa-gear fa-stack-1x fa-inverse text-blue "></i>
                                    </div>
                                     <div class="data">
                                        <h3>Plesk Panel Enabled</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                </div>
                             </div>

                             <div class="col-sm-4 text-center margin-top-40">
                                <div class="facility">
                                    <div class="fa-stack fa-lg fa-5x spacing-20">
                                      <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                                      <i class="fa fa-gear fa-stack-1x fa-inverse text-blue "></i>
                                    </div>
                                     <div class="data">
                                        <h3>Email Services</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                </div>
                             </div>

                             <div class="col-sm-4 text-center margin-top-40">
                                <div class="facility">
                                    <div class="fa-stack fa-lg fa-5x spacing-20">
                                      <i class="fa fa-circle-thin fa-stack-2x text-dark"></i>
                                      <i class="fa fa-gear fa-stack-1x fa-inverse text-blue "></i>
                                    </div>
                                     <div class="data">
                                        <h3>ASP.NET 4.5, MSSQL Supported</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                </div>
                             </div>

                          </div>
                       </div>
                       <!-- End of Tab 1 Hosting Features -->

                       <!--  Tab 1 FAQ  -->
                       <div class="faq bg_gray">
                          <div class="row">
                             <div class="col-sm-12 text-center">
                                <h2 class="title">Linux Hosting Frequently asked questions  <b>(FAQ's)</b></h2>
                                <p>Find answers to some of the frequently asked questions about Our Service.</p>
                             </div>
                          </div>
                          <div class="row">
                             <div class="col-sm-12 margin-top-40">
                                <div class="faq-questions">
                                   <div id="accordion" >
                                      <div class="panel panel-default">
                                         <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_1">Differences between various options? Which one should I subscribe to?</a></h4>
                                         </div>
                                        <div id="tab1_1" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="panel panel-default">
                                         <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_2">Can I switch between plans? If so, how often? Are there any charges involved?</a></h4>
                                         </div>
                                        <div id="tab1_2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                         </div>
                                      </div>
                                      <div class="panel panel-default">
                                         <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_3">How to add more administrators to my account?</a></h4>
                                         </div>
                                         <div id="tab1_3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                         </div>
                                      </div>
                                      <div class="panel panel-default">
                                         <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_4">Can I transfer my accounts outside of IconSite to IconSite?</a></h4>
                                         </div>
                                         <div id="tab1_4" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                         </div>
                                      </div>
                                      <div class="panel panel-default">
                                         <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_5">What are the backup options available? How to enable them?</a></h4>
                                         </div>
                                         <div id="tab1_5" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                         </div>
                                      </div>
                                      <div class="panel panel-default">
                                         <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_6">What are the SLA's? </a></h4>
                                         </div>
                                         <div id="tab1_6" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                         </div>
                                      </div>
                                      <div class="panel panel-default">
                                         <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_7">Is there a dedicated Account Manager for my account?</a></h4>
                                         </div>
                                         <div id="tab1_7" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                         </div>
                                      </div>
                                      <div class="panel panel-default">
                                         <div class="panel-heading">
                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_8">Can I change my credit card information on file?</a></h4>
                                         </div>
                                         <div id="tab1_8" class="panel-collapse collapse">
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
                       <!-- Tab 1 End of FAQ  -->
                    </div>
                 </div>
              </div>
              <!-- End of Tab 1  -->
           </div>
           <!-- End of Tab 3  -->
        </div>
     </div>
  </div>
  <!-- End of Shared Hosting Tabs -->