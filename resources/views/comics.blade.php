@extends('layouts.app')

@section('content')
    <div class="comics-container">
        <div class="container">
            <div class="text">
                <h3>CURRENT SERIES</h3>
            </div>
            <div class="row row-cols-6 p-4">
                @foreach ($db as $comics)
                    <div class="col">
                        <div class="card">
                            <figure>
                                <img src="{{ $comics['thumb'] }}" alt="">
                            </figure>
                            <div class="card-body">
                                <p class="card-title">{{ $comics['series'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="py-4">
                <a class="more" href="#">Load more</a>
            </div>
        </div>
        <section class="section-bottom">
            <div class="cta">
                <ul>
                    <li>
                        <a href="">
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                            <p>DIGITAL COMICS</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                            <p>DC MERCHANDISE</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                            <p>SUBSCRIPTION</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                            <p>COMIC SHOP LOCATOR</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                            <p>DC POWER VISA</p>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
@endsection
