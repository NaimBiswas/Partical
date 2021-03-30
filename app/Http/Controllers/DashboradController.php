<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\TrainingActivity;
use Illuminate\Http\Request;

class DashboradController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        $data = TrainingActivity::orderBy('start_date', 'ASC')->get();;
        return view('Expert', compact(['data', 'skills']));
    }
}
