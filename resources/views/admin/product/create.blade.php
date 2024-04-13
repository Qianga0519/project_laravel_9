@extends('layout.admin')
@section('title')
<h1 class="text-primary p-2 h3">ADD CATEGORY</h1>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('admin/custom/create_category.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.min.css')}}">
@endsection
@section('js')
@endsection
@section('messages')
@if (session('add_cate_success'))
<div class="alert alert-primary" role="alert">
    {{ session('add_cate_success') }}
</div>
@endif
@if (session('add_cate_fail'))
<div class="alert alert-primary" role="alert">
    {{ session('add_cate_fail') }}
</div>
@endif
@endsection
@section('content')
<div class="container">

    <form action="{{route('product.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-10">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                    @error('name')
                    <div class="form-text">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Description</label>
                    <textarea name="description"  class="form-control" id="description" cols="30" rows="5">{{old('description')}}</textarea>
                    @error('description')
                    <div class="form-text">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="col-2">
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" name="category_id" style="width: 100%" aria-label="Default select example">                     
                        <option value="" selected>--SELECT--</option>
                        @foreach ($categories as $value )
                        <option value="{{$value['id']}}">{{$value['name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="manufacture" class="form-label">Manufacture</label>
                    <select class="form-select" name="manufacture_id" style="width: 100%" aria-label="Default select example">
                        <option value="" selected>--SELECT--</option>    
                        @foreach ($manufacture as $value )
                        <option value="{{$value['id']}}">{{$value['name']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" max="999999999" value="{{old('price')}}">
                    @error('price')
                    <div class="form-text">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sale_amount" class="form-label">Sale amout</label>
                    <input type="number" class="form-control" id="sale_amount" name="sale_amount" max="999999999" value="{{old('sale_amount')}}">
                    @error('sale_amount')
                    <div class="form-text">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="qty" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="qty" name="qty" max="999999999" value="{{old('qty')}}">
                    @error('qty')
                    <div class="form-text">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="feature" class="form-label">Feature</label>
                    <input type="checkbox" class="form-control" id="feature" name="feature" max="999999999">
                    @error('feature')
                    <div class="form-text">{{$message}}</div>
                    @enderror
                </div>   
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection