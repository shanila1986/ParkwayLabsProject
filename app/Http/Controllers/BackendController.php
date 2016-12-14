<?php
namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input;
use DB;


class BackendController extends Controller {



    /*
    * Function dashBoard
    *
    * load dashboard page
    *
    * @return viwe
    */

    public function dashBoard() 
    {
        return view('backend.dashBord');
    }



    /*
    * Function department
    *
    * load department page
    *
    * @return viwe
    */


    public function department() 
    {
        try {
            $departments = DB::table('department')->select('id', 'name')->get();
        }
        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
        try {
            $subDepartments = DB::table('sub_department')->select('department_id', 'name')->get();
        }
        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    
        return view('backend.department',compact('departments','subDepartments'));

    }



   /*
    * Function insertDepartment
    *
    * insert department and sub department
    *
    */


    public function insertDepartment() {

        $name=Input::get('departmentName');
        $description=Input::get('departmentDescription');
        $subDepartment=Input::get('subDepartment');
        $parentDepartment=Input::get('parentDepartment');
        $create_by=1;
        $create_date=date("Y/m/d");

        if($subDepartment == 'true'){
            try {
                DB::table('sub_department')->insert(['name' => $name, 'department_id' => $parentDepartment ,
                                                      'description' => $description, 'create_by'=> $create_by,
                                                       'create_date'=> $create_date]
                );

            }
            catch(Exception $e) {
                echo 'Message: ' .$e->getMessage();
            }


        } else {
            try {

                DB::table('department')->insert(['name' => $name, 'description' => $description,
                                                'create_by'=> $create_by, 'create_date'=> $create_date]
                                                 );
               }
               catch(Exception $e) {
                echo 'Message: ' .$e->getMessage();
            }
        }  

    }



    /*
    * Function employees
    *
    * load employees page
    *
    * @return viwe
    */

    public function employees() 
    { 
        try {
            $departments = DB::table('department')->select('id', 'name')->get();
        }
        catch(Exception $e) {
             echo 'Message: ' .$e->getMessage();
        }
        try {
        $employees = DB::table('employee')
            ->join('department', 'employee.department_id', '=', 'department.id')
            ->select('employee.*', 'department.name AS department')
            ->get();
        }
        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
        return view('backend.employees',compact('departments','employees'));

   }



    /*
    * Function insertEmployees
    *
    * insert new emloyee
    *
    * @return viwe
    */

    public function insertEmployees()
    {

        $employeeName=Input::get('employeeName');
        $employeeEmail=Input::get('employeeEmail');
        $employeeAddress=Input::get('employeeAddress');
        $employeeTelephone=Input::get('employeeTelephone');
        $employeeDb=date("Y/m/d", strtotime(Input::get('employeeDb')));
        $employeeDepartment=Input::get('employeeDepartment');
        $create_by=1;
        $create_date=date("Y/m/d");
        try {
            DB::table('employee')->insert(['name' => $employeeName,'email' => $employeeEmail,
                                            'department_id' => $employeeDepartment ,'date_of_birth' => $employeeDb,
                                            'address'=> $employeeAddress, 'tp_no'=> $employeeTelephone,
                                            'create_by'=> $create_by, 'create_date'=> $create_date]
            );
        }
        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
   }

}
