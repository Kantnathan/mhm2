  <section class="login bg_dark section_space">
        <div class="row">
            <div class="col-sm-12">
                <div class="login-form-panel">
                    <div class="row">
                        <div class="col-sm-8 center-block">
                            <div id="infoMessage"><?php echo $message;?></div>
                            <div class="login-form">
                                <h2 class="title text-center"><?php echo lang('edit_user_heading');?></h2>
                                <div id="infoMessage"><?php echo $message;?></div>
                               <?php echo form_open(uri_string());?>
                                    <div class="col-sm-6">
                                        <label class="control-label"><?php echo lang('create_user_email_label');?></label><?php echo form_input($email);?>
                                    <?php echo lang('edit_user_fname_label', 'first_name');?> <br />
                                    <?php echo form_input($first_name);?>
                                     <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
                                    <?php echo form_input($last_name);?>
                                    <?php echo lang('edit_user_company_label', 'company');?> 
                                    <?php echo form_input($company);?>
                                   
                                    <?php echo lang('edit_user_password_label', 'password');?> 
                                    <?php echo form_input($password);?>
                                    <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
                                   <?php echo form_input($password_confirm);?>
                                    <label class="control-label"><?php echo lang('create_user_adresse_label');?></label>
                                    <input type="text" name="address" size="50" placeholder="<?php echo lang('create_user_placeholder_label');?> <?php echo lang('create_user_adresse_label');?>" />
                                    
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="control-label"><?php echo lang('create_user_city_label');?></label>
                                   <?php echo form_input($city);?>
                                        <label class="control-label"><?php echo lang('create_user_country_label');?></label><select id="countries_phone1" class="form-control bfh-countries " data-country="CM" data-flags="true" name="country"></select>

                                       <?php echo lang('edit_user_phone_label', 'phone');?> 
                                    <?php echo form_input($phone);?>
                                   <?php echo "<p style=\"color: red;\">"; echo form_error('phone'); echo "</p>"; ?>
                                    <label class="control-label"><?php echo lang('create_user_state_label');?></label>
                                    <select class="form-control bfh-states" data-country="countries_phone1" name="state" id="state"></select>
                                    <label class="control-label"><?php echo lang('create_user_postcode_label');?></label>
                                <?php echo form_input($postcode);?>
                                                        <?php if ($this->ion_auth->is_admin()): ?>

                                  <h3><?php echo lang('edit_user_groups_heading');?></h3>
                                  <?php foreach ($groups as $group):?>
                                      <label class="checkbox">
                                      <?php
                                          $gID=$group['id'];
                                          $checked = null;
                                          $item = null;
                                          foreach($currentGroups as $grp) {
                                              if ($gID == $grp->id) {
                                                  $checked= ' checked="checked"';
                                              break;
                                              }
                                          }
                                      ?>
                                      <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                                      <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                                      </label>
                                  <?php endforeach?>

                              <?php endif ?>

                              <?php echo form_hidden('id', $user->id);?>
                              <?php echo form_hidden($csrf); ?>
                                    <p class="btn waves-effect waves-light btn-default btn-block"><a href="#"><?php echo lang('forgot_password_heading');?></a></p>
                                    <input type="submit"  class="btn waves-effect waves-light btn-success btn-block" value="<?php echo lang('edit_user_submit_btn');?>" />
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
    