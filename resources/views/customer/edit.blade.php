@extends('posts.layout')
@section('content')
<h1>Cập nhập lạo khách hàng</h1>
<a href="{{ route('customers.index') }}" class="btn btn-info">Quay lại</a>
@if(\Session::has('msg'))
<div class="alert alert-primary">
    {{ \Session::get('msg') }}
</div>
@endif

<form action="{{ route('customers.update', $customer) }}" method="post">
    @csrf
    @method('PUT')

    <label for="">CUSTOMERS</label>
    <input type="text" class="form-control" name="Customer" id="Customer" value="{{ $customer->Customer }}">

    <label for="">MAIL</label>
    <input type="text" class="form-control" name="Mail" id="Mail" value="{{ $customer->Mail }}">

    <label for="">PHONE</label>
    <input type="text" class="form-control" name="Phone" id="Phone" value="{{ $customer->Phone }}">

    <label for="">COUNTRY</label>
    <input type="text" class="form-control" name="Country" id="Country" value="{{ $customer->Country }}">

    <label for="">TotalOrder</label>
    <input type="text" class="form-control" name="TotalOrder" id="TotalOrder" value="{{ $customer->TotalOrder }}">

    <br>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection