<?php


namespace App\Http\Controllers\Users;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController
{
    public function show(){
        if(Auth::check()){
            $id = Auth::id();
            $user = User::find($id);
        }else{
            return view('login');
        }
    }

    public function showDetailForm(){
        if (Auth::check()) {
            return view('auth.detail_user')->with('user', json_decode(Auth::user(), true));
        }else{
            return redirect("/home");
        }
    }

    public function update(Request $request){
        $id = Auth::id();
        $user = User::where('id',$id);
        $user->update([
            'fullname' => $request['fullname'],
            'unit' => $request['unit'],
            'other_email' => $request['other_email'],
            'phone_number' => $request['phone_number'],
            'other_phone_number' => $request['other_phone_number'],
            'position' => $request['position'],
            'academic_rank' => $request['academic_rank'],
            'academic_degree' => $request['academic_degree'],
            'note' => $request['note'],
        ]);
        return redirect('/detail_user');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data){
        return Validator::make($data,[
            'fullname' => ['required', 'string', 'max:255'],
            'unit' => ['string', 'max:255'],
            'other_email' => ['string', 'email', 'max:255', 'unique:users'],
            'phone_number' => ['string', 'max:255'],
            'other_phone_number' => ['string', 'max:255'],
            'postition' => ['string', 'max:255'],
            'academic_rank' => ['string', 'max:255'],
            'academic_degree' => ['string', 'max:255'],
        ]);
    }
}
