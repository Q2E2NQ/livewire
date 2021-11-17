<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "students";


    protected $fillable = [
        'name', 'birthdate', 'gender', 'contact_no', 'address', 'email', 'file', 
     ];

    public function educations()
    {
        return $this->hasMany('App\Models\Education');
    }

}
