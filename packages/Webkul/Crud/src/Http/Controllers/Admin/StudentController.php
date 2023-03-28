<?php

namespace Webkul\Crud\Http\Controllers\Admin;

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

         if (request()->ajax()) {
             return app(StudentDataGrid::class)->toJson();
         }
 
         return view('crud::admin.index');
     }

}