@extends('master.main')

@section('content')


@foreach ($products as $product)

<h1>
{{$product->name }}
</h2>
<h1>
    {{$product->price }}
    </h2>
    <h1>
        {{$product->stock }}
        </h2>
        <h1>
            {{$product->description }}
            </h2>


@endforeach
    

<h1> hi {{$products}}</h1>


<form action="{{route('product.store')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Product Name">
    <input type="text" name="rate" placeholder="Product Prize">
    <input type="text" name="stock" placeholder="Product Stock">
    <input type="message" name="description" placeholder="Product description">
    <input type="submit" value="Insert">
</form>




@endsection