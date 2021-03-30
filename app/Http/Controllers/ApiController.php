<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $users = User::all();
    }

    public function skills()
    {
        $skill = Skill::all();
        return response()->json($skill);
    }
}
