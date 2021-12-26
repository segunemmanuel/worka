<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //

    public function CompanyView(){

        // return view('backend.setup.company.company_view');
    return view ('backend.setup.companies.companies_view');


    }
}
