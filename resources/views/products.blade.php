@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Select Product:</div>
 
                <div class="card-body">
 
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-4">
                                <div class="card mb-3">
                                  <div class="card-header"> 
                                        ${{ $product->price }}
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
  
                                    <a href="{{ route('products.show', ['id' => $product->id]) }}" class="btn btn-primary pull-right">Buy Now</a>
  
                                  </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection