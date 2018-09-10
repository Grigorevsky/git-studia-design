// $(document).ready(function () {
//     $('.breadcrumbs > :last-child > .breadcrumbs__item').removeAttr('href').addClass('disabled');
//     $(document).on('click', '.breadcrumbs > :last-child > .breadcrumbs__item', function (e) {
//         e.preventDefault();
//     });
// });
document.addEventListener('DOMContentLoaded', function () {
    var b = document.querySelector('.breadcrumbs > :last-child > .breadcrumbs__item');
    if (b) {
        b.removeAttribute('href');
        b.classList.add('disabled');
        b.onclick = function(){
            event.preventDefault();
        }
    }
});