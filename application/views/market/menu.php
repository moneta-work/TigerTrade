<div class="col-xs-3 col-sm-2">
	<a href="<?php echo base_url('/market') ?>"><b>all</b></a><br><br>
	<?php foreach ($categories->result() as $category) { ?>
	    <a href="<?php echo base_url('/market/category/' . $category->category_id); ?>"><b><?php echo $category->name; ?></b></a><br>
    	<?php foreach ($subcategories->result() as $subcategory) {
    		if ($subcategory->category_id == $category->category_id) { ?>
			    <a href="<?php echo base_url('/market/subcategory/' . $subcategory->subcategory_id); ?>"><?php echo $subcategory->name; ?></a><br>
			<?php } ?>
    	<?php } ?>
    	<br>
	<?php } ?>
</div>