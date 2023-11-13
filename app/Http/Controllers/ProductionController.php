<?php

namespace App\Http\Controllers;

use App\Models\Production;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = 'production.';
    const PATH_UPLOAD = 'production';
    public function index()
    {
        $data = Production::query()->paginate(5);
        return view(self::PATH_VIEW.__FUNCTION__,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW.__FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $data = $request->except('Thumbnail');
        if ($request->hasFile('Thumbnail')) {
            $data['Thumbnail'] = Storage::put(self::PATH_UPLOAD, $request->file('Thumbnail'));
        }
        Production::query()->create($data);
        return back()->with('msg', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Production $production)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Production $production)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Production $production)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Production $production)
    {
        //
    }
}
