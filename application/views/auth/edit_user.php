<!-- OLD EDIT USER FORM-->
<?php /*

<h1><?php echo lang('edit_user_heading');?></h1>
<p><?php echo lang('edit_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(uri_string());?>

      <p>
            <?php echo lang('edit_user_fname_label', 'first_name');?> <br />
            <?php echo form_input($first_name);?>
      </p>

      <p>
            <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
            <?php echo form_input($last_name);?>
      </p>

      <p>
            <?php echo lang('edit_user_company_label', 'company');?> <br />
            <?php echo form_input($company);?>
      </p>

      <p>
            <?php echo lang('edit_user_phone_label', 'phone');?> <br />
            <?php echo form_input($phone);?>
      </p>

      <p>
            <?php echo lang('edit_user_password_label', 'password');?> <br />
            <?php echo form_input($password);?>
      </p>

      <p>
            <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
            <?php echo form_input($password_confirm);?>
      </p>

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

      <p><?php echo form_submit('submit', lang('edit_user_submit_btn'));?></p>

<?php echo form_close();?>

*/ ?>


<div class="container">
      <div class="row">
            <div class="col-xs-2 col-md-1">
                  <div class="back-button"><button class="btn btn-default" onclick="goBack()">Back</button></div>
            </div>
            <div class="col-xs-10 col-md-11">
                  <h1 class="">Edit User Form</h1>
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
      

      <?php echo form_open(uri_string(), array('class' => 'form-horizontal', 'id' => 'ad-form'));?>
            <div class="form-group">
                  <label for="first_name" class="col-sm-4 control-label label-20">First Name</label>
                  <div class="col-sm-4">
                        <?php
	                         $data = array(
					          'name'        => 'first_name',
					          'id'          => 'first_name',
					          'class'       => 'form-control',
							  'value'       => $first_name,
					        );
	                        echo form_input($data);
	                    ?>
                  </div>
            </div>
            <div class="form-group">
                  <label for="last_name" class="col-sm-4 control-label label-20">Last Name</label>
                  <div class="col-sm-4">
	                    <?php
	                         $data = array(
					          'name'        => 'last_name',
					          'id'          => 'last_name',
					          'class'       => 'form-control'
					        );
	                        echo form_input($data);
	                    ?>
                  </div>
            </div>
            <div class="form-group">
                  <label for="email" class="col-sm-4 control-label label-20">Email</label>
                  <div class="col-sm-4">
                        <?php
	                         $data = array(
					          'name'        => 'email',
					          'id'          => 'email',
					          'class'       => 'form-control'
					        );
	                        echo form_input($data);
	                    ?>
                  </div>
            </div>
            <div class="form-group">
                  <label for="phone" class="col-sm-4 control-label label-20">Phone</label>
                  <div class="col-sm-4">
                        <?php
	                         $data = array(
					          'name'        => 'phone',
					          'id'          => 'phone',
					          'class'       => 'form-control'
					        );
	                        echo form_input($data);
	                    ?>
                  </div>
            </div>
            <div class="form-group">
                  <label for="password" class="col-sm-4 control-label label-20">Password</label>
                  <div class="col-sm-4">
                        <?php
	                         $data = array(
					          'name'        => 'password',
					          'id'          => 'password',
					          'class'       => 'form-control'
					        );
	                        echo form_password($data);
	                    ?>
                  </div>
            </div>
            <div class="form-group">
                  <label for="password_confirm" class="col-sm-4 control-label label-20">Confirm Password</label>
                  <div class="col-sm-4">
                        <?php
	                         $data = array(
					          'name'        => 'password_confirm',
					          'id'          => 'password_confirm',
					          'class'       => 'form-control'
					        );
	                        echo form_password($data);
	                    ?>
                  </div>
            </div>
            <div class="form-group">
                  <div class="col-sm-offset-4 col-sm-4">
                        <button type="submit" class="btn btn-default">Save</button>
                  </div>
            </div>
      <?php echo form_close();?>
      
</div>
