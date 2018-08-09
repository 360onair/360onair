<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Project;

class ProjectController extends Controller
{

    public function index()

    {

    	$projects = Project::all();

    	return view('projects.index',compact('projects'));

    }


    public function show(Project $project)

	{


	    return view('projects.show', compact('project'));
	
	}

/*

  	public function create(Request $request)

    {

    	$this->validate($request,['title'=>'required']);

    	$projects = Project::create($request->all());

    	return view('projects.show', compact('project'));

    }*/

/*
 	public function index() {
 		$projects = Project::latest()->get();

	    return view('projects.index', compact('projects'));
 	}   


 	*/
}
