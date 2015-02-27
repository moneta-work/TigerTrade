<div class="container padding-top-20">

	<div class="row">
		<div class="col-xs-3 col-sm-2 text-center">
			<div class="back-button"><button class="btn btn-default" onclick="goBack()">Back</button></div>
		</div>
		<div class="col-xs-9 col-sm-10">
			<h1>New Subcategory</h1>
		</div>
	</div>
	
	<hr>
	
	<p>Form for new subcategories.</p>
	
	<?php echo form_open("market/new_subcategory", array('class' => 'form-horizontal', 'id' => 'ad-form'));?>	
		
		<div class="form-group">
			<label for="list" class="col-sm-2 control-label label-20">Categories</label>
			<div class="col-sm-10">
				<select class="form-control" id="list" >
				<?php 
					foreach($categories->result() as $category):
					echo "<option>" . $category->name . "</option>";
					endforeach; 
				?>
				</select>
			</div>
		</div>
		
		
		<hr>
		
		<div class="form-group">
			<label for="subcategory_name" class="col-sm-2 control-label label-20">Subcategory Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="subcategory_name" id="subcategory_name" placeholder="">
			</div>
		</div>
		
		<div class="form-group">
			<label for="subcategory_description" class="col-sm-2 control-label label-20">Description</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="subcategory_description" id="subcategory_description" placeholder="">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Add</button>
			</div>
		</div>

	<?php echo form_close();?>

</div>