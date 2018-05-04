<!-- Breadcrumps -->
    <section class="breadcrumbs">
        <div class="row">
            <div class="col-sm-6">
                <h1>Single Year Domain Price</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li>You are here: </li>
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Single Year Domain Price</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumps -->

    <!--  Domain Search -->
    <div class="domains bg_dark">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title">Find a personal domain that stands out</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10 com-md-8 center-block">
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
                            <button type="submit" class="btn waves-effect waves-light btn-success" style="width:100%">Search</button>
                        </div>
                </form>
                <div class="domainextensions clearfix">
                    <ul class="hotdomains list-inline clearfix">
                        <li class="hot"><div class="item"><div class="extension">.com <span class="price">$ 12 /Year</span> <span class="oldprice">$ 20</span></div></div></li>
                        <li class="newoffer"><div class="item"><div class="extension">.net <span class="price">$ 15 /Year</span><span class="oldprice">$ 22</span></div></div></li>
                        <li><div class="item"><div class="extension">.co <span class="price">$ 18 /Year</span><span class="oldprice">$ 22</span></div></div></li>
                        <li class="new"><div class="item"><div class="extension">.org <span class="price">$ 18 /Year</span><span class="oldprice">$ 25</span></div></div></li>
                        <li><div class="item"><div class="extension">.me <span class="price">$ 22 /Year</span><span class="oldprice">$ 28</span></div></div></li>
                        <li><div class="item"><div class="extension">.global <span class="price">$ 23 /Year</span><span class="oldprice">$ 30</span></div></div></li>
                        <li><div class="item"><div class="extension">.host <span class="price">$ 28 /Year</span><span class="oldprice">$ 32</span></div></div></li>
                        <li class="new"><div class="item"><div class="extension">.name <span class="price">$ 20 /Year</span><span class="oldprice">$ 26</span></div></div></li>
                        <li><div class="item"><div class="extension">.website <span class="price">$ 22 /Year</span><span class="oldprice">$ 25</span></div></div></li>
                        <li><div class="item"><div class="extension">.site <span class="price">$ 24 /Year</span><span class="oldprice">$ 28</span></div></div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Domain Search -->

	<!-- Domains -->
    <div class="domainfeatures section_space">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title"> Choose your domain at affordable price</h2>
                <p>orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </p>
            </div>
        </div>

        <div class="domains-table margin-top-40">
            <div class="row">
                <div class="col-sm-12">
                    <table id="tld-table" class="tablesorter responsive tablesaw-stack" data-tablesaw-mode="stack">
                        <thead>
                            <tr>
                                <th>Extension</th>
                                <th>Description</th>
                                <th>Prix enregistrement</th>
                                <th>Prix renouvellement</th>
                                <th>Prix transfert</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($domaines != null){ 
                                foreach($domaines as $domaine) {?>
                                    <tr>
                                        <td><?php echo $domaine->extension; ?><span class="hot label label-danger">Hot</span></td>
                                        <td><?php echo $domaine->description; ?><span class="old-price">$20</span></td>
                                        <td><?php echo $domaine->prix; ?> FCFA</td>
                                        <td><?php echo $domaine->prix_renouv; ?> FCFA</td>
                                        <td><?php echo $domaine->prix_xfer; ?> FCFA</td>
                                    </tr>
                                <?php }} ?>
                            <tr>
                                <td>.co</td>
                                <td>$11</td>
                                <td>$11</td>
                                <td>$9</td>
                                <td>2 years</td>
                            </tr>
                            <tr>
                                <td>.net</td>
                                <td>$12 <span class="old-price">$20</span></td>
                                <td>$12</td>
                                <td>$10</td>
                                <td>2 years</td>
                            </tr>
                            <tr>
                                <td>.in</td>
                                <td>$10</td>
                                <td>$10</td>
                                <td>$8</td>
                                <td>1 year</td>
                            </tr>
                            <tr>
                                <td>.asia <span class="newoffer label label-success">New</span></td>
                                <td>$18</td>
                                <td>$18</td>
                                <td>$16</td>
                                <td>2 years</td>
                            </tr>
                            <tr>
                                <td>.org <span class="newoffer label label-success">New</span></td>
                                <td>$12</td>
                                <td>$12</td>
                                <td>$10</td>
                                <td>1 year</td>
                            </tr>
                            <tr>
                                <td>.shop <span class="premium label label-warning">Premium</span></td>
                                <td>$22</td>
                                <td>$22</td>
                                <td>$20</td>
                                <td>2 years</td>
                            </tr>
                            <tr>
                                <td>.info</td>
                                <td>$22 <span class="old-price">$30</span></td>
                                <td>$22</td>
                                <td>$20</td>
                                <td>2 years</td>
                            </tr>
                            <tr>
                                <td>.club </td>
                                <td>$20</td>
                                <td>$20</td>
                                <td>$16</td>
                                <td>2 years</td>
                            </tr>
                            <tr>
                                <td>.biz</td>
                                <td>$22</td>
                                <td>$22</td>
                                <td>$20</td>
                                <td>2 years</td>
                            </tr>
                            <tr>
                                <td>.us</td>
                                <td>$13</td>
                                <td>$13</td>
                                <td>$11</td>
                                <td>1 year</td>
                            </tr>
                            <tr>
                                <td>.edu</td>
                                <td>$10</td>
                                <td>$10</td>
                                <td>$8</td>
                                <td>1 year</td>
                            </tr>
                            <tr>
                                <td>.guru</td>
                                <td>$24</td>
                                <td>$24</td>
                                <td>$20</td>
                                <td>1 year</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="col-lg-4 center-block spacing-20 text-center">
        <a href="multi-year-pricing.html" class="btn waves-effect waves-light btn-info btn-lg margin-top-40"> Check Various Domain Pricing</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Domains -->

	<!-- Features -->
    <div class=" bg_gray section_space">
    	<div class="domainfeatures">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title"> Choose a localized / global domain that fits your business the best</h2>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry. </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 margin-top-40">
                    <div class="domainchoose">
                    <h3 class="title choosedomain">Most Popular</h3>
                        <h6>.com</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                        <a href="#" class="btn waves-effect waves-light btn-success">Check Domain</a>
                    </div>
                    <div class="domainchoose">
                        <h6>.com</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                        <a href="#" class="btn waves-effect waves-light btn-success">Check Domain</a>
                    </div>
                    <div class="domainchoose">
                        <h6>.com</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                        <a href="#" class="btn waves-effect waves-light btn-success">Check Domain</a>
                    </div>
                </div>

                <div class="col-sm-4 margin-top-40">
                    <div class="domainchoose">
                    <h3 class="title choosedomain">Domain Deals</h3>
                    <h6>.xyz</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                    <a href="#" class="btn waves-effect waves-light btn-success">Check Domain</a>
                    </div>
                    <div class="domainchoose">
                    <h6>.xyz</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                    <a href="#" class="btn waves-effect waves-light btn-success">Check Domain</a>
                    </div>
                    <div class="domainchoose">
                    <h6>.xyz</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                    <a href="#" class="btn waves-effect waves-light btn-success">Check Domain</a>
                    </div>
                </div>

                <div class="col-sm-4 margin-top-40">
                    <div class="domainchoose">
                    <h3 class="title choosedomain">Individual Names</h3>
                    <h6>.mobi</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                    <a href="#" class="btn waves-effect waves-light btn-success">Check Domain</a>
                    </div>
                     <div class="domainchoose">
                    <h6>.mobi</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                    <a href="#" class="btn waves-effect waves-light btn-success">Check Domain</a>
                    </div>
                     <div class="domainchoose">
                    <h6>.mobi</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                    <a href="#" class="btn waves-effect waves-light btn-success">Check Domain</a>
                    </div>
                </div>
                </div>
        </div>
    </div>
    <!-- End of Features -->


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