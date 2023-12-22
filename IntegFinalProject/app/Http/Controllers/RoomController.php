<?php

namespace App\Http\Controllers;

use App\Models\RoomModel;
use App\Models\StudentModel;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        return response()->json(RoomModel::all());
    }
    public function store(Request $request){
        StudentModel::where("PersonalInfoID",$request->StudentID)->update(['Room' => $request->RoomID]);
    }
}
