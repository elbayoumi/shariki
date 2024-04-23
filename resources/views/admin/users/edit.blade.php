@extends('admin.layouts.app')
@section('title', "Edit Coupon Code ' $id->code '")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.coupons.update',['id'=>$id->id]) }}">

                        @csrf

                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Code</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge" @error('code') style="border: 1px solid rgb(228, 0, 0); box-shadow: 0 0 3px rgb(228, 0, 0);border-radius:0.3rem" @enderror>
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bxs-coupon"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Code" name="code" value="{{ $id->code }}">
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Percent</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge" @error('percent') style="border: 1px solid rgb(228, 0, 0); box-shadow: 0 0 3px rgb(228, 0, 0);border-radius:0.3rem" @enderror>
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bxs-offer"></i></span>
                            <input type="number" class="form-control" id="basic-icon-default-fullname" placeholder="Percent" name="percent" value="{{ $id->percent }}">
                          </div>
                        </div>
                      </div>
                      <div class="row justify-content-center">
                        <div class="col-sm-10 text-center">
                            <button type="submit" class="btn btn-primary mt-3">Edit ' {{ $id->code }} '</button>
                        </div>
                    </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>


    @if($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                Toastify({
                    text: "{{ $error }}",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "center",
                    stopOnFocus: true,
                    style: {
                        background: "linear-gradient(to right, #FF5733, #FF0000)"
                    }
                }).showToast();
            </script>
        @endforeach
    @endif

@endsection
