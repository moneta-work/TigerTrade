<!-- OLD FORGOT PASSWORD FORM -->

<!--	
<h1><?php echo lang('forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/forgot_password");?>

      <p>
      	<label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label> <br />
      	<?php echo form_input($email);?>
      </p>

      <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'));?></p>

<?php echo form_close();?>
-->

<div class="container">
      <div class="row">
            <div class="col-xs-2 col-md-1">
                <div class="back-button"><button class="btn btn-default" onclick="goBack()">Back</button></div>
            </div>
            <div class="col-xs-10 col-md-11">
                <h1 class="">Forgot Password</h1>
            </div>
			<div class="col-xs-offset-2 col-xs-10">
			    <p>Enter your the email address you used to sign up.</p>
                <p>We will send you an email about resetting your password.</p>
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
                  <label for="identity" class="col-sm-4 control-label label-20">Email</label>
                  <div class="col-sm-4">
                        <?php
	                         $data = array(
					          'name'        => 'identity',
					          'id'          => 'identity',
					          'class'       => 'form-control'
					        );
	                        echo form_input($data);
	                    ?>
                  </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-4">
	                <div class="checkbox">
					    <label style="padding-top: 7px;">
                        <?php
	                         $data = array(
					          'name'        => 'remember',
					          'id'          => 'remember',
					          'class'       => ''
					        );
	                        echo form_checkbox($data);
	                    ?>Remember me
					    </label>
					    <button type="submit" style="float: right;" class="btn btn-default">Login</button>
	                </div>
	                
                </div>
            </div>

      <?php echo form_close();?>
</div>