$('input[name=decision]').click(function () {
    if (this.id == "accept-offer") {
        $("#show-me").show('slow');
        $("#show-me").css('display', 'inline')
    } else {
        $("#show-me").hide('slow');
    }
});	