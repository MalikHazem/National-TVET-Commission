<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Advertisement;
use App\Models\News;
use App\Models\Queries;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $advertisements = Advertisement::get();
        $news = News::get();
        return view('Users_Panel.Home',compact('advertisements','news'));
    }
    public function message(Request $request)
    {
        $queries=new Queries();
        $queries->name=$request->name;
        $queries->email=$request->email;
        $queries->subject=$request->subject;
        $queries->message=$request->message;
        $queries->save();

        return redirect()->back();
    }

    public function Read_More($id)
    {
        $Read_more = Advertisement::find($id);
        $advertisements = Advertisement::where('id', '!=', $id)->get();

        return view('Users_Panel.Readmore',compact('Read_more','advertisements'));
    }
    public function News($id)
    {
        $new = News::find($id);
        $news = News::where('id', '!=', $id)->get();

        return view('Users_Panel.News',compact('new','news'));
    }

    public function newspanel(){
        $news=News::get();
        return view('Users_Panel.About_us.news',compact('news'));
    }
    public function advpanel(){
        $advs=Advertisement::get();
        return view('Users_Panel.About_us.adv',compact('advs'));
    }
}
