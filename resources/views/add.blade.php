@extends('layouts.adlayout')
@section('page-title', 'Add new project')
@section('activeSidebar', 'active')
@section('content')
    <div class="row-fluid">
        
        <div class="span12">
            <!-- Thong bao complete -->
            @if(Session::get('response') && Session::get('response')==1)
            <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
              <h4 class="alert-heading"><i class="icon-ok"></i> Add project successfully!</h4>
            </div>
            @endif

            @if(Session::get('response') && Session::get('response')==2)
            <div class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
                  <h4 class="alert-heading"><i class="icon-remove-sign"></i> Error!</h4>
                  <span >Please upload image type .jpg, .png and not exceed 2mb  !</span>
            </div>
            @endif
            <div id="errorBox" style="display: none;" class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
                  <h4 id="errorTitle" class="alert-heading">Error!</h4>
                  <span id="errorContent">Oop! Somethings happened!</span>
            </div>
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Add new project</h5>
                </div>
                <div class="widget-content nopadding">
                    <form id="formAction" enctype="multipart/form-data" action="/dashboard/project/save" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="control-group">
                            <label class="control-label">Title :</label>
                            <div class="controls">
                                <input id="prjTitle" name="title" type="text" class="span11" placeholder="Title" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Short description :</label>
                            <div class="controls">
                                <input name="short_des" type="text" class="span11" placeholder="Short description" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Content :</label>
                            <div class="controls">
                                <textarea class="span11 textarea_editor" rows="12" name="content" id="Content" resize="true"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Thumbnail :</label>
                            <div class="controls">
                                <label id="fileUpload" for="Thumbnail">Browser</label>
                                <input type="file" id="Thumbnail" onchange="readURL(this)" name="image">
                                <div id="imagePreview">
                                    <span id="btnRemove">
                                        <i class="icon-remove-sign"></i>
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="form-actions">
                            <button id="btnSubmit" type="button" class="btn btn-success">Save</button>
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
        </style>
        <script>
            $('#btnSubmit').click(function(e){
                var $form = $('#formAction');
                var txt = $('#Content').val();
                if ($form.valid() && txt != '') {
                    $form.submit();
                } else {
                    $('#errorContent').html('Your content is empty! Please enter your content');
                    $('#errorBox').show();
                    $(window).scrollTop(100);
                    setTimeout(function(){
                        $('#errorBox').fadeOut();
                    }, 3000);
                    return;
                }
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

            $('#btnRemove').click(function(){
                $('#Thumbnail').val('');
                $('#imagePreview').hide();
                $('#fileUpload').show();
            });
        </script>
    </div>
@endsection