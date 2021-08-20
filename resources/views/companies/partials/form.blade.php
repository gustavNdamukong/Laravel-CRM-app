{{ csrf_field() }}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Name</label>
    <div class="col-md-12">
        <input id="name" type="text" class="form-control" name="name"
               value="{{ old('name', $company->name) }}">
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 control-label">Company Email</label>
    <div class="col-md-12">
        <input id="name" type="text" class="form-control" name="email"
               value="{{ old('email', $company->name) }}">
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <label for="addImgBtn">Company Logo - (<small>Optional - min: 100x100</small>)</label>
    <br />
    @if((isset($company->logo)) && ($company->logo != NULL))
        <input value="{{$company->logo}}" disabled>
        <input type="hidden" value="{{$company->logo}}" name="old_logo">
        <button id="addImgBtn" onclick="event.preventDefault();
                        document.getElementById('uploadImages').style.display = 'block';" class="btn btn-xs btn-warning">Change Logo Image</button>
    @else
    <button id="addImgBtn" onclick="event.preventDefault();
                        document.getElementById('uploadImages').style.display = 'block';" class="btn btn-xs btn-warning">Add Logo Image</button>
    @endif
</div>

<div style="clear:both;"></div>
<div id="uploadImages" style="display:none;">
    <input type="file" id="fileUpload" name="fileUpload" />
</div>


<div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
    <label for="website" class="col-md-4 control-label">Company Website</label>
    <div class="col-md-12">
        <input id="website" type="text" class="form-control" name="website"
               value="{{ old('website', $company->website) }}">
        @if ($errors->has('website'))
            <span class="help-block">
                <strong>{{ $errors->first('website') }}</strong>
            </span>
        @endif
    </div>
</div>

@if(isset($company->id))
    <input type="hidden" value="{{$company->id}}" name="company_id">
@endif