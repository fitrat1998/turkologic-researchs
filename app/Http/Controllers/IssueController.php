<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\Year;
use Hamcrest\Core\Is;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IssueController extends Controller
{

    public function index(Request $request)
    {
        $year = $request->year;

        $cmp = "=";
        if(is_null($year)) $cmp = "!=";

        $issues = Issue::where('issues.yil',$cmp,$year)->get();

        return view('admin.issues',[
            'this_year' => $year,
            'years' =>  Year::all(),
            'issues' => $issues,
        ]);
    }

    public function store(Request $request)
    {
        $this->validateData();
        $issue = $request->number;
        $year = (Year::find($request->year_id) )->year;
        $file_name = $year . "_yil_".$issue."_son.pdf";

        $validated = $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
                'file' => 'file|mimetypes:application/pdf',
        ]);

        $ff = $request->file('file')->storeAs('public/journals',$file_name);


        $image = $request->file('image');
        $image_name = md5(time()) . "." . $image->extension();
        $image->move(public_path().'/images/journals',$image_name);
        // $save = $request->file('image')->storeAs('public/images/journals',$image_name);



        $data['image'] = $image_name;

        //===========================\\
        $issue = new Issue();
        $issue->number = $request->number;
        $issue->year_id = $request->year_id;
        $issue->yil = (Year::find($issue->year_id))['year'];
        $issue->file = $file_name;
        $issue->image = $image_name;
        $issue->save();

                return redirect()->back()->with("success_msg", "ajoib")->with('success_msg',"Jurnal soni muvaffaqiyatli qo'shildi!");
    }

    public function edit($id)
    {
        $years = Year::all();
        $issue = Issue::find($id);
        return view('admin.issue-edit',compact('years','issue'));
    }

    public function update(Request $request,$id)
    {

        $issues1 = Issue::find($id);
        $file = $issues1->file;
        $image_name = $issues1->image;
        if($request->hasfile('file')){
            if(isset($issues1->file)){
                Storage::delete('journals' . $issues1->file);
            }

             $validated = $request->validate([
                'file' => 'file|mimetypes:application/pdf',
            ]);
            $file = $issues1->yil. "_yil_".$request->number."_son.pdf";
            // $file->move(public_path().'public/journals',$file);
            $save = $request->file('file')->storeAs('public/journals',$file);
        }

        if($request->hasfile('image')){            
            if(isset($issues1->image)){
                Storage::delete('images/journals' . $issues1->image);
            }

            $validated = $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            $image = $request->file('image');
            $image_name = md5(time()) . "." . $image->extension();
            $image->move(public_path().'/images/journals',$image_name);
            $data['image'] = $image_name;    
            // $save = $request->file('image')->storeAs('public/images/journals',$image_name);
        }

        // // $name = $request->file('doi_file')->getClientOriginalName();
        $data = $this->validateData();
        // $name1 = Str::random(20) . time() . "doi.pdf";
        // $name = Str::random(20) . time() . "doi.pdf";

        // $f = $request->file('file')->storeAs('journals',$file);
        // $ff = $request->file('file')->storeAs('/images/journals',$image_name);
        
        $issues1->update([
            'number' => $data['number'],
            'file' => $file,
            'image' => $image_name,
            'year_id' => $data['year_id'],
        ]);
        $issues = Issue::all();
        $years = Year::all();
        $this_year = $request->year;
        return redirect()->route('admin.issues.index')->with('success_msg',"Jurnal soni muvaffaqiyatli tahrirlandi!");
    }

    public function journalDownload($file){
        $headers = array(
            'Content-Type: application/pdf',
        );
        return Storage::download('public/journals/'.$file,$file,$headers);
    }

    public function destroy(Issue $issue)
    {
        $issue->delete();
        return redirect()->back()->with('success_msg',"Jurnal soni o'chirildi!");
    }

    public function validateData()
    {
        return request()->validate([
            'number' => 'required',
            'year_id' => 'required',
        ],[
            'required' => "Bo'sh maydonlar mavjud, ularni to'ldiring!!!"
        ]);
    }
}
