$(document).ready(function (){
	$('#categorySelectForm').change(function(){
	    var category_id = $(this).val();
	    if (category_id != ""){
	        var post_url = "<?php echo base_url('ajax') ?>/get_subcategories/" + category_id;
	        $.ajax({
	            type: "POST",
	            url: post_url,
	            success: function(subCategories) //we're calling the response json array 'cities'
	            {
	                $('#subCategory').empty();
	                subCategories = $.parseJSON(subCategories);
                   	$.each(subCategories,function(id,name) 
                   	{	
                    	var opt = $('<option />'); // here we're creating a new select option for each group
                      	opt.val(id);
                      	opt.text(name);
                      	$('#subCategory').append(opt); 	
	                });
	                console.log(subCategories);
	        		
	            } //end success
	         }); //end AJAX
	    } else {
	        $('#subCategoryForm').hide();
	    }//end if
	}); //end change 
});