<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseType extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function course()
    {
        return $this->hasMany(Course::class);
    }
}
