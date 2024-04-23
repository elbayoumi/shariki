<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CouponRequest;
use App\Models\CouponCode;
use Illuminate\Http\Request;

class CouponCodesController extends Controller
{
    public function index(Request $request)
    {

        $CouponCodes = CouponCode::query();

        if ($request->filled('code'))
        {
            $CouponCodes->where('code', 'like', '%'.$request->code.'%');
        }

        if ($request->filled('to_percent')) {
            $CouponCodes->where('percent', '<', $request->to_percent);
        }

        if ($request->filled('from_percent')) {
            $CouponCodes->where('percent', '>', $request->from_percent);
        }

        $CouponCodes = $CouponCodes->paginate(10);

        return view('admin.coupon-codes.index',compact('CouponCodes'));


    }

    public function add()
    {
        return view('admin.coupon-codes.add');
    }


    public function view(CouponCode $id)
    {
        return view('Admin.coupon-codes.view',compact('id'));
    }

    public function save(CouponRequest $request)
    {
        $CouponCode = CouponCode::create($request->validated());
        return redirect()->route('admin.dashboard')->with('success', 'Coupon code ('.$CouponCode->code.') added successfully');
    }

    public function edit(CouponCode $id)
    {
        return view('Admin.coupon-codes.edit',compact('id'));
    }

    public function update(CouponCode $id,Request $request)
    {
        $request->validate([
            'code'=>'required|string',
            'percent'=>'required|numeric|between:1,99',
        ]);


        $id->update($request->only('code','percent'));
        return redirect()->route('admin.dashboard')->with('success', 'Coupon code ('.$id->code.') updated successfully');
    }

    public function delete(CouponCode $id)
    {
        return view('Admin.coupon-codes.delete',compact('id'));
    }

    public function destroy(CouponCode $id)
    {
        $id->delete();
        return redirect()->route('admin.dashboard')->with('fail', 'Coupon code ('.$id->code.') deleted successfully');
    }
}
