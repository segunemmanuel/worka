<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsApplied extends Model
{
    use HasFactory;

    public function jobs(){

        return $this->belongsTo(User::class,'user_id','id');
        // return $this->belongsTo(Company::class,'company_id','id');

    }
}
