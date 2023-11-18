@extends('posts.layout')

@section('content')


<h1>Thêm khách hàng</h1>
<a href="{{ route ('admin.brands.index') }}" class="btn btn-primary">quay lại</a>
<form action="{{ route('admin.brands.store') }} " method="POST" enctype="multipart/form-data">
@csrf
    <label for="">Name</label>
    <input type="text" name="name" id="name" class="form-control">

    <label for="">IMG</label>
    <input type="file" name="img" id="img" class="form-control">

    <input type="radio" value="">
</form>
@endsection