<?php

namespace App\Http\Controllers;

use App\Models\System\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public static function getAllCompanies()
    {
        echo json_encode(Company::all());
    }
}
