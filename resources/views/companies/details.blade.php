@extends('layouts.app')

@section('content')
  <div class="container col-md-12 col-sm-12 col-xs-12">
    <div class="row justify-content-center col-md-12 col-sm-12 col-xs-12">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="card ml-auto">
          <div class="card-header">
            <h2>
              The {{ $company->name }} Company Details
            </h2>
          </div>

          <div class="card-body responsive">
            <div>Name: {{ $company->name }}</div>
            <div>Email: {{ $company->email }}</div>
            <div>Website: {{ $company->website }}</div>
            <div>
              <p>Logo:</p>
                <img src="{{ asset('storage/'.$company->logo) }}" width="300" heigh="300">
            </div>
          </div>
          <div class="m-auto">
            <a href="{{ url('companies') }}" class="btn btn-success">Return to all companies</a>
          </div>
          <div>&nbsp;</div>
        </div>
      </div>
    </div>
  </div>



@endsection
