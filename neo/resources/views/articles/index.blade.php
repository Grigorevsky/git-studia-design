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

 <h1 class="h h_txt-bold h_txt-gray h_txt-upper h_size-xl m-0">
   Новости
 </h1>

    @foreach ($articles as $article)
        <h2>
          <a href="/news/{{ $article->id }}">{{ $article->title }}</a>
          <!--   action('ArticlesController@show', [$article->id])
         /news/{{ $article->id }} -->
        </h2>
        <p>{{ $article->excerpt }}</p>

    @endforeach
</div>
  
</section>
  @endsection
