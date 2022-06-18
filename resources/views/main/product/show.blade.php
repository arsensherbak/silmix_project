@extends('layouts.app')

@section('content')
    <h3 class="text-start m-5 work-header">Подробно о <strong>{{$product->title}}</strong></h3>
    <div class="d-flex justify-content-around flex-wrap">
    <div><img src="{{url('storage/' . $product->img)}}" alt="" style="width: 350px;height: 350px; object-fit: fill; ">
    </div>
    <div >
        <div class="col-12">
            <div class="card">

                <div class="card-body table-responsive p-0" style="background:rgb(108,117,125);">
                    <table class="table table-hover" >
                        <thead>
                        <tr>
                            <th>Название продукции</th>
                            <th>{{$product->title}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><strong>Цена</strong></td>
                            <td><strong>{{$product->price}}</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Цвет</strong></td>
                            <td><strong>{{$product->color}}</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Вес</strong></td>
                            <td><strong>{{$product->weight}} кг</strong></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    </div>
@endsection
