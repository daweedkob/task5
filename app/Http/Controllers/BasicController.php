<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function ViewCompanies(Request $request){
        return view("company.company-page");
    }

    public function AddCompany(){
        return view('company.company-add');
    }
    public function SaveCompany(Request $request){
        Company::create([
            'name'    => $request->name,
            'code'    => $request->code,
            'address' => $request->address,
            'city'    => $request->city,
            'country' => $request->country
        ]);
        return redirect('/company/all');
    }

    public function EditCompany(Request $request, $id){
        $company_to_edit = Company::where('id', $id)->firstOrFail();
        return view('company.company-edit')
        ->with('company',$company_to_edit);
    }

    public function DeleteCompany(Request $request){
        Company::where('id', $request->company_id)->delete();
        return redirect()->back();
    }

    public function UpdateCompany(Request $request){
        Company::where('id',$request->company_id)->update([
            'name'    => $request->name,
            'address' => $request->address,
            'city'    => $request->city,
            'country' => $request->country,
            ]);
            return redirect('/company/all');
    }

    public function EmployeesJoin(){
        $company = Company::with('Employee')
        ->join('employees','companies.id','=','employees.company_id')
        ->select(
            'employees.*',
            'companies.name as company_name'
        )
        ->get();
        return view("employee.employee-page")
        ->with('company', $company);
    }
}
