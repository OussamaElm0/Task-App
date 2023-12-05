<?php

namespace App\Models;

use App\Http\Requests\TaskRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'start_date', "end_date"];

}
