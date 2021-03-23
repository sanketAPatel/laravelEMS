<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class projectController extends Controller
{
 public  function index()
 {
     return view('admin.project');
 }
 public function store(Request $request)
 {
     $project=new Project;


     $project->title=$request->input('title');
     $project->description=$request->input('description');

     $project->save();
     return view('admin.project')->with('status',"Project Added");
 }
}
