<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    public function students()
    {
        return$this->belongTo('App\Student','student_number','student_number');                                                                                                                                     
    }
}
