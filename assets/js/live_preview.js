var wpcomment = document.getElementById('WPComment');

wpcomment.onkeyup = wpcomment.onkeypress = function(){
    document.getElementById('prevCom').innerHTML = this.value;
}