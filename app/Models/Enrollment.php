<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    Protected $table = 'enrollments';
    Protected $primaryKey = 'id';
    Protected $fillable = ['enroll_no','batch_id','student_id','join_date','fee'];
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
