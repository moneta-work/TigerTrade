<div class="col-xs-3">
	<a href="<?php echo base_url('/market/all') ?>">
	    <b>all</b>
	</a>
	<br><br>
	<?php foreach ($categories->result() as $category) { $count = 0; ?>
	    <a href="<?php echo base_url('/market/category/' . $category->category_id) ?>">
		    <b><?php echo $category->name ?></b>
		</a>
		<br>
    	<?php foreach ($subcategories->result() as $subcategory) {
    		if ($subcategory->category_id == $category->category_id) { 
	    		if ($count > 0) { ?><span class="hidden-xs"> / </span><?php }
	    		$count++;
    		?>
			    <a href="<?php echo base_url('/market/subcategory/' . $subcategory->subcategory_id) ?>">
				    <?php echo $subcategory->name ?>
				</a>
			<?php } ?>
    	<?php } ?>
    	<br><br>
	<?php } ?>
</div>