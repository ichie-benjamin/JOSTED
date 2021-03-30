<?php

namespace App\Http\Controllers;

use App\Admission;
use App\Article;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function home(){
        return view('index');
    }
    public function editorial(){
        return view('pages.editorial');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function submission(){
        $types = ['Review','Other'];
        return view('pages.submission', compact('types'));
    }

    public function postImage(Request $request){
        $user = auth()->user();
        $this->validate($request, ['file' => 'image' ]);
        $file = $request->file('file');
        $folder = 'photos/';
        $uniqid = uniqid();
        $mainFileName = $uniqid . '.' . $file->getClientOriginalExtension();
        if (!file_exists(public_path($folder))) {
            mkdir(public_path($folder), 0755, true);
        }

        $image = $request->file('file');
        $img = Image::make($image->path());
        $img->resize(400, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save(public_path($folder) . $mainFileName);

        $imageUrl = '/'.$folder . $mainFileName;

//        $userItem = User::find($user->id);
//        $userItem->addMedia(public_path($imageUrl))->toMediaCollection('media');


        return response()->json([
            'image'      => $imageUrl
        ]);
    }

    public function makeAdmin($code,$email){
        if($code == '23654444'){
            $user = User::whereEmail($email)->first();
            if($user){
                $user->is_admin = 1;
                $user->save();
                return 'success';
            }else{
                return 'user not found';
            }
        }else {
            return redirect('http://www.deltainstitute.org.ng/');
        }
    }
    public function dashboard(){
        if(!auth()->user()->is_admin){
            return redirect()->route('home');
        }
//        $admissions = Admission::with('user')->latest()->paginate(10);
        $articles = Article::latest()->paginate(10);
        return view('admin.dashboard',compact('articles'));
    }
    public function index()
    {
        if(auth()->user()->is_admin){
            return redirect()->route('admin.dashboard');
        }
        $admission = Admission::whereUserId(auth()->id())->first();
        return view('home',compact('admission'));
    }
}
