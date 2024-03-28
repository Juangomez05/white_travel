<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
   public function show_register(){
    return view('login.register');
   }

   public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->birthday = $request->birthday;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Asegúrate de encriptar la contraseña
        $user->user_type = 'normal';
        $user->save();

        // Redireccionar a la página de inicio o a donde sea necesario después del registro
        return redirect('/login');
    }

}
