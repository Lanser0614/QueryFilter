<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Service\UsersFilter;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request  $request)
    {
        $user = User::with('posts');

        $users = (new UsersFilter($user, $request))->apply()->get();
//        if ($request->has('name')){
//            $user->where('name', 'like', "%$request->name%");
//        }
//        if ($request->has('gender')){
//            $user->where('gender',  "$request->gender");
//        }
//
//        if ($request->has('title')){
//            $user->whereHas('posts', function ($query) use ($request){
//                $query->where('title', 'like', "%$request->title%");
//            });
//        }

//        $users = $users->paginate(10);
//        if ($request->has('name')){
//            $user->where('name', 'like', "%$request->name%");
//        }

        return $users;
    }
}
