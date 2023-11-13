@extends('posts.layout')
@section('content')
<h1>Thêm khách hàng mới</h1>
<a href="{{ route('customers.index') }}" class="btn btn-info">Quay lại</a>
@if(\Session::has('msg'))
<div class="alert alert-primary">
    {{ \Session::get('msg') }}
</div>
@endif
<form action="{{ route('customers.store') }}" method="post"  enctype="multipart/form-data">
    @csrf

    <label for="">CUSTOMERS</label>
    <input type="text" class="form-control" name="Customer" id="Customer">

    <label for="">MAIL</label>
    <input type="text" class="form-control" name="Mail" id="Mail">

    <label for="">PHONE</label>
    <input type="number" class="form-control" name="Phone" id="Phone">

    <label for="">COUNTRY</label>
    <input type="text" class="form-control" name="Country" id="Country">

    <label for="">TotalOrder</label>
    <input type="number " class="form-control" name="TotalOrder" id="TotalOrder">

    <br>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection