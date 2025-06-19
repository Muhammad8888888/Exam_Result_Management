<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    // Fields that can be mass-assigned
    protected $fillable = [
        'student_id',
        'course_id',
        'grade',
    ];

    /**
     * Relationship: A result belongs to a student
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    /**
     * Relationship: A result belongs to a course
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
