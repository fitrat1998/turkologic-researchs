<?php

namespace App\Http\Controllers;

use App\Mail\MailSend;
use App\Models\User;
use Ichtrojan\Otp\Otp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Session;

class AuthController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'admin') return redirect()->route('admin.index');
            if (Auth::user()->role == 'user') return redirect()->route('profile.index');
        }

        return view('web.login');
    }

    public function register()
    {

        if (Auth::check()) {
            if (Auth::user()->role == 'user') return redirect()->route('profile.index');
        }
        return view('web.register');
    }


    public function login(Request $request)
    {
        $redirect = "login";

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = $request->only('email', 'password');
//        $user['phone'] = str_replace('-','',$user['phone']);

        if (Auth::attempt($user)) {
            $role = Auth::user()->role;
            $r = new RoleController();
            $successMessage = $r->getAuthMessage($role);
            $redirect = $r->redirectRole($role);
            session(['userRole' => $role]);
            session(['userDescription' => $r->getRoleDescription($role)]);
            return redirect()->route($redirect)->with('success_msg', $successMessage);
        }

        return redirect()->back()->with('error_msg', "Login yoki parol xato!");
    }

    public function registerStore(Request $request)
    {
        $redirect = 'register';

        $user = $this->validateData();
        $user['role'] = 'user';

        session()->put('user_register', [
                'fish' => $user['fish'],
                'email' => $user['email'],
                'password' => $user['password'],
                'role' => 'user',
            ]
        );
        session()->put('otp_email', $user['email']);

       $obj = new Otp();
        $obj->to_mail  = $user['email'];
        $otp = $obj->generate(session()->get('otp_email'), 6, 5);

        Mail::to($user['email'])->send(new MailSend([
            "title" => env("APP_NAME"),
            'body'  => 'Thank you for participating!',
            "password" => $otp->token
        ]));


        return redirect()->route('otp')->with('success_msg', "Elektron pochtangiz xabar jo'natildi");

    }

    public function otp()
    {
        if (!session()->has('otp_email')) return redirect()->route('register');
        return view('web.otp');
    }

    public function re_otp(): \Illuminate\Http\RedirectResponse
    {
        if (!session()->has('otp_email')) return redirect()->route('register');
        $obj = new Otp();
        $otp = $obj->generate(session()->get('otp_email'), 6, 5);

        Mail::to(session()->get('otp_email'))->send(new MailSend([
            "title" => env("APP_NAME"),
            "password" => $otp->token,
            'body' => 'Thank you for participating!',
        ]));

        return redirect()->route('otp')->with('success_msg', "Elektron pochtangiz xabar jo'natildi");
    }

    public function otp_check(Request $request): \Illuminate\Http\RedirectResponse
    {
        $obj = new Otp();
        $otp = $obj->validate(session()->get('otp_email'), $request->token);
        if ($otp->status) {
            $user = session()->get('user_register');
            $u['email'] = $user['email'];
            $u['password'] = $user['password'];

            $user['password'] = bcrypt($user['password']);
            if (User::create($user)) {

                if (Auth::attempt($u)) {
                    $role = Auth::user()->role;
                    $r = new RoleController();
                    $successMessage = $r->getAuthMessage($role);
                    $redirect = $r->redirectRole($role);
                    session(['userRole' => $role]);
                    session(['userDescription' => $r->getRoleDescription($role)]);
                    return redirect()->route($redirect)->with('success_msg', $successMessage);
                }
            }
        }


        return redirect()->route('register')->with('error_msg', "Ro'yxatdan o'tishda xatolik yuz berdi");
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect(route('index'));
    }

    public function validateData()
    {
        return request()->validate([
            'email' => 'required',
            'password' => 'required|min:8',
            'fish' => 'required',
        ], [
            'required' => "Bo'sh maydonlar mavjud, ularni to'ldiring!!!",
            'min' => "Parol uzunligi 8 belgidan kam bo'lmasin!!!",
        ]);
    }
}
