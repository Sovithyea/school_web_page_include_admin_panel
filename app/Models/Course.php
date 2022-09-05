<?php

namespace App\Models;

use App\Models\User;
use App\Models\Admin;
use App\Models\CourseType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'image',
        'price',
        'duration',
        'skill_level',
        'start_class',
        'description',
        'course_type_id',
        'admin_id',
        'user_id'
    ];

    public function courseType()
    {
        return $this->belongsTo(CourseType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
