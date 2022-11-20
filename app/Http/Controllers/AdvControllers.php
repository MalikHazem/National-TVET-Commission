<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Advertisement;

class AdvControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advs = Advertisement::get();
        return view('Admin_Panel.Advertisements.adv',compact('advs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin_Panel.Advertisements.add");
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
        $path = 'img/adv';
        $request ->image-> move($path,$file_name);
        // $file =  $request ->file('image')-> store('images');

        $advs=new Advertisement();
        $advs->title=$request->title;
        $advs->image= $file_name;
        $advs->subject=$request->subject;
        $advs->date=date("Y-m-d-h-i");
        $advs->save();

        return Redirect::to('/Advertisement');
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
        $advs = Advertisement::find($id);
        return view("Admin_Panel.Advertisements.edit", compact('advs'));
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
        $advs=Advertisement::find($request->id);
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time().".".$file_extension;
        $path = 'img/adv';
        $request ->image-> move($path,$file_name);
        // $file =  $request ->file('image')-> store('images');

        $advs->title=$request->title;
        $advs->image= $file_name;
        $advs->subject=$request->subject;
        $advs->date=date("Y-m-d-h-i");
        $advs->save();

        return Redirect::to('/Advertisement');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advs = Advertisement::find($id);
        $advs->delete();
        return Redirect::to('/Advertisement');
    }
}
