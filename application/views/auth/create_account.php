  <section class="login bg_dark section_space">
        <div class="row">
            <div class="col-sm-12">
                <div class="login-form-panel">
                    <div class="row">
                        <div class="col-sm-8 center-block">
                            <div id="infoMessage"><?php //echo $message;?></div>
                            <div class="login-form">
                                <h2 class="title text-center"><?php echo lang('create_user_heading');?></h2>
                               <?php echo form_open("auth/insert");?>
                                    <div class="col-sm-6">
                                        <label class="control-label"><?php echo lang('create_user_email_label');?></label>
                                    <input type="text" name="email" size="50" placeholder="<?php echo lang('create_user_placeholder_label');?> <?php echo lang('create_user_email_label');?>" />
                                    <label class="control-label"><?php echo lang('create_user_fname_label');?></label>
                                    <?php echo form_error('email'); ?>
                                    <input type="text" name="first_name" size="50" placeholder="<?php echo lang('create_user_placeholder_label');?> <?php echo lang('create_user_fname_label');?>" />
                                   <?php echo "<p style=\"color: red;\">"; echo form_error('first_name'); echo "</p>"; ?>
                                    <label class="control-label"><?php echo lang('create_user_lname_label');?></label>
                                    <input type="text" name="last_name" size="50" placeholder="<?php echo lang('create_user_placeholder_label');?> <?php echo lang('create_user_lname_label');?>" />
                                   <?php echo "<p style=\"color: red;\">"; echo form_error('last_name'); echo "</p>"; ?>
                                    <label class="control-label"><?php echo lang('create_user_password_label');?></label>
                                    <input type="password" name="password" size="50" placeholder="<?php echo lang('create_user_placeholder_label');?> <?php echo lang('create_user_password_label');?>" />
                                    <?php echo "<p style=\"color: red;\">"; echo form_error('password'); echo "</p>"; ?>
                                    <label class="control-label"><?php echo lang('create_user_password_confirm_label');?></label>
                                    <input type="password" name="confirm_password" size="50" placeholder="<?php echo lang('create_user_password_confirm_label');?>" />
                                    <?php echo "<p style=\"color: red;\">"; echo form_error('confirm_password'); echo "</p>"; ?>
                                    <label class="control-label"><?php echo lang('create_user_adresse_label');?></label>
                                    <input type="text" name="address" size="50" placeholder="<?php echo lang('create_user_placeholder_label');?> <?php echo lang('create_user_adresse_label');?>" />
                                    
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="control-label"><?php echo lang('create_user_city_label');?></label>
                                    <input type="text" name="city" size="50" placeholder="<?php echo lang('create_user_placeholder_label');?> <?php echo lang('create_user_city_label');?>" />
                                   <?php echo "<p style=\"color: red;\">"; echo form_error('city'); echo "</p>"; ?>
                                        <label class="control-label"><?php echo lang('create_user_country_label');?></label><select id="countries_phone1" class="form-control bfh-countries " data-country="CM" data-flags="true" name="country"></select>

                                      <label class="control-label"><?php echo lang('create_user_phone_label');?></label>
                                    <input type="text" class="bfh-phone" data-country="countries_phone1" name="phone">
                                   <?php echo "<p style=\"color: red;\">"; echo form_error('phone'); echo "</p>"; ?>
                                    <label class="control-label"><?php echo lang('create_user_state_label');?></label>
                                    <select class="form-control bfh-states" data-country="countries_phone1" name="state"></select>
                                    <label class="control-label"><?php echo lang('create_user_postcode_label');?></label>
                                    <input type="text" name="postcode" size="20" placeholder="<?php echo lang('create_user_placeholder_label');?> <?php echo lang('create_user_postcode_label');?>" />
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
    