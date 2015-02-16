<!-- OLD CREATE GROUP FORM -->

<!--
<h1><?php echo lang('create_group_heading');?></h1>
<p><?php echo lang('create_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_group");?>

      <p>
            <?php echo lang('create_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo lang('create_group_desc_label', 'description');?> <br />
            <?php echo form_input($description);?>
      </p>

      <p><?php echo form_submit('submit', lang('create_group_submit_btn'));?></p>

<?php echo form_close();?>
-->

<div class="container">
      <div class="row">
            <div class="col-xs-2 col-md-1">
                <div class="back-button"><button class="btn btn-default" onclick="goBack()">Back</button></div>
            </div>
            <div class="col-xs-10 col-md-11">
                <h1 class="">Create Group</h1>
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
                  <label for="group_name" class="col-sm-4 control-label label-20">Group Name</label>
                  <div class="col-sm-4">
                        <?php
	                         $data = array(
					          'name'        => 'group_name',
					          'id'          => 'group_name',
					          'class'       => 'form-control'
					        );
	                        echo form_input($data);
	                    ?>
                  </div>
            </div>
            <div class="form-group">
                  <label for="description" class="col-sm-4 control-label label-20">Description</label>
                  <div class="col-sm-4">
                        <?php
	                         $data = array(
					          'name'        => 'description',
					          'id'          => 'description',
					          'class'       => 'form-control'
					        );
	                        echo form_input($data);
	                    ?>
                  </div>
            </div>

      <?php echo form_close();?>
</div>