<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; //Bawrt buộc phải khai báo khi dùng database

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function login(){
        return view('login');
    }
    function tableusers()
    {
        $user = DB::table('users')->get();
        return view('users',['users'=>$user]);
    }
}
