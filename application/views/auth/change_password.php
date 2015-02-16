<!-- OLD CHANGE PASSWORD FORM -->

<!--
<h1><?php echo lang('change_password_heading');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/change_password");?>

      <p>
            <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
            <?php echo form_input($old_password);?>
      </p>

      <p>
            <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
            <?php echo form_input($new_password);?>
      </p>

      <p>
            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
            <?php echo form_input($new_password_confirm);?>
      </p>

      <?php echo form_input($user_id);?>
      <p><?php echo form_submit('submit', lang('change_password_submit_btn'));?></p>

<?php echo form_close();?>
-->

<div class="container">
      <div class="row">
            <div class="col-xs-2 col-md-1">
                  <div class="back-button"><button class="btn btn-default" onclick="goBack()">Back</button></div>
            </div>
            <div class="col-xs-10 col-md-11">
                  <h1 class="">Change Password</h1>
            </div>
      </div>
      <hr>
      <?php if ($message != "") { ?>
      <div id="infoMessage">
		<div class="alert alert-info" role="alert" style="margin-top: 10px;">
		  <span class="sr-only">Error:</span>
		  <?php echo $message;?>
		</div>
	  </div>
	  <?php }; ?>
      

      <?php echo form_open("auth/login", array('class' => 'form-horizontal', 'id' => 'ad-form'));?>
            <div class="form-group">
                  <label for="old_password" class="col-sm-4 control-label label-20">Old Password</label>
                  <div class="col-sm-4">
                        <?php
	                         $data = array(
					          'name'        => 'old_password',
					          'id'          => 'old_password',
					          'class'       => 'form-control'
					        );
	                        echo form_password($data);
	                    ?>
                  </div>
            </div>
            <div class="form-group" style="margin-bottom: 0px;">
                  <label for="new_password" class="col-sm-4 control-label label-20">New Password</label>
                  <div class="col-sm-4">
	                    <?php
	                         $data = array(
					          'name'        => 'new_password',
					          'id'          => 'new_password',
					          'class'       => 'form-control'
					        );
	                        echo form_password($data);
	                    ?>
                  </div> 
            </div>
            <div class="form-group" style="margin-bottom: 0px;">
                  <label for="new_password_confirm" class="col-sm-4 control-label label-20">Confirm New Password</label>
                  <div class="col-sm-4">
	                    <?php
	                         $data = array(
					          'name'        => 'new_password_confirm',
					          'id'          => 'new_password_confirm',
					          'class'       => 'form-control'
					        );
	                        echo form_password($data);
	                    ?>
                  </div> 
            </div>

      <?php echo form_close();?>
</div>