<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public $fields = [
        'first_name',
        'last_name',
        'approved',
        'article_title',
        'name_of_author',
        'author_2',
        'other_authors',
        'article_type',
        'subject_area',
        'article',
        'article_2',
        'article_3',
        'email',
        'phone',
        'state',
        'country',
        'city',
    ];
    public function articles(){
        if(!auth()->user()->is_admin){
            return redirect()->route('home');
        }
        $articles = Article::paginate(50);
        return view('admin.articles',compact('articles'));
    }
    public function viewArticle($id){
        if(!auth()->user()->is_admin){
            return redirect()->route('home');
        }
        $article = Article::findOrFail($id);
        $items = $this->fields;
        return view('admin.view_article',compact('article','items'));
    }
    public function store(Request $request)
    {
        $data = $this->getData($request);
        $folder = 'files/'.date('Y').'/';
        if ($files = $request->file('article')) {
            $data['article'] = $this->moveFile($folder,$files);
        }
        if ($files = $request->file('article_2')) {
            $data['article_2'] = $this->moveFile($folder,$files);
        }
        if ($files = $request->file('article_2')) {
            $data['article_3'] = $this->moveFile($folder,$files);
        }
        Article::create($data);
        return redirect()->back()->with('success', 'Article successfully submitted, you will be notified once approved.');
    }

    public function approve($id){
        $article = Article::findOrFail($id);
        $article->approved = true;
        $article->save();
        return redirect()->back()->with('success', 'Article successfully approved and mail sent to uploader at '.$article->email);
    }

    protected function  moveFile($folder, $files){
        if (!file_exists(public_path($folder))) {
            mkdir(public_path($folder), 0755, true);
        }
        $file = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($folder, $file);
        return $file;
    }

    protected function getData(Request $request)
    {
        $rules = [
            'user_id' => ['nullable'],
            'last_name' => ['required', 'max:100'],
            'first_name' => ['required'],
            'other_names' => ['nullable'],
            'article_title' => ['required'],
            'name_of_author' => ['required'],
            'author_2'=> ['nullable'],
            'other_authors'=> ['nullable'],
            'article_type' => ['required'],
            'subject_area' => ['required'],
            'article' => ['required','mimes:doc,docx,pdf,txt','max:10048'],
            'article_2' => ['nullable'],
            'article_3' => ['nullable'],
            'email' => ['required'],
            'phone' => ['required'],
            'state' => ['required'],
            'city' => ['required'],
            'country' => ['required'],
            'zip' => ['required'],
        ];
        $data = $request->validate($rules);
        if(auth()){
            $data['user_id'] = auth()->id();
        }
        return $data;
    }

}
