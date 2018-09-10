@extends ('layouts.layout')

@section ('content')

       <section class="m-page m-news ptb-40 ptb-xs-20">
    <div class="c">

       <div class="breadcrumbs ptb-20">
            <div class="breadcrumbs__crumb">
                <a class="breadcrumbs__item" href="/">Главная</a>
            </div>

            <div class="breadcrumbs__crumb">
                <a class="breadcrumbs__item disabled">Контакты</a>
            </div>
        </div>

        <h1 class="h h_txt-bold h_txt-gray h_txt-upper h_size-xl m-0">
            Контакты
        </h1>

        <div class="m-page__wrap mt-25 mt-xs-15">
            <div class="r">
                          <div class="col-30 col-xs-100 mt-xs-20">
                          <div class="contLeft">

              <div class="address">
                <span>
                  Cаратов,<br>
                  ул. Октябрьская, д. 90
                </span>
                <br>
              </div>
              <div class="phones">
                <!-- <span>+7 (8452) 51-10-36</span><br> -->
                <br><span>+7 (8452) 79-92-42</span><br>
                <span>+7 (8452) 79-92-65</span><br>
                <span>+7 (8452) 79-92-67</span><br>
                <span>+7 (8452) 79-92-86</span>
              </div>




              <div class="mail">
              <br>
                <a href="mailto:neo-stroi@mail.ru">neo-stroi@mail.ru</a><br>
              </div>
              <div class="modalWrap">
<div class="modalContent">
	    <br>
        <span>Написать нам письмо</span>
{!! Form::open() !!}

{!! Form::close() !!}

	    <!--<div class="mLine">
	        <label>
	            Имя *
	        </label>
	        <input class="order" name="name" type="text" placeholder="Введите имя">
	    </div>

	    <div class="mLine">
	        <label>
	            Телефон *
	        </label>
	        <input class="order phone" name="phone" type="text" placeholder="Введите телефон">
	    </div>

	    <div class="mLine">
	        <label>
	            E-mail *
	        </label>
	        <input class="order email" name="email" type="text" placeholder="Введите e-mail">
	    </div>


        <div class="mLine">
	        <label>
	            Сообщение *
	        </label>
	        <textarea class="order message" rows="5" name="message" type="text" placeholder="Введите сообщение"></textarea>
	    </div>

	    <div class="mLine t-center">
	        <button class="bbtn" ion="data=.order;ajax=/callback/send;prepend=#SystemMessages;">
	            Отправить
	        </button>
	    </div>

	    <div id="Preloader" style="display: none">
	        <i class="fa fa-spinner fa-pulse fa-3x fa-fw" aria-hidden="true"></i>
	    </div>

	    <input type="text" name="ide" class="ide order hidden" value="Форма заявки">
	</div>

	<div class="modalDone">
		<button title="Закрыть (Esc)" type="button" class="mfp-close">×</button>

		<div class="heading">
	        <span>Ваше письмо отправлено!</span>
	    </div>

	    <p class="t-center">
	    	Ожидайте, мы обязательно Вам ответим!
	    </p>
	</div>
	</div>
            </div>
                </div>
                <div class="col-70 col-xs-100">
                     <div class="contRight">
                      <div id="map" style="width: 100%;">
                      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A06fbe15f2f86489c97521d54ab11bd4f867f605e98d0615a1029ed353c9a13be&amp;width=100%25&amp;height=100%25&amp;lang=ru_RU&amp;scroll=false"></script>-->
                      </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection
