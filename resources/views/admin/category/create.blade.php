@extends('layout.admin')
@section('title')
<h1 class="text-primary p-2 h3">ADD CATEGORY</h1>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('admin/custom/create_category.css')}}">
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

    <form action="{{route('category.store')}}" method="post">

        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
            @error('name')
            <div class="form-text">{{$message}}</div>
            @enderror
            {{-- MESSAGE ALL ERROR --}}
            {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif --}}
</div>
<div class="mb-3">
    <label for="slug" class="form-label">Slug "URL"</label>
    <input type="text" class="form-control" id="slug" name="slug" value="{{old('slug')}}">
    @error('slug')
    <div class="form-text">{{$message}}</div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
@endsection
