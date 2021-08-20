@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Company</div>
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('companies.store') }}" enctype="multipart/form-data">
                        @csrf
                        @include('companies.partials.form')
                        <div class="form-group">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('rawJS')
    <script type="text/javascript">

        function showImgUpload(e)
        {
            e.preventDefault();
            document.getElementById('uploadImages').style.display = 'block';
        }
    </script>
@endsection
