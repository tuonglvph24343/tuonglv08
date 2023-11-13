@extends('posts.layout')

@section('content')
    <h1>Thêm mới Sản phẩm</h1>
    <a href="{{ route('productions.index') }}" class="btn btn-info">Quay lại  danh sách</a>
    @if(\Session::has('msg'))
        <div class="alert alert-danger">
            {{ \Session::get('msg') }}
        </div>
    @endif

    <form action="{{ route('productions.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <label for="TenLop">Ảnh </label>
        <input type="file" class="form-control" name="Thumbnail" id="Thumbnail">

        <label for="TenSinhVien">Tên sản phẩm</label>
        <input type="text" class="form-control" name="Name" id="Name">

        <label for="TenSinhVien">Giá giẩm</label>
        <input type="text" class="form-control" name="PriceSale" id="PriceSale">

        <label for="TenSinhVien">Giá gốc</label>
        <input type="text" class="form-control" name="Price" id="Price">

        <label for="TenSinhVien">Trạng thái</label>
        <input type="text" class="form-control" name="Status" id="Status">
        <br><br>
    
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection