<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = 'customer.';
    public function index()
    {
        $data = Customer::query()->latest('id')->paginate(5);
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
        Customer::query()->create($request->all());
        return back()->with('msg','thêm thành công chúc mừng bạn thêm được khách hàng mới');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view(self::PATH_VIEW.__FUNCTION__,compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->update($request->all());
        return back()->with('msg','sửa thành công');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return back()->with('msg','xoá thành công');

    }
}
