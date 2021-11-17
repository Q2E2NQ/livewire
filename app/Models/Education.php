<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = "education";

    protected $fillable = [
     'student_id','course','college','university','year_of_passing',
    ];

    public function student()
    {
       return $this->belongsTo('App\Models\Student');
    }
}
