<?php

namespace App\Http\Controllers;

use App\Models\Student;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = 'student.';
    const PATH_UPLOAD = 'student';
    public function index()
    {
        $data = Student::query()->latest('id')->paginate(5);
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('Anh');
        if ($request->hasFile('Anh')) {
            $data['Anh'] = Storage::put(self::PATH_UPLOAD, $request->file('Anh'));
        }
        Student::query()->create($data);
        return back()->with('msg', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $data = $request->except('Anh');
        if ($request->hasFile('Anh')) {
            $data['Anh'] = Storage::put(self::PATH_UPLOAD, $request->file('Anh'));
        }
        $deleteSold = $student->Anh;
        $student->update($data);
        if ($request->hasFile('Anh')) {
            Storage::delete($deleteSold);
        }
        return back()->with('msg', 'Sủa thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        if (Storage::exists($student->Anh)) {
            Storage::delete($student->Anh);
        }


        return back()->with('msg', 'Thao tác thành công');
    }
}
