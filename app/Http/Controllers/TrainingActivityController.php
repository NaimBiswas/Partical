<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\TrainingActivity;
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
        return view('Training.Index');
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
        $validator = Validator::make($request->all(), [
            'title' => 'required' | 'unique' | 'max:200',
            'skill' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'participants' => 'required',
        ]);


        TrainingActivity::Create([
            'skill' => $request->skill,
            'title' => $request->title,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'participants' => $request->participants,
        ]);
        return redirect()->back();
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
    public function edit(TrainingActivity $trainingActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrainingActivity  $trainingActivity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrainingActivity $trainingActivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrainingActivity  $trainingActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainingActivity $trainingActivity)
    {
        //
    }
}
