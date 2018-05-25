  <section class="login bg_dark section_space">
        <div class="row">
            <div class="col-sm-12">
                <div class="login-form-panel">
                    <div class="row">
                        <div class="col-sm-8 center-block">
                            <div id="infoMessage"><?php //echo $message;?></div>
                            <div class="login-form">
                            <?php if(null != $this->session->flashdata('message') || null!=validation_errors()) { ?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?php echo $this->session->flashdata('message'); ?>
                                    <?php echo validation_errors(); ?>
                                </div>
                                <?php } ?>
                                <h2 class="title text-center"><?php echo lang('create_user_heading');?></h2>
                               <form method="post" action="<?= base_url()?>auth/create_user/<?php echo $code_parent ;?>">
                                    <div class="col-sm-6">
                                        <?php echo $code_parent ;?>
                                    <label class="control-label"><?php echo lang('create_user_lname_label');?></label>
                                    <input type="text" value="<?php echo $this->input->post('last_name'); ?>" name="last_name" size="50" placeholder="<?php echo lang('create_user_placeholder_label');?> <?php echo lang('create_user_lname_label');?>" />

                                    <!-- recupération du code parent -->
                                    <input type="hidden" value="<?php echo $code_parent ;?>" name="code_parent"/>
                                    
                                    <label class="control-label"><?php echo lang('create_user_fname_label');?></label>
                                    <input type="text" value="<?php echo $this->input->post('first_name'); ?>" name="first_name" size="50" placeholder="<?php echo lang('create_user_placeholder_label');?> <?php echo lang('create_user_fname_label');?>" />
                                   
                                    <label class="control-label"><?php echo lang('create_user_email_label');?></label>
                                    <input type="text" value="<?php echo $this->input->post('email'); ?>" name="email" size="50" placeholder="<?php echo lang('create_user_placeholder_label');?> <?php echo lang('create_user_email_label');?>" />
                                    
                                    <label class="control-label"><?php echo lang('create_user_password_label');?></label>
                                    <input type="password" name="password" size="50" placeholder="<?php echo lang('create_user_placeholder_label');?> <?php echo lang('create_user_password_label');?>" />
                                    
                                    <label class="control-label"><?php echo lang('create_user_password_confirm_label');?></label>
                                    <input type="password" name="confirm_password" size="50" placeholder="<?php echo lang('create_user_password_confirm_label');?>" />
                                    
                                    <label class="control-label"><?php echo lang('create_user_adresse_label');?></label>
                                    <input type="text" value="<?php echo $this->input->post('address'); ?>" name="address" size="50" placeholder="<?php echo lang('create_user_placeholder_label');?> <?php echo lang('create_user_adresse_label');?>" />
                                    
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="control-label"><?php echo lang('create_user_city_label');?></label>
                                    <input type="text" value="<?php echo $this->input->post('city'); ?>" name="city" size="50" placeholder="<?php echo lang('create_user_placeholder_label');?> <?php echo lang('create_user_city_label');?>" />
                                   
                                        <label class="control-label"><?php echo lang('create_user_country_label');?></label><select id="countries_phone1" class="form-control bfh-countries " data-country="CM" data-flags="true" name="country"></select>

                                      <label class="control-label"><?php echo lang('create_user_phone_label');?></label>
                                    <input type="text" value="<?php echo $this->input->post('phone'); ?>" class="bfh-phone" data-country="countries_phone1" name="phone">
                                    <label class="control-label"><?php echo lang('create_user_state_label');?></label>
                                    <select class="form-control bfh-states" data-country="countries_phone1" name="state"></select>
                                    <label class="control-label"><?php echo lang('create_user_postcode_label');?></label>
                                    <input type="text" value="<?php echo $this->input->post('postcode'); ?>" name="postcode" size="20" placeholder="<?php echo lang('create_user_placeholder_label');?> <?php echo lang('create_user_postcode_label');?>" />
                                    <p class="btn waves-effect waves-light btn-default btn-block"><a href="#"><?php echo lang('forgot_password_heading');?></a></p>
                                    <input type="submit"  class="btn waves-effect waves-light btn-success btn-block" value="<?php echo lang('create_user_submit_btn');?>" />
                                    </div>
                                    <?php echo form_close();?>
                            </div>
                            <div class="bg_gray">
                                <div class="form-footer-content">
                                    <h3>Don't have an account?</h3>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <a class="btn-link" tabindex="4" href="#">Create an account</a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    