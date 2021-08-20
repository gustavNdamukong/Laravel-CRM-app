<?php

namespace App\Http\Controllers;

use App\Companies;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $employees = DB::table('employees')->paginate(10);

        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $employee = new Employee();
        //get all existing companies
        $companies = Companies::all();

        return view('employees.create')->with([
            'allCompanies' => $companies,
            'employee' => $employee
        ]);
    }

    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->firstname = $request->firstname;
        $employee->lastname = $request->lastname;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->company_id = $request->company_id;
        $employee->save();

        flash("Employee {$request->firstname} was successfully created")->success();

        return redirect('employees')->with('alert', 'Employee created!');
    }

    public function edit(Employee $employee)
    {
        //get all existing companies
        $companies = Companies::all();

        return view('employees.edit')->with([
            'allCompanies' => $companies,
            'employee' => $employee
        ]);
    }

    public function update(Request $request, Employee $employee)
    {
        $employee->update($request->all());
        flash("The employee {$request->firstname} was successfully updated")->success();

        return redirect('employees');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        flash("Employee {$employee->firstname} deleted")->success();

        return redirect('employees');
    }

}
