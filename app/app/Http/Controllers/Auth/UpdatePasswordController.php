<?php


namespace App\Http\Controllers\Auth;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UpdatePasswordController
{
    /**
     * Display the form to update a password reset link.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function showRequestForm()
    {
        if (Auth::check()) {
            return view('auth.passwords.reset');
        }else{
            return redirect("/home");
        }
    }

    public function updatePassword(Request $request){
        if (Auth::check()) {
//            $this->validator($request->all())->validate();

            $old_password = $request['old-password'];
            $password = $request['password'];

            $user = Auth::user();

            if($user->password == $old_password){
                $user->update(['password' => $password]);
                $user->save();
                return redirect('/password/update')->with('status', 'Thay đổi mật khẩu thành công!');
            }else{
                return redirect('/password/update')->with('status', 'Mật khẩu không trùng khớp !');
            }
        }else{
            return redirect("/home");
        }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'old-password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:2'],
            'password_confirmation' => ['required', 'string', 'min:1', 'confirmed'],
        ]);
    }

}
