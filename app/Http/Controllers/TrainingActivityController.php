<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Validator;
use App\Models\TrainingActivity;
use App\Models\User;
use Illuminate\Http\Request;

class TrainingActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competitorData = User::where('profile', 'competitor')->get();
        $skills = Skill::all();
        $data = TrainingActivity::all();
        return view('Training.Index', compact(['data', 'competitorData', 'skills']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        // validation

        $this->validate($request, [
            'title' => 'required|unique:training_activities,title|max:200',
            'skill' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'participants' => 'required',
        ]);


        // store data in database

        $input = $request->all();
        $participants = $input['participants'];
        $input['participants'] = implode(', ', $participants);

        TrainingActivity::create($input);


        return redirect()->back()->with("success", 'Successfully Create A Shedule');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrainingActivity  $trainingActivity
     * @return \Illuminate\Http\Response
     */
    public function show(TrainingActivity $trainingActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrainingActivity  $trainingActivity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // edit info
        $skills = Skill::all();
        $competitorData = User::where('profile', 'competitor')->get();
        $FindData = TrainingActivity::where('id', $id)->get()->first();
        return view('Training.Edit', compact(['FindData', 'competitorData', 'skills']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrainingActivity  $trainingActivity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        // update validation
        $this->validate($request, [
            'title' => 'required|max:200',
            'skill' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'participants' => 'required',
        ]);




        // update data

        $input = $request->all();
        $participants = $input['$trainingActivity->'];
        $input['participants'] = implode(',', $participants);


        TrainingActivity::Create($input);

        TrainingActivity::where('id', $id)->get()->first()->delete();


        return redirect()->route('dashboard')->with('success', ' Post Updated Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrainingActivity  $trainingActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // destroy data
        TrainingActivity::where('id', $id)->get()->first()->delete();
        return redirect()->back()->with('success', 'Post Deleted Success');
    }
}
