<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetails extends Model
{
    use HasFactory;
    protected $table = 'student_details';
    public $fillable = ['name', 'email', 'university', 'certificate_link'];
}
