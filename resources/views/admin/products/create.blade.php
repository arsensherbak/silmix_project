@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <div class="col-12">
                    <h3>Добавить продукт</h3>
                    <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="title" class="form-control col-3 mb-4 w-50"
                               placeholder="Введите название продукта">
                        @error('title')
                        <div class="text-danger mb-4">это поле обязательное</div>
                        @enderror
                        <div class="form-group w-50">
                            <label>Укажите категорию продукта</label>
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="text" name="price" class="form-control col-3 mb-4 w-25"
                               placeholder="Укажите цену">
                        @error('price')
                        <div class="text-danger mb-4">это поле обязательное</div>
                        @enderror
                        <input type="text" name="color" class="form-control col-3 mb-4 w-50"
                               placeholder="цвет смеси, если не указать будет серый">
                        <input type="text" name="weight" class="form-control col-3 mb-4 w-50"
                               placeholder="вес смеси, если не указать будет 50 кг">
                        <input type="text" name="package" class="form-control col-3 mb-4 w-50"
                               placeholder="упаковка смеси, если не указать будет бумажная w-50">
                        <div class="input-group w-50">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="img">
                                <label class="custom-file-label">Загрузите фото товара</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
