<?php

namespace Webkul\Crud\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Webkul\Crud\DataGrids\Admin\StudentDataGrid;
use Webkul\Crud\Models\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {

        $students = Student::all();

        return view('crud::students.index', compact('students'));

     }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('crud::students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Student::create([
                'name' => request('name'),
                'phone_number' => request('phone_number'),
                'email' => request('email'),
                'gender'=> request('gender'),
                'date_of_birth'=> request('date_of_birth'),
                'status'=> request('status'),
                'full_address'=> request('full_address'),
                'password'=> request('password'),
    
            ]);
       
            return redirect()->to(route('students.index'));
        
    }
  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);

        return view('crud::students.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $student = Student::findOrFail($id);

        return view('crud::students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $student = Student::findOrFail($id);
         
        $validated = $request->validate([
       
        ]);
        $student->update([
            'name' => request('name'),
            'phone_number' => request('phone_number'),
            'email' => request('email'),
            'gender'=> request('gender'),
            'date_of_birth'=> request('date_of_birth'),
            'status'=> request('status'),
            'full_address'=> request('full_address'),
            'password'=> request('password'),
        ]);

        return redirect(route('students.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $student = Student::findOrFail($id);

        $student->delete();
        

        return redirect(route('admin.index'));
    }


    // public function index()
    // {
    //     if (request()->ajax()) {
    //         return app(StudentDataGrid::class)->toJson();
    //     }

    //     return view('admin.index');
    // }
}