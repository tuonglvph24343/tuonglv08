@extends('posts.layout')

@section('content')
    <h1>Thêm mới sinh viên</h1>
    <a href="{{ route('students.index') }}" class="btn btn-info">Quay lại  danh sách</a>
    @if(\Session::has('msg'))
        <div class="alert alert-danger">
            {{ \Session::get('msg') }}
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <label for="TenLop">Tên Lớp</label>
        <input type="text" class="form-control" name="TenLop" id="TenLop">

        <label for="TenSinhVien">Tên Sinh viên</label>
        <input type="text" class="form-control" name="TenSinhVien" id="TenSinhVien">

        <label for="Anh">Ảnh Sinh Viên</label>
        
        <input type="file" class="form-control" name="Anh" id="Anh">
        <label for="">Chú thích </label>
        <textarea class="form-control" name="ChuThich" id="ChuThich"></textarea>
        <label for="Is_active">Trạng Thái</label>

        <input type="radio" value="{{ \App\Models\Student::ACTIVE }}" name="is_active" id="is_active-1">
        <label for="is_active-1">Đi học</label>

        <input type="radio" value="{{ \App\Models\Student::INACTIVE }}" name="is_active" id="is_active-2">
        <label for="is_active-2">Nghỉ Học</label>

        <br><br>
    
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
