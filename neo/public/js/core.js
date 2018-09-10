document.addEventListener("touchstart", function(){}, true); /*SAFARI TOUCH FIX (srw)*/
document.addEventListener("touchend", function(){}, true); /*SAFARI TOUCH FIX (srw)*/
document.addEventListener('DOMContentLoaded', function () {
    //var pathname = window.location.pathname;
    footerDown();
    circleItems();
    galHeight();
});
$(document).ready(function () {
    $('.mbtn').magnificPopup({
        type: 'inline'
    });
    $('.ibtn').magnificPopup({
        type: 'image'
    });
    $('.phone').inputmask('+7(999)999-99-99', { showMaskOnHover: false });

    var mgal = $('.m-gallery__carousel');
    mgal.owlCarousel({
        items: 1,
        margin: 0,
        nav: false,
        autowidth: true,
        autoplay: true,
    });
    mgal.show().addClass('active');
    var mabout = $('.m-about__carousel');
    mabout.owlCarousel({
        items: 1,
        margin: 0,
        nav: false,
        autowidth: true,
        autoplay: true,
    });

    $('.m-gallery__images-collection').lightGallery();

    $('.m-gallery__carousel-item, .m_page__images a, .m-about__carousel-item').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});
$(document).on('click', '.toggle', function(){
    $(this).next().slideToggle(200).toggleClass('active');
});
function footerDown(){
    var headerh = document.querySelector('header').offsetHeight;
    var footerh = document.querySelector('footer').offsetHeight;
    var windowh = window.innerHeight;
    document.querySelector('main').style.minHeight = (windowh - (headerh + footerh)) + 'px';
}
function circleItems(){
    // ДАДА здесь можно сказать костыли, но времени не было исправлять
    var bcircle = document.querySelector('.m-work__circle');
    var scircle = document.querySelector('.m-work__circle .circle');
    var scircleover = document.querySelector('.m-work__circle .circle__over');
    var bcirclew = bcircle.offsetWidth;
    var scirclew;
    bcircle.style.height = bcirclew + 'px';
    bcircle.style.borderWidth = bcirclew/8 + 'px';
    scircle.style.width =  bcirclew - (bcirclew / 9) + 'px';
    scircle.style.height = scircle.style.width;
    scirclew = scircle.offsetWidth;
    scircle.style.left = '-' + (bcirclew/16+5) + 'px';
    scircle.style.top = '-' + (bcirclew/16) + 'px';

    scircleover.style.borderWidth = scirclew/2 + 'px';
    scircleover.style.left = '-' + scirclew/3.5 + 'px';

    var num = document.querySelectorAll('.circle__wrap > span');
    var numl = num.length;
    var wrap = scirclew/2;

    for (var i = 0; i < numl; i++) {
        // var f = 2*Math.PI*i*0.52;
        // var f = Math.PI * 2 * i / 10;
        var f = 0.68 * i;
        var left = wrap * Math.cos(f);
        var top = wrap * Math.sin(f);
        var numw = num[i].offsetWidth/2;
        var numh = num[i].offsetHeight/2;
        num[i].style.top = wrap + top - numh + 'px';
        num[i].style.left = wrap + left - numw + 'px';
    }

}
function galHeight() {
    var gitems = document.querySelectorAll('.m-gallery__item-image');
    if (gitems) {
        [].forEach.call(gitems, function(el){
            var gw = el.offsetWidth;
            var gh = 0.7*gw;
            el.style.height = gh + 'px';
            el.onclick = function(){
                this.children[0].children[0].click();
            }
        });
    }
}