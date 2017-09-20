@extends('layouts.app_dashboard')

@section('content')
<!-- <style type="text/css">
    #customFile .custom-file-control:lang(en)::after {
  content: "Select file...";
}

#customFile .custom-file-control:lang(en)::before {
  content: "Click me";
}

/*when a value is selected, this class removes the content */
.custom-file-control.selected:lang(en)::after {
  content: "" !important;
}

.custom-file {
  overflow: hidden;
}
.custom-file-control {
  white-space: nowrap;
}
</style> -->
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
                
                
              <form>
                <!-- <div class="form-group">
                    <label class="custom-file" id="customFile">
        <input type="file" class="custom-file-input" id="exampleInputFile" aria-describedby="fileHelp">
        <span class="custom-file-control form-control-file"></span>
    </label>
                </div> -->
                <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
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
<!-- <script type="text/javascript">

 show file value after file select 
$('.custom-file-input').on('change',function(){
  $(this).next('.form-control-file').addClass("selected").html($(this).val());
})

 method 2 - change file input to text input after selection
$('.custom-file-input').on('change',function(){
    var fileName = $(this).val();
    $(this).next('.form-control-file').hide();
    $(this).toggleClass('form-control custom-file-input').attr('type','text').val(fileName);
})

</script> -->
@endsection
