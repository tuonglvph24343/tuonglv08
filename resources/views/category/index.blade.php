@extends('posts.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Danh sách bài viết</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categorys.create') }}"> Create New Product</a>
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
           <th>Id</th>
            <th>Name</th>
            <th>Excerpt</th>
            <th>Is active</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->excerpt }}</td>
            <td>{{ $category->is_active }}</td>
            <td> 
                <a class="btn btn-primary" href="{{ route('categorys.edit',$category) }}">Edit</a>
                <form action="{{ route('categorys.destroy',$category) }}" method="post">
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