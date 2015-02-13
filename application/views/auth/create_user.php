<div class="container">
      <div id="infoMessage"><?php echo $message;?></div>
      <div class="row">
            <div class="col-xs-2 col-md-1">
                  <div class="back-button"><button class="btn btn-default" onclick="goBack()">Back</button></div>
            </div>
            <div class="col-xs-10 col-md-11">
                  <h1 class="">New User Form</h1>
            </div>
      </div>
      
      <hr>   
      <?php echo form_open("auth/create_user", array('class' => 'form-horizontal', 'id' => 'ad-form'));?>
            <div class="form-group">
                  <label for="title" class="col-sm-2 control-label label-20">First Name</label>
                  <div class="col-sm-10">
                        <?php echo form_input($first_name, array('class' => 'form-control'));?>
                  </div>
            </div>
            <div class="form-group">
                  <label for="price" class="col-sm-2 control-label label-20">Last Name</label>
                  <div class="col-sm-10">
                        <?php echo form_input($last_name, array('class' => 'form-control'));?>
                  </div>
            </div>
            <div class="form-group">
                  <label for="price" class="col-sm-2 control-label label-20">Email</label>
                  <div class="col-sm-10">
                        <?php echo form_input($email, array('class' => 'form-control'));?>
                  </div>
            </div>
            <div class="form-group">
                  <label for="price" class="col-sm-2 control-label label-20">Phone</label>
                  <div class="col-sm-10">
                        <?php echo form_input($phone, array('class' => 'form-control'));?>
                  </div>
            </div>
            <div class="form-group">
                  <label for="price" class="col-sm-2 control-label label-20">Password</label>
                  <div class="col-sm-10">
                        <?php echo form_password($password, array('class' => 'form-control'));?>
                  </div>
            </div>
            <div class="form-group">
                  <label for="price" class="col-sm-2 control-label label-20">Confirm Password</label>
                  <div class="col-sm-10">
                        <?php echo form_password($password_confirm, array('class' => 'form-control'));?>
                  </div>
            </div>
            <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Create User</button>
                  </div>
            </div>
      <?php echo form_close();?>
      
</div>
