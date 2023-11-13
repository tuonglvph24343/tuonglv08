@extends('posts.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Danh sách bài viết</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
    @if(\Session::has('msg'))
    <div class="alert alert-success">
        {{ \Session::get('msg') }}
    </div>
@endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>img</th>
            <th>description</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td><img src="{{ asset($post->img) }}" width="100px"></td>
            <td>{{ $post->description }}</td>
            <td>{{ $post->status }}</td>
            <td>
                    <a class="btn btn-info" href="{{ route('posts.show',$post) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('posts.edit',$post) }}">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="post">
                        @csrf
                        @method('DELETE')
        
                        <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Có chắc chắn xóa không?')">Delete</button>
                    </form>
            </td>
            
        </tr>
        @endforeach
    </table>
  {{ $data->links ()}}
@endsection