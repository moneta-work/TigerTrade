$('input[name=decision]').click(function () {
    if (this.id == "accept-offer") {
        $("#show-me").show('slow');
    } else {
        $("#show-me").hide('slow');
    }
});	