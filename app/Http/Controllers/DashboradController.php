<?php

namespace App\Http\Controllers;

use App\Models\TrainingActivity;
use Illuminate\Http\Request;

class DashboradController extends Controller
{
    public function index()
    {
        $data = TrainingActivity::orderBy('start_date', 'ASC')->get();;
        return view('Expert', compact('data'));
    }
}
