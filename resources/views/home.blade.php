@extends('layouts.app_dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                </div>
                <div style="margin-top: 20px;">
                    
                </div>
                <div>
                    <a href="/uploadfile">
                        <button class="btn btn-outline-primary my-2 my-sm-0">UploadFile</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
