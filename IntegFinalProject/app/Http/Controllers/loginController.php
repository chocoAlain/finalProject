<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfoModel;
use App\Models\StudentModel;
use Exception;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    public function storeIn(Request $request)
    {

        try {
            $user = PersonalInfoModel::where('email', $request->email)->first();
            if ($user->Password == $request->password) {
                return view('content.Client.profileEdit')->with('user',$user);
            } else {
                return redirect()->back()->with('failed-password', 'Email are not registered!');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('failed-account', 'Email are not registered!');
        }
    }

    public function storeUp(Request $request)
    {
        $maxStudentNumber = (PersonalInfoModel::max('id') ?? 230000) + 1;
        PersonalInfoModel::create(["id" => $maxStudentNumber, "LastName" => $request->LastName, "Email" => $request->Email, "Password" =>$request->Password]);
        StudentModel::create(["PersonalInfoID" => $maxStudentNumber]);
        return view('Auth.login');
    }

    public function updateUp(Request $request, $id){
        return view('content.Client.profile');
    }

    public function logout()
    {

    }
}
