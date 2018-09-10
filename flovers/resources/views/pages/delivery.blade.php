@extends ('layouts.layout')
@section('content')

<section class="breadcrumbs">
            <div class="container">
                <a class="breadcrumbs-link" href="/"><img src="/img/breadcrumbs-img-home.svg" alt="pottle" width="25px"></a> <i class="fal fa-arrow-right"></i> Доставка и оплата
            </div>
        </section>

        <section class="delivery">
            <div class="container">
                <h2 class="h2">Доставка</h2>
                <div class="row mb-5">
                    <div class="col-auto">
                        <div class="delivery__img">
                            <img src="/img/delivery-img-1.png" alt="shop">
                        </div>
                    </div>
                    <div class="col">
                        <div class="delivery__caption">Забрать в магазине</div>
                        <div class="delivery__text">Вы можете забронировать нужный вам товар в любом удобном для вас магазине.<br>После того, как придет подтверждение из магазина, можно поехать в магазин, оплатить и забрать заказ.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <div class="delivery__img">
                            <img src="/img/delivery-img-2.png" alt="car">
                        </div>
                    </div>
                    <div class="col">
                        <div class="delivery__caption">Курьерской службой</div>
                        <div class="delivery__text">Ваш заказ застрахован от повреждений во время доставки. Доставка курьерской службой по России производится без ограничений по сумме заказа. Стоимость доставки рассчитывается автоматически при оформлении заказа.<br>Акция! Бесплатная доставка при заказе от 5000 рублей действует до конца текущего месяца.</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="payment">
            <div class="container">
                <h2 class="h2">Оплата</h2>
                <div class="row mb-5">
                    <div class="col-auto">
                        <div class="delivery__img">
                            <img src="/img/delivery-img-3.png" alt="pricetag">
                        </div>
                    </div>
                    <div class="col">
                        <div class="delivery__caption">Наличными</div>
                        <div class="delivery__text">Оплатить заказ наличными можно на кассе магазина или при получении у курьера</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <div class="delivery__img">
                            <img src="/img/delivery-img-4.png" alt="card">
                        </div>
                    </div>
                    <div class="col">
                        <div class="delivery__caption">Пластиковой картой</div>
                        <div class="delivery__text">Оплатить заказ картой можно на кассе магазина</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="delivery-contacts">
            <div class="container">
                <p>Вы всегда можете оформить заказ по телефону <span class="font-weight-bold">8 (800) 700-19-44</span> и задать все необходимые вопросы нашим менеджерам.</p>
            </div>
        </section>
  @endsection
