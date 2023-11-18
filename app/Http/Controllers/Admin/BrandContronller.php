<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandContronller extends Controller
{
    const PATH_VIEW = 'admin.brands.';
    const PATH_UPLOAD = 'brands';
    public function index()
    {
        $data = Brand::query()->latest('id')->paginate(5);
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }
    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }
    public function store()
    {
        request()->validate([


        ]);
        $data = \request()->except('img');
        if (\request()->hasFile('img')) {
            $data['img'] = Storage::put(self::PATH_UPLOAD, \request()->file('img'));
        }
        Brand::query()->create($data);
        return back()->with('msg', 'thao tac thanh cong');
    }
    public function show(Brand $brand)
    {
        return view(self::PATH_UPLOAD . __FUNCTION__, compact('brand'));
    }
    public function edit(Brand $brand)
    {
        return view(self::PATH_UPLOAD . __FUNCTION__, compact('brand'));
    }
    public function update(Brand $brand): \Illuminate\Http\RedirectResponse
    {
        request()->validate([


        ]);
        $data = \request()->except('img');
        if (\request()->hasFile('img')) {
            $data['img'] = Storage::put(self::PATH_UPLOAD, \request()->file('img'));
        }
        $oldImg = $brand->img;
        Brand::query()->update($data);
        if(\request()->except('img') && Storage::exists( $oldImg)){
            Storage::delete($oldImg);
        }
        return back()->with('msg', 'thao tac thanh cong');
    }
    public function delete(Brand $brand)
    {
        $brand->delete();

        if (Storage::exists($brand->img)) {
            Storage::delete($brand->img);
        }


        return back()->with('msg', 'Thao tác thành công');
    }
}
