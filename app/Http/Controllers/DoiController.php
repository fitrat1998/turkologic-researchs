<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Doi;
use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DoiController extends Controller
{

    public function index(Request $request)
    {
        $issue_id = $request->issue;


        $cmp = "=";
        if (is_null($issue_id)) $cmp = '!=';

        $dois = Doi::where('issue_id', $cmp, $issue_id)->orderBy('id', 'desc')->get();
        return view('admin.dois', [
            'dois' => $dois,
        ]);


        //this is doi controller


    }

    public function create(Request $request)
    {

        $issue_id = intval($request->issue);
        $issues = Issue::all();

        $articles = Article::where('status', '=', 'accepted')->get();
        return view('admin.doi-create', [
            'issue_id' => $issue_id,
            'issues' => $issues,
//            'articles' => $articles,
        ]);
    }


    public function store(Request $request)
    {
//        dd($request);
        $data = $this->validateData();
        $file_name = Str::random(20) . time() . "doi.pdf";

        $ff = $request->file('doi_file')->storeAs('dois', $file_name);
        $doi = new Doi();
        $doi->issue_id = $data['issue_id'];
        $doi->title = $data['title'];
        $doi->authors = $data['authors'];
        $doi->abstract = $data['abstract'];
        $doi->keywords = $data['keywords'];
        if (!empty($data['doi_url'])) $doi->doi_url = $data['doi_url'];
        $doi->doi_file = $file_name;
        $doi->save();

        return redirect()->route('admin.dois')->with('success_msg', "Jurnal soni muvaffaqiyatli qo'shildi!!!");
    }

    public function download($file)
    {
        $headers = array(
            'Content-Type: application/pdf',
        );
        return Storage::download('dois/' . $file, $file, $headers);
    }


    public function edit($id)
    {
        $issues = Issue::all();

        $dois = Doi::find($id);
        return view('admin.doi-edit', compact('dois', 'issues'));
    }


    public function update(Request $request, $id)
    {
        $dois1 = Doi::find($id);
        $name = $dois1->doi_file;
        if ($request->hasfile('doi_file')) {

            if (isset($dois1->doi_file)) {
                Storage::delete('files' . $dois1->doi_file);
            }

            $name = $request->file('doi_file')->getClientOriginalName();
            $photo = $request->file('doi_file')->storeAs('files', $name);
        }

        // $name = $request->file('doi_file')->getClientOriginalName();
        $data = $this->validateData();
        $name = Str::random(20) . time() . "doi.pdf";

//        dd($data);

        $ff = $request->file('doi_file')->storeAs('dois', $name);
        $doi = new Doi();
        if (!empty($data['doi_url'])) $doi->doi_url = $data['doi_url'];
        else $data['doi_url'] = "";
        $dois1->update([
            'issue_id' => $data['issue_id'],
            'title' => $data['title'],
            'authors' => $data['authors'],
            'abstract' => $data['abstract'],
            'keywords' => $data['keywords'],
            'doi_url' => $data['doi_url'],
            'doi_file' => $name,
            'created_at' => $data['date'],
            'updated_at' => now(),
        ]);

        $dois = Doi::all();

        return redirect()->route('admin.dois')->with('success_msg', "Jurnal soni muvaffaqiyatli ozgartirildi!!!");
    }

    public function destroy(Doi $doi)
    {
        $doi->delete();
        return redirect()->back()->with('success_msg', "Arxivdan maqola o'chirildi!");

    }

    public function validateData()
    {
        return request()->validate([
            'issue_id' => 'required',
            'title' => 'required',
            'abstract' => 'required',
            'authors' => 'required',
            'keywords' => 'required',
            'doi_url' => '',
            'doi_file' => 'required|file|mimetypes:application/pdf',
            'date' => 'nullable',
        ], [
            'required' => "Bo'sh maydonlar mavjud, ularni to'ldiring!!!"
        ]);
    }
}

