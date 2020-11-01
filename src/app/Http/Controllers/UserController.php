<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
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
        return view('user-success', ['user' => $user]);
    }

    public function updateUser(Request $request, $id){
        $currentUser = User::findOrFail($id);

        $this->validate($request, [
            'name'  => 'required',
            'email' => 'required'
        ]);

        try{
            $currentUser->fill($request->all())->save();
        }catch(Exception $e){
            return redirect('/');
        }

        return redirect('/');
    }

    public function index(Request $request){
        return view('index', ['users' => User::all()]);
    }

    public function getUserEditPage($id){
        $user = User::whereId($id)->first();
        if($user !== null){
            return view('add-user', ['user' => $user]);
        }
        return redirect('/');
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
