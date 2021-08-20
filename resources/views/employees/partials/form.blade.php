{{ csrf_field() }}
<div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
    <label for="firstname" class="col-md-4 control-label">First Name</label>
    <div class="col-md-12">
        <input id="firstname" type="text" class="form-control" name="firstname"
               value="{{ old('firstname', $employee->firstname) }}">
        @if ($errors->has('firstname'))
            <span class="help-block">
                <strong>{{ $errors->first('firstname') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
    <label for="last_name" class="col-md-4 control-label">Last Name</label>
    <div class="col-md-12">
        <input id="first_name" type="text" class="form-control" name="lastname"
               value="{{ old('lastname', $employee->lastname) }}">
        @if ($errors->has('lastname'))
            <span class="help-block">
                <strong>{{ $errors->first('lastname') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 control-label">Email</label>
    <div class="col-md-12">
        <input id="name" type="text" class="form-control" name="email"
               value="{{ old('email', $employee->email) }}">
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    <label for="phone" class="col-md-4 control-label">Phone</label>
    <div class="col-md-12">
        <input id="phone" type="text" class="form-control" name="phone"
               value="{{ old('phone', $employee->phone) }}">
        @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('company_id') ? ' has-error' : '' }}">
    <label for="company_id" class="col-md-4 control-label">Company</label>
    <select class="form-control" id="company_id" name="company_id">
        <option value="">Choose a company</option>
        @foreach($allCompanies as $company)
            <option value="{{$company->id}}" {{ ($employee->company_id == $company->id) ? "selected='selected'" : "" }}> {{$company->name}}</option>
        @endforeach
    </select>
    @if ($errors->has('company_id'))
        <span class="help-block">
                <strong>{{ $errors->first('company_id') }}</strong>
            </span>
    @endif

    {{--<label for="companyId" class="col-md-4 control-label">Company ID</label>
    <div class="col-md-12">
        <input id="companyId" type="text" class="form-control" name="companyId"
               value="{{ old('companyId', $employee->company_id) }}">
        @if ($errors->has('companyId'))
            <span class="help-block">
                <strong>{{ $errors->first('companyId') }}</strong>
            </span>
        @endif
    </div>--}}
</div>


