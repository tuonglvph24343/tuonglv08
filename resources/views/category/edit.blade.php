@extends('posts.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1>Form thêm mới</h1>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('categorys.index') }}"> Trở về</a>
        </div>
    </div>
</div>
   
@if(\Session::has('msg'))
<div class="alert alert-success">
    {{ \Session::get('msg') }}
</div>
@endif
<form action="{{ route('categorys.update',$category->id) }}" method="POST">
    @csrf
    @method('PUT')
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" class="form-control" value="{{ $category->name }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Excerpt</strong>
                <input type="text" name="excerpt" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Is active:</strong>
                <textarea class="form-control" style="height:150px" name="is_active" ></textarea>
            </div>
        </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection