$('input[name=decision]').click(function () {
    if (this.id == "accept-offer") {
        $("#offer-warning").show('slow');
        $("#offer-warning").css('display', 'inline')
    } else {
	    $("#offer-warning").css('display', 'inline')
        $("#offer-warning").hide('slow');
    }
});	