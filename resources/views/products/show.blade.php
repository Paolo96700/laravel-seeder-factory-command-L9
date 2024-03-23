@extends('layouts.base')
@section('contents')
   <div class="container d-flex flex-column justify-content-center pt-4">
        
        <h1>{{$product->name}}</h1>
        <img src="{{ asset($product->image) }}" class="card-img-top w-50" alt="...">
        <h5><span class="fw-bold">EanCode: </span>{{$product->ean_code}}</h5>
        <h4>{{$product->price}}.00$</h4>
        <h4>
        @if ($product->evidence === '1')
            <h4>Visibile</h4>
        @else
            <h4>Non Visibile</h4>
        @endif
        </h5>
        <p>{{$product->description}}</p>
        <div class="w-100 d-flex justify-content-center mt-5">
            <a href="{{ route('products.index') }}" class="btn btn-primary m-3 w-25">Return to list</a>
        </div>
        
   </div>
@endsection