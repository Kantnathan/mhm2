  <section class="login bg_dark section_space">
        <div class="row">
            <div class="col-sm-12">
                <div class="login-form-panel">
                    <div class="row">
                        <div class="col-sm-5 center-block">
                            <div class="login-form">                            
                                <?php if(null != $this->session->flashdata('message') || null != validation_errors()) { ?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?php echo $this->session->flashdata('message'); ?>
                                    <?php echo validation_errors(); ?>
                                </div>
                                <?php } ?>
                                <?php if(null != $this->session->flashdata('success-message')) { ?>
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?php echo $this->session->flashdata('success-message'); ?>
                                </div>
                                <?php } ?>
                                <h2 class="title text-center"><?php echo lang('login_heading');?></h2>
                                <form method="post" action="<?= base_url()?>auth/login">
                                        <label class="control-label"><?php echo lang('login_identity_label');?></label>
                                    <input type="text" name="identity" size="50" placeholder="<?php echo lang('create_user_placeholder_label');?> <?php echo lang('create_user_email_label');?>" />
                                    <label class="control-label"><?php echo lang('login_password_label');?></label>
                                    <input type="password" name="password" size="50" placeholder="<?php echo lang('create_user_placeholder_label');?> <?php echo lang('create_user_fname_label');?>" />
                                    <?php echo form_error('fisrt_name'); ?>
                                    <p class="btn waves-effect waves-light btn-default btn-block"><a href="#"><?php echo lang('forgot_password_heading');?></a></p>
                                    <input type="submit"  class="btn waves-effect waves-light btn-success btn-block" value="<?php echo lang('login_submit_btn');?>" />
                                </form>
                            </div>
                            <div class="bg_gray">
                                <div class="form-footer-content">
                                    <h3>Don't have an account?</h3>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <a class="btn-link" tabindex="4" href="<?= base_url()?>auth/create_user">Create an account</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <a class="btn waves-effect waves-light btn-success btn-block" tabindex="4" href="<?= site_url('facebook_login'); ?>">Login with Facebook</a>
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