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
                     @if(Session::has('alert-success'))
      <div class="alert alert-success alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{ Session::get('alert-success') }}</strong>
      </div>
      @endif
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

                </div>
                
                <div style="margin-top: 20px;"></div>
                
               <form method="POST" action="\result" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                       <!--  <label for="exampleInputFile">Upload a Text File</label> -->
                       <input required="" type="file" name="file_path" class="filename"  >
                        
                    </div>
                    <div class="form-group"> <!-- Message input !-->
                        <label class="control-label " for="method">Method</label>
                        <select class="form-control" id="method" name="method">
                             <option selected disabled value="">Choose...</option>
                            <option value="RAKE">RAKE</option>
                            <option value="West">Method2</option>
                            <option value="East">Method3</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-outline-success my-2 my-sm-0">
                        Apply
                    </button>
                </form>
               <!--  <a href="{{ url('/result')}}">
                    <button class="btn btn-outline-success my-2 my-sm-0" >Submit</button>
                </a> -->
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