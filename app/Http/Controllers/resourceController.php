<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Company;
use Illuminate\Http\Request;

class resourceController extends Controller
{
    public function index(Request $request){
        $company = Company::with('Employee')->get();
        return view("employee.employee-page")
        ->with('company', $company);
    }

    public function create(){
        $companies = Company::orderby('id',"DESC")->get();

        return view('employee.employee-add');
    }
    public function store(Request $request){
        if($request->company_id == 'Select Company(optional)'){
            $company_id = 0;
        }
        else{
            $company_id = $request->company_id;
        }
        Employee::create([
            'name'        => $request->name,
            'lastname'    => $request->lastname,
            'birthdate'   => $request->birthdate,
            'personal_id' => $request->personal_id,
            'salary'      => $request->salary,
            'company_id'  => $company_id
        ]);
        return redirect()->route('employee.index');
    }

    public function edit(Request $request, $id){
        $company = Company::with('Employee')->get();
        $employee_to_edit = Employee::where('id', $id)->firstOrFail();
        return view('employee.employee-edit')
        ->with('employee',$employee_to_edit)
        ->with('company',$company);
    }

    public function destroy($id){
        Employee::where('id',$id)->delete();
        return [
            'success' => true
        ];
    }

    public function update(Request $request,$id){
        if($request->company_id == ''){
            $company_id = 0;
        }
        else{
            $company_id = $request->company_id;
        }

        Employee::where('id',$id)->update([
            'name'        => $request->name,
            'lastname'    => $request->lastname,
            'birthdate'   => $request->birthdate,
            'personal_id' => $request->personal_id,
            'salary'      => $request->salary,
            'company_id'  => $company_id
            ]);
            return redirect()->route('employee.index');
    }
}
