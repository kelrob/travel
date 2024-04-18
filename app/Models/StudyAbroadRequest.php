<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyAbroadRequest extends Model
{
    use HasFactory;

    protected $table = 'study_abroad_requests';
    protected $guarded = ['id'];
}
