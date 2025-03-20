<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Doi;
use App\Models\Expert;
use App\Models\Issue;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return redirect()->route('admin.index');
    }

    public function home()
    {
        //admin page
        //did you guess is

        return view('admin.home',[
            'users' => User::count(),
            'articles' => Doi::count(),
            'issues' => Issue::count(),
            'experts' => Expert::count(),
        ]);
    }
}
