<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lates extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'student_id',
        'date_time_late',
        'information',
        'bukti',
    ];

    public function student(){
        return $this->belongsTo(Students::class, 'student_id', 'id');
    }

}
