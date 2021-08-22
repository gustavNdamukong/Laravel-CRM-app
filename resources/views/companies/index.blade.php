@extends('layouts.app')

@section('content')
  <div class="container col-md-12 col-sm-12 col-xs-12">
    <div class="row justify-content-center col-md-12 col-sm-12 col-xs-12">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="card ml-auto">
          <div class="card-header">
            <div class="btn-group float-right" role="group">
              <a href="{{ route('companies.create') }}" class="btn btn-success">Add new</a>
            </div>
            <h2>
              Companies
            </h2>
          </div>

          <div class="card-body responsive">
            <table class="table">
              <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Logo</th>
                <th>Website</th>
                <th colspan="3" class="text-center">Actions</th>
              </tr>
              </thead>
              <tbody>
              @foreach($companies as $company)
                <tr>
                  <td>{{ $company->id }}</td>
                  <td>{{ $company->name }}</td>
                  <td>{{ $company->email }}</td>
                  <td>{{ $company->logo }}</td>
                  <td>{{ $company->website }}</td>
                  <td>
                    <a
                      href="{{ route('companies.edit', $company->id) }}"
                      class="btn btn-primary btn-sm"
                    ><i class="fas fa-pen"></i></a>
                  </td>
                  <td>
                    <a
                            href="{{ route('companies.show', $company->id) }}"
                            class="btn btn-primary btn-sm"
                    ><i class="fas fa-eye"></i></a>
                  </td>
                  <td>
                    <form action="{{ route("companies.destroy", $company->id) }}" method="POST">
                      @csrf
                      {{method_field('DELETE')}}
                      <button type="submit"
                              onclick="if (!confirm('Are you sure you want to delete this company?'))
                                                        { return false;}"
                              class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <div class="m-auto">
            <p>{{ $companies->links() }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection
