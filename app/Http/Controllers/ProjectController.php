<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexProject()
    {
        $Projects = Project::get();
        return view('Users_Panel.Projects.Projects',compact('Projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProject()
    {
        return view("Admin_Panel.Projects.addProject");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProject(Request $request)
    {
        $Projects=new Project();
        $Projects->name=$request->name;
        $Projects->target_group=$request->target_group;
        $Projects->budget=$request->budget;
        $Projects->duration_start=$request->duration_start;
        $Projects->duration_end=$request->duration_end;
        $Projects->donor=$request->donor;
        $Projects->partner=$request->partner;
        $Projects->goals=$request->goals;
        $Projects->idea=$request->idea;
        $Projects->save();

        return Redirect::to('/Project/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProject()
    {
        $Projects = Project::get();
        return view('Admin_Panel.Projects.showProject',compact('Projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editProject($id)
    {
        $Projects = Project::find($id);
        return view("Admin_Panel.Projects.editProject",compact('Projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProject(Request $request, $id)
    {
        $Projects = Project::find($id);
        $Projects->name=$request->name;
        $Projects->target_group=$request->target_group;
        $Projects->budget=$request->budget;
        $Projects->duration_start=$request->duration_start;
        $Projects->duration_end=$request->duration_end;
        $Projects->donor=$request->donor;
        $Projects->partner=$request->partner;
        $Projects->goals=$request->goals;
        $Projects->idea=$request->idea;
        $Projects->save();

        return Redirect::to('/Project/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyProject($id)
    {
        $Projects = Project::find($id);
        $Projects->delete();
        return Redirect::to('/Project/show');
    }
}
