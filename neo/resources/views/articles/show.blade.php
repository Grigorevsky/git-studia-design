@extends ('layouts.layout')

@section('content')
<section class="m-page m-news ptb-40 ptb-xs-20">
<div class="c">

<div class="breadcrumbs ptb-20">
     <div class="breadcrumbs__crumb">
         <a class="breadcrumbs__item" href="/">Главная</a>
     </div>

     <div class="breadcrumbs__crumb">
         <a class="breadcrumbs__item disabled">Новости</a>
     </div>
 </div>

 <h1 class="h h_txt-bold h_txt-gray h_txt-upper h_size-xl m-0">{{ $article->title }}</h1>

    <p>{{ $article->body }}</p>


</div>
</section>
  @endsection
