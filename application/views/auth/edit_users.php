<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Modifiez vos informations
        <small>Mboahost</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Profil</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Modifier</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php lang('edit_user_heading');?></h3>
              <h3 class="box-title" id="infoMessage" style="float: right;"><?php echo $message;?></h3>
            </div>
                     <div class="box-body">

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
                                    <div class="form-group">
                                    <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
                                   <?php echo form_input($password_confirm);?>
                               </div>
                                   <div class="form-group">
                                    <?php echo lang('edit_user_address_label', 'address');?> 
                                    <?php echo form_input($address);?>
                                </div>
                                   <div class="form-group">
                                         <p class="btn waves-effect waves-light btn-default btn-block"><a href="#"><?php echo lang('forgot_password_heading');?></a></p>
                                    </div>
                                    
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
                                   
                                    <input type="submit"  class="btn waves-effect waves-light btn-success btn-block" value="<?php echo lang('edit_user_submit_btn');?>" />
                                    </div>
                
                                    <?php echo form_close();?>
          </div>
          <!-- /.box -->


        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>