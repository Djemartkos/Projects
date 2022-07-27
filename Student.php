<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $fillable=['fname','lname','gender','dob','cuId','courseId'];

    public function courses(){
        return $this->belongsTo(Course::class);
    }

    public function cunits(){
        return $this->belongsTo(CUnit::class);
    }
}
