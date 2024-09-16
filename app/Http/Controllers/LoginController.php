<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use mysql_xdevapi\Exception;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['email' => 'Credenciales inválidas']);
//        return view('usuario.login');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('/');
    }
    public function register(Request $request){
        DB::beginTransaction();
        try {
            $user = User::create([
                'name' => $request->Nombres,
                'email' => $request->Email,
                'password' => Hash::make($request->password)
            ]);
//            die($user->personas);
            $personas = $user->persona()->create([
                'Nombres' => $request->Nombres,
                'Apellidos' => $request->Apellidos,
                'Ci' => $request->Ci,
                'Direccion' => $request->Direccion,
                'Email' => $request->Email,
                'Telefono' => $request->Telefono,
            ]);
//            die($personas);
            $cliente = $personas->cliente()->create([
                'Nit' => $request->Nit,
            ]);
//            dd($cliente);
            DB::commit();
            return redirect()->route('index');
        }catch (\Exception $e){
            DB::rollBack();
//            $e->getMessage();
//            die($e->getMessage());
            return redirect()->route('register');
        }



    }
}
