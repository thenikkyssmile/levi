<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        //$data = [
            //'name'      => 'elon',
            //'email'     => 'elon@admin.com',
            //'password'  => 'password',
        //];
        //User::create($data);
        // --- Eloquent ORM ---
        //$user = new User();
        //$user->name = 'nikkys';
        //$user->email = 'nikkys@nikkys.com';
        //$user->password = bcrypt('nikkys');
        //$user->save();

        //User::where('id', 3)->delete();
        //var_dump($user);

        //User::where('id', 4)->update(['name'=>'admin', 'email'=>'nikkys@admin.com', 'password'=>bcrypt('password')]);

        $user = User::all();

        // --- Raw SQL Queries ---
        //dd($user);

        // DB::insert('insert into users (name,email,password) values (?,?,?)', ['nikkys', 'nikkys@admin.com', 'pasword']);
       
       // DB::update('update users set name = ?, email = ? where id = 2', ['admin', 'admin@admin.com']);

       // DB::delete('delete from users where id =  1');

       //$users = DB::select('select * from users');

       return $user;
       return view('home');
    }
}
