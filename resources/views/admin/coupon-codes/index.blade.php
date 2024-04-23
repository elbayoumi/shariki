@extends('admin.layouts.app')
@section('title', 'Manage Coupon Codes')

@section('content')

    <form class="mb-3 row" action="" method="GET">
        <div class="col-sm-3 mb-2">
            <input class="form-control" type="number" placeholder="From %" name="from_percent" value="{{ request('from_percent') }}">
        </div>

        <div class="col-sm-3 mb-2">
            <input class="form-control" type="number" placeholder="To %" name="to_percent" value="{{ request('to_percent') }}">
        </div>

        <div class="col-sm-4 mb-2">
            <input class="form-control" type="text" placeholder="Search..." name="code" value="{{ request('code') }}">
        </div>

        <div class="col-sm-2">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>



    <div class="table-responsive text-nowrap">
      <table class="table">
        <caption class="ms-4">
          {{ $CouponCodes->links('pagination::sneat') }}
        </caption>
        <thead>
          <tr>
            <th>Code</th>
            <th>Percent</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($CouponCodes as $CouponCode)
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $CouponCode->code }}</strong></td>
                    <td>{{ $CouponCode->percent }}</td>
                    <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('admin.coupons.view',['id'=>$CouponCode->id]) }}"><i class="bx bx-show me-1"></i> View</a>
                        <a class="dropdown-item" href="{{ route('admin.coupons.edit',['id'=>$CouponCode->id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                        <a class="dropdown-item" href="{{ route('admin.coupons.delete',['id'=>$CouponCode->id]) }}"><i class="bx bx-trash-alt me-1"></i> Delete</a>
                        </div>
                    </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
      </table>
    </div>
  </div>
@endsection
