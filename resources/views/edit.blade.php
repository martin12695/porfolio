@extends('layouts.adlayout')
@section('page-title', 'Edit project')
@section('activeSidebar', 'active')
@section('content')
	<div class="row-fluid">
      <div class="span12">
          @if(Session::get('response') && Session::get('response')==1)
          <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading"><i class="icon-ok"></i> Edit project successfully!</h4>
          </div>
          @endif
          @if(Session::get('response') && Session::get('response')==2)
          <div class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading"><i class="icon-remove-sign"></i> Error!</h4>
              <span >Please upload image type .jpg, .png and not exceed 2mb  !</span>
          </div>
          @endif
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit project</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="/dashboard/project/save/{{$info->id}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="control-group">
              <label class="control-label">Title :</label>
              <div class="controls">
                <input name="title" type="text" class="span11" placeholder="Title" value="{{$info->title}}">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Short description :</label>
              <div class="controls">
                <input name="short_des" type="text" class="span11" placeholder="Short description" value="{{$info->short_des}}">
              </div>
            </div>
              <div class="control-group">
                  <label class="control-label">Address :</label>
                  <div class="controls">
                      <input name="address" type="text" class="span11" placeholder="Address" required value="{{$info->address}}">
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label">Square :</label>
                  <div class="controls">
                      <input name="square" type="text" class="span11" placeholder="Square" required value="{{$info->square}}">
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label">Year :</label>
                  <div class="controls">
                      <input name="year" type="text" class="span11" placeholder="Year" required value="{{$info->year}}">
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label">Owner :</label>
                  <div class="controls">
                      <input name="owner" type="text" class="span11" placeholder="Owner" required value="{{$info->owner}}">
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label">Status :</label>
                  <div class="controls">
                      <select name="status">
                          <option value="0" {{$info->status == 0 ?  'selected' : ''}}>Processing</option>
                          <option value="1" {{$info->status == 1 ?  'selected' : ''}}>Done</option>
                      </select>
                  </div>
              </div>
            <div class="control-group">
              <label class="control-label">Content :</label>
              <div class="controls">
                <textarea class="textarea_editor content ckeditor" rows="12" name="content">{{$info->content}}</textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Thumbnail :</label>
              <div class="controls">
                <label id="fileUpload" for="Thumbnail">Browser</label>
                <input type="file" id="Thumbnail" onchange="readURL(this)" name="image">
                <div id="imagePreview" style="background-image: url('{{url('/images/thum/'.$info->link_image)}}');">
                    <span id="btnRemove" data-value="">
                        <i class="icon-remove-sign"></i>
                    </span>
                </div>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
      </div>
      <style>
        #fileUpload{
          display: block;
          float: left;
          background-color: #5bc0de;
          padding: 4px 12px;
          margin-bottom: 0;
          font-size: 14px;
          line-height: 20px;
          color: #333;
          text-align: center;
          text-shadow: 0 1px 1px rgba(255,255,255,0.75);
          vertical-align: middle;
          cursor: pointer;
          margin-bottom: 10px;
          color: #fff;
        }
        #fileUpload:hover{
          background-color: #2f96b4;
        }
        #Thumbnail{
          display: none;
        }
        #imagePreview{
          display: block;
        }
        #fileUpload{
          display: none;
        }
      </style>
      <script language="javascript" src="/js/ckeditor/ckeditor.js" type="text/javascript"></script>
      <script language="javascript" src="/js/ckeditor/config.js" type="text/javascript"></script>
      <script>
        $('#btnRemove').click(function(){
          var prjID = $('#btnRemove').attr('data-value');
            $('#fileUpload').show();
            $('#imagePreview').hide();
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imagePreview').css('background-image', 'url('+e.target.result+')');
                    $('#imagePreview').show();
                    $('#fileUpload').hide();

                };

                reader.readAsDataURL(input.files[0]);
            }
        }
      </script>
    </div>
@endsection