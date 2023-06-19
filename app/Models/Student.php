<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subjects() {
        return $this->hasMany(Subject::class);
    }

    public function attendance() {
        return $this->hasOne(Attendance::class);
    }
}
