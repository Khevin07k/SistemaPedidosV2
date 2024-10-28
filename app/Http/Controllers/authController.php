<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = User::create([
                'name' => $request->Nombres,
                'email' => $request->Email,
                'password' => Hash::make($request->password)
            ]);
            $personas = $user->persona()->create([
                'Nombres' => $request->Nombres,
                'Apellidos' => $request->Apellidos,
                'Ci' => $request->Ci,
                'Direccion' => $request->Direccion,
                'Email' => $request->Email,
                'Telefono' => $request->Telefono,
            ]);
            $cliente = $personas->cliente()->create([
                'Nit' => $request->Nit,
            ]);
            DB::commit();
            return response([
                "data" => 1,
                "mensaje" => "ok",
                "status" => Response::HTTP_CREATED
            ]);
        }catch (\Exception $e){
            DB::rollBack();
            return response([
                "data" => null,
                "mensaje" => "error",
                "status" => Response::HTTP_NOT_FOUND
            ]);
        }
    }

    public function login(StoreLoginRequest $request)
    {
        $res = Auth::attempt($request->only("email", "password"));
        if (!$res) {
            return response(
                [
                    "data" => Null,
                    "message" => "Credenciales invalidos",
                    "status" => "Error",
                ],
                Response::HTTP_UNAUTHORIZED
            );
        } else {
            //  = $res->get('persona');
            $user = Auth::user();
            if ($user) {
                $user = User::with('persona')->find($user->id); // Cargar la relación 'persona' usando 'with'
            }
            $token = $request->user()->createToken("token")->plainTextToken;
//            $cookie = cookie('cookie_token', $token, 30 * 24);
            return  response([
                "data" => $user,
                "access_token" => $token,
                "status" => Response::HTTP_OK
            ])/*->withoutCookie($cookie)*/;
        }
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            // $request->user()->tokens->each(function ($token, $key) {
            //     $token->delete();
            // });
            // return response([
            //     "Mensaje" => "Session Cerrada satisfactoriamente",
            //     'status' => Response::HTTP_OK
            // ]);
            $request->user()->tokens()->delete();
            return response([
                "Mensaje" => "Session Cerrada satisfactoriamente",
                'status' => Response::HTTP_OK
            ]);
        }
        else {
            return response(['error' => 'Unauthenticated', Response::HTTP_UNAUTHORIZED]);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
