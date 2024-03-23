@extends('layouts.base')
@section('contents')
   <div class="container d-flex flex-wrap justify-content-center py-4">
        @foreach ($products as $product)
            <div class="card m-1" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{$product->name}}</h5>
                    <p class="card-text"><span class="fw-bold">Color: </span>{{$product->category->name}}</p>
                    {{-- <p class="card-text">{{$product->category->color}}</p> --}}
                <div style="height: 11rem;">
                    <p class="card-text">{{$product->description}}</p>
                </div>
                    <h4 class="card-text">{{$product->price}}.00$</h4>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('products.show', ['product' => $product]) }}" class="btn btn-primary m-3 w-100">View</a>
                </div>
            </div>  
        @endforeach
   </div>
@endsection