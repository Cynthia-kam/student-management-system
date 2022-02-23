<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   
    public function index()
    {
             $students=Student::all();
               return view ('students.index')->with('students', $students);
        return view ('students.index');
             
    }

    
    public function create()
    {
     return view('students.create');
     }

    

    
    
    public function store(Request $request)
    {
        $input = $request->all();
        Student::create($input);
        return redirect('student')->with('flash_message', 'Contact Addedd!'); 
    

    
      }

    public function show($id)
    {
     
    }

   
    public function edit($regno)
    {
        $students=Student::find($regno);
      return view('students.edit')->with('students',$students);
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
   
    public function destroy($regno)
    {
    Student::destroy($regno);
  
    }
}
