@extends('layouts.app_dashboard')

@section('content')
<div class="container">
    <div class="row" style="margin-left: 100px;">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="card">
                <div class="card-heading card-inverse card-success mb-3 text-center">
                  <header>
                    <h1 class="text-center">
                      Result!!
                    </h1>  
                  </header>
                </div>

                <div class="card-block">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                        <thead>
                            <tr>
                              <th>#</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 20px;">
                  
    </div>
    <button type="button" class="btn btn-outline-success my-2 my-sm-0" style="margin-left: 300px;" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Choose Another Option</button>
    <button type="button" class="btn btn-outline-success my-2 my-sm-0">Compare With Previous Result</button>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Choose Another Option</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="GET" action="\result">
          {{csrf_field()}}
          <div class="form-group"> <!-- Message input !-->
            
            <select class="form-control" id="region_id" name="region">
                <option selected>Choose...</option>
                <option value="North">Method1</option>
                <option value="West">Method2</option>
                <option value="East">Method3</option>
            </select>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Apply</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
