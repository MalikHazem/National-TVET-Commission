<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Models\Vision;
use App\Models\Message;
use App\Models\Objective;
use App\Models\Foundation;
use App\Models\Law;
use Response;
use PDF;

class AboutControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexVision()
    {
        $Viss = Vision::get()->first();
        $Mess = Message::get()->first();
        return view('Users_Panel.About_us.VisionandMessage',compact('Viss', 'Mess'));
    }

    public function indexabout()
    {
        return view('Users_Panel.About_us.about_us');
    }

    public function indexObjectives()
    {
        $Objs = Objective::get();
        return view("Users_Panel.About_us.Objectives",compact('Objs'));
    }

    public function indexFoundation()
    {
        $Fous = Foundation::get();
        return view("Users_Panel.About_us.Foundation",compact('Fous'));
    }

    public function indexLaws()
    {
        $Laws = Law::get();
        return view("Users_Panel.About_us.Laws",compact('Laws'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createObjectives()
    {
        return view("Admin_Panel.About_us.addObjectives");
    }

    public function createFoundation()
    {
        return view("Admin_Panel.About_us.addFoundation");
    }

    public function createLaws()
    {
        return view("Admin_Panel.About_us.addLaws");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeVision(Request $request)
    {
        $Vision=new Vision();
        $Vision->subject=$request->subject;
        $Vision->save();

        return Redirect::to('/About_us/Vision/show');
    }

    public function storeMessage(Request $request)
    {
        $Mess=new Message();
        $Mess->subject=$request->subject;
        $Mess->save();

        return Redirect::to('/About_us/Message/show');
    }

    public function storeObjectives(Request $request)
    {
        $Objs=new Objective();
        $Objs->subject=$request->subject;
        $Objs->save();

        return Redirect::to('/About_us/Objectives/show');
    }

    public function storeFoundation(Request $request)
    {
        $Found=new Foundation();
        $Found->subject=$request->subject;
        $Found->save();

        return Redirect::to('/About_us/Foundation/show');
    }

    public function storeLaws(Request $request)
    {
        $file_extension = $request->file->getClientOriginalExtension();
        $file_name = time().".".$file_extension;
        $path = 'file/laws';
        $request ->file-> move($path,$file_name);

        $laws=new Law();
        $laws->name=$request->name;
        $laws->file=$file_name;
        $laws->num_laws=$request->$num_laws;
        $laws->date=date("Y-m-d-h-i");
        $laws->save();

        return Redirect::to('/About_us/Laws/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showVision()
    {
        $Viss = Vision::get();
        return view('Admin_Panel.About_us.showVision',compact('Viss'));
    }

    public function showmessage()
    {
        $Mess = Message::get();
        return view("Admin_Panel.About_us.showmessage",compact('Mess'));
    }

    public function showObjectives()
    {
        $Objs = Objective::get();
        return view("Admin_Panel.About_us.showObjectives",compact('Objs'));
    }

    public function showFoundation()
    {
        $Fous = Foundation::get();
        return view("Admin_Panel.About_us.showFoundation",compact('Fous'));
    }

    public function showLaws()
    {
        $laws = Law::get();
        return view("Admin_Panel.About_us.showLaws",compact('laws'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editVision($id)
    {
        $Vision = Vision::find($id);
        return view("Admin_Panel.About_us.editVision",compact('Vision'));
    }

    public function editmessage($id)
    {
        $Mess = Message::find($id);
        return view("Admin_Panel.About_us.editmessage",compact('Mess'));
    }

    public function editObjectives($id)
    {
        $Objs = Objective::find($id);
        return view("Admin_Panel.About_us.editObjectives",compact('Objs'));
    }

    public function editFoundation($id)
    {
        $Found = Foundation::find($id);
        return view("Admin_Panel.About_us.editFoundation",compact('Found'));
    }

    public function editLaws($id)
    {
        $laws = Law::find($id);
        return view("Admin_Panel.About_us.editLaws",compact('laws'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateVision(Request $request, $id)
    {
        $Vision=Vision::find($request->id);
        $Vision->subject=$request->subject;
        $Vision->save();

        return Redirect::to('/About_us/Vision/show');
    }

    public function updateMessage(Request $request, $id)
    {
        $Mess=Message::find($request->id);
        $Mess->subject=$request->subject;
        $Mess->save();

        return Redirect::to('/About_us/Message/show');
    }

    public function updateObjectives(Request $request, $id)
    {
        $Objs=Objective::find($request->id);
        $Objs->subject=$request->subject;
        $Objs->save();

        return Redirect::to("/About_us/Objectives/show");
    }

    public function updateFoundation(Request $request, $id)
    {
        $Found=Foundation::find($request->id);
        $Found->subject=$request->subject;
        $Found->save();

        return Redirect::to('/About_us/Foundation/show');
    }

    public function updateLaws(Request $request, $id)
    {
        $file_extension = $request->file->getClientOriginalExtension();
        $file_name = time().".".$file_extension;
        $path = 'file/laws';
        $request ->file-> move($path,$file_name);

        $laws=Law::find($request->id);
        $laws->name=$request->name;
        $laws->file=$file_name;
        $laws->num_laws=$request->num_laws;
        $laws->date=date("Y-m-d-h-i");
        $laws->save();

        return Redirect::to('/About_us/Laws/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laws = Law::find($id);
        $laws->delete();
        return Redirect::to('/About_us/Laws/show');
    }

    public function pdfview(Request $request, $id)
    {
        $laws = Law::find($id);
        $path  = public_path("file/laws/{$laws->file}");
        return Response::download($path);
        // return Storage::download('file/laws/{$laws->file}');
        // $pdf = PDF::loadView("$laws->file.show");
        // return $pdf->download($laws->file);
    }
}
