@extends('posts.layout')

@section('content')
<h1>Danh sách khách hàng</h1>
{{-- <a href="{{ route('customers.create') }}" class="btn btn-info">Thêm Khách hàng</a> --}}

<table class="table">
<tr>
    <td>ID</td>
    <td>name</td>
    <td>Img </td>
    <td>IS SHOW</td>
    
</tr>
@foreach ($data as $item)
<tr>
    <td>{{ $item ->id }}</td>
    <td>{{ $item->name }}</td>
    <td><img src="{{ Storage::url($item->img) }}" width="100px"></td>
    <td>{{ $item->is_show ? 'active' : 'inactive' }}</td>
   
    {{-- <td>
        <a href="{{ route('customers.edit',$item) }}" class="btn btn-warning">EDIT</a>
        <form action="{{ route('customers.destroy',$item) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" 
            class="btn btn-danger"
            
            onclick="return confirm('bạn có xoá không')"
            
            > 
         Delete           
            </button>
           
        </form>
        <i class="bi bi-trash"></i>
    </td> --}}

</tr>
@endforeach
</table>
@endsection

