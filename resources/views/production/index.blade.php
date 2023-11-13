@extends('posts.layout')

@section('content')
<h1>Danh sách sản phẩm</h1>
<a href="{{ route('productions.create') }}" class="btn btn-warning">Add</a>
<table class="table">
    <tr>
        <td>Id sản phẩm </td>
        <td>Ảnh sản phẩm</td>
        <td>Tên sản phẩm</td>
        <td>Giá gốc</td>
        <td>Giá giảm</td>
        <td>Trạng thái</td>
        <td>Ngày tạo</td>
        <td>Acction</td>
    </tr>
    @foreach($data as $item )
    <tr>
        <td>{{ $item->id }}</td>
        <td><img src="{{ \Illuminate\Support\Facades\Storage::url($item->Thumbnail) }}" width="100px"></td>
        <td>{{ $item->Name }}</td>
        <td>{{ $item->PriceSale }}</td>
        <td>{{ $item->Price }}</td>
        <td>{{ $item->Status ? ' hoạt động' : 'không hoạt động' }}</td>
        <td>{{ $item->created_at }}</td>
    </tr>
    @endforeach
</table>
{{ $data->links() }}
@endsection
