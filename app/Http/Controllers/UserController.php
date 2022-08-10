<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Encryption\DecryptException;

use App\Utilities\SiteHelper;

use App\Mail\RegisterMailable;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    public function index(Request $request) {

        // $name = $request->name;

        // return view('users.add_user', ['name' => 'Angel']);}
        // return view('users.add_user')->with('name','Angel');

        return view('users.add_user');

    }


    // Agregar usuario
    public function add_user(Request $request) {

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $date = SiteHelper::custom_date_format();

        // encriptar => Crypt::encryptString(string),

        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'password' => Crypt::encryptString($password),
            'created_at' => $date,
            'updated_at' => $date,
        ]);


        $correo = new RegisterMailable();

        Mail::to('angeltraviesoc@gmail.com')->send($correo);


        return view('users.added_user');

    }


    // Obtener usuarios
    public function get_users(Request $request) {
        
        $users = DB::table('users')->get();


        return view('users.get_users', [
            'users' =>  $users,
        ]);

    }


    // formulario eliminar usuario
    public function delete_user_form(Request $request) {
        return view('users.delete_user_form');
    }


    // Eliminar usuario
    public function delete_user(Request $request) {

        $name = $request->name;


        DB::table('users')->where('name', $name)
            ->delete()
            ->limit(1);


        return view('users.delete_user_form', [
            'status' => 10,
        ]);

    }


    // formulario editar usuario
    public function edit_user_form(Request $request) {
        return view('users.edit_user_form');
    }


    // Editar informacion de usuario
    public function edit_user(Request $request) {

        $name = $request->name;
        $email = $request->email;
        $password = $request->passsword;


        DB::table('users')
            ->where('name', $name)
            ->update([
                'email' => $email,
                'password' => Crypt::encryptString($password),
                'updated_at' => SiteHelper::custom_date_format(),
            ])
            ->limit(1);


        return view('users.edit_user_form', [
            'status' => 10,
        ]);

    }


}
