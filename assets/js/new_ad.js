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
                        	console.log("Success");
                            console.log(data);
                        }
                        failure: function (data){
                        	console.log("failure")
                        }
                    });

	    }
	    
		
	});	


});
