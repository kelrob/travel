<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tour extends Model
{
    use HasFactory;

    protected $table = 'tours';
    protected $guarded = ['id'];

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
