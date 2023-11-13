@extends('posts.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1>Form thêm mới</h1>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if(\Session::has('msg'))
<div class="alert alert-success">
    {{ \Session::get('msg') }}
</div>
@endif
   
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title</strong>
                <input type="text" name="title" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>images</strong>
                <input type="text" name="img" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" ></textarea>
            </div>
        </div>

        <input type="radio" name="status" id="status-1" value="{{ \App\Models\Post::STATUS_DRAFT }}">
        <label for="status-1">{{ \App\Models\Post::STATUS_DRAFT }}</label>

        <input type="radio" name="status" id="status-2" value="{{ \App\Models\Post::STATUS_PUBLISHED }}">
        <label for="status-2">{{ \App\Models\Post::STATUS_PUBLISHED }}</label>

        <br>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection