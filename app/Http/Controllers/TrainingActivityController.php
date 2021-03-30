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
        //     dd($request);
        //     exit;

        $this->validate($request, [
            'title' => 'required|unique:training_activities,title|max:200',
            'skill' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'participants' => 'required',
        ]);


        // TrainingActivity::create([
        //     'skill' => $request->skill,
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'start_date' => $request->start_date,
        //     'end_date' => $request->end_date,
        //     'participants' => json_encode($request->participants),
        // ]);

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
        $this->validate($request, [
            'title' => 'required|max:200',
            'skill' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'participants' => 'required',
        ]);

        // $trainingActivity->skill = $request->skill;
        // $trainingActivity->title = $request->title;
        // $trainingActivity->description = $request->description;
        // $trainingActivity->start_date = $request->start_date;
        // $trainingActivity->end_date = $request->end_date;

        // $participant = $request->input('participants');
        // $participant['participants'] = implode(',', $participant);

        // return $participant;
        // $trainingActivity->participants = $participant;





        // $trainingActivity->save();





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
        TrainingActivity::where('id', $id)->get()->first()->delete();
        return redirect()->back()->with('success', 'Post Deleted Success');
    }
}
