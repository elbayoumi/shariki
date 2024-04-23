@extends('admin.layouts.app')
@section('title', 'Manage Requests')

@section('content')

<form class="mb-3 row" action="" method="GET">
    <div class="col-sm-12 mt-3">
        <div class="row">
            <div class="col-sm-6 mb-2">
                <input class="form-control" type="text" placeholder="Email..." name="email" value="{{ request('email') }}">
            </div>
            <div class="col-sm-2 mt-2">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheck3" name="verified" {{ request()->has('verified') ? 'checked' : ''}}>
                    <label class="form-check-label" for="flexSwitchCheck3">Verified</label>
                </div>
            </div>
            <div class="col-sm-2 mt-2 mr-2">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheck1" name="active" {{ request()->has('active') ? 'checked' : ''}}>
                    <label class="form-check-label" for="flexSwitchCheck1">Active</label>
                </div>
            </div>
            <div class="col-sm-2 mt-2">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheck2" name="requests" {{ request()->has('requests') ? 'checked' : ''}}>
                    <label class="form-check-label" for="flexSwitchCheck2">Requests</label>
                </div>
            </div>
        </div>

        <div class="text-center">
            <div class="btn-group col-sm-2" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="gender" id="male" value="male" {{ request()->input('gender') == 'male' ? 'checked' : '' }}>
                <label class="btn btn-outline-secondary" for="male"><i class='bx bx-male-sign'></i></label>

                <input type="radio" class="btn-check" name="gender" id="female" value="female" {{ request()->input('gender') == 'female' ? 'checked' : '' }}>
                <label class="btn btn-outline-secondary" for="female"><i class='bx bx-female-sign'></i></label>

                <input type="radio" class="btn-check" name="gender" id="all" value="all" {{ request()->input('gender') == 'all' ? 'checked' : '' }}>
                <label class="btn btn-outline-secondary" for="all"><i class='bx bxs-yin-yang'></i></label>
            </div>
        </div>

        <div class="row text-center mt-3">
            <div class="col-sm-12">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </div>
    </div>

</form>



    <div class="table-responsive text-nowrap">
      <table class="table text-center">
        <caption class="ms-4">
          {{ $users->links('pagination::sneat') }}
        </caption>
        <thead>
          <tr>
            <th class="left">id</th>
            <th>Verified</th>
            <th>M00</th>
            <th>Requests</th>
            <th>Active</th>
            <th>Joined at</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{!! $user->verified ? '<i class="bx bxs-like btn btn-outline-success"></i>' : '<i class="bx bxs-dislike btn btn-outline-danger"></i>' !!}</td>
                    <td>d</td>
                    <td>{!! $user->requests->count() > 0 ? '<i class="btn btn-outline-success">' . $user->requests_count . '</i>' : '<i class="btn btn-outline-danger">0</i>' !!}</td>
                    <td>{!! $user->active ? '<i class="bx bxs-like btn btn-outline-success"></i>' : '<i class="bx bxs-dislike btn btn-outline-danger"></i>' !!}</td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach

        </tbody>
      </table>
    </div>
  </div>
@endsection
