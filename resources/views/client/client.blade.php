@extends('layouts.cmaster')

@section('title', 'Products')
 
@section('content')
 
    <div class="container products">
 
        <div class="row">
            @foreach($product as $p)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="\img\product\{{ $p->imageProduct }}" alt="{{ $p->namaProduct }}">
                    <div class="caption">
                        <h4>{{ $p->namaProduct }}</h4>
                        <p>{{ $p->deskripsiProduct }}</p>
                        <p><strong>Price: </strong> {{ $p->hargaProduct }}</p>
                        <p class="btn-holder"><a href="details/{{ $p->idProduct }}" class="btn btn-secondary btn-block text-center" role="button">Details</a>
                        <p class="btn-holder"><a href="add-to-cart/{{ $p->idProduct }}" class="btn btn-primary btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>
            @endforeach
            

  
        </div><!-- End row -->
<div class="container">

  {{ $product->links() }}
</div> 
    </div>
 
@endsection