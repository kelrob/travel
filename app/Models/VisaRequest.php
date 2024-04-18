<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaRequest extends Model
{
    use HasFactory;

    protected $table = 'visa_requests';
    protected $guarded = ['id'];
}
