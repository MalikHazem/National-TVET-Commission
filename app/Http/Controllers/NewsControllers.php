<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\News;

class NewsControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::get();
        return view('Admin_Panel.News.show',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin_Panel.News.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time().".".$file_extension;
        $path = 'img/news';
        $request ->image-> move($path,$file_name);
        // $file =  $request ->file('image')-> store('images');

        $news=new News();
        $news->title=$request->title;
        $news->image= $file_name;
        $news->subject=$request->subject;
        $news->link=$request->link;
        $news->date=date("Y-m-d-h-i");
        $news->save();

        return Redirect::to('/News');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view("Admin_Panel.News.edit", compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news=News::find($request->id);
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time().".".$file_extension;
        $path = 'img/news';
        $request ->image-> move($path,$file_name);
        // $file =  $request ->file('image')-> store('images');

        $news->title=$request->title;
        $news->image= $file_name;
        $news->subject=$request->subject;
        $news->link=$request->link;
        $news->date=date("Y-m-d-h-i");
        $news->save();

        return Redirect::to('/News');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = News::find($id);
        $users->delete();
        return Redirect::to('/News');
    }
}
