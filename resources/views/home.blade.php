@extends('layouts.app')

@section('content')
    <div class="movies-grid">

        @foreach($movies as $movie)
            <div class="movie-card">

                @if(isset($movie['nou']) && $movie['nou'] === 'news')
                    <div class="badge-new">НОВОЕ</div>
                @endif

                <img class="movie-poster" src="{{ asset($movie['image']) }}" alt="{{ $movie['title'] }}">

                <div class="movie-info">
                    <h3 class="movie-title">{{ $movie['title'] }}</h3>
                    @foreach(($movie['genres'] ?? []) as $g)
                        <span class="movie-genre">{{ $g }}</span>
                    @endforeach


                    <div class="movie-times">
                        @foreach($movie['times'] as $time)
                            <div class="time-wrapper">
                                @if(!empty($time['ora']))
                                    <div class="time-card">
                                        <div class="time-top"><a href="" class="time-top">{{ $time['ora'] }}</a></div>
                                        <div class="time-mid">
                                            2D <span class="dot">·</span> {{ $time['bani'] }}₸
                                        </div>
                                    </div>

                                    <div class="time-bot">Зал {{ $time['zal'] }}</div>
                                @else
                                    <button class="today-btn">Сеансы на Завтра</button>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        @endforeach

    </div>
@endsection
