document.addEventListener('DOMContentLoaded', function () {
    'use strict';
    var dots = document.getElementsByClassName("slider-container__current-dot"),
        slides = document.getElementsByClassName("slider-container__item"),
        boxes = document.getElementsByClassName("reviews-item__text"),
        openBtns = document.getElementsByClassName("reviews-item__openbtn"),
        clones = [],
        texts = [],
        i,
        l;
/*=============================== Main slider ===============================*/
    //Выводим на экран зайдействованный слайд и перекрашиваем пагинацию
    function showSlides(effectiveValue) {
        for (i = 0; i < slides.length; i += 1) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i += 1) {
            dots[i].className = dots[i].className.replace("active", "");
        }
        slides[effectiveValue - 1].style.display = "block";
        dots[effectiveValue - 1].className += "active";
    }
    //Функция-конструктор для слайдера:
    function Slider() {
        var value = 0;
        
        this.check = function (variable) {
            if (value > slides.length) {
                value = 1;
            }
            if (value < 1) {
                value = slides.length;
            }
            showSlides(this.getValue());
        };
        
        this.next = function () {
            this.check(value += 1);
        };
        
        this.prev = function () {
            this.check(value -= 1);
        };
        
        this.getValue = function () {
            return value;
        };
    }
    var slider = new Slider();
    //Вводим параметры управления: кнопки и пагинацию
    document.getElementById("next").onclick = function () {
        slider.next();
    };
    document.getElementById("prev").onclick =  function () {
        slider.prev();
    };
    for (i = 0; i < dots.length; i += 1) {
        dots[i].dotNumber = i + 1;
        dots[i].onclick = function () {
            showSlides(this.dotNumber);
        };
    }
    //Запускаем слайдер на автоповтор при старте страницы
    function repeat() {
        setTimeout(slider.next(), 3000);
        setTimeout(repeat, 3000);
    }
    repeat();
/*===========================================================================*/
/*============================= Сollapsed text ==============================*/
    //Функция разворота текста посредство увеличения высоты блока
    function openText() {
        this.previousElementSibling.innerHTML = this.previousElementSibling.txt;
        this.previousElementSibling.style.height = "auto";
        this.style.display = "none";
    }
    //Ставим троеточие, если текст больше области ввода, и убираем кнопку если меньше.
    for (i = 0; i < boxes.length; i = i + 1) {
        //Сохраняем исходный текст
        boxes[i].txt = boxes[i].innerHTML;
        //Делаем дубликаты статей для редактирования
        clones[i] = document.createElement('div');
        clones[i].style.position = 'absolute';
        clones[i].style.visibility = 'hidden';
        clones[i].style.width = boxes[i].clientWidth + 'px';
        clones[i].innerHTML = boxes[i].txt;
        document.body.appendChild(clones[i]);
        
        //Обрезаем по необходимой высоте видимого текста и добавляем троеточие
        for (l = boxes[i].txt.length - 1; l >= 0 && clones[i].clientHeight > boxes[i].clientHeight - 1; l -= 1) {
            clones[i].innerHTML = boxes[i].txt.substring(0, l) + '...';
        }
        //Вставляем текст в текущий блок
        boxes[i].innerHTML = clones[i].innerHTML;
        //Убираем кнопку открытия полного текста, там где она не нужна
        if (clones[i].innerHTML.slice(-3) !== '...') {
            openBtns[i].style.display = "none";
        }
        //Присваиваем каждой кнопке функцию открытия полного текста
        openBtns[i].onclick = openText;
    }
/*===========================================================================*/
});

document.addEventListener('DOMContentLoaded', function () {
    'use strict';
    var pagLinks = document.getElementsByClassName("catalog-pagination__link"),
        activePagLink = document.getElementsByClassName("catalog-pagination__link-active")[0].innerHTML,
        i;
    //Обрезаем лишние кнопочки, содержание 2 и/или 12 меняем на троеточие
    function shortPagination(activePagLink) {
        if (activePagLink <= 4) {
            pagLinks[pagLinks.length - 2].innerHTML = '...';
            for (i = 5; i < pagLinks.length - 2; i = i + 1) {
                pagLinks[i].style.display = "none";
            }
        } else if (activePagLink >= pagLinks.length - 3) {
            pagLinks[1].innerHTML = '...';
            for (i = 2; i < pagLinks.length - 5; i = i + 1) {
                pagLinks[i].style.display = "none";
            }
        } else {
            pagLinks[1].innerHTML = '...';
            pagLinks[pagLinks.length - 2].innerHTML = '...';
            for (i = 2; i < pagLinks.length - 2; i = i + 1) {
                pagLinks[i].style.display = "none";
            }
            for (i = activePagLink - 2; i <= activePagLink; i = i + 1) {
                pagLinks[i].style.display = "block";
            }
        }
    }
    //Изменяем бэкграунд у активной ссылки
    function activeLink() {
        for (i = 0; i < pagLinks.length; i = i + 1) {
            pagLinks[i].style.display = "block";
            pagLinks[i].innerHTML = pagLinks[i].value;
            pagLinks[i].classList.remove("catalog-pagination__link-active");
        }
        this.classList.add("catalog-pagination__link-active");
        activePagLink = this.innerHTML;
        shortPagination(activePagLink);
    }
    //Присваиваем функцию кликабельности пунктам списка
    for (i = 0; i < pagLinks.length; i = i + 1) {
        pagLinks[i].value = pagLinks[i].innerHTML;
        pagLinks[i].onclick = activeLink;
    }
    
    shortPagination(activePagLink);
});

//switch (window.location.pathname) {
//case "/index.html":
//    index();
//    break;
//case "/catalog.html":
//    catalog();
//    break;
//default:
//    index();
//}