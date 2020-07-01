<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // DB::insert('insert into users (name,email,password) values (?,?,?)', ['nikkys', 'nikkys@admin.com', 'pasword']);
       
       // DB::update('update users set name = ?, email = ? where id = 2', ['admin', 'admin@admin.com']);

       // DB::delete('delete from users where id =  1');

       //$users = DB::select('select * from users');
       //return $users;
       return view('home');
    }
}
