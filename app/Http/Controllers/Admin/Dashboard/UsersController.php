<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $query = User::query();

        if (request()->filled('email')) {
            $query->where('email', 'like', '%' . request()->email . '%');
        }

        if (request()->has('active')) {
            $query->where('active', true);
        }

        if (request()->has('paid')) {
            $query->where('paid', true);
        }

        if (request()->has('requests')) {
            $query->whereHas('requests');
        }




        $query->withCount('requests');

        $users = $query->paginate(10);

        return view('admin.users.index', compact('users'));
    }
}
