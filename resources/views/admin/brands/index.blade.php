@extends('layout.master')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">danh sách Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <!-- Content Row -->
        {{-- <div class="row"> --}}

        {{-- <a href="{{ route('admin.brands.create') }}" class="btn btn-info">Thêm Khách hàng</a> --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <td>ID</td>
                            <td>name</td>
                            <td>Img </td>
                            <td>IS SHOW</td>

                        </tr>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
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
                </div>
            </div>
        </div>
    </div>
    </div>
    @endforeach
    </div>
    </div>
    </table>
@endsection
