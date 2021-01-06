<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use function Sodium\add;

class SuperAdminController extends Controller
{

    public function index(Request $request)
    {
        $roles = [];
        if (isset($request->role_1)) array_push($roles, 1);
        if (isset($request->role_2)) array_push($roles, 2);
        if (isset($request->role_3)) array_push($roles, 3);
        if (isset($request->role_4)) array_push($roles, 4);
        if (empty($roles)) $roles = [1, 2, 3, 4];

        $status = [];
        if (isset($request->enable)) array_push($status, 1);
        if (isset($request->disable)) array_push($status, 0);
        if (empty($status)) $status = [0, 1];

        $isChecked = [];
        $isChecked['role_1'] = in_array(1, $roles);
        $isChecked['role_2'] = in_array(2, $roles);
        $isChecked['role_3'] = in_array(3, $roles);
        $isChecked['role_4'] = in_array(4, $roles);
        $isChecked['enable'] = in_array(1, $status);
        $isChecked['disable'] = in_array(0, $status);

        $list_users = User::query()
                    ->whereIn('role', $roles)
                    ->whereIn('status', $status)
                    ->orderBy('fullname')
                    ->get();
        return view('superAdmin/superAdmin')->with('listUser', json_decode($list_users, true))->with('is_checked', $isChecked);

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
        $user->status = $request->status;
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
        $user->status = 1;
        $user->save();

        return redirect('superAdmin')->with('status',"create successfully");
    }

    public function search(Request $request)
    {
        $user = User::where('username', 'LIKE', $request->name)->orWhere('email', 'LIKE' , $request->name)->all();
        return view('superAdmin/superAdmin')->with('listUser', json_decode($user, true));
    }

    public function rm_user(Request $request)
    {
        $user = User::where('username', '=', $request->deluser)->first();
        $user->status = 0;
    }
    // public function show_data()
    // {
    //     $makeups=DB::table('products');
    //         return view('manageProducts',compact('makeups','skincares','hairs','bodys','foods','tools'));
    // }

}
