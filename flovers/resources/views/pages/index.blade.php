@extends ('layouts.layout')
@section('content')
<section class="slider">
    <div class="container-fluid slider-container">
        <div class="container">
            <div class="slider-container__item skip">
                <div class="slider-container__item-image">
                    <img src="/img/home-slider-img-1.jpg" alt="bouquet">
                </div>
                <div class="slider-container__item-gradient"></div>
                <div class="slider-container__item-caption">Букеты в шляпных коробках от 1990</div>
                <div class="slider-container__item-text">Lorem ipsum dolor sit amet, consectetur.</div>
            </div>

            <div class="slider-container__item skip">
                <div class="slider-container__item-image">
                    <img src="/img/home-slider-img-2.jpg" alt="bouquet">
                </div>
                <div class="slider-container__item-gradient"></div>
                <div class="slider-container__item-caption">Заголовок 2</div>
                <div class="slider-container__item-text">Lorem ipsum dolor sit amet, consectetur.</div>
            </div>

            <div class="slider-container__item skip">
                <div class="slider-container__item-image">
                    <img src="/img/home-slider-img-3.jpg" alt="bouquet">
                </div>
                <div class="slider-container__item-gradient"></div>
                <div class="slider-container__item-caption">Заголовок 3</div>
                <div class="slider-container__item-text">Lorem ipsum dolor sit amet, consectetur.</div>
            </div>

            <div class="slider-container__item skip">
                <div class="slider-container__item-image">
                    <img src="/img/home-slider-img-4.jpg" alt="bouquet">
                </div>
                <div class="slider-container__item-gradient"></div>
                <div class="slider-container__item-caption"></div>
                <div class="slider-container__item-text"></div>
            </div>

            <div class="slider-container">
                <div class="slider-container__current">
                    <div class="slider-container__current-dot active"></div>
                    <div class="slider-container__current-dot active"></div>
                    <div class="slider-container__current-dot active"></div>
                    <div class="slider-container__current-dot active"></div>
                </div>
            </div>
        </div>
        <div class="slider-container__arrow slider-container__arrow-left" id="prev"><i class="fal fa-angle-left"></i></div>
        <div class="slider-container__arrow slider-container__arrow-right" id="next"><i class="fal fa-angle-right"></i></div>
    </div>
    <div class="container">
        <div class="seo-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum temporibus ad aliquid dicta ipsum pariatur optio, praesentium dolorum odio ab. Minus sunt cumque expedita aperiam libero eum, ut, eaque tenetur.
        </div>
    </div>
</section>

<section class="about">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col">
                <hr>
            </div>
            <div class="col-auto h2">О НАС</div>
            <div class="col">
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="about-item">
                    <div class="about-item__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt, illo ut, pariatur ipsam dolorem repellendus a sint veritatis minus est voluptatem harum perferendis, delectus beatae dolor fugiat recusandae consectetur.</div>
                    <div class="about-item__img"><img class="about-item__img-pic" src="/img/home_about-1.jpg" alt="sweet"></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="about-item flex-sm-column-reverse">
                    <div class="about-item__img"><img class="about-item__img-pic" src="/img/home_about-2.jpg" alt="tools"></div>
                    <div class="about-item__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae reiciendis debitis laboriosam quaerat harum quod, dicta, dolorem velit expedita voluptatibus deserunt atque eius consequuntur culpa dignissimos, enim cupiditate molestiae dolorum.</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="about-item">
                    <div class="about-item__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed animi, dolores ducimus esse ab nostrum magnam deleniti quidem voluptatibus eum iste doloribus laboriosam rerum, magni assumenda, quis id officia aut.</div>
                    <div class="about-item__img"><img class="about-item__img-pic" src="/img/home_about-3.jpg" alt="sweet-bouquet"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="popular">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col">
                <hr>
            </div>
            <div class="col-auto h2">ПОПУЛЯРНЫЕ БУКЕТЫ</div>
            <div class="col">
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="popular-item">
                    <a href="/catalog" class="popular-item__img"><img class="popular-item__img-pic" src="/img/home_pop-top-1.jpg" alt="bouquet"></a>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="popular-item__caption">Барбарис</div>
                        <div class="popular-item__price">ЦЕНА: 2 500 Р</div>
                    </div>
                </div>
            </div>
            <div class="order-last order-md-first col-md-6">
                <div class="popular-item">
                    <a href="/catalog" class="popular-item__img"><img class="popular-item__img-pic" src="/img/home_pop-top-2.jpg" alt="bouquet"></a>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="popular-item__caption">Барбарис</div>
                        <div class="popular-item__price">ЦЕНА: 2 500 Р</div>
                    </div>
                </div>
            </div>
            <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="popular-item">
                            <a href="catalog.html" class="popular-item__img"><img class="popular-item__img-pic" src="/img/home_bouquet-1.jpg" alt="bouquet"></a>
                            <div class="popular-item__caption">Кушетка Де люкс</div>
                            <div class="popular-item__price">ЦЕНА: 1 500 Р</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="popular-item">
                            <a href="catalog.html" class="popular-item__img"><img class="popular-item__img-pic" src="/img/home_bouquet-2.jpg" alt="bouquet"></a>
                            <div class="popular-item__caption">Кушетка Де люкс</div>
                            <div class="popular-item__price">ЦЕНА: 1 500 Р</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="popular-item">
                            <a href="catalog.html" class="popular-item__img"><img class="popular-item__img-pic" src="/img/home_bouquet-3.jpg" alt="bouquet"></a>
                            <div class="popular-item__caption">Кушетка Де люкс</div>
                            <div class="popular-item__price">ЦЕНА: 1 500 Р</div>
                        </div>
                    </div>
                    <div class="d-md-none d-lg-block col-6 col-lg-3">
                        <div class="popular-item">
                            <a href="catalog.html" class="popular-item__img"><img class="popular-item__img-pic" src="/img/home_bouquet-4.jpg" alt="bouquet"></a>
                            <div class="popular-item__caption">Кушетка Де люкс</div>
                            <div class="popular-item__price">ЦЕНА: 1 500 Р</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="new">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col">
                <hr>
            </div>
            <div class="col-auto h2">НОВИНКИ</div>
            <div class="col">
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row new-item">
            <div class="col-6 col-md-4 col-lg-3">
                <a href="catalog.html" class="new-item__img"><img class="new-item__img-pic" src="/img/home_bouquet-1.jpg" alt="bouquet"></a>
                <div class="new-item__caption">Кушетка Де люкс</div>
                <div class="new-item__price">ЦЕНА: 1 500 Р</div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <a href="catalog.html" class="new-item__img"><img class="new-item__img-pic" src="/img/home_bouquet-2.jpg" alt="bouquet"></a>
                <div class="new-item__caption">Кушетка Де люкс</div>
                <div class="new-item__price">ЦЕНА: 1 500 Р</div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <a href="catalog.html" class="new-item__img"><img class="new-item__img-pic" src="/img/home_bouquet-3.jpg" alt="bouquet"></a>
                <div class="new-item__caption">Кушетка Де люкс</div>
                <div class="new-item__price">ЦЕНА: 1 500 Р</div>
            </div>
            <div class="col-6 d-md-none d-lg-block col-lg-3">
                <a href="catalog.html" class="new-item__img"><img class="new-item__img-pic" src="/img/home_bouquet-4.jpg" alt="bouquet"></a>
                <div class="new-item__caption">Кушетка Де люкс</div>
                <div class="new-item__price">ЦЕНА: 1 500 Р</div>
            </div>
        </div>
        <div class="row mt-2 mb-5">
            <div class="col-6 col-md-4 col-lg-3">
                <a href="catalog.html" class="new-item__img"><img class="new-item__img-pic" src="/img/home_bouquet-1.jpg" alt="bouquet"></a>
                <div class="new-item__caption">Кушетка Де люкс</div>
                <div class="new-item__price">ЦЕНА: 1 500 Р</div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <a href="catalog.html" class="new-item__img"><img class="new-item__img-pic" src="/img/home_bouquet-2.jpg" alt="bouquet"></a>
                <div class="new-item__caption">Кушетка Де люкс</div>
                <div class="new-item__price">ЦЕНА: 1 500 Р</div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <a href="catalog.html" class="new-item__img"><img class="new-item__img-pic" src="/img/home_bouquet-3.jpg" alt="bouquet"></a>
                <div class="new-item__caption">Кушетка Де люкс</div>
                <div class="new-item__price">ЦЕНА: 1 500 Р</div>
            </div>
            <div class="col-6 d-md-none d-lg-block col-lg-3">
                <a href="catalog.html" class="new-item__img"><img class="new-item__img-pic" src="/img/home_bouquet-4.jpg" alt="bouquet"></a>
                <div class="new-item__caption">Кушетка Де люкс</div>
                <div class="new-item__price">ЦЕНА: 1 500 Р</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                <a class="new-btn" href="catalog.html">
                    <div class="new-btn__text">Все новинки</div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="reviews" name="reviews">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col">
                <hr>
            </div>
            <div class="col-auto h2">ОТЗЫВЫ</div>
            <div class="col">
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="reviews-item">
                    <div class="reviews-item__caption">Максим</div>
                    <div class="reviews-item__text">Сегодня обычным букетом цветов никого не удивишь. Банально дарить цветы, которые через несколько дней завянут и будут выброшены в мусор. Немного подумав что же такого необычного и приятного подарить маме. Сегодня обычным букетом цветов никого не удивишь. Банально дарить цветы, которые через несколько дней завянут и будут выброшены в мусор. Немного подумав что же такого необычного и приятного подарить маме.</div>
                    <div class="reviews-item__openbtn">Показать</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="reviews-item">
                    <div class="reviews-item__caption">Екатерина</div>
                    <div class="reviews-item__text">Сегодня обычным букетом цветов никого не удивишь. Банально дарить цветы, которые через несколько дней завянут и будут выброшены в мусор. Немного подумав что же такого необычного и приятного подарить маме.</div>
                    <div class="reviews-item__openbtn">Показать</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="reviews-item">
                    <div class="reviews-item__caption">Артём</div>
                    <div class="reviews-item__text">Сегодня обычным букетом цветов никого не удивишь. Банально дарить цветы, которые через несколько дней завянут и будут выброшены в мусор. Немного подумав что же такого необычного и приятного подарить маме.</div>
                    <div class="reviews-item__openbtn">Показать</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="reviews-item">
                    <div class="reviews-item__caption">Владимир</div>
                    <div class="reviews-item__text">Сегодня обычным букетом цветов никого не удивишь. Банально дарить цветы, которые через несколько дней завянут и будут выброшены в мусор. Немного подумав что же такого необычного и приятного подарить маме. Сегодня обычным букетом цветов никого не удивишь. Банально дарить цветы, которые через несколько дней завянут и будут выброшены в мусор. Немного подумав что же такого необычного и приятного подарить маме.</div>
                    <div class="reviews-item__openbtn">Показать</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feedback">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col">
                <hr>
            </div>
            <div class="col-auto h2">Твой букет</div>
            <div class="col">
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="feedback-text">В какой гамме и настроении Вы хотите сегодня подарить букет?<br>Дерзкий и растрепанный или небольшой и аккуратный, а может быть с экзотическими цветами - мы обязательно составим для вас именно ваш букет.</div>
    </div>
    <div class="feedback-form">
        <div class="container">
            <form class="row">
                <div class="col-md-6">
                    <input type="tel" name="tel" pattern="[7-8][0-9]{10}" class="feedback-form__item feedback-form__item-text" id="feedback-phone" placeholder="Номер телефона" required>
                </div>
                <div class="col-md-6">
                    <input type="email" class="feedback-form__item feedback-form__item-text" id="feedback-phone" placeholder="Электронная почта" required>
                </div>
                <div class="col-md-6">
                    <input type="text" class="feedback-form__item feedback-form__item-text" id="feedback-phone" placeholder="Как нам к вам обращаться?" required>
                </div>
                <div class="col-md-6">
                    <input type="text" class="feedback-form__item feedback-form__item-text" id="feedback-phone" placeholder="На какую сумму расчитываете?">
                </div>
                <div class="col-12">
                    <textarea class="feedback-form__item feedback-form__item-text" id="feedback-phone" placeholder="Опишите, какой бы вы хотели букет? Кому? По какому случаю? Цвет? Ваши пожелания?"></textarea>
                </div>
                <div class="col-12">
                    <button class="feedback-form__item feedback-form__item-btn">Заказать</button>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="blog">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col">
                <hr>
            </div>
            <div class="col-auto h2">БЛОГ</div>
            <div class="col">
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row blog-item">
            <div class="col-6 col-md-5 col-lg-4 blog-item__img">
                <div class="blog-item__img-pic"></div>
            </div>
            <div class="col-6 col-md-7 col-lg-8 blog-item__desc">
                <div class="blog-item__desc-caption">Жемчужная серия (подарки из конфет)</div>
                <div class="blog-item__desc-text">Как завоевать сердце любимой женщины? Кто-то советует осыпать ее цветами, а кто-то подсказывает, что нужно преподнести ей изысканные лакомства.</div>
                <div class="d-flex flex-row justify-content-between">
                    <div class="blog-item__desc-date">22.05.2018</div>
                    <a href="#" class="blog-item__desc-link">Читать далее</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
