<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SuperAdminController extends Controller
{

    public function index()
    {
        $list_users = User::all();
        return view('superAdmin/superAdmin')->with('listUser', json_decode($list_users, true));

    }
    public function detail_infor_user()
    {
        return view('superAdmin/detail_user');

    }

    public function update_info_user(Request $request){
        $user = User::where('username', '=', $request->username)->first();
        $user->fullname = $request->fullname;
        $user->unit = $request->unit;
        $user->role = $request->role;
        $user->other_email = $request->other_email;
        $user->phone_number = $request->phone_number;
        $user->other_phone_number = $request->other_phone_number;
        $user->position = $request->position;
        $user->academic_rank = $request->academic_rank;
        $user->academic_degree = $request->academic_degree;
        $user->note = $request->note;

        $user->save();
        return redirect('superAdmin')->with('status',"update successfully");
    }

    protected function validator(array $data){
        return Validator::make($data,[
            'username' => ['required', 'string', 'max:255'],
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

    public function create_new_account(Request $request){
//        dd($request);
        $user = new User();

        $user->username = $request->username;
        $user->password = $request->password;
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->unit = $request->unit;
        $user->role = $request->role;
        $user->other_email = $request->other_email;
        $user->phone_number = $request->phone_number;
        $user->other_phone_number = $request->other_phone_number;
        $user->position = $request->position;
        $user->academic_rank = $request->academic_rank;
        $user->academic_degree = $request->academic_degree;
        $user->note = $request->note;

        $user->save();

        return redirect('superAdmin')->with('status',"create successfully");
    }

    // public function show_data()
    // {
    //     $makeups=DB::table('products');
    //         return view('manageProducts',compact('makeups','skincares','hairs','bodys','foods','tools'));
    // }

}
