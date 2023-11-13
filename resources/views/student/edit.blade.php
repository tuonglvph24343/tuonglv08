@extends('posts.layout')

@section('content')
    <h1>Cập nhật Sinh viên {{ $student->TenSinhVien  }}</h1>
    <a href="{{ route('students.index') }}" class="btn btn-info">Quay lại  danh sách</a>
    @if(\Session::has('msg'))
        <div class="alert alert-success">
            {{ \Session::get('msg') }}
        </div>
    @endif

    <form action="{{ route('students.update', $student) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Tên Lớp</label>
        <input type="text" class="form-control" name="TenLop" id="TenLop" value="{{ $student->TenLop }}">
        <label for="">Tên Sinh viên</label>
        <input type="text" class="form-control" name="TenSinhVien" id="TenSinhVien" value="{{ $student->TenSinhVien }}">
        <label for="">Ảnh Sinh viên</label>
        <input type="file" class="form-control" name="Anh" id="Anh" >
        <img src="{{ \Illuminate\Support\Facades\Storage::url($student ->Anh) }}" width="100px">

        <label for="Is_Active">Trạng Thái</label>

        <input type="radio" value="{{ \App\Models\Student::ACTIVE }}"
                @if($student->Is_Active == \App\Models\Student::ACTIVE) checked @endif
                name="Is_Active" id="Is_Active-1">
        <label for="Is_Active-1">Đi Học</label>       
        
        <input type="radio" value="{{ \App\Models\Student::ACTIVE }}"
                @if($student->Is_Active == \App\Models\Student::INACTIVE) checked @endif
                name="Is_Active" id="Is_Active-2">
       
        <label for="Is_Active-2">Nghỉ Học</label>  
        <br>
       
        <label for="">Chú Thích</label>
        <input type="text" class="form-control" name="ChuThich" id="ChuThich" value="{{ $student->ChuThich }}">
        
        <button type="submit" class="btn btn-primary">Save</button>
        
    </form>
@endsection