@extends('layout.layout')

@section('title', 'Comics')

@section('content')
    <div class="row">
        @foreach ($comic as $product)
            <div class="col card">
                <div class="img-container">
                    <img src="{{$product['thumb']}}" alt="comic image" class="img">
                </div>
                
                <h6 class="img-title">{{ $product['series'] }}</h6> 
            </div>
        @endforeach
    </div>
@endsection
