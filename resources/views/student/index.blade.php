@extends('posts.layout')

@section('content')
    <h1>Dánh sách Sinh viên</h1>

    <a href="{{ route('students.create') }}" class="btn btn-warning">Add</a>

    @if(\Session::has('msg'))
        <div class="alert alert-success">
            {{ \Session::get('msg') }}
        </div>
    @endif

    <table class="table">
        <tr>
            <td>Mã Sinh viên </td>
            <td>Tên Lớp</td>
            <td>Tên Sinh Viên </td>
            <td>Ảnh Sinh viên</td>
            <td>Trạng thái </td>
            <td>Chú thích </td>
            <td>Acction</td>
        </tr>

        @foreach($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->TenLop }}</td>
                <td>{{ $item->TenSinhVien }}</td>
                <td><img src="{{ Storage::url($item->Anh) }}" width="100px"></td>
                <td>{{ $item->Is_Active ? 'Đi học' : 'Nghỉ' }}</td>
                <td>{{ $item->ChuThich }}</td>
                <td>
                    <a href="{{ route('students.show', $item) }}" class="btn btn-warning">Show</a>
                    <a href="{{ route('students.edit', $item) }}" class="btn btn-info">Edit</a>

                    <form action="{{ route('students.destroy', $item) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger"
                                onclick="return confirm('Có chắc xóa không?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $data->links() }}
@endsection
