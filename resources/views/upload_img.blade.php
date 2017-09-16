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
        <form enctype="multipart/form-data" method="post" id="dragForm" action="/dashboard/uploadImage" >
          {{ csrf_field() }}
          <div id="DropZone" class="dragndrop-zone">

            <label for="Images"><strong>Browse files</strong> or drag file here</label>
            <input type="file" accept="image/*" multiple name="images[]" id="Images" class="hidden">

          </div>
          <div id="PrevZone" class="preview-zone" style="display: none">
            <div class="cont">

            </div>
          </div>

          <button type="submit" class="btn btn-info upload-btn" style="display:none;" id="ActUpload">Upload</button>
          <button type="button" class="btn upload-btn" id="CancelUpload" style="display:none;">Cancel</button>
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
              <li class="span2 image-block" imageId="{{$image->id}}"> <a> <img src="{{url('/images/Upload/'.$image->name)}}" alt="" > </a>
                <div class="control">
                  <input style="margin-left: 0 !important;" type="text" class="span12" value="{{url('/images/Upload/'.$image->name)}}">
                  <button class="btn btn-mini btn-danger" imageId="{{$image->id}}">Delete</button>
                  <button class="btn btn-mini btn-info lightbox_trigger" href="{{url('/images/Upload/'.$image->name)}}">View</button>
                </div>
              </li>
              @endforeach
            </ul>
            {{ $images->links() }}
          </div>
        </div>
      </div>
    </div>

    <style>
      .upload-btn{
        margin-top: 25px;
      }

      div.dragndrop-zone{
        width: 100%;
        background-color: #fff;
        border: 2px dashed #ccc;
        position: relative;
        height: 100px;
        margin-bottom: 25px;
      }

      div.dragndrop-zone-dragover{
        background-color: #e3eff5;
      }

      div.dragndrop-zone:hover{
        background-color: #e3eff5;
        
      }

      div.dragndrop-zone:hover > label{
        color: #0955b7;
      }

      div.dragndrop-zone > label{
        text-align: center;
        display: block;
        position: absolute;
        width: 100%;
        height: 20px;
        padding-top: 40px;
        padding-bottom: 40px;
      }
      div.preview-zone{
        width: 100%;
        height: 120px;
        position: relative;
        overflow-x: auto;
      }
      div.preview-zone > .cont{
        position: absolute;
        width: max-content;
      }
      div.preview-zone > .cont > img{
        max-width: 157px;
        max-height: 100px;
        height: auto;
        display: inline-block;
      }
      .thumbnails .actions{
        margin-left: -16px;
      }

      #imgbox{
        padding: 20px 20px;
      }

      #lightbox p{
        right: 50px;
      }

      #imgbox img {
        margin-top: 0;
        max-height: 90%;
      }

      .thumbnails img{
        height: 95px;
        display: block;
        margin: 0 auto;
      }
    </style>

    <script>
      var prevImage = function(input){
        $('#PrevZone .cont').html('');
        if (input.files){
          var length = input.files.length;
          for (i = 0; i < length; i++){
            var reader = new FileReader();

            reader.onload = function(e){
              $('#PrevZone .cont').append('<img src="'+e.target.result+'">');
            }

            reader.readAsDataURL(input.files[i]);
          }

          $('#PrevZone').show();
          $('#DropZone').hide();
          $('#ActUpload').show();
          $('#CancelUpload').show();
        }
      }

      $('#CancelUpload').click(function(){
        $('#PrevZone').hide();
        $('#DropZone').show();
        $('#ActUpload').hide();
        $('#CancelUpload').hide();
        $('#Images').val('');
      });

      $('#dragForm').on('drag dragstart dragend dragover dragenter dragleave drop', function(e){
        e.preventDefault();
        e.stopPropagation();
      }).on('dragover dragenter', function() {
        $('#DropZone').addClass('dragndrop-zone-dragover');
      }).on('dragleave dragend drop', function() {
        $('#DropZone').removeClass('dragndrop-zone-dragover');
      }).on('drop', function(e) {
        droppedFiles = e.originalEvent.dataTransfer.files;
        $('#Images').prop('files', droppedFiles);
      });

      $('#Images').change(function(){
        if(this.files){
          prevImage(this);
        }
        
      });

      $('.btn-danger').each(function(){
        var $this = $(this);
        $this.click(function(){
          if (confirm('Do you want delete this image?')) {
            alert('Yes');
            $imageId = $this.attr("imageId");
            $.ajax({
              type: "GET",
              url: '/dashboard/deleteImage/' + $imageId ,
              success: function($response) {
                console.log($response);
               if ($response == 1 ) {
                 $('.image-block[imageId="' + $imageId + '"]').remove();
               }
              },
            });
          }
          else{
            alert('No');
          }
        });
      });
    </script>

@endsection