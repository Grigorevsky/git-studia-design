@extends ('layouts.layout')
@section('content')


<section class="breadcrumbs">
            <div class="container">
                <a class="breadcrumbs-link" href="/"><img src="/img/breadcrumbs-img-home.svg" alt="pottle" width="25px"></a> <i class="fal fa-arrow-right"></i> отзывы
            </div>
        </section>

        <section class="delivery">
            <div class="container">
                <h2 class="h2">Отзывы</h2>

                      @foreach ($reviews as $review)
                      <div class="row mb-5">
                          <div class="col-auto">
                              <h3><a href="/reviews/{{ $review->id }}">
                                {{ $review->name }}</a>
                              </h3>
                              <em>{{ $review->created_at }}</em>
                              <p>
                                {{ $review->body }}
                              </p>
                          </div>
                          </div>

                      @endforeach


                    <div class="col">


                    </div>
                </div>

          </section>

@endsection
