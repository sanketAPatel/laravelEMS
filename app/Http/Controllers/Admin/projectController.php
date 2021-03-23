<?php

namespace App\Http\Controllers\Admin;
use App\Models\Project;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class projectController extends Controller
{
 public  function index()
 {
     $projects =Project::all();
      return view('admin.project',compact('projects'));

 }
 public function store(Request $request)
 {
     $project=new Project;


     $project->title=$request->input('title');
     $project->description=$request->input('description');

     $project->save();
     return view('admin.project')->with('status',"Project Added");
 }
 public function editProject($id){
   //return
       $project=Project::find($id);
     //$project = $request->input('description');
    return view('admin.project.editProject')->with('project',$project);
 }

 public function UpdateProject(Request $request ,$id)
 {
     $project=Project::find($id);
     $project->title=$request->input('title');
     $project->description= $request->input('description');
     $project-> update();
     return redirect('/project')->with('status','Project details updated!');


 }
}
