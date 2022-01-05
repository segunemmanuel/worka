<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;


class Jobs extends Model
{
    use HasFactory;

    public function job_class(){
        return $this->belongsTo(Company::class,'company_id','id');
    }

}
