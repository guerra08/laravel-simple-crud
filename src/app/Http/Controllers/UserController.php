<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function registerUser(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return view('add-user-success', ['user' => $user]);
    }

    public function index(Request $request){
        return view('index', ['users' => User::all()]);
    }

    public function deleteUser($id){
        $user = User::whereId($id);
        if($user !== null){
            try {
                $user->delete();
            } catch (\Exception $e) {
            }
        }
        return redirect('/');
    }

}
