<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengetahuan extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected $with = ['materi'];

    public function materi()
    {
        return $this->belongsTo(Materi::class);
    }
}
