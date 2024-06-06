<?php

namespace App\Http\Controllers\Admin;

use App\Models\project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects= project::all();
        return view('admin.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData= $request->all();
        $formData['slug']= project::generateSlug($formData['title']);
        $newProject = project::create($formData);
        return redirect()->route('admin.projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(project $project)
    {
        return view('admin.projects.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(project $project)
    {
        return view('admin.projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, project $project)
    {
        $formData= $request->all();
        if($project->title !== $formData['title']){
            $formData['slug']= project::generateSlug($formData['title']);
        }
        $project->update($formData); 
        return redirect()->route('admin.projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index') /*->with('message', $post->title . ' è stato eliminato')*/;
    }
}
