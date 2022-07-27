<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CUnit extends Model
{
    use HasFactory;
            
    protected $fillable=['name','year','semester','lecturer','cwork','exams','courseId'];

    public function courses(){
        return $this->belongsTo(Course::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }
}
