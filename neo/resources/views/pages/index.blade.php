@extends ('layouts.layout')

@section ('content')
<section class="m-gallery ptb-35 ptb-xs-20">
           <div class="c">
               <div class="h h_txt-bold h_txt-gray h_txt-upper h_size-xl t-c">
                   Фотогалерея
               </div>

               <div class="m-gallery__wrap t-c mt-25 mt-xs-15">
                   <div class="m-gallery__carousel owl-carousel">
                       <div class="m-gallery__carousel-item" href="/images/gallery1.png" style="background-image: url(/images/gallery1.png);"></div>
                       <div class="m-gallery__carousel-item" href="/images/gallery1.png" style="background-image: url(/images/gallery1.png);"></div>
                       <div class="m-gallery__carousel-item" href="/images/gallery1.png" style="background-image: url(/images/gallery1.png);"></div>
                       <div class="m-gallery__carousel-item" href="/images/gallery1.png" style="background-image: url(/images/gallery1.png);"></div>
                   </div>
               </div>
           </div>
       </section>

       <section class="m-about ptb-100 ptb-s-50 ptb-xs-25 s_bg-gray">
           <div class="c">
               <div class="r">

                   <div class="col-75 col-xs-100 as-c">
                       <div class="h h_txt-bold h_txt-white h_txt-upper h_size-xl">
                           О компании
                       </div>
                       <div class="m-about__data mt-30 data">
                           <p>
                               Компания в своём составе имеет проектное бюро, способное выполнять
                               все перечисленные в лицензии работы по проектированию. Инженерно-технический штат
                               компании включает производственно- технический отдел, состоящий из сметчиков, инженеров различного профиля,
                               что даёт возможность грамотно готовить и оформлять всю необходимую сметную документацию,
                               акты на скрытые работы, необходимые разрешения на выполнение работ, исполнительную
                               документацию и многое другое.
                           </p>
                       </div>
                       <div class="m-about__more-button">
                           <a href="/contacts">Читать далее</a>
                       </div>
                   </div>

                   <div class="col-25 col-xs-100 mt-xs-25 as-c">
                       <div class="m-about__carousel owl-carousel">
                           <div class="m-about__carousel-item" style="background-image: url(/images/license.png);"></div>
                           <div class="m-about__carousel-item" style="background-image: url(/images/license.png);"></div>
                           <div class="m-about__carousel-item" style="background-image: url(/images/license.png);"></div>
                       </div>
                   </div>

               </div>
           </div>
       </section>

       <section class="m-menu ptb-60 ptb-xs-30">
           <div class="c">
               <div class="r">

                   <div class="col-33 col-xs-50 col-xxs-100">
                       <div class="m-menu__block">
                           <div class="m-menu__block-name">
                               <a href="#">Управление проектами и технический надзор</a>
                           </div>
                           <div class="m-menu__block-list">

                           </div>
                       </div>
                   </div>

                   <div class="col-33 col-xs-50 col-xxs-100">
                       <div class="m-menu__block">
                           <div class="m-menu__block-name">
                               <a href="#">Проектирование</a>
                           </div>
                           <div class="m-menu__block-list">

                           </div>
                       </div>
                   </div>

                   <div class="col-33 col-xs-50 col-xxs-100">
                       <div class="m-menu__block">
                           <div class="m-menu__block-name">
                             <!--<div class="h h_size-xs h_txt-white go_to">-->
                               <a href="#">Строительно-монтажные работы</a>
                           </div>
                           <div class="m-menu__block-list">
                               <ul>
                                   <li class="m-menu__block-list-item">
                                       <a href="#">Демонтажные работы</a>
                                   </li>

                                   <li class="m-menu__block-list-item">
                                       <a href="#">Капитальное строительство</a>
                                   </li>
                                   <li class="m-menu__block-list-item">
                                       <a href="#">Благоустройство</a>
                                   </li>
                                   <li class="m-menu__block-list-item">
                                       <a href="#">Фасадные работы</a>
                                   </li>
                                   <li class="m-menu__block-list-item">
                                       <a href="#">Реконструкция и перепланировка</a>
                                   </li>
                               </ul>
                           </div>
                       </div>
                   </div>

               </div>
           </div>
       </section>

       <section class="m-work s_bg-gray ptb-40 ptb-xs-25 hidden-xs-d">
           <div class="c">
               <div class="h h_txt-bold h_txt-white h_txt-upper h_size-xl t-c">
                   Работа с нами
                   <span class="m-work__heading-excerpt">можно начать с любого пункта</span>
               </div>

               <div class="m-work__wrap t-c mt-50 mt-xs-25">
                   <div class="m-work__circle">
                       <div class="circle">
                           <div class="circle__image" style="background-image: url(/images/circle.jpg);"></div>
                           <div class="circle__over"></div>
                           <div class="circle__bdr"></div>
                           <div class="circle__wrap">
                               <span>
                                   <span>1</span>
                                   <span class="circle__text">
                                       Звонок в компанию заказчика
                                   </span>
                               </span>
                               <span>
                                   <span>2</span>
                                   <span class="circle__text">
                                       Встреча в офисе
                                   </span>
                               </span>
                               <span>
                                   <span>3</span>
                                   <span class="circle__text">
                                       Обсуждение (эскиз или тех. задание)
                                   </span>
                               </span>
                               <span>
                                   <span>4</span>
                                   <span class="circle__text">
                                       Выполнение проектных работ (при необходимости)
                                   </span>
                               </span>
                               <span>
                                   <span>5</span>
                                   <span class="circle__text">
                                       Согласование сметных расчетов, график выполнения работ
                                   </span>
                               </span>
                               <span>
                                   <span>6</span>
                                   <span class="circle__text">
                                       Заключение договоров на строительство
                                   </span>
                               </span>
                               <span>
                                   <span>7</span>
                                   <span class="circle__text">
                                       Комплектация объекта стоительными материалами (по желанию заказчика)
                                   </span>
                               </span>
                               <span>
                                   <span>8</span>
                                   <span class="circle__text">
                                       Производство строительно-монтажных работ
                                   </span>
                               </span>

                               <span class="circle__arrow-wrap">
                                   <span class="circle__arrow"></span>
                                   <span class="circle__text-b">Сдача объекта</span>
                               </span>

                           </div>
                       </div>
                   </div>
                   <div class="m-work__circle_min" style="background-image: url();"></div>
               </div>
           </div>
       </section>

       <section class="m-news ptb-60 ptb-xs-30 s_bg-gray-l">
           <div class="c">

               <div class="r">
                   <div class="col-50 as-e">
                       <div class="h h_txt-bold h_txt-black h_txt-upper h_size-xl">
                           Новости
                       </div>
                   </div>
                   <div class="col-50 as-e">
                       <div class="m-news__txt t-r">
                           Новости нашей компании
                       </div>
                   </div>
               </div>

               <div class="m-news__wrap mt-40 mt-xs-20">
                   <div class="r">

                     @foreach ($articles as $article)

                       <div class="col-33 col-s-50 col-xs-100">
                           <div class="m-news__item">
                               <div class="m-news__date">
                                 {{ $article->created_at }}
                               </div>
                               <div class="m-news__name">
                                   <a href="/news/{{ $article->id }}">{{ $article->title }}</a>
                               </div>
                               <div class="m-news__data">
                                   {{ $article->excerpt }}
                               </div>
                           </div>
                       </div>
                      @endforeach


                   </div>
               </div>

           </div>
       </section>

       <section class="m-partners ptb-60 ptb-xs-30">
           <div class="c">

               <div class="h h_txt-bold h_txt-black h_txt-upper h_size-xl">
                   Наши партнеры
               </div>

               <div class="m-partners__wrap mt-30 mt-xs-20 t-s-c">
                   <div class="m-partners__item">
                       <img src="/images/partners/barco.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/profcom.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/rubezh.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/kronverk.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/shaldom.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/sarteksim.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/psi.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/eurocomplekt.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/tesar.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/mrsk.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/poliprofil.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/mt.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/lesstr.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/novyivek.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/evraz.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/sgtu.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/um24.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/organit.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/yablonka.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/metallotorg.png" alt="">
                   </div>
                   <div class="m-partners__item">
                       <img src="/images/partners/soyzs.png" alt="">
                   </div>
               </div>

           </div>
       </section>
@endsection
