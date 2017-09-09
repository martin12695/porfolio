@extends('layouts.adlayout')
@section('page-title', 'Gallery')
@section('isHidden', 'hidden')

@section('content')

<div class="row-fluid">
  <div class="span12">
    <div class="widget-box">
      <div class="widget-title">
        <span class="icon"><i class="icon-picture"></i></span>
        <h5>Upload new image</h5>
      </div>
      <div class="widget-content">
        @if(Session::get('response') && Session::get('response')==1)
          <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
            <h4 class="alert-heading"><i class="icon-ok"></i> Upload successfully!</h4>
          </div>
        @endif
        @if(Session::get('response') && Session::get('response')==2)
            <div id="errorBox" style="" class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 id="errorTitle" class="alert-heading">Error!</h4>
              <span id="errorContent">Oop! Somethings happened!</span>
            </div>
        @endif
        <form enctype="multipart/form-data" method="post" action="/dashboard/uploadImage">
          {{ csrf_field() }}
          <div class="control-group">
            <label style="margin-left: 4px;" class="control-label">Upload new image</label>
            <div class="controls">
              <div class="uploader" id="uniform-undefined"><input type="file" name="images[]" size="19" style="opacity: 0;" accept="image/*" multiple><span class="filename">No file selected</span><span class="action">Choose File</span></div>
            </div>
            <button type="submit" style="margin-top: 20px;" class="btn btn-success">Upload</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-picture"></i> </span>
            <h5>Gallery</h5>
          </div>
          <div class="widget-content">
            <ul class="thumbnails">
              @foreach($images as $image)
              <li class="span2"> <a> <img src="{{url('/images/Upload/'.$image->name)}}" alt="" > </a>
                <div class="control">
                  <input style="margin-left: 0 !important;" type="text" class="span12" value="{{url('/images/Upload/'.$image->name)}}">
                  <button class="btn btn-mini btn-danger">Delete</button>
                  <button class="btn btn-mini btn-info lightbox_trigger" href="{{url('/images/Upload/'.$image->name)}}">View</button>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>

    <style>
      .thumbnails .actions{
        margin-left: -16px;
      }
    </style>

    <script>
      $('.btn-danger').each(function(){
        var $this = $(this);
        $this.click(function(){
          if (confirm('Do you want delete this image?')) {
            alert('yes');
            //do something :))))
          }
          else{
            alert('no');
          }
        });
      });
    </script>

@endsection