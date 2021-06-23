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

    public function filterDate()
    {
        $from = date('2020-01-01');
        $to = date('2020-01-30');

        $school = School::whereBetween('inaugurated_date', [$from, $to])->get();
        return $school;
    }
}
