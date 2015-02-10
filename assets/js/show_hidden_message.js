$('input[name=decision]').click(function () {
    if (this.id == "watch-me") {
        $("#show-me").show('slow');
    } else {
        $("#show-me").hide('slow');
    }
});	