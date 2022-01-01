<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    public function job_class(){
        return $this->belongsTo(Jobs::class,'company_id','id');
    }

}
