<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $filiable = ['first_name', 'last_name', 'email', 'age'];

    protected function student(){
        return $this->hasMany(Student::class);
    }
}
