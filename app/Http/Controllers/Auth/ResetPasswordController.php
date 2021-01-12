<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Functions\Functions;
use Validator;
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function guard()
    {
        return Auth::guard('customer');
    }

    public function reset_password(Request $request)
    {
        try {
            $validation = array(
                'email' => 'required|email',
            );

            $validator = Validator::make($request->all(), $validation);

            if ($validator->fails()) {

                return redirect('forgot')->withErrors($validator->errors());
            }

            $customer = Customer::where("email", "=", $request->email)->first();
            if (!empty($customer)) {
                $password = substr(md5(microtime()), rand(0, 26), 7);
                $replaces['NAME'] = $customer->firstName . ' ' . $customer->lastName;
                $replaces['PASSWORD'] = $password;
                $affectedRows = Customer::where('id', '=', $customer->id)->update(array('password' => bcrypt($password)));
                $mail = Functions::sendEmail($request->email,'Reset Password', 'New password: '.$password);
                \Session::flash('success', 'Your new password has been emailed.');
                return redirect()->route('login');
            } else {
                \Session::flash('success', 'Email not found.');
                return redirect()->back();
            }

            return redirect()->route('login');
        }catch (\Exception $exception){
            return redirect()->back()->withErrors($exception->getMessage());
        }

    }
}
