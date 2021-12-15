<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = DB::table('user')->get();
        return response()->json([
            "success" => true,
            "message" => "List user",
            "result" =>  $user
            ]);
    }
    public function detail($id)
    {
        $user = DB::table('user')->where('id',$id)->get();
        return response()->json([
            "success" => true,
            "message" => "List user",
            "result" =>  $user
            ]);
    }
}
