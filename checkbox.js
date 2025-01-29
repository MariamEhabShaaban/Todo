const checkboxs=document.querySelectorAll('input[type=checkbox]');
change=ch=>{
ch.onclick=function(){
    this.parentNode.submit();
}
};
checkboxs.forEach(change);
