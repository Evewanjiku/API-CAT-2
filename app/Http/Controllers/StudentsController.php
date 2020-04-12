<?php


namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        return view('EvelynGitonga.student');
    }
    public function storeStudent(Request $request)
    {
        $this->validate($request, [
            'first_name'=>'required',
            'last_name'=>'required',
            'date_of_birth'=>'required',
            'address' =>'required',

        ]);

        $student = new Student();
        $student->student_number = $request->student_number;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->date_of_birth =$request->date_of_birth;
        $student->address =$request->address;
        $student->save();
        
        return redirect('/student')->with('successmsg','you have created a new student');
    }

}

