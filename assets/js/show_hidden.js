$('input[name=decision]').click(function () {
    if (this.id == "offer-accept") {
        $("#offer-warning").show('slow');
    } else {
        $("#offer-warning").hide('slow');
    }
});	