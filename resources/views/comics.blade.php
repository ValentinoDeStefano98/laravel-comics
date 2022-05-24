@extends('layout.layout')

@section('title', 'Comics')

@section('content')
    
    
    <div class="comics-container">
        <div class="buttonContainer">
            <span class="currentSeries">Current Series</span>
        </div>
        <div class="row resize">
            @foreach ($comic as $product)
                <div class="col card">
                    <div class="img-container">
                        <img src="{{$product['thumb']}}" alt="comic image" class="img">
                    </div>
                    <div class="title-container">
                        <h5 class="img-title">{{ $product['series'] }}</h5> 
                    </div>
                    
                </div>
            @endforeach
        </div>
        <div class="bottomButtonContainer">
            <span class="loadMore">Load More</span>
        </div>
    </div>
    <div class="main-bottom-container">
        <div class="main-bottom-card-container">
            <div class="main-bottom-card">
                <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="Logo" class="logo-card">
                <h3 class="img-title spacing">Digital comics</h3>
            </div>
            <div class="main-bottom-card">
                <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="Logo" class="logo-card">
                <h3 class="img-title spacing">DC Merchandise</h3>
            </div>
            <div class="main-bottom-card">
                <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="Logo" class="logo-card">
                <h3 class="img-title spacing">Subscriptions</h3>
            </div>
            <div class="main-bottom-card">
                <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="Logo" class="logo-card">
                <h3 class="img-title spacing">Comic shop locator</h3>
            </div>
            <div class="main-bottom-card">
                <img src="{{ asset('images/buy-dc-power-visa.png') }}" alt="Logo" class="logo-card">
                <h3 class="img-title spacing">DC Power Visa</h3>
            </div>
        </div>
    </div>
@endsection
