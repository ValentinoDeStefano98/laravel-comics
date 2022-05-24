@extends('layout.layout')

@section('title', 'Comics')

@section('content')
    
    <div class="comics-container">
        
        <div class="row resize">
            @foreach ($comic as $product)
                <div class="col card">
                    <div class="img-container">
                        <img src="{{$product['thumb']}}" alt="comic image" class="img">
                    </div>
                    <div class="title-container">
                        <h6 class="img-title">{{ $product['series'] }}</h6> 
                    </div>
                    
                </div>
            @endforeach
        </div>
        <div class="bottomButtonContainer">
            <span class="loadMore">Load More</span>
        </div>
    </div>
    <div class="main-bottom-container">
        <div class="main-bottom-card">
            <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="Logo" class="logo">
            <h3>Digital comics</h3>
        </div>
        <div class="main-bottom-card">
            <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="Logo" class="logo">
            <h3>DC Merchandise</h3>
        </div>
        <div class="main-bottom-card">
            <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="Logo" class="logo">
            <h3>Subscriptions</h3>
        </div>
        <div class="main-bottom-card">
            <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="Logo" class="logo">
            <h3>Comic shop locator</h3>
        </div>
        <div class="main-bottom-card">
            <img src="{{ asset('images/buy-dc-power-visa.png') }}" alt="Logo" class="logo">
            <h3>DC Power Visa</h3>
        </div>
    </div>
@endsection
