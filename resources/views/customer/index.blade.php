@extends('posts.layout')

@section('content')
<h1>Danh sách khách hàng</h1>
<a href="{{ route('customers.create') }}" class="btn btn-info">Thêm Khách hàng</a>

<table class="table">
<tr>
    <td>ID</td>
    <td>CUSTOMERS</td>
    <td>REGISTER DATE</td>
    <td>MAIL</td>
    <td>PHONE</td>
    <td>COUNTRY</td>
    <td>TOTAL ODER</td>
    <td>ACCTION</td>
    <td>
        <bootstrap-icon name="trash" class="bi-fw" >
            hihii 22258 ssdsh 
        </bootstrap-icon>
    </td>
</tr>
@foreach ($data as $item)
<tr>
    <td>{{ $item ->id }}</td>
    <td>{{ $item->Customer }}</td>
    <td>{{ $item->created_at }}</td>
    <td>{{ $item->Mail }}</td>
    <td>{{ $item->Phone }}</td>
    <td>{{ $item->Country }}</td>
    <td>{{ $item->TotalOrder }}</td>
    <td>
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
    </td>

</tr>
@endforeach
</table>
@endsection

