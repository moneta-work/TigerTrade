<div class="container">
      <div id="infoMessage">
		<div class="alert alert-danger" role="alert" style="margin-bottom: 0px; margin-top: 5px;">
		  <span class="sr-only">Error:</span>
		  <?php echo $message;?>
		</div>
	  </div>
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
                  <label for="first_name" class="col-sm-2 control-label label-20">First Name</label>
                  <div class="col-sm-10">
                        <?php
	                         $data = array(
					          'name'        => 'first_name',
					          'id'          => 'first_name',
					          'class'       => 'form-control'
					        );
	                        echo form_input($data);
	                    ?>
                  </div>
            </div>
            <div class="form-group">
                  <label for="last_name" class="col-sm-2 control-label label-20">Last Name</label>
                  <div class="col-sm-10">
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
                  <label for="email" class="col-sm-2 control-label label-20">Email</label>
                  <div class="col-sm-10">
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
                  <label for="phone" class="col-sm-2 control-label label-20">Phone</label>
                  <div class="col-sm-10">
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
                  <label for="password" class="col-sm-2 control-label label-20">Password</label>
                  <div class="col-sm-10">
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
                  <label for="password_confirm" class="col-sm-2 control-label label-20">Confirm Password</label>
                  <div class="col-sm-10">
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
                  <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Create User</button>
                  </div>
            </div>
      <?php echo form_close();?>
      
</div>
