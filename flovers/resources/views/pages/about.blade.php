@extends ('layouts.layout')
@section('content')
<section class="breadcrumbs">
            <div class="container">
                <a class="breadcrumbs-link" href="index.html"><img src="/img/breadcrumbs-img-home.svg" alt="pottle" width="25px"></a> <i class="fal fa-arrow-right"></i> О нас
            </div>
        </section>

        <section class="about">
            <div class="container">
                <h2 class="h2">{{ $page->title }}</h2>
            </div>
            <div class="container">
                <div class="about__text">
                  {{ $page->body }}
                </div>
            </div>
        </section>

        <section class="about-contacts">
            <div class="container">
                <p><span class="font-weight-bold">+7(999) 999-99-99</span><span class="ml-3 font-weight-bold">+7(999) 999-99-99 ( 24 часа )</span></p>
                <p>Адрес магазина: <span class="font-weight-bold">город Саратов,ул. Чехова, д.33 А</span></p>
                <p>WhatsApp / Viber / Telegram: <span class="font-weight-bold">+7 921 958 14 21</span> Прием заказов 24 часа БЕЗ ВЫХОДНЫХ!</p>
            </div>
        </section>
@endsection
