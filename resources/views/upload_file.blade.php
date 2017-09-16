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
                

                <div>
                <div dir="rtl">
    <label for="input-b8">Select File</label>
</div>
<div class="file-input kv-rtl file-input-new"><div class="file-preview">
    <button type="button" class="close fileinput-remove">×</button>
    <div class="file-drop-disabled">
    <div class="file-preview-thumbnails"></div>
    <div class="clearfix"></div>    <div class="file-preview-status text-center text-success"></div>
    <div class="kv-fileinput-error file-error-message" style="display: none;"></div>
    </div>
</div>
<div class="kv-upload-progress kv-hidden" style="display: none;"><div class="progress">
    <div class="progress-bar bg-success progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
        0%
     </div>
</div></div><div class="clearfix"></div>
<div class="input-group file-caption-main">
   <div tabindex="500" class="form-control file-caption  kv-fileinput-caption">
   <div class="file-caption-name" title=""></div>
</div>

   <div class="input-group-btn">
       <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default btn-secondary fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Remove</span></button>
       <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default btn-secondary kv-hidden fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
       <button type="submit" tabindex="500" title="Upload selected files" class="btn btn-default btn-secondary fileinput-upload fileinput-upload-button"><i class="glyphicon glyphicon-upload"></i>  <span class="hidden-xs">Upload</span></button>
       <div tabindex="500" class="btn btn-primary btn-file"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;  <span class="hidden-xs">Browse …</span><input id="input-b8" name="input-b8[]" multiple="all" type="file" '=""></div>
   </div>
</div></div>                </div>




                <form>
                    <div class="form-group"> <!-- Message input !-->
                        <label class="control-label " for="region_id">Message</label>
                        <select class="form-control" id="region_id" name="region">
                            <option selected>Choose...</option>
                            <option value="North">North</option>
                            <option value="West">West</option>
                            <option value="East">East</option>
                            <option value="South">South</option>
                        </select>
                    </div>
                    <div class="form-group"> <!-- Submit button !-->
                        <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value.substring(12);
};
</script>
@endsection
