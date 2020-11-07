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
            return die($user->other_email);
        }else{
            return view('login');
        }
    }

    public function update(Request $request){
        $this->validator($request->all())->validate();
        $id = Auth::id();
        $user = User::find($id);
        $user->update([
            'fullname' => $request['fullname'],
            'unit' => $request['unit'],
            'other_email' => $request['other_email'],
            'phone_number' => $request['phone_number'],
            'other_phone_number' => $request['other_phone_number'],
            'postition' => $request['postition'],
            'academic_rank' => $request['academic_rank'],
            'academic_degree' => $request['academic_degree'],
        ]);
    }

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
