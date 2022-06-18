@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <div><a href="{{route('admin.product.index')}}">Назад</a></div>
                <div class="row">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Название категории</th>
                            <th>Изображение</th>
                            <th>Редактировать</th>

                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>{{$product->title}}</td>
                            <td style="height: 700px; width:500px;"><img
                                    src="{{$product->img == 'no_name.png'? url( $product->img):url('storage/' . $product->img) }}"
                                    alt="image"
                                    class="w-50 h-25 img-fluid"
                                    style="object-fit: fill"></td>
                            <td >
                            <a href="{{route('admin.product.edit', $product->id)}}"><i
                                    class="far fa-edit"></i></a>
                            </td>
                        </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
