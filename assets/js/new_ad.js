$(document).ready(function () {
	alert("ready!");
	
	$('#categorySelectForm').change(function () {
	  	var value = $(this).val();
	    
	    if(value != "")
	    {
	    	$.ajax({
                        url: "<?php echo base_url('ad');?>/get_subcategories/"+value,
                        type: 'post',
                        dataType: 'json',
                     success: function (data) {
                            if (data != null) {
                            	console.log("Success");
                                console.log(data);
                            }
                        }
                    });

	    }
	    
		
	});	


});
