<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Doi;
use App\Models\Expert;
use App\Models\Issue;
use App\Models\News;
use App\Models\User;
use App\Models\Year;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function mailSend()
    {
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];


        Mail::to('obloqulovshoyim1@gmail.com')->send(new MailSend($mailData));

        dd("Email is sent successfully.");
    }
    public function index(){
        $journals = Issue::leftJoin('years', function ($join){
            $join->on('years.id', '=', 'issues.year_id');
        })->select('issues.*', 'years.year')->latest()->take(4)->get();

        $news = News::latest()->take(3)->get();

        return view('web.index',[
            'journals' => $journals,
            'news' => $news,
            'c_users' => User::count(),
            'c_articles' => Doi::count(),
            'c_issues' => Issue::count(),
            'c_experts' => Expert::count(),
        ]);
    }

    public function about(){
        return view('web.about');
    }

    public function news(){
        return view('web.news',[
            'news' => News::orderBy('id','DESC')->get(),
        ]);
    }

    public function newsShow(News $news){
        return view('web.newsShow',[
                'news' => $news,
                'latest6'=>News::latest()->take(6)->get(),
        ]);
    }

    public function archive(){
        $journals = Issue::leftJoin('years', function ($join){
            $join->on('years.id', '=', 'issues.year_id');
        })->select('issues.*', 'years.year')->orderBy('number')->get();

        return view('web.archive',[
            'journals' => $journals,
            'years' => Year::all(),
        ]);
    }

    public function dois($id){
        $issue = Issue::find($id);
        $dois = Doi::where('issue_id','=',$issue->id)->orderBy('id','desc')->get();

        return view('web.archive_dois',[
            'dois'=>$dois,
            'journal'=>$issue,
        ]);
    }

    public function doi_show(Doi $doi){
        return view('web.doi_show',[
            'doi'=>$doi,
        ]);
    }

    public function experts(){
        return view('web.experts',[
            'experts' => Expert::all(),
        ]);
    }

}
