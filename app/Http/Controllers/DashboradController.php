<?php

namespace App\Http\Controllers;

use App\Models\TrainingActivity;
use Illuminate\Http\Request;

class DashboradController extends Controller
{
    public function index()
    {
        $data = TrainingActivity::all();
        return view('Expert', compact('data'));
    }
}
