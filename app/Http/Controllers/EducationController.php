<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Training;
use App\Models\School;
use App\Models\Universitie;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexTraining()
    {
        $trainings = Training::get();
        return view('Users_Panel.Education.Trainings',compact('trainings'));
    }

    public function indexSchool()
    {
        $schools = School::get();
        return view('Users_Panel.Education.Schools',compact('schools'));
    }

    public function indexUniversitie()
    {
        $universities = Universitie::get();
        return view('Users_Panel.Education.Universities',compact('universities'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTraining()
    {
        return view("Admin_Panel.Education.addTraining");
    }

    public function createSchool()
    {
        return view("Admin_Panel.Education.addSchool");
    }

    public function createUniversitie()
    {
        return view("Admin_Panel.Education.addUniversitie");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeTraining(Request $request)
    {
        $trainings=new Training();
        $trainings->name=$request->name;
        $trainings->category=$request->category;
        $trainings->date_create=$request->date_create;
        $trainings->phone=$request->phone;
        $trainings->website=$request->website;
        $trainings->save();

        return Redirect::to('/Education/Training/show');
    }

    public function storeSchool(Request $request)
    {
        $schools=new School();
        $schools->name=$request->name;
        $schools->category=$request->category;
        $schools->date_create=$request->date_create;
        $schools->phone=$request->phone;
        $schools->website=$request->website;
        $schools->save();

        return Redirect::to('/Education/School/show');
    }

    public function storeUniversitie(Request $request)
    {
        $universities=new Universitie();
        $universities->name=$request->name;
        $universities->category=$request->category;
        $universities->date_create=$request->date_create;
        $universities->phone=$request->phone;
        $universities->website=$request->website;
        $universities->save();

        return Redirect::to('/Education/Universitie/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showTraining()
    {
        $trainings = Training::get();
        return view("Admin_Panel.Education.showTraining",compact('trainings'));
    }

    public function showSchool()
    {
        $schools = School::get();
        return view("Admin_Panel.Education.showSchool",compact('schools'));
    }

    public function showUniversitie()
    {
        $universities = Universitie::get();
        return view("Admin_Panel.Education.showUniversitie",compact('universities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editTraining($id)
    {
        $trainings = Training::find($id);
        return view("Admin_Panel.Education.editTraining",compact('trainings'));
    }

    public function editSchool($id)
    {
        $schools=School::find($id);
        return view("Admin_Panel.Education.editSchool",compact('schools'));
    }

    public function editUniversitie($id)
    {
        $universities=Universitie::find($id);
        return view("Admin_Panel.Education.editUniversitie",compact('universities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateTraining(Request $request, $id)
    {
        $trainings=Training::find($id);
        $trainings->name=$request->name;
        $trainings->category=$request->category;
        $trainings->date_create=$request->date_create;
        $trainings->phone=$request->phone;
        $trainings->website=$request->website;
        $trainings->save();

        return Redirect::to('/Education/Training/show');
    }

    public function updateSchool(Request $request, $id)
    {
        $schools=School::find($id);
        $schools->name=$request->name;
        $schools->category=$request->category;
        $schools->date_create=$request->date_create;
        $schools->phone=$request->phone;
        $schools->website=$request->website;
        $schools->save();

        return Redirect::to('/Education/School/show');
    }

    public function updateUniversitie(Request $request, $id)
    {
        $universities=Universitie::find($id);
        $universities->name=$request->name;
        $universities->category=$request->category;
        $universities->date_create=$request->date_create;
        $universities->phone=$request->phone;
        $universities->website=$request->website;
        $universities->save();

        return Redirect::to('/Education/Universitie/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyTraining($id)
    {
        $trainings=Training::find($id);
        $trainings->delete();
        return Redirect::to('/Education/Training/show');
    }

    public function destroySchool($id)
    {
        $schools=School::find($id);
        $schools->delete();
        return Redirect::to('/Education/School/show');
    }

    public function destroyUniversitie($id)
    {
        $universities=Universitie::find($id);
        $universities->delete();
        return Redirect::to('/Education/Universitie/show');
    }
}
