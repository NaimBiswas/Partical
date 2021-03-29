<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingActivity extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'skill', 'description', 'start_date', 'end_date', 'participants'];
}
