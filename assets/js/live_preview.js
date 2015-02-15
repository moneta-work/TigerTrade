var ad_preview = document.getElementById('AdText');

ad_preview.onkeyup = ad_preview.onkeypress = function(){
    document.getElementById('preview').innerHTML = this.value;
}