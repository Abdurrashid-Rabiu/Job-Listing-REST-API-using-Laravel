<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job = Job::all();
        return view('jobs.index', compact('job'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = new Job;
        $job->title = $request->input('title');
        $job->company = $request->input('company');
        $job->company_logo = $request->input('company_logo');
        $job->location = $request->input('location');
        $job->category = $request->input('category');
        $job->salary = $request->input('salary');
        $job->description = $request->input('description');
        $job->benefits = $request->input('benefits');
        $job->type = $request->input('type');
        $job->work_condition = $request->input('work_condition');

        $job->save();
        return redirect()->back()->with('status', 'Job added successfully');
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
        $job = Job::find($id);
        return view('jobs.edit', compact('job'));
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
        $job = Job::find($id);

        $job->title = $request->input('title');
        $job->company = $request->input('company');
        $job->company_logo = $request->input('company_logo');
        $job->location = $request->input('location');
        $job->category = $request->input('category');
        $job->salary = $request->input('salary');
        $job->description = $request->input('description');
        $job->benefits = $request->input('benefits');
        $job->type = $request->input('type');
        $job->work_condition = $request->input('work_condition');

        $job->update();
        return redirect()->back()->with('status', 'Job updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();
        return redirect()->back()->with('status', 'Job deleted successfully');
    }
}
