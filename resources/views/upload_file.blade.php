@extends('layouts.app_dashboard')

@section('content')
<style type="text/css">
.fileUpload {
    position: relative;
    overflow: hidden;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">UploadFile</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                </div>
                
                <div style="margin-top: 20px;"></div>
                
                <label class="custom-file col-md-8">
                  <input type="file" id="file" class="custom-file-input">
                  <span class="custom-file-control"></span><i class="fa fa-folder-open" aria-hidden="true"></i>
              </label>
              <form>
                <div class="form-group"> <!-- Message input !-->

                </div>
                <div class="form-group"> <!-- Message input !-->
                    <label class="control-label " for="region_id">Message</label>
                    <select class="form-control" id="region_id" name="region">
                        <option selected>Choose...</option>
                        <option value="North">Method1</option>
                        <option value="West">Method2</option>
                        <option value="East">Method3</option>
                    </select>
                </div>
                 <!-- Submit button !-->
                    
                
            </form>
            <a href="{{ url('/result')}}">
                        <button class="btn btn-outline-success my-2 my-sm-0" >Submit</button>
                    </a>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
 .custom-file-control:lang(en)::after {
  content: "Choose file...";
}

.custom-file-control:lang(en)::before {
  content: "Browse";
}
</script>
@endsection
