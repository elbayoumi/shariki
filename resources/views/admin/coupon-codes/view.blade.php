@extends('admin.layouts.app')
@section('title', "$id->code Details")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-12 text-center">
                <div class="card shadow-none bg-transparent border border-success mb-3">
                  <div class="card-body">
                    <h5 class="card-title"><strong>{{ $id->code }}</strong></h5>
                    <p class="card-text">
                        <hr class="">
                        <strong>Coupon Code Details : </strong><br>
                        <span>Discount: {{ $id->percent }}%</span><br>
                        <span>Times of use: {{ $id->usage_times }} times</span><br>
                        <span>Last time usage: {{ $id->created_at->diffforhumans() }}</span><br>
                        <span>Date of creation: {{ $id->created_at->diffforhumans() }}</span><br>
                        <hr class="">
                        <strong>Actions : </strong><br>
                        <div class="btn-group mt-3" role="group" aria-label="">
                            <a href="{{ route('admin.coupons.index') }}"><button type="button" class="btn btn-primary me-1"><i class="tf-icons bx bx-left-arrow"></i></button></a>
                            <a href="{{ route('admin.coupons.edit',['id'=>$id->id]) }}"><button type="button" class="btn btn-outline-warning me-1"><i class="tf-icons bx bx-edit"></i></button></a>
                            <a href="{{ route('admin.coupons.delete',['id'=>$id->id]) }}"><button type="button" class="btn btn-outline-danger me-1"><i class="tf-icons bx bx-trash"></i></button></a>
                            <a href="{{ route('admin.dashboard') }}"><button type="button" class="btn btn-success me-1"><i class="tf-icons bx bx-home"></i></button></a>
                        </div>
                    </p>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection
