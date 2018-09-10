@extends ('layouts.layout')
@section('content')


<section class="breadcrumbs">
            <div class="container">
                <a class="breadcrumbs-link" href="/"><img src="/img/breadcrumbs-img-home.svg" alt="pottle" width="25px"></a> <i class="fal fa-arrow-right"></i> отзывы
            </div>
        </section>

        <section class="delivery">
            <div class="container">
                <h2 class="h2">{{ $review->name }}</h2>

                      <div class="row mb-5">
                          <div class="col-auto">
                              <em>{{ $review->created_at }}</em>
                              <p>
                                {{ $review->body }}
                              </p>
                          </div>
                          </div>

                    


                    <div class="col">


                    </div>
                </div>

          </section>

@endsection
