<?php

namespace App\Http\Controllers;

use App\Http\Resources\SchoolResource;
use App\Models\School;

class SchoolController extends Controller
{
    public function getInauguratedSchool()
    {
        return SchoolResource::collection(School::all());
    }
}
