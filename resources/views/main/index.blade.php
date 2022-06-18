@extends('layouts.app')

@section('content')
<div>
<h3 class="text-start category h-3 m-3 "><strong>Наша продукция</strong></h3>
    <div class="d-flex flex-wrap justify-content-center align-items-center" style=" max-width: 900px;">

        @foreach($categories as $category)
            <div class="card d-flex flex-column align-items-center m-3"
                 style="background:rgb(108,117,125);width: 200px;">
                <img class="card-img-top mt-2" style="width: 150px; height: 150px; object-fit: fill; "
                     src="{{$category->images == 'product.png'? url( $category->images):url('storage/' . $category->images) }}"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center" style="width: 200px;height:50px; word-wrap: break-word;">{{$category->title}}</h5>
                </div>
                    <a href="{{route('category.product', $category->id)}}" class="btn btn-outline-dark mb-2">перейти</a>

            </div>
        @endforeach
    </div>
</div>
@endsection
