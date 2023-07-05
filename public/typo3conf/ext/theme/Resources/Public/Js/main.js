$(document).ready(function(){
    $('.slider').slick({
        // setting-name: setting-value
    });
});


function activate(elem) {
    var a = document.getElementsByTagName('a')
    for (i = 0; i < a.length; i++) {
        a[i].classList.remove('active');
        a[i].parentNode.classList.remove('active');
    }
    elem.classList.add('active');
    elem.parentNode.classList.add("active");
}
