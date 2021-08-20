@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="btn-group float-right" role="group">
                            <a href="{{ route('employees.create') }}" class="btn btn-success">Add new Employee</a>
                        </div>
                        <h2>
                            Employees
                        </h2>

                    </div>

                    <div class="card-body responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Company</th>
                                <th colspan="2" class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->firstname }}</td>
                                    <td>{{ $employee->lastname }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>{{ $employee->company_id }}</td>
                                    <td><a href="{{ route('employees.edit', $employee->id) }}"
                                           class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route("employees.destroy", $employee->id) }}" method="POST">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit"
                                                    onclick="if (!confirm('Are you sure you want to delete this employee?'))
                                                        { return false;}"
                                                    class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="m-auto">
                    <p>{{ $employees->links() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
