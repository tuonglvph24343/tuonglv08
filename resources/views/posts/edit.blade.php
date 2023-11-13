@extends('posts.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Post</h2>
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
  
    <form action="{{ route('posts.update',$post->id) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>images</strong>
                    <input type="text" name="img" value="{{ $post->img }}" class="form-control"  >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <input type="text" name="description" value="{{ $post->description }}" class="form-control"  >
                </div>
            </div>
            <input type="radio" name="status" id="status-1"

            @if($post->status == \App\Models\Post::STATUS_DRAFT) checked @endif

            value="{{ \App\Models\Post::STATUS_DRAFT }}">

            <label for="status-1">{{ \App\Models\Post::STATUS_DRAFT }}</label>

            <input type="radio" name="status" id="status-2"

               @if($post->status == \App\Models\Post::STATUS_PUBLISHED) checked @endif

               value="{{ \App\Models\Post::STATUS_PUBLISHED }}">

            <label for="status-2">{{ \App\Models\Post::STATUS_PUBLISHED }}</label>
        
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection