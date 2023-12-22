<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfoModel;
use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $user = PersonalInfoModel::find('id',230002);
        return view('dashboard.profile')->with('user',$user);
    }

    public function store(Request $request)
    {
        $maxStudentNumber = (PersonalInfoModel::max('id') ?? 230000) + 1;
        PersonalInfoModel::create(["id" => $maxStudentNumber, "FirstName" => $request->FirstName, "MiddleName" => $request->MiddleName, "LastName" => $request->LastName,"Email"=> $request->email,"ContactNumber"=> $request->ContactNumber,"Sex"=> $request->Sex,"BirthDate"=> $request->BirthDate]);
        StudentModel::create(["PersonalInfoID" => $maxStudentNumber,"Room"=>null]);
    }
}
