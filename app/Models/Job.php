<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'jobs';
    protected $fillable = ['title', 'company', 'company_logo', 'location', 'category', 'salary', 'description', 'benefits', 'type', 'work_condition'];
}
